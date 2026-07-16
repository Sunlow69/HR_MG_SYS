@extends('layouts.app')

@section('title', 'Payroll Approval - Admin')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-money-check-alt"></i> Payroll Approval</h2>
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
        <div class="card-header">
            <h3 class="card-title">Pending & Generated Payroll Periods</h3>
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
                    <th>Status</th>
                    <th>Action</th>
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
                            @elseif($p->approved === 'rejected')
                                <span class="badge badge-danger">Rejected</span>
                            @else
                                <span class="badge badge-warning">Pending Approval</span>
                            @endif
                        </td>
                        <td>
                            @if ($p->approved === 'pending')
                                <form method="POST" action="{{ route('admin.payroll.approve', $p->id) }}" style="display:inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success" style="margin-right: 5px;"><i class="fas fa-check"></i> Approve</button>
                                </form>
                                <form method="POST" action="{{ route('admin.payroll.reject', $p->id) }}" style="display:inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Reject</button>
                                </form>
                            @else
                                <span style="color: #706f6c; font-style: italic;">Processed</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center;">No payroll records yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection