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
            <h2><i class="fas fa-users-cog"></i> ChillVibe HR</h2>
            <p>Human Resource Management</p>
        </div>

        

        <nav class="sidebar-menu">
            @auth
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}"
                        class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i
                            class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <div class="menu-category">Administration</div>
                    <a href="{{ route('admin.users.index') }}"
                        class="menu-item {{ request()->routeIs('admin.users.*') ? 'active' : '' }}"><i class="fas fa-users"></i>
                        Manage Users</a>
                    <div class="menu-category">Approvals</div>
                    <a href="{{ route('admin.payroll.index') }}"
                        class="menu-item {{ request()->routeIs('admin.payroll.*') ? 'active' : '' }}"><i
                            class="fas fa-money-check-alt"></i> Payroll Approval</a>
                    <a href="{{ route('admin.wagerequests.index') }}"
                        class="menu-item {{ request()->routeIs('admin.wagerequests.*') ? 'active' : '' }}"><i
                            class="fas fa-hand-holding-usd"></i> Wage Requests</a>
                    <div class="menu-category">Payroll</div>
                    <a href="{{ route('hr.payroll.index') }}"
                        class="menu-item {{ request()->routeIs('hr.payroll.*') ? 'active' : '' }}"><i
                            class="fas fa-money-check-alt"></i> Manage Payroll</a>
                    <a href="{{ route('hr.wagerequests.index') }}"
                        class="menu-item {{ request()->routeIs('hr.wagerequests.*') ? 'active' : '' }}"><i
                            class="fas fa-wallet"></i> Wage Requests</a>
                    <div class="menu-category">Attendance & Schedule</div>
                    <div class="menu-category">Recruitment</div>
                    <a href="{{ route('hr.jobs.index') }}"
                        class="menu-item {{ request()->routeIs('hr.jobs.*') ? 'active' : '' }}"><i class="fas fa-briefcase"></i>
                        Job Announcements</a>
                    <div class="menu-category">Attendance & Schedule</div>
                    <a href="{{ route('hr.attendance.index') }}"
                        class="menu-item {{ request()->routeIs('hr.attendance.*') ? 'active' : '' }}"><i
                            class="fas fa-clock"></i> All Attendance</a>
                    <a href="{{ route('hr.schedules.index') }}"
                        class="menu-item {{ request()->routeIs('hr.schedules.*') ? 'active' : '' }}"><i
                            class="fas fa-calendar-alt"></i> Schedules</a>

                @elseif(auth()->user()->role === 'hr')
                    <a href="{{ route('hr.dashboard') }}"
                        class="menu-item {{ request()->routeIs('hr.dashboard') ? 'active' : '' }}"><i
                            class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <div class="menu-category">Recruitment</div>
                    <a href="{{ route('hr.jobs.index') }}"
                        class="menu-item {{ request()->routeIs('hr.jobs.*') ? 'active' : '' }}"><i class="fas fa-briefcase"></i>
                        Job Announcements</a>
                    <div class="menu-category">Payroll</div>
                    <a href="{{ route('hr.payroll.index') }}"
                        class="menu-item {{ request()->routeIs('hr.payroll.*') ? 'active' : '' }}"><i
                            class="fas fa-money-check-alt"></i> Manage Payroll</a>
                    <a href="{{ route('hr.wagerequests.index') }}"
                        class="menu-item {{ request()->routeIs('hr.wagerequests.*') ? 'active' : '' }}"><i
                            class="fas fa-wallet"></i> Wage Requests</a>
                    <div class="menu-category">Attendance & Schedule</div>
                    <a href="{{ route('hr.attendance.index') }}"
                        class="menu-item {{ request()->routeIs('hr.attendance.*') ? 'active' : '' }}"><i
                            class="fas fa-clock"></i> All Attendance</a>
                    <a href="{{ route('hr.schedules.index') }}"
                        class="menu-item {{ request()->routeIs('hr.schedules.*') ? 'active' : '' }}"><i
                            class="fas fa-calendar-alt"></i> Schedules</a>
                @elseif(auth()->user()->role === 'employee')
                    <a href="{{ route('employee.dashboard') }}"
                        class="menu-item {{ request()->routeIs('employee.dashboard') ? 'active' : '' }}"><i
                            class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <div class="menu-category">My Workspace</div>
                    <a href="{{ route('employee.attendance.index') }}"
                        class="menu-item {{ request()->routeIs('employee.attendance.*') ? 'active' : '' }}"><i
                            class="fas fa-calendar-check"></i> My Attendance</a>
                    <a href="{{ route('employee.schedule.index') }}"
                        class="menu-item {{ request()->routeIs('employee.schedule.*') ? 'active' : '' }}"><i
                            class="fas fa-calendar-alt"></i> My Shifts</a>
                    <a href="{{ route('employee.payroll.index') }}"
                        class="menu-item {{ request()->routeIs('employee.payroll.*') ? 'active' : '' }}"><i
                            class="fas fa-wallet"></i> My Payroll</a>
                @endif

                <div class="menu-category">Account</div>
                <a href="{{ route('profile.show') }}"
                    class="menu-item {{ request()->routeIs('profile.show') ? 'active' : '' }}"><i
                        class="fas fa-id-badge"></i> My Profile</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" class="menu-item"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            @else
                <a href="{{ route('login') }}" class="menu-item"><i class="fas fa-sign-in-alt"></i> Login</a>
            @endauth
        </nav>
    </aside>
    @yield('content')

    <script src="{{asset('js/main.js')}}"></script>
</body>