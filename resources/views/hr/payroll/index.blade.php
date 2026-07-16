@extends('layouts.app')

@section('title', 'Payroll - HR')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-money-check-alt"></i> Manage Payroll</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <img src="{{ auth()->user()->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <h3 class="card-title">Generated Payroll Records</h3>
            <a href="{{ route('hr.payroll.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Generate Payroll</a>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Employee</th>
                    <th>Period</th>
                    <th>Total Hours</th>
                    <th>Rate</th>
                    <th>Total Pay</th>
                    <th>Approved</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($payrolls as $p)
                    <tr>
                        <td><strong>{{ $p->employee->name }}</strong></td>
                        <td>{{ $p->period_start->format('M d') }} - {{ $p->period_end->format('M d, Y') }}</td>
                        <td>{{ $p->total_hours }} hrs</td>
                        <td>${{ number_format($p->hourly_rate, 2) }}/hr</td>
                        <td><strong>${{ number_format($p->total_pay, 2) }}</strong></td>
                        <td>
                            @if ($p->approved === 'approved')
                                <span class="badge badge-success">Approved</span>
                            @elseif ($p->approved === 'rejected')
                                <span class="badge badge-danger">Rejected</span>
                            @else
                                <span class="badge badge-warning">Pending Approval</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center;">No payroll records yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection