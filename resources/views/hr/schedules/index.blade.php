@extends('layouts.app')

@section('title', 'Schedules - HR')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-calendar-alt"></i> Employee Schedules</h2>
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
            <h3 class="card-title">Filter Schedule</h3>
        </div>
        <div style="padding: 15px;">
            <form method="GET" action="{{ route('hr.schedules.index') }}">
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
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <h3 class="card-title">Assigned Shifts</h3>
            <a href="{{ route('hr.schedules.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Assign New Shift</a>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Employee</th>
                    <th>Date</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($schedules as $shift)
                    <tr>
                        <td><strong>{{ $shift->employee->name }}</strong></td>
                        <td>{{ $shift->shift_date->format('M d, Y') }}</td>
                        <td><span style="color: #2563eb;"><i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($shift->shift_start)->format('h:i A') }}</span></td>
                        <td><span style="color: #ef4444;"><i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($shift->shift_end)->format('h:i A') }}</span></td>
                        <td>
                            <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                                <a href="{{ route('hr.schedules.edit', $shift->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i> Edit</a>
                                <form method="POST" action="{{ route('hr.schedules.destroy', $shift->id) }}" onsubmit="return confirm('Remove this shift?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center;">No shifts assigned yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection