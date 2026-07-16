@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-user-edit"></i> Edit Profile</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ $user->name }}</h4>
                <span>{{ ucfirst($user->role) }}</span>
            </div>
            <img src="{{ $user->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('profile.show') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Profile</a>
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
            <h3 class="card-title">Account Information</h3>
        </div>
        <div style="padding: 20px;">
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group" style="margin-bottom: 20px; text-align: center;">
                    <img id="photo-preview" src="{{ $user->photo_url }}" alt="Profile photo" style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover; display: block; margin: 0 auto 12px;">
                    <label class="form-label" for="photo">Profile Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control" accept="image/png, image/jpeg" onchange="previewPhoto(event)">
                    <small style="color: #999;">JPG or PNG, max 2MB. Leave blank to keep your current photo.</small>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label" for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number" value="{{ old('phone', $user->phone) }}">
                </div>

                <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 20px 0;">

                <h4 style="margin-bottom: 12px; font-size: 0.95rem; color: #555;">Change Password <span style="font-weight: 400; color: #999;">(leave blank to keep your current password)</span></h4>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="current_password">Current Password</label>
                    <input type="password" name="current_password" id="current_password" class="form-control" placeholder="Required only if changing password">
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="password">New Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label" for="password_confirmation">Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Re-enter new password">
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Save Changes</button>
                <a href="{{ route('profile.show') }}" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</a>
            </form>
        </div>
    </div>
</div>

<script>
    function previewPhoto(event) {
        const file = event.target.files[0];
        if (file) {
            document.getElementById('photo-preview').src = URL.createObjectURL(file);
        }
    }
</script>
@endsection