@extends('layouts.app')

@section('title', 'Employee Dashboard - HR Management System')

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
        <i class="fas fa-info-circle"></i> View your shift schedule, check your daily attendance logs, clock in/out, and check your generated payslips.
    </div>

    <!-- Statistics Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-calendar-check"></i></div>
            <div class="stat-details">
                <h3>My Attendance</h3>
                <p>Check in and out daily</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-calendar-alt"></i></div>
            <div class="stat-details">
                <h3>My Shifts</h3>
                <p>View assigned work shifts</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-wallet"></i></div>
            <div class="stat-details">
                <h3>My Payroll</h3>
                <p>View payslips and wage details</p>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="card" style="margin-top: 20px;">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-bolt"></i> Quick Actions</h3>
        </div>
        <div style="display: flex; gap: 15px; flex-wrap: wrap; padding: 15px 0;">
            <a href="{{ route('employee.attendance.index') }}" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Clock In / Out</a>
            <a href="{{ route('employee.schedule.index') }}" class="btn btn-success"><i class="fas fa-calendar-week"></i> View Shift Schedule</a>
            <a href="{{ route('employee.payroll.index') }}" class="btn btn-info"><i class="fas fa-file-invoice-dollar"></i> View My Payslips</a>
        </div>
    </div>
</div>
@endsection