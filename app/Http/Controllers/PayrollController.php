<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\User;
use App\Models\Attendance;

class PayrollController extends Controller
{
    // HR: list all payroll records
    public function index()
    {
        $payrolls = Payroll::with('employee')->latest()->get();
        $employees = User::where('role', 'employee')->get();

        return view('hr.payroll.index', compact('payrolls', 'employees'));
    }

    // HR: show generate form
    public function create()
    {
        $employees = User::where('role', 'employee')->get();
        return view('hr.payroll.create', compact('employees'));
    }

    // HR: generate payroll for an employee over a period
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:users,id',
            'period_start' => 'required|date',
            'period_end' => 'required|date|after_or_equal:period_start',
        ]);

        $employee = User::findOrFail($validated['employee_id']);

        $totalHours = Attendance::where('employee_id', $employee->id)
            ->whereBetween('date', [$validated['period_start'], $validated['period_end']])
            ->whereNotNull('hours')
            ->sum('hours');

        $hourlyRate = $employee->hourly_rate ?? 0;
        $totalPay = $totalHours * $hourlyRate;

        Payroll::create([
            'employee_id' => $employee->id,
            'period_start' => $validated['period_start'],
            'period_end' => $validated['period_end'],
            'total_hours' => $totalHours,
            'hourly_rate' => $hourlyRate,
            'total_pay' => $totalPay,
            'approved' => 'pending',
            'generated_by' => auth()->id(),
        ]);

        return redirect()->route('hr.payroll.index')->with('success', 'Payroll generated. Pending Admin approval.');
    }

    // Admin: list all payroll for approval
    public function adminIndex()
    {
        $payrolls = Payroll::with('employee')->latest()->get();
        return view('admin.payroll.index', compact('payrolls'));
    }

    // Admin: toggle approval
    public function approve(Payroll $payroll)
    {
        $payroll->update(['approved' => 'approved']);
        return back()->with('success', 'Payroll approved and released.');
    }

    // Employee: view own payslips
    public function myPayroll()
    {
        $payrolls = Payroll::where('employee_id', auth()->id())
            ->where('approved', 'approved')
            ->latest()
            ->get();

        return view('employee.payroll.index', compact('payrolls'));
    }
    // Admin: reject wage request
    public function reject(Payroll $payroll)
    {
        $payroll->update([
            'approved' => 'rejected',
        ]);

        return back()->with('success', 'Payroll rejected.');
    }

    // Employee: view a single payslip as a printable receipt
    public function showPayslip(Payroll $payroll)
    {
        // Employees may only view their own approved payslips
        if ($payroll->employee_id !== auth()->id() || $payroll->approved !== 'approved') {
            abort(403, 'Unauthorized access.');
        }

        return view('employee.payroll.show', compact('payroll'));
    }
}