@extends('layouts.app')

@section('title', 'Edit Job - HR')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-edit"></i> Edit Job Opening</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <img src="{{ auth()->user()->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('hr.jobs.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Job Openings</a>
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
            <h3 class="card-title">Edit Job Details</h3>
        </div>
        <div style="padding: 20px;">
            <form method="POST" action="{{ route('hr.jobs.update', $job->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="title">Job Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $job->title) }}" required>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="description">Job Description</label>
                    <textarea name="description" id="description" rows="6" class="form-control" required>{{ old('description', $job->description) }}</textarea>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label" for="status">Status</label>
                    <select name="status" id="status" class="form-control" style="background-color: white;" required>
                        <option value="open" {{ old('status', $job->status) == 'open' ? 'selected' : '' }}>Open</option>
                        <option value="closed" {{ old('status', $job->status) == 'closed' ? 'selected' : '' }}>Closed</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Update Job</button>
            </form>
        </div>
    </div>
</div>
@endsection