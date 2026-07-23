@extends('layouts.app')

@section('title', 'HR Dashboard - HR Management System')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2>Welcome back, {{ auth()->user()->name }}!</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <img src="{{ auth()->user()->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div class="alert alert-info">
        <i class="fas fa-info-circle"></i> You can post new job openings, manage candidate applications, view logs, schedule shifts, and request payroll generation.
    </div>

    <!-- Statistics Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-briefcase"></i></div>
            <div class="stat-details">
                <h3>{{ number_format($openJobCount) }}</h3>
                <p>Open Job Postings</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-clock"></i></div>
            <div class="stat-details">
                <h3>{{ number_format($checkedInTodayCount) }}</h3>
                <p>Checked In Today</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-calendar-alt"></i></div>
            <div class="stat-details">
                <h3>{{ number_format($shiftsThisWeekCount) }}</h3>
                <p>Shifts Scheduled This Week</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-calculator"></i></div>
            <div class="stat-details">
                <h3>{{ number_format($pendingWageRequestCount) }}</h3>
                <p>Pending Wage Requests</p>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="card" style="margin-top: 20px;">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-bolt"></i> Quick Actions</h3>
        </div>
        <div style="display: flex; gap: 15px; flex-wrap: wrap; padding: 15px 0;">
            <a href="{{ route('hr.jobs.index') }}" class="btn btn-primary"><i class="fas fa-briefcase"></i> Job Openings</a>
            <a href="{{ route('hr.attendance.index') }}" class="btn btn-success"><i class="fas fa-user-check"></i> Monitor Attendance</a>
            <a href="{{ route('hr.schedules.index') }}" class="btn btn-warning"><i class="fas fa-calendar-plus"></i> Set Schedules</a>
            <a href="{{ route('hr.payroll.index') }}" class="btn btn-info"><i class="fas fa-money-bill-wave"></i> Manage Payroll</a>
            <a href="{{ route('hr.wagerequests.index') }}" class="btn btn-danger"><i class="fas fa-wallet"></i> Wage Requests</a>
        </div>
    </div>
</div>
@endsection