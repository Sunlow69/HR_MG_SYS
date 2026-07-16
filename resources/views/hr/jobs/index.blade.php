@extends('layouts.app')

@section('title', 'Job Openings - HR')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-briefcase"></i> Job Openings</h2>
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
            <h3 class="card-title">Job Announcements</h3>
            <a href="{{ route('hr.jobs.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Post New Job</a>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Title</th>
                    @if (auth()->user()->role === 'admin')
                        <th>Posted By</th>
                    @endif
                    <th>Status</th>
                    <th>Applications</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($jobOpenings as $job)
                    <tr>
                        <td><strong>{{ $job->title }}</strong></td>
                        @if (auth()->user()->role === 'admin')
                            <td>{{ $job->postedBy->name ?? 'Unknown' }}</td>
                        @endif
                        <td>
                            @if ($job->status === 'open')
                                <span class="badge badge-success">Open</span>
                            @else
                                <span class="badge badge-danger">Closed</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('hr.applications.index', $job->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-file-alt"></i> {{ $job->applications()->count() }} Applications
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('hr.jobs.edit', $job->id) }}" class="btn btn-sm btn-secondary" style="margin-right: 5px;"><i class="fas fa-edit"></i> Edit</a>
                            <form method="POST" action="{{ route('hr.jobs.destroy', $job->id) }}" style="display:inline" onsubmit="return confirm('Delete this job opening?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ auth()->user()->role === 'admin' ? 5 : 4 }}" style="text-align: center;">No job openings yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection