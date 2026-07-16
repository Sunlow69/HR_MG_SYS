@extends('layouts.app')

@section('title', 'Create User - Admin')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-user-plus"></i> Create New User</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <img src="{{ auth()->user()->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Users</a>
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
            <h3 class="card-title">User Account Information</h3>
        </div>
        <div style="padding: 20px;">
            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email address" value="{{ old('email') }}" required>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="role">System Role</label>
                    <select name="role" id="role" class="form-control" style="background-color: white;" required>
                        <option value="">-- Select Role --</option>
                        <option value="hr" {{ old('role') == 'hr' ? 'selected' : '' }}>HR</option>
                        <option value="employee" {{ old('role') == 'employee' ? 'selected' : '' }}>Employee</option>
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number" value="{{ old('phone') }}">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label" for="hourly_rate">Hourly Rate ($)</label>
                    <input type="number" step="0.01" name="hourly_rate" id="hourly_rate" class="form-control" placeholder="0.00" value="{{ old('hourly_rate') }}">
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Create User</button>
            </form>
        </div>
    </div>
</div>
@endsection