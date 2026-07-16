@extends('layouts.app')

@section('title', $user->name . ' - Profile')

@section('content')
<div class="main-content">
    <div style="margin-bottom: 20px; display: flex; align-items: center; justify-content: space-between;">
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Users</a>
        <h3 style="margin: 0; font-size: 16px; font-weight: 600; color: #706f6c;">User Profile</h3>
    </div>

    <div class="card">
        <div class="card-header" style="display: flex; align-items: center; gap: 20px;">
            <img src="{{ $user->photo_url }}" alt="Profile" style="border-radius: 50%; width: 80px; height: 80px; object-fit: cover;">
            <div>
                <h3 class="card-title" style="margin-bottom: 4px;">{{ $user->name }}</h3>
                @if ($user->role === 'admin')
                    <span class="badge badge-danger">Admin</span>
                @elseif ($user->role === 'hr')
                    <span class="badge badge-warning">HR</span>
                @else
                    <span class="badge badge-success">Employee</span>
                @endif
            </div>
        </div>

        <div class="table-container">
            <table class="data-table">
                <tbody>
                    <tr>
                        <td style="width: 220px;"><i class="fas fa-user"></i> Full Name</td>
                        <td><strong>{{ $user->name }}</strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-envelope"></i> Email Address</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-user-tag"></i> Role</td>
                        <td>{{ ucfirst($user->role) }}</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-phone"></i> Phone Number</td>
                        <td>{{ $user->phone ?? 'Not provided' }}</td>
                    </tr>

                    @if ($user->role === 'employee')
                        <tr>
                            <td><i class="fas fa-money-bill-wave"></i> Hourly Rate</td>
                            <td>{{ $user->hourly_rate !== null ? '$' . number_format($user->hourly_rate, 2) . ' / hr' : 'Not set' }}</td>
                        </tr>
                    @endif

                    <tr>
                        <td><i class="fas fa-calendar-plus"></i> Member Since</td>
                        <td>{{ $user->created_at->format('F j, Y') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection