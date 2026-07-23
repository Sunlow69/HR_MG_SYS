@extends('layouts.app')

@section('title', 'Manage Users - Admin')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-users"></i> Manage Users</h2>
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

    <div class="card">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <h3 class="card-title">System Users (HR & Employees)</h3>
            <div style="display: flex; gap: 10px;">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> Create User</a>
            </div>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    @php
                        $sortLink = function ($column, $label) use ($sort, $direction) {
                            $req = request();
                            $nextDirection = ($sort === $column && $direction === 'asc') ? 'desc' : 'asc';
                            $icon = $sort === $column
                                ? ($direction === 'asc' ? 'fa-sort-up' : 'fa-sort-down')
                                : 'fa-sort';
                            $params = array_merge($req->query(), ['sort' => $column, 'direction' => $nextDirection]);
                            return '<a href="' . $req->url() . '?' . http_build_query($params) . '" style="color:inherit; text-decoration:none;">'
                                . $label . ' <i class="fas ' . $icon . '" style="font-size: 11px; opacity: 0.6;"></i></a>';
                        };
                    @endphp
                    <th>{!! $sortLink('name', 'Name') !!}</th>
                    <th>{!! $sortLink('email', 'Email') !!}</th>
                    <th>{!! $sortLink('role', 'Role') !!}</th>
                    <th>{!! $sortLink('phone', 'Phone') !!}</th>
                    <th>{!! $sortLink('hourly_rate', 'Hourly Rate') !!}</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td><a href="{{ route('admin.users.show', $user->id) }}"><strong>{{ $user->name }}</strong></a></td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->role === 'hr')
                                <span class="badge badge-info">HR</span>
                            @else
                                <span class="badge badge-success">Employee</span>
                            @endif
                        </td>
                        <td>{{ $user->phone ?? '-' }}</td>
                        <td>{{ $user->hourly_rate ? '$' . number_format($user->hourly_rate, 2) : '-' }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" onsubmit="return confirm('Are you sure you want to remove this user?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center;">No users found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection