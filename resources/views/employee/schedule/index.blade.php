@extends('layouts.app')

@section('title', 'My Schedule - Employee')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-calendar-alt"></i> My Shift Schedule</h2>
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
            <h3 class="card-title">Assigned Shifts</h3>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Shift Start</th>
                    <th>Shift End</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($schedules as $shift)
                    <tr>
                        <td><strong>{{ $shift->shift_date->format('M d, Y') }}</strong></td>
                        <td><span style="color: #2563eb;"><i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($shift->shift_start)->format('h:i A') }}</span></td>
                        <td><span style="color: #ef4444;"><i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($shift->shift_end)->format('h:i A') }}</span></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" style="text-align: center;">No shifts assigned yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection