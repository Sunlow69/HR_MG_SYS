@extends('layouts.app')

@section('title', 'Applications - HR')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-file-alt"></i> Job Applications</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <img src="{{ auth()->user()->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div style="margin-bottom: 20px; display: flex; align-items: center; justify-content: space-between;">
        <a href="{{ route('hr.jobs.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Job Announcements</a>
        <h3 style="margin: 0; font-size: 16px; font-weight: 600; color: #706f6c;">Role: {{ $job->title }}</h3>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Candidate List</h3>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>CV / Resume</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($applications as $app)
                    <tr>
                        <td><strong>{{ $app->name }}</strong></td>
                        <td>{{ $app->email }}</td>
                        <td>{{ $app->phone ?? '-' }}</td>
                        <td>
                            @if($app->cv_path)
                                <a href="{{ asset('storage/' . $app->cv_path) }}" class="btn btn-sm btn-info" target="_blank">
                                    <i class="fas fa-external-link-alt"></i> View CV
                                </a>
                            @else
                                <span class="text-gray-400">No CV file</span>
                            @endif
                        </td>
                        <td>
                            @if ($app->status === 'pending')
                                <span class="badge badge-warning">Pending</span>
                            @elseif ($app->status === 'accepted')
                                <span class="badge badge-success">Accepted</span>
                            @else
                                <span class="badge badge-danger">Rejected</span>
                            @endif
                        </td>
                        <td>
                            @if ($app->status === 'pending')
                                <form method="POST" action="{{ route('hr.applications.accept', $app->id) }}" style="display:inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success" style="margin-right: 5px;"><i class="fas fa-check"></i> Accept</button>
                                </form>
                                <form method="POST" action="{{ route('hr.applications.reject', $app->id) }}" style="display:inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Reject</button>
                                </form>
                            @else
                                <span style="color: #706f6c; font-style: italic;">Reviewed</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center;">No applications yet for this role.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection