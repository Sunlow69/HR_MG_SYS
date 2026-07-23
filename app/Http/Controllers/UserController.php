<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // List all HR + Employee users
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'created_at');
        $direction = $request->get('direction') === 'asc' ? 'asc' : 'desc';

        $allowedSorts = ['name', 'email', 'role', 'phone', 'hourly_rate', 'created_at'];
        if (!in_array($sort, $allowedSorts)) {
            $sort = 'created_at';
        }

        $users = User::whereIn('role', ['hr', 'employee'])
            ->orderBy($sort, $direction)
            ->get();

        return view('admin.users.index', compact('users', 'sort', 'direction'));
    }

    // Show create form
    public function create()
    {
        return view('admin.users.create');
    }

    // Store new user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:hr,employee',
            'phone' => 'nullable|string|max:20',
            'hourly_rate' => 'nullable|numeric|min:0',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    // Show a single user's profile (admin view)
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    // Remove user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User removed successfully.');
    }

    
}