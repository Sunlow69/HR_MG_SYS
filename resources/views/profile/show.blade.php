@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
    <div class="main-content">
        <div class="top-header">
            <h2><i class="fas fa-id-badge"></i> My Profile</h2>
            <div class="user-profile">
                <div class="user-info">
                    <h4>{{ $user->name }}</h4>
                    <span>{{ ucfirst($user->role) }}</span>
                </div>
                <img src="{{ $user->photo_url }}"
                    alt="Profile" class="user-avatar">
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header"
                style="display: flex; align-items: center; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
                <div style="display: flex; align-items: center; gap: 20px;">
                    <img src="{{ $user->photo_url }}" alt="Profile" class="user-avatar">
                    <div>
                        <h3 class="card-title" style="margin-bottom: 4px;">{{ $user->name }}</h3>
                        <span class="badge badge-info">{{ ucfirst($user->role) }}</span>
                    </div>
                </div>
                <a href="{{ route('profile.edit') }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Profile</a>
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
                            <td>
                                @if ($user->role === 'admin')
                                    <span class="badge badge-danger">Admin</span>
                                @elseif ($user->role === 'hr')
                                    <span class="badge badge-warning">HR</span>
                                @else
                                    <span class="badge badge-success">Employee</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-phone"></i> Phone Number</td>
                            <td>{{ $user->phone ?? 'Not provided' }}</td>
                        </tr>

                        @if ($user->role === 'employee')
                            <tr>
                                <td><i class="fas fa-money-bill-wave"></i> Hourly Rate</td>
                                <td>{{ $user->hourly_rate !== null ? '$' . number_format($user->hourly_rate, 2) . ' / hr' : 'Not set' }}
                                </td>
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