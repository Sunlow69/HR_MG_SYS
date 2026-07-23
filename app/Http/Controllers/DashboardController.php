<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\JobOpening;
use App\Models\Payroll;
use App\Models\Schedule;
use App\Models\User;
use App\Models\WageRequest;
use Carbon\Carbon;

class DashboardController extends Controller
{
    // Admin: system-wide counts
    public function admin()
    {
        $userCount = User::count();
        $pendingPayrollCount = Payroll::where('approved', 'pending')->count();
        $pendingWageRequestCount = WageRequest::where('status', 'pending')->count();

        return view('admin.dashboard', compact(
            'userCount',
            'pendingPayrollCount',
            'pendingWageRequestCount'
        ));
    }

    // HR: recruitment, attendance, scheduling, payroll/wage snapshots
    public function hr()
    {
        $timezone = config('app.timezone');
        $today = Carbon::today($timezone);

        $openJobCount = JobOpening::open()->count();

        $checkedInTodayCount = Attendance::where('date', $today->toDateString())
            ->whereNotNull('check_in')
            ->count();

        $shiftsThisWeekCount = Schedule::whereBetween('shift_date', [
            $today->copy()->startOfWeek()->toDateString(),
            $today->copy()->endOfWeek()->toDateString(),
        ])->count();

        $pendingWageRequestCount = WageRequest::where('status', 'pending')->count();

        return view('hr.dashboard', compact(
            'openJobCount',
            'checkedInTodayCount',
            'shiftsThisWeekCount',
            'pendingWageRequestCount'
        ));
    }

    // Employee: personal snapshots
    public function employee()
    {
        $timezone = config('app.timezone');
        $today = Carbon::today($timezone);
        $employeeId = auth()->id();

        $presentDaysThisMonthCount = Attendance::where('employee_id', $employeeId)
            ->whereIn('status', ['present', 'late'])
            ->whereBetween('date', [
                $today->copy()->startOfMonth()->toDateString(),
                $today->copy()->endOfMonth()->toDateString(),
            ])
            ->count();

        $upcomingShiftCount = Schedule::where('employee_id', $employeeId)
            ->where('shift_date', '>=', $today->toDateString())
            ->count();

        $payslipCount = Payroll::where('employee_id', $employeeId)
            ->where('approved', 'approved')
            ->count();

        return view('employee.dashboard', compact(
            'presentDaysThisMonthCount',
            'upcomingShiftCount',
            'payslipCount'
        ));
    }
}