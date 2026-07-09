@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-user-shield"></i> Role Management</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>Admin</h4>
                <span>System Administrator</span>
            </div>
            <img src="https://ui-avatars.com/api/?name=Admin&background=ef4444&color=fff" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div class="alert alert-success"><i class="fas fa-check-circle"></i> Role permissions updated successfully!</div>

    <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr);">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-user-shield"></i></div>
            <div class="stat-details">
                <h3>6</h3>
                <p>Total Roles</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-check-double"></i></div>
            <div class="stat-details">
                <h3>42</h3>
                <p>Permissions</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-user-lock"></i></div>
            <div class="stat-details">
                <h3>1</h3>
                <p>Admin Users</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-exclamation-circle"></i></div>
            <div class="stat-details">
                <h3>0</h3>
                <p>Security Alerts</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">System Roles & Permissions</h3>
            <button class="btn btn-primary" data-modal="addRoleModal"><i class="fas fa-plus"></i> Add Role</button>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Role</th>
                    <th>Users</th>
                    <th>Permissions</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span class="badge badge-danger">Admin</span></td>
                    <td>1</td>
                    <td>
                        <span class="badge badge-info">all</span>
                        <span class="badge badge-info">manage_users</span>
                        <span class="badge badge-info">manage_roles</span>
                        <span class="badge badge-info">system_config</span>
                    </td>
                    <td>Full system access and control</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editRoleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this role?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="badge badge-info">HR Manager</span></td>
                    <td>2</td>
                    <td>
                        <span class="badge badge-info">manage_employees</span>
                        <span class="badge badge-info">job_announcement</span>
                        <span class="badge badge-info">manage_candidates</span>
                        <span class="badge badge-info">assign_salary</span>
                        <span class="badge badge-info">attendance</span>
                        <span class="badge badge-info">schedule</span>
                    </td>
                    <td>Manages employees, recruitment, and schedules</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editRoleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this role?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="badge badge-warning">Finance</span></td>
                    <td>3</td>
                    <td>
                        <span class="badge badge-info">payroll</span>
                        <span class="badge badge-info">view_reports</span>
                        <span class="badge badge-info">confirm_salary</span>
                    </td>
                    <td>Handles payroll and financial operations</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editRoleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this role?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="badge badge-primary">CEO</span></td>
                    <td>1</td>
                    <td>
                        <span class="badge badge-info">confirm_salary</span>
                        <span class="badge badge-info">view_reports</span>
                        <span class="badge badge-info">approve_budget</span>
                    </td>
                    <td>Executive oversight and approvals</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editRoleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this role?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="badge badge-success">Employee</span></td>
                    <td>35</td>
                    <td>
                        <span class="badge badge-info">view_own_salary</span>
                        <span class="badge badge-info">check_in_out</span>
                        <span class="badge badge-info">view_schedule</span>
                        <span class="badge badge-info">edit_profile</span>
                    </td>
                    <td>Standard employee access</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editRoleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this role?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="badge badge-secondary">Candidate</span></td>
                    <td>10</td>
                    <td>
                        <span class="badge badge-info">apply_job</span>
                        <span class="badge badge-info">view_jobs</span>
                        <span class="badge badge-info">edit_profile</span>
                    </td>
                    <td>Job applicant access only</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editRoleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this role?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-key"></i> Permission Matrix</h3>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Permission</th>
                    <th>Admin</th>
                    <th>HR Manager</th>
                    <th>Finance</th>
                    <th>CEO</th>
                    <th>Employee</th>
                    <th>Candidate</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>Manage Users</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                <tr>
                    <td><strong>Manage Employees</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                <tr>
                    <td><strong>Post Jobs</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                <tr>
                    <td><strong>Review Applications</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                <tr>
                    <td><strong>Generate Payroll</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                <tr>
                    <td><strong>Assign Salary</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                <tr>
                    <td><strong>Confirm Salary</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                <tr>
                    <td><strong>View Own Salary</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                <tr>
                    <td><strong>Manage Attendance</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                <tr>
                    <td><strong>Check In/Out</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                <tr>
                    <td><strong>Apply for Jobs</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                </tr>
                <tr>
                    <td><strong>Manage Schedules</strong></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-check-circle" style="color: var(--success);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                    <td><i class="fas fa-times-circle" style="color: var(--danger);"></i></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Role Modal -->
<div class="modal" id="addRoleModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-plus"></i> Add New Role</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="">
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Role Name *</label>
                    <input type="text" name="role_name" class="form-control" value="Team Lead" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="2">Team lead with limited management access.</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Permissions</label>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> Manage Employees
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox"> Post Jobs
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox"> Review Applications
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> View Own Salary
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> Check In/Out
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> View Schedule
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> Edit Profile
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox"> Manage Schedules
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Add Role</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Role Modal -->
<div class="modal" id="editRoleModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-edit"></i> Edit Role</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="">
            <input type="hidden" name="role_id" value="1">
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Role Name *</label>
                    <input type="text" name="role_name" class="form-control" value="HR Manager" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="2">Manages employees, recruitment, and schedules.</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Permissions</label>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> Manage Employees
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> Post Jobs
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> Review Applications
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> View Own Salary
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> Check In/Out
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> View Schedule
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> Edit Profile
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> Manage Schedules
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox" checked> Assign Salary
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; font-size: 0.9rem;">
                            <input type="checkbox"> Manage Attendance
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Role</button>
            </div>
        </form>
    </div>
</div>

@endsection