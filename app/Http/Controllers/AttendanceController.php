<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Schedule;
use App\Models\User;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    // Employee: view own attendance history
    public function myAttendance(Request $request)
    {
        $timezone = config('app.timezone');
        $todayDate = Carbon::today($timezone)->toDateString();

        $records = Attendance::where('employee_id', auth()->id())
            ->orderBy('date', 'desc')
            ->get();

        $today = Attendance::where('employee_id', auth()->id())
            ->where('date', $todayDate)
            ->first();

        // Selected month for the calendar (defaults to the current month)
        $month = $request->filled('month')
            ? Carbon::createFromFormat('Y-m', $request->month, $timezone)->startOfMonth()
            : Carbon::today($timezone)->startOfMonth();

        $recordsByDate = Attendance::where('employee_id', auth()->id())
            ->whereBetween('date', [
                $month->copy()->startOfMonth()->toDateString(),
                $month->copy()->endOfMonth()->toDateString(),
            ])
            ->get()
            ->keyBy(fn ($record) => $record->date->toDateString());

        $calendarWeeks = [];
        $cursor = $month->copy()->startOfWeek(Carbon::SUNDAY);
        $end = $month->copy()->endOfMonth()->endOfWeek(Carbon::SUNDAY);
        $todayCarbon = Carbon::today($timezone);

        while ($cursor->lessThanOrEqualTo($end)) {
            $week = [];
            for ($i = 0; $i < 7; $i++) {
                $dateStr = $cursor->toDateString();
                $record = $recordsByDate->get($dateStr);
                $isWeekend = $cursor->isWeekend();

                // No attendance row on a weekend just means it was a weekend —
                // treat it as such visually even though nothing was recorded.
                $status = $record->status ?? ($isWeekend ? 'weekend' : null);

                $week[] = [
                    'day' => $cursor->day,
                    'isCurrentMonth' => $cursor->month === $month->month,
                    'isToday' => $cursor->isSameDay($todayCarbon),
                    'status' => $status,
                ];
                $cursor->addDay();
            }
            $calendarWeeks[] = $week;
        }

        return view('employee.attendance.index', compact('records', 'today', 'month', 'calendarWeeks'));
    }

    // Employee: clock in
    public function clockIn(Request $request)
    {
        $timezone = config('app.timezone');
        $today = Carbon::today($timezone);
        $now = Carbon::now($timezone);
        $todayDate = $today->toDateString();

        $existing = Attendance::where('employee_id', auth()->id())
            ->where('date', $todayDate)
            ->first();

        if ($existing) {
            return back()->with('error', 'You already clocked in today.');
        }

        // Look up the shift HR assigned this employee for today, if any
        $schedule = Schedule::where('employee_id', auth()->id())
            ->where('shift_date', $todayDate)
            ->first();

        if ($schedule) {
            // Allow a short grace period (e.g. 10 minutes) after the scheduled start time
            $cutoff = Carbon::parse($schedule->shift_start, $timezone)->addMinutes(10);
        } else {
            // No shift assigned for today — fall back to the default 9:00 AM cutoff
            $cutoff = Carbon::today($timezone)->setTime(9, 0);
        }

        $status = $now->greaterThan($cutoff) ? 'late' : 'present';

        Attendance::create([
            'employee_id' => auth()->id(),
            'date' => $today,
            'check_in' => $now->format('H:i:s'),
            'status' => $status,
        ]);

        return back()->with('success', 'Clocked in successfully.');
    }

    // Employee: clock out
    public function clockOut(Request $request)
    {
        $timezone = config('app.timezone');
        $today = Carbon::today($timezone);
        $now = Carbon::now($timezone);
        $todayDate = $today->toDateString();

        $record = Attendance::where('employee_id', auth()->id())
            ->where('date', $todayDate)
            ->first();

        if (!$record || $record->check_out) {
            return back()->with('error', 'No active clock-in found.');
        }

        $checkIn = Carbon::createFromFormat('H:i:s', $record->check_in, $timezone);
        $hours = $checkIn->diffInMinutes($now) / 60;

        $record->update([
            'check_out' => $now->format('H:i:s'),
            'hours' => round($hours, 2),
        ]);

        return back()->with('success', 'Clocked out successfully.');
    }

    // HR: view all employees' attendance
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'date');
        $direction = $request->get('direction') === 'asc' ? 'asc' : 'desc';

        $allowedSorts = ['employee_name', 'date', 'hours', 'status'];
        if (!in_array($sort, $allowedSorts)) {
            $sort = 'date';
        }

        $query = Attendance::with('employee');

        if ($request->filled('employee_id')) {
            $query->where('employee_id', $request->employee_id);
        }

        if ($sort === 'employee_name') {
            // Join users so we can sort by the employee's name
            $query->join('users', 'users.id', '=', 'attendance.employee_id')
                ->orderBy('users.name', $direction)
                ->select('attendance.*');
        } else {
            $query->orderBy($sort, $direction);
        }

        $records = $query->get();
        $employees = User::where('role', 'employee')->orderBy('name')->get();

        return view('hr.attendance.index', compact('records', 'employees', 'sort', 'direction'));
    }

    // HR: view a single employee's attendance page (calendar + history)
    public function show(Request $request, User $employee)
    {
        abort_if($employee->role !== 'employee', 404);

        $timezone = config('app.timezone');

        $records = Attendance::where('employee_id', $employee->id)
            ->orderBy('date', 'desc')
            ->get();

        $month = $request->filled('month')
            ? Carbon::createFromFormat('Y-m', $request->month, $timezone)->startOfMonth()
            : Carbon::today($timezone)->startOfMonth();

        $recordsByDate = Attendance::where('employee_id', $employee->id)
            ->whereBetween('date', [
                $month->copy()->startOfMonth()->toDateString(),
                $month->copy()->endOfMonth()->toDateString(),
            ])
            ->get()
            ->keyBy(fn ($record) => $record->date->toDateString());

        $calendarWeeks = [];
        $cursor = $month->copy()->startOfWeek(Carbon::SUNDAY);
        $end = $month->copy()->endOfMonth()->endOfWeek(Carbon::SUNDAY);
        $todayCarbon = Carbon::today($timezone);

        while ($cursor->lessThanOrEqualTo($end)) {
            $week = [];
            for ($i = 0; $i < 7; $i++) {
                $dateStr = $cursor->toDateString();
                $record = $recordsByDate->get($dateStr);
                $isWeekend = $cursor->isWeekend();

                $status = $record->status ?? ($isWeekend ? 'weekend' : null);

                $week[] = [
                    'day' => $cursor->day,
                    'isCurrentMonth' => $cursor->month === $month->month,
                    'isToday' => $cursor->isSameDay($todayCarbon),
                    'status' => $status,
                ];
                $cursor->addDay();
            }
            $calendarWeeks[] = $week;
        }

        return view('hr.attendance.show', compact('employee', 'records', 'month', 'calendarWeeks'));
    }

    // HR: manually edit a record (e.g. mark absent, fix mistake)
    public function update(Request $request, Attendance $attendance)
    {
        $validated = $request->validate([
            'check_in' => 'nullable|date_format:H:i',
            'check_out' => 'nullable|date_format:H:i',
            'status' => 'required|in:present,late,absent,weekend',
        ]);

        $hours = null;
        if ($validated['check_in'] && $validated['check_out']) {
            $checkIn = Carbon::parse($validated['check_in']);
            $checkOut = Carbon::parse($validated['check_out']);
            $hours = round($checkIn->diffInMinutes($checkOut) / 60, 2);
        }

        $attendance->update([
            'check_in' => $validated['check_in'],
            'check_out' => $validated['check_out'],
            'status' => $validated['status'],
            'hours' => $hours,
        ]);

        return back()->with('success', 'Attendance updated.');
    }
}