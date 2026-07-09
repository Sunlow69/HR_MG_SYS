<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard - HR Management System')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<aside class="sidebar">
    <div class="sidebar-header">
        <h2><i class="fas fa-users-cog"></i> HRMS</h2>
        <p>Human Resource Management</p>
    </div>
    <nav class="sidebar-menu">
        <a href="/dashboard" class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <div class="menu-category">Employee Management</div>
        <a href="/employees" class="menu-item"><i class="fas fa-user-tie"></i> Employees</a>
        <a href="departments" class="menu-item"><i class="fas fa-building"></i> Departments</a>
        <div class="menu-category">Recruitment</div>
        <a href="/jobs" class="menu-item"><i class="fas fa-briefcase"></i> Job Announcements</a>
        <a href="applications" class="menu-item"><i class="fas fa-file-alt"></i> Applications</a>
        <div class="menu-category">Payroll</div>
        <a href="/payroll" class="menu-item"><i class="fas fa-money-check-alt"></i> Generate Payroll</a>
        <a href="salaries" class="menu-item"><i class="fas fa-dollar-sign"></i> Manage Salaries</a>
        <a href="/mysalary" class="menu-item"><i class="fas fa-wallet"></i> My Salary</a>
        <div class="menu-category">Attendance</div>
        <a href="attendance" class="menu-item"><i class="fas fa-clock"></i> All Attendance</a>
        <a href="/myattendance" class="menu-item"><i class="fas fa-calendar-check"></i> My Attendance</a>
        <div class="menu-category">Scheduling</div>
        <a href="schedules" class="menu-item"><i class="fas fa-calendar-alt"></i> Schedules</a>
        <div class="menu-category">Administration</div>
        <a href="/users" class="menu-item"><i class="fas fa-users"></i> All Users</a>
        <a href="/role" class="menu-item {{ request()->routeIs('pages.admin.roles') ? 'active' : '' }}"><i class="fas fa-user-shield"></i> Roles</a>
        <div class="menu-category">Account</div>
        <a href="profile" class="menu-item"><i class="fas fa-user-circle"></i> My Profile</a>
        <a href="login" class="menu-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </nav>
</aside>
@yield('content')

    <script src="{{asset('js/main.js')}}"></script>
</body>
