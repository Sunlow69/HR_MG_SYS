@extends('layouts.app')

@section('title', 'Wage Requests - HR')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-hand-holding-usd"></i> Wage Requests</h2>
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
            <h3 class="card-title">Submitted Rate Adjustments</h3>
            <a href="{{ route('hr.wagerequests.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> New Wage Request</a>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Employee</th>
                    <th>Old Rate</th>
                    <th>New Rate</th>
                    <th>Status</th>
                    <th>Reviewed By</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($requests as $r)
                    <tr>
                        <td><strong>{{ $r->employee->name }}</strong></td>
                        <td>${{ $r->old_rate ? number_format($r->old_rate, 2) : '-' }}</td>
                        <td><strong style="color: #22c55e;">${{ number_format($r->new_rate, 2) }}</strong></td>
                        <td>
                            @if ($r->status === 'pending')
                                <span class="badge badge-warning">Pending</span>
                            @elseif ($r->status === 'approved')
                                <span class="badge badge-success">Approved</span>
                            @else
                                <span class="badge badge-danger">Rejected</span>
                            @endif
                        </td>
                        <td>{{ $r->reviewedBy->name ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center;">No wage requests yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection