@extends('layouts.app')

@section('title', 'Post New Job - HR')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.snow.css" rel="stylesheet">
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-plus"></i> Post New Job Opening</h2>
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
            <h3 class="card-title">Job Details</h3>
        </div>
        <div style="padding: 20px;">
            <form method="POST" action="{{ route('hr.jobs.store') }}">
                @csrf

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="title">Job Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="e.g. Senior Software Engineer" value="{{ old('title') }}" required>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="description">Job Description</label>
                    <div id="description-editor">{!! old('description') !!}</div>
                    <textarea name="description" id="description" style="display: none;" >{{ old('description') }}</textarea>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label" for="status">Status</label>
                    <select name="status" id="status" class="form-control" style="background-color: white;" required>
                        <option value="open" {{ old('status') == 'open' ? 'selected' : '' }}>Open</option>
                        <option value="closed" {{ old('status') == 'closed' ? 'selected' : '' }}>Closed</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Post Job</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.min.js"></script>
<script>
    const quill = new Quill('#description-editor', {
        theme: 'snow',
        placeholder: 'Provide detailed roles, responsibilities, and requirements...',
        modules: {
            toolbar: [
                [{ header: [2, 3, false] }],
                ['bold', 'italic', 'underline'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                ['link'],
                ['clean']
            ]
        }
    });

    const form = document.querySelector('form[action="{{ route('hr.jobs.store') }}"]');
    const descriptionInput = document.querySelector('#description');

    form.addEventListener('submit', function () {
        descriptionInput.value = quill.root.innerHTML;
    });
</script>
@endsection