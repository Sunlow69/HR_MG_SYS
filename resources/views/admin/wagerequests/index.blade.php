@extends('layouts.app')

@section('title', 'Wage Requests - Admin')

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
        <div class="card-header">
            <h3 class="card-title">Wage Requests Review</h3>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Employee</th>
                    <th>Old Rate</th>
                    <th>New Rate</th>
                    <th>Requested By</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($requests as $r)
                    <tr>
                        <td><strong>{{ $r->employee->name }}</strong></td>
                        <td>${{ $r->old_rate ? number_format($r->old_rate, 2) : '-' }}</td>
                        <td><strong style="color: #22c55e;">${{ number_format($r->new_rate, 2) }}</strong></td>
                        <td>{{ $r->requestedBy->name }}</td>
                        <td>
                            @if ($r->status === 'pending')
                                <span class="badge badge-warning">Pending</span>
                            @elseif ($r->status === 'approved')
                                <span class="badge badge-success">Approved</span>
                            @else
                                <span class="badge badge-danger">Rejected</span>
                            @endif
                        </td>
                        <td>
                            @if ($r->status === 'pending')
                                <form method="POST" action="{{ route('admin.wagerequests.approve', $r->id) }}" style="display:inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success" style="margin-right: 5px;"><i class="fas fa-check"></i> Approve</button>
                                </form>
                                <form method="POST" action="{{ route('admin.wagerequests.reject', $r->id) }}" style="display:inline">
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
                        <td colspan="6" style="text-align: center;">No wage requests yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection