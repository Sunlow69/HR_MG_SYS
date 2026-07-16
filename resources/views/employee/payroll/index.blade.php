@extends('layouts.app')

@section('title', 'My Payslips - Employee')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-wallet"></i> My Payslips</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <img src="{{ auth()->user()->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Approved Payslip History</h3>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Period</th>
                    <th>Total Hours</th>
                    <th>Hourly Rate</th>
                    <th>Gross Pay</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($payrolls as $p)
                    <tr>
                        <td><strong>{{ $p->period_start->format('M d') }} - {{ $p->period_end->format('M d, Y') }}</strong></td>
                        <td>{{ $p->total_hours }} hrs</td>
                        <td>${{ number_format($p->hourly_rate, 2) }}/hr</td>
                        <td><strong style="color: #22c55e;">${{ number_format($p->total_pay, 2) }}</strong></td>
                        <td>
                            <a href="{{ route('employee.payroll.show', $p->id) }}" class="btn btn-sm btn-info"><i class="fas fa-receipt"></i> View Payslip</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center;">No approved payslips yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection