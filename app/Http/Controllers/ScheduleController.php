<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\User;

class ScheduleController extends Controller
{
    // HR: view all schedules
    public function index(Request $request)
    {
        $query = Schedule::with('employee')->orderBy('shift_date', 'desc');

        if ($request->filled('employee_id')) {
            $query->where('employee_id', $request->employee_id);
        }

        $schedules = $query->get();
        $employees = User::where('role', 'employee')->get();

        return view('hr.schedules.index', compact('schedules', 'employees'));
    }

    // HR: show create form
    public function create()
    {
        $employees = User::where('role', 'employee')->get();
        return view('hr.schedules.create', compact('employees'));
    }

    // HR: show edit form
    public function edit(Schedule $schedule)
    {
        $employees = User::where('role', 'employee')->get();

        return view('hr.schedules.edit', compact('schedule', 'employees'));
    }

    // HR: store new shift
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:users,id',
            'shift_date' => 'required|date',
            'shift_start' => 'required',
            'shift_end' => 'required',
        ]);

        // Check for overlapping shift same employee same day
        $exists = Schedule::where('employee_id', $validated['employee_id'])
            ->where('shift_date', $validated['shift_date'])
            ->exists();

        if ($exists) {
            return back()->withErrors(['shift_date' => 'This employee already has a shift on this date.'])->withInput();
        }

        $validated['created_by'] = auth()->id();

        Schedule::create($validated);

        return redirect()->route('hr.schedules.index')->with('success', 'Shift assigned successfully.');
    }

    // HR: update shift
    public function update(Request $request, Schedule $schedule)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:users,id',
            'shift_date' => 'required|date',
            'shift_start' => 'required',
            'shift_end' => 'required',
        ]);

        $exists = Schedule::where('employee_id', $validated['employee_id'])
            ->where('shift_date', $validated['shift_date'])
            ->where('id', '!=', $schedule->id)
            ->exists();

        if ($exists) {
            return back()->withErrors(['shift_date' => 'This employee already has a shift on this date.'])->withInput();
        }

        $schedule->update($validated);

        return redirect()->route('hr.schedules.index')->with('success', 'Shift updated successfully.');
    }

    // HR: delete shift
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return back()->with('success', 'Shift removed.');
    }

    // Employee: view own schedule
    public function myShifts()
    {
        $schedules = Schedule::where('employee_id', auth()->id())
            ->orderBy('shift_date', 'desc')
            ->get();

        return view('employee.schedule.index', compact('schedules'));
    }
}