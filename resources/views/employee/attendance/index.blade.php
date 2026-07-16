@extends('layouts.app')

@section('title', 'My Attendance - Employee')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-clock"></i> My Attendance</h2>
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
    @if (session('error'))
        <div class="alert alert-danger" style="background-color: #ffe5e5; color: #cc0000; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
            <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
        </div>
    @endif

    <div class="card" style="margin-bottom: 25px;">
        <div class="card-header">
            <h3 class="card-title">Clock In / Out</h3>
            <div style="font-size: 0.9rem; color: #64748b;">
                Current Time: <span id="attendance-live-clock" data-timezone="{{ config('app.timezone') }}"></span>
            </div>
        </div>
        <div style="padding: 20px; text-align: center;">
            @if (!$today)
                <p style="margin-bottom: 15px; color: #706f6c;">You have not clocked in today yet.</p>
                <form method="POST" action="{{ route('employee.attendance.clockin') }}">
                    @csrf
                    <button type="submit" class="btn btn-success btn-lg" style="padding: 10px 40px;"><i class="fas fa-sign-in-alt"></i> Clock In</button>
                </form>
            @elseif (!$today->check_out)
                <p style="margin-bottom: 15px; color: #22c55e; font-weight: bold;"><i class="fas fa-check-circle"></i> Clocked in at {{ \Carbon\Carbon::parse($today->check_in)->format('h:i A') }}</p>
                <form method="POST" action="{{ route('employee.attendance.clockout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-lg" style="padding: 10px 40px;"><i class="fas fa-sign-out-alt"></i> Clock Out</button>
                </form>
            @else
                <div class="alert alert-success" style="display: inline-block; margin-bottom: 0;">
                    <i class="fas fa-calendar-check"></i> Today's attendance complete. Checked out at {{ \Carbon\Carbon::parse($today->check_out)->format('h:i A') }}
                </div>
            @endif
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Attendance History</h3>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Hours</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($records as $record)
                    <tr>
                        <td>{{ $record->date->format('M d, Y') }}</td>
                        <td>{{ $record->check_in ? \Carbon\Carbon::parse($record->check_in)->format('h:i A') : '--' }}</td>
                        <td>{{ $record->check_out ? \Carbon\Carbon::parse($record->check_out)->format('h:i A') : '--' }}</td>
                        <td>{{ $record->hours ? $record->hours . ' hrs' : '--' }}</td>
                        <td>
                            @if ($record->status === 'present')
                                <span class="badge badge-success">Present</span>
                            @elseif ($record->status === 'late')
                                <span class="badge badge-warning">Late</span>
                            @elseif ($record->status === 'absent')
                                <span class="badge badge-danger">Absent</span>
                            @else
                                <span class="badge badge-info">{{ ucfirst($record->status) }}</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center;">No attendance records yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection