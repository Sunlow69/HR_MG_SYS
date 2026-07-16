@extends('layouts.app')

@section('title', 'Edit Schedule - HR')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-edit"></i> Edit Schedule</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <img src="{{ auth()->user()->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('hr.schedules.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Schedules</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Shift Assignment</h3>
        </div>
        <div style="padding: 20px;">
            <form method="POST" action="{{ route('hr.schedules.update', $schedule->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="employee_id">Employee</label>
                    <select name="employee_id" id="employee_id" class="form-control" style="background-color: white;" required>
                        <option value="">-- Select Employee --</option>
                        @foreach ($employees as $emp)
                            <option value="{{ $emp->id }}" {{ old('employee_id', $schedule->employee_id) == $emp->id ? 'selected' : '' }}>
                                {{ $emp->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="shift_date">Shift Date</label>
                    <input type="date" name="shift_date" id="shift_date" class="form-control" value="{{ old('shift_date', $schedule->shift_date->format('Y-m-d')) }}" required>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="shift_start">Shift Start Time</label>
                    <input type="time" name="shift_start" id="shift_start" class="form-control" value="{{ old('shift_start', \Carbon\Carbon::parse($schedule->shift_start)->format('H:i')) }}" required>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label" for="shift_end">Shift End Time</label>
                    <input type="time" name="shift_end" id="shift_end" class="form-control" value="{{ old('shift_end', \Carbon\Carbon::parse($schedule->shift_end)->format('H:i')) }}" required>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Update Shift</button>
            </form>
        </div>
    </div>
</div>
@endsection