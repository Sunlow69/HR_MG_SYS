@extends('layouts.app')

@section('title', 'Admin Dashboard - HR Management System')

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
        <i class="fas fa-info-circle"></i> You have administrative access to manage users, approve payrolls, and review wage requests.
    </div>

    <!-- Statistics Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-users"></i></div>
            <div class="stat-details">
                <h3>System Users</h3>
                <p>Manage all accounts</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-money-check-alt"></i></div>
            <div class="stat-details">
                <h3>Payroll Approval</h3>
                <p>Review and release pay</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-hand-holding-usd"></i></div>
            <div class="stat-details">
                <h3>Wage Requests</h3>
                <p>Process pending requests</p>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="card" style="margin-top: 20px;">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-bolt"></i> Quick Actions</h3>
        </div>
        <div style="display: flex; gap: 15px; flex-wrap: wrap; padding: 15px 0;">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary"><i class="fas fa-users-cog"></i> Manage Users</a>
            <a href="{{ route('admin.payroll.index') }}" class="btn btn-warning"><i class="fas fa-calculator"></i> Approve Payroll</a>
            <a href="{{ route('admin.wagerequests.index') }}" class="btn btn-success"><i class="fas fa-file-invoice-dollar"></i> Wage Requests</a>
        </div>
    </div>
</div>
@endsection