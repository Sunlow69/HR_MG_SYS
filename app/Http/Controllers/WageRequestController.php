<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WageRequest;
use App\Models\User;

class WageRequestController extends Controller
{
    // HR: list all wage requests
    public function index()
    {
        $requests = WageRequest::with(['employee', 'requestedBy', 'reviewedBy'])->latest()->get();
        $employees = User::where('role', 'employee')->get();

        return view('hr.wagerequests.index', compact('requests', 'employees'));
    }

    // HR: show create form
    public function create()
    {
        $employees = User::where('role', 'employee')->get();
        return view('hr.wagerequests.create', compact('employees'));
    }

    // HR: submit new wage request
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:users,id',
            'new_rate' => 'required|numeric|min:0',
        ]);

        $employee = User::findOrFail($validated['employee_id']);

        WageRequest::create([
            'employee_id' => $employee->id,
            'old_rate' => $employee->hourly_rate,
            'new_rate' => $validated['new_rate'],
            'requested_by' => auth()->id(),
            'status' => 'pending',
        ]);

        return redirect()->route('hr.wagerequests.index')->with('success', 'Wage request submitted. Pending Admin approval.');
    }

    // Admin: list all wage requests for review
    public function adminIndex()
    {
        $requests = WageRequest::with(['employee', 'requestedBy'])->latest()->get();
        return view('admin.wagerequests.index', compact('requests'));
    }

    // Admin: approve wage request
    public function approve(WageRequest $wageRequest)
    {
        $wageRequest->update([
            'status' => 'approved',
            'reviewed_by' => auth()->id(),
        ]);

        // Apply the new rate to the employee
        $wageRequest->employee->update(['hourly_rate' => $wageRequest->new_rate]);

        return back()->with('success', 'Wage request approved and applied.');
    }

    // Admin: reject wage request
    public function reject(WageRequest $wageRequest)
    {
        $wageRequest->update([
            'status' => 'rejected',
            'reviewed_by' => auth()->id(),
        ]);

        return back()->with('success', 'Wage request rejected.');
    }
}