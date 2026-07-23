@extends('layouts.app')

@section('title', $employee->name . ' - Attendance')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-clock"></i> {{ $employee->name }}'s Attendance</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <img src="{{ auth()->user()->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div style="margin-bottom: 15px;">
        <a href="{{ route('hr.attendance.index') }}" class="btn btn-sm" style="background:#e2e8f0; color:#1e293b;">
            <i class="fas fa-arrow-left"></i> Back to All Attendance
        </a>
    </div>

    <div class="card" style="margin-bottom: 25px;">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-id-badge"></i> Employee Info</h3>
        </div>
        <div style="padding: 20px; display: flex; gap: 40px; flex-wrap: wrap;">
            <div><strong>Name:</strong> {{ $employee->name }}</div>
            <div><strong>Email:</strong> {{ $employee->email }}</div>
            <div><strong>Phone:</strong> {{ $employee->phone ?? '-' }}</div>
            <div><strong>Hourly Rate:</strong> {{ $employee->hourly_rate ? '$' . number_format($employee->hourly_rate, 2) : '-' }}</div>
        </div>
    </div>

    <div class="card" style="margin-bottom: 25px;">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-calendar-alt"></i> Attendance Calendar</h3>
            <div class="calendar-nav">
                <a href="{{ route('hr.attendance.show', ['employee' => $employee->id, 'month' => $month->copy()->subMonth()->format('Y-m')]) }}" class="calendar-nav-btn">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <span class="calendar-month-label">{{ $month->format('F Y') }}</span>
                <a href="{{ route('hr.attendance.show', ['employee' => $employee->id, 'month' => $month->copy()->addMonth()->format('Y-m')]) }}" class="calendar-nav-btn">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>

        <div class="calendar-legend">
            <span class="legend-item"><span class="legend-dot status-present"></span> Present</span>
            <span class="legend-item"><span class="legend-dot status-late"></span> Late</span>
            <span class="legend-item"><span class="legend-dot status-absent"></span> Absent</span>
            <span class="legend-item"><span class="legend-dot status-weekend"></span> Weekend</span>
        </div>

        <div class="attendance-calendar">
            <div class="calendar-weekdays">
                <div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div>
            </div>
            @foreach ($calendarWeeks as $week)
                <div class="calendar-week">
                    @foreach ($week as $day)
                        <div class="calendar-day
                            {{ !$day['isCurrentMonth'] ? 'is-outside' : '' }}
                            {{ $day['isToday'] ? 'is-today' : '' }}
                            {{ $day['status'] ? 'status-' . $day['status'] : '' }}">
                            <span class="calendar-day-number">{{ $day['day'] }}</span>
                            @if ($day['status'])
                                <span class="calendar-day-badge">{{ ucfirst($day['status']) }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endforeach
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
</div>
@endsection