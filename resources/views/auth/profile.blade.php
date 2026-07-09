@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-user-circle"></i> My Profile</h2>
    </div>

    <div class="alert alert-success">Profile updated successfully!</div>

    <div class="row">
        <div class="col-4">
            <div class="card" style="text-align: center;">
                <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=2563eb&color=fff&size=120" alt="Profile" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px;">
                <h3>Sarah Johnson</h3>
                <p style="color: var(--secondary);">HR Manager</p>
                <p style="color: var(--secondary);">sarah.johnson@hrms.com</p>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profile</h3>
                </div>
                <form method="GET" action="profile.html">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" value="Sarah" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" value="Johnson" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" name="phone" value="+1 555-0198" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea name="bio" class="form-control" rows="4">Experienced HR professional with over 8 years in talent acquisition and employee relations. Passionate about building great workplace cultures.</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection