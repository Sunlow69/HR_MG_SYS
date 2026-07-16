<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\JobOpening;

class ApplicationController extends Controller
{
    // Public: show apply form for a specific job
    public function create(JobOpening $job)
    {
        return view('careers.apply', compact('job'));
    }

    // Public: store application (with CV upload)
    public function store(Request $request, JobOpening $job)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
        ]);

        $path = $request->file('cv')->store('cvs', 'public');

        Application::create([
            'job_opening_id' => $job->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'cv_path' => $path,
            'status' => 'pending',
        ]);

        return redirect()->route('careers.index')->with('success', 'Application submitted successfully!');
    }

    // HR: list applications for a specific job
    public function index(JobOpening $job)
    {
        $applications = $job->applications()->latest()->get();
        return view('hr.applications.index', compact('job', 'applications'));
    }

    // HR: accept application
    public function accept(Application $application)
    {
        $application->update(['status' => 'accepted']);
        return back()->with('success', 'Application accepted.');
    }

    // HR: reject application
    public function reject(Application $application)
    {
        $application->update(['status' => 'rejected']);
        return back()->with('success', 'Application rejected.');
    }

    // Public: candidate checks status of their application(s) by email
    public function status(Request $request)
    {
        $email = $request->query('email');
        $applications = collect();
        $searched = false;

        if ($email) {
            $searched = true;
            $applications = Application::with('jobOpening')
                ->where('email', $email)
                ->latest()
                ->get();
        }

        return view('careers.status', compact('applications', 'email', 'searched'));
    }
}