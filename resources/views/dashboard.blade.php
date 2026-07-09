@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')




<div class="main-content">
    <div class="top-header">
        <h2>Welcome back, Sarah Johnson!</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>Sarah Johnson</h4>
                <span>HR Manager</span>
            </div>
            <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=2563eb&color=fff" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div class="alert alert-info">
        <i class="fas fa-info-circle"></i> You have 3 pending employee approvals and 5 new job applications to review.
    </div>

    <!-- Statistics Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-user-tie"></i></div>
            <div class="stat-details">
                <h3>42</h3>
                <p>Total Employees</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-user-clock"></i></div>
            <div class="stat-details">
                <h3>8</h3>
                <p>Pending Candidates</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-briefcase"></i></div>
            <div class="stat-details">
                <h3>6</h3>
                <p>Open Positions</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-file-alt"></i></div>
            <div class="stat-details">
                <h3>12</h3>
                <p>Pending Applications</p>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-bolt"></i> Quick Actions</h3>
        </div>
        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
            <a href="pages/hr/employees.html" class="btn btn-primary"><i class="fas fa-plus"></i> Add Employee</a>
            <a href="pages/candidate/jobs.html" class="btn btn-success"><i class="fas fa-bullhorn"></i> Post Job</a>
            <a href="pages/finance/payroll.html" class="btn btn-warning"><i class="fas fa-calculator"></i> Generate Payroll</a>
            <a href="pages/employee/myattendance.html" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> Check In</a>
            <a href="pages/employee/mysalary.html" class="btn btn-info"><i class="fas fa-file-invoice"></i> View Payslip</a>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-history"></i> Recent Activity</h3>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>User</th>
                    <th>Action</th>
                    <th>Description</th>
                    <th>Time</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Michael Chen</td>
                    <td><span class="badge badge-info">add_employee</span></td>
                    <td>Added employee: Emily Rodriguez</td>
                    <td>Jul 09, 2026 14:30</td>
                </tr>
                <tr>
                    <td>Sarah Johnson</td>
                    <td><span class="badge badge-info">login</span></td>
                    <td>User logged in from 192.168.1.45</td>
                    <td>Jul 09, 2026 14:15</td>
                </tr>
                <tr>
                    <td>David Park</td>
                    <td><span class="badge badge-info">job_post</span></td>
                    <td>Posted new job: Senior Software Engineer</td>
                    <td>Jul 09, 2026 13:45</td>
                </tr>
                <tr>
                    <td>Lisa Wong</td>
                    <td><span class="badge badge-info">payroll</span></td>
                    <td>Generated payroll for June 2026</td>
                    <td>Jul 09, 2026 11:20</td>
                </tr>
                <tr>
                    <td>James Miller</td>
                    <td><span class="badge badge-info">attendance</span></td>
                    <td>Checked in at 08:45 AM</td>
                    <td>Jul 09, 2026 08:45</td>
                </tr>
                <tr>
                    <td>Admin</td>
                    <td><span class="badge badge-info">role_update</span></td>
                    <td>Updated role permissions for Finance team</td>
                    <td>Jul 08, 2026 16:00</td>
                </tr>
                <tr>
                    <td>Emily Rodriguez</td>
                    <td><span class="badge badge-info">application</span></td>
                    <td>Applied for Marketing Manager position</td>
                    <td>Jul 08, 2026 10:30</td>
                </tr>
                <tr>
                    <td>Robert Taylor</td>
                    <td><span class="badge badge-info">logout</span></td>
                    <td>User logged out</td>
                    <td>Jul 08, 2026 17:30</td>
                </tr>
                <tr>
                    <td>Sarah Johnson</td>
                    <td><span class="badge badge-info">salary_assign</span></td>
                    <td>Assigned salary to Employee EMP0042</td>
                    <td>Jul 07, 2026 15:10</td>
                </tr>
                <tr>
                    <td>CEO Office</td>
                    <td><span class="badge badge-info">confirm_salary</span></td>
                    <td>Confirmed salary for 3 employees</td>
                    <td>Jul 07, 2026 09:00</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection