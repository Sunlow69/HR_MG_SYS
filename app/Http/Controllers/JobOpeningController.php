<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOpening;

class JobOpeningController extends Controller
{
    // HR: list own job openings, Admin: list all job openings from every HR
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            $jobOpenings = JobOpening::with('postedBy')->latest()->get();
        } else {
            $jobOpenings = JobOpening::where('posted_by', auth()->id())->latest()->get();
        }

        return view('hr.jobs.index', compact('jobOpenings'));
    }

    // HR: show create form
    public function create()
    {
        return view('hr.jobs.create');
    }

    // HR: store new job opening
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:open,closed',
        ]);

        $validated['posted_by'] = auth()->id();

        JobOpening::create($validated);

        return redirect()->route('hr.jobs.index')->with('success', 'Job opening created.');
    }

    // HR: show edit form
    public function edit(JobOpening $job)
    {
        return view('hr.jobs.edit', compact('job'));
    }

    // HR: update job opening
    public function update(Request $request, JobOpening $job)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:open,closed',
        ]);

        $job->update($validated);

        return redirect()->route('hr.jobs.index')->with('success', 'Job opening updated.');
    }

    // HR: delete job opening
    public function destroy(JobOpening $job)
    {
        $job->delete();
        return redirect()->route('hr.jobs.index')->with('success', 'Job opening removed.');
    }

    // Public: careers page (Candidates view open jobs)
    public function publicIndex()
    {
        $jobOpenings = JobOpening::open()->latest()->get();
        return view('careers.index', compact('jobOpenings'));
    }
}