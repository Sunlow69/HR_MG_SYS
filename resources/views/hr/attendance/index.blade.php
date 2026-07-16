@extends('layouts.app')

@section('title', 'Attendance - HR')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-clock"></i> Employee Attendance</h2>
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

    <div class="card" style="margin-bottom: 20px;">
        <div class="card-header">
            <h3 class="card-title">Filter Attendance Records</h3>
        </div>
        <div style="padding: 15px;">
            <form method="GET" action="{{ route('hr.attendance.index') }}">
                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label" for="employee_id">Select Employee:</label>
                    <select name="employee_id" id="employee_id" class="form-control" style="background-color: white; width: 100%; max-width: 300px; display: inline-block; margin-right: 10px;" onchange="this.form.submit()">
                        <option value="">All Employees</option>
                        @foreach ($employees as $emp)
                            <option value="{{ $emp->id }}" {{ request('employee_id') == $emp->id ? 'selected' : '' }}>
                                {{ $emp->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Attendance Logs</h3>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Employee</th>
                    <th>Date</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Hours</th>
                    <th>Status</th>
                    <th>Actions (Manual Edit)</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($records as $record)
                    <tr>
                        <td><strong>{{ $record->employee->name }}</strong></td>
                        <td>{{ $record->date->format('M d, Y') }}</td>
                        <td>{{ $record->check_in ? \Carbon\Carbon::parse($record->check_in)->format('h:i A') : '--' }}</td>
                        <td>{{ $record->check_out ? \Carbon\Carbon::parse($record->check_out)->format('h:i A') : '--' }}</td>
                        <td>{{ $record->hours ?? '--' }}</td>
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
                        <td>
                            <form method="POST" action="{{ route('hr.attendance.update', $record->id) }}" style="display: flex; gap: 5px; align-items: center; flex-wrap: wrap;">
                                @csrf
                                @method('PUT')
                                <input type="time" name="check_in" class="form-control" style="width: auto; padding: 4px 8px; font-size: 13px;" value="{{ $record->check_in ? \Carbon\Carbon::parse($record->check_in)->format('H:i') : '' }}">
                                <input type="time" name="check_out" class="form-control" style="width: auto; padding: 4px 8px; font-size: 13px;" value="{{ $record->check_out ? \Carbon\Carbon::parse($record->check_out)->format('H:i') : '' }}">
                                <select name="status" class="form-control" style="width: auto; padding: 4px 8px; font-size: 13px; background-color: white;">
                                    <option value="present" {{ $record->status == 'present' ? 'selected' : '' }}>Present</option>
                                    <option value="late" {{ $record->status == 'late' ? 'selected' : '' }}>Late</option>
                                    <option value="absent" {{ $record->status == 'absent' ? 'selected' : '' }}>Absent</option>
                                    <option value="weekend" {{ $record->status == 'weekend' ? 'selected' : '' }}>Weekend</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Save</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center;">No attendance records found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection