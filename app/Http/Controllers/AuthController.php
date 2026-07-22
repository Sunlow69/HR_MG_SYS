<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // Show login form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            return match ($user->role) {
                'admin' => redirect()->route('admin.dashboard'),
                'hr' => redirect()->route('hr.dashboard'),
                'employee' => redirect()->route('employee.dashboard'),
                default => redirect('/'),
            };
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // Redirect the user to Google's OAuth consent screen
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle the callback from Google after the user approves
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors([
                'email' => 'Google sign-in failed. Please try again.',
            ]);
        }

        // Match an existing account by google_id first, then by email
        $user = User::where('google_id', $googleUser->getId())
            ->orWhere('email', $googleUser->getEmail())
            ->first();

        if ($user) {
            // Link the Google account if it wasn't linked yet
            if (!$user->google_id) {
                $user->update(['google_id' => $googleUser->getId()]);
            }
        } else {
            // New candidates get an account automatically as 'employee' by default.
            // Adjust the default role here if Google sign-in should be restricted
            // to a specific user type.
            $user = User::create([
                'name' => $googleUser->getName() ?? $googleUser->getNickname(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => Str::random(24),
                'role' => 'employee',
                'email_verified_at' => now(),
            ]);
        }

        Auth::login($user, true);

        return match ($user->role) {
            'admin' => redirect()->route('admin.dashboard'),
            'hr' => redirect()->route('hr.dashboard'),
            'employee' => redirect()->route('employee.dashboard'),
            default => redirect('/'),
        };
    }
}