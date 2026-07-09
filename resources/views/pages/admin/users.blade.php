@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-users"></i> All Users</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>Admin</h4>
                <span>System Administrator</span>
            </div>
            <img src="https://ui-avatars.com/api/?name=Admin&background=ef4444&color=fff" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div class="alert alert-success"><i class="fas fa-check-circle"></i> User role updated successfully!</div>

    <div class="stats-grid" style="grid-template-columns: repeat(5, 1fr);">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-users"></i></div>
            <div class="stat-details">
                <h3>52</h3>
                <p>Total Users</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-user-check"></i></div>
            <div class="stat-details">
                <h3>45</h3>
                <p>Active Users</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-user-clock"></i></div>
            <div class="stat-details">
                <h3>5</h3>
                <p>Pending</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-user-slash"></i></div>
            <div class="stat-details">
                <h3>2</h3>
                <p>Inactive</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-user-shield"></i></div>
            <div class="stat-details">
                <h3>6</h3>
                <p>Roles</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">System Users</h3>
            <div style="display: flex; gap: 10px;">
                <input type="text" class="form-control" placeholder="Search users..." style="width: 250px;">
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>User</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Joined</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>Admin</strong></td>
                    <td>admin@hrms.com</td>
                    <td><span class="badge badge-danger">Admin</span></td>
                    <td>IT</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>Jan 01, 2024</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editUserModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this user?')"><i class="fas fa-ban"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Sarah Johnson</strong></td>
                    <td>sarah.johnson@hrms.com</td>
                    <td><span class="badge badge-info">HR Manager</span></td>
                    <td>HR</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>Jan 15, 2024</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editUserModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this user?')"><i class="fas fa-ban"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>James Miller</strong></td>
                    <td>james.miller@hrms.com</td>
                    <td><span class="badge badge-success">Employee</span></td>
                    <td>Engineering</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>Feb 01, 2024</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editUserModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this user?')"><i class="fas fa-ban"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Emily Rodriguez</strong></td>
                    <td>emily.rodriguez@hrms.com</td>
                    <td><span class="badge badge-success">Employee</span></td>
                    <td>Marketing</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>Feb 15, 2024</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editUserModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this user?')"><i class="fas fa-ban"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Michael Chen</strong></td>
                    <td>michael.chen@hrms.com</td>
                    <td><span class="badge badge-success">Employee</span></td>
                    <td>Engineering</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>Mar 01, 2024</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editUserModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this user?')"><i class="fas fa-ban"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Lisa Wong</strong></td>
                    <td>lisa.wong@hrms.com</td>
                    <td><span class="badge badge-warning">Finance</span></td>
                    <td>Finance</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>Mar 15, 2024</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editUserModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this user?')"><i class="fas fa-ban"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>David Park</strong></td>
                    <td>david.park@hrms.com</td>
                    <td><span class="badge badge-success">Employee</span></td>
                    <td>HR</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>Apr 01, 2024</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editUserModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this user?')"><i class="fas fa-ban"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Robert Taylor</strong></td>
                    <td>robert.taylor@hrms.com</td>
                    <td><span class="badge badge-success">Employee</span></td>
                    <td>Sales</td>
                    <td><span class="badge badge-warning">On Leave</span></td>
                    <td>Apr 15, 2024</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editUserModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Activate this user?')"><i class="fas fa-check"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>John Anderson</strong></td>
                    <td>john.anderson@email.com</td>
                    <td><span class="badge badge-secondary">Candidate</span></td>
                    <td>-</td>
                    <td><span class="badge badge-info">Pending</span></td>
                    <td>Jul 09, 2026</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editUserModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Approve this user?')"><i class="fas fa-check"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Maria Garcia</strong></td>
                    <td>maria.garcia@email.com</td>
                    <td><span class="badge badge-secondary">Candidate</span></td>
                    <td>-</td>
                    <td><span class="badge badge-info">Pending</span></td>
                    <td>Jul 08, 2026</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editUserModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Approve this user?')"><i class="fas fa-check"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="pagination">
            <a href="#"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal" id="editUserModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-edit"></i> Edit User</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="users.html">
            <input type="hidden" name="user_id" value="1">
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" value="Admin">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" value="User">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="admin@hrms.com">
                </div>
                <div class="form-group">
                    <label class="form-label">Role</label>
                    <select name="role_id" class="form-control">
                        <option value="1" selected>Admin</option>
                        <option value="2">HR Manager</option>
                        <option value="3">Finance</option>
                        <option value="4">CEO</option>
                        <option value="5">Employee</option>
                        <option value="6">Candidate</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Department</label>
                    <select name="department_id" class="form-control">
                        <option value="1">Engineering</option>
                        <option value="2">Marketing</option>
                        <option value="3">Finance</option>
                        <option value="4" selected>HR</option>
                        <option value="5">Sales</option>
                        <option value="6">IT</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="active" selected>Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="update_user" class="btn btn-primary"><i class="fas fa-save"></i> Update User</button>
            </div>
        </form>
    </div>
</div>

@endsection