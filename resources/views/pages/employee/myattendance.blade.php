@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-calendar-check"></i> My Attendance</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>James Miller</h4>
                <span>Employee</span>
            </div>
            <img src="https://ui-avatars.com/api/?name=James+Miller&background=2563eb&color=fff" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div class="alert alert-success"><i class="fas fa-check-circle"></i> Checked in successfully!</div>

    <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr);">
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-check-circle"></i></div>
            <div class="stat-details">
                <h3>20</h3>
                <p>Present Days</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-clock"></i></div>
            <div class="stat-details">
                <h3>1</h3>
                <p>Late Days</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-times-circle"></i></div>
            <div class="stat-details">
                <h3>0</h3>
                <p>Absent Days</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-hourglass-half"></i></div>
            <div class="stat-details">
                <h3>168.5</h3>
                <p>Total Hours</p>
            </div>
        </div>
    </div>

    <div class="card" style="text-align: center; padding: 40px;">
        <h3 style="margin-bottom: 20px;">Thursday, July 09, 2026</h3>
        <p style="color: var(--success); margin-bottom: 20px; font-size: 1.1rem;">
            <i class="fas fa-check-circle"></i> Checked in at 08:30 AM
        </p>
        <a href="#" class="btn btn-warning btn-lg" onclick="return confirm('Check out now?')">
            <i class="fas fa-sign-out-alt"></i> Check Out
        </a>
        <p style="margin-top: 20px; color: var(--secondary); font-size: 0.9rem;">
            <i class="fas fa-info-circle"></i> You have been working for 11 hours and 52 minutes
        </p>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Attendance History</h3>
                </div>
                <div class="table-container">
                    <table class="data-table">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Hours</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Jul 09, 2026</td>
                            <td>08:30 AM</td>
                            <td>--</td>
                            <td>--</td>
                            <td><span class="badge badge-success">Present</span></td>
                        </tr>
                        <tr>
                            <td>Jul 08, 2026</td>
                            <td>08:45 AM</td>
                            <td>05:30 PM</td>
                            <td>8.75 hrs</td>
                            <td><span class="badge badge-success">Present</span></td>
                        </tr>
                        <tr>
                            <td>Jul 07, 2026</td>
                            <td>09:10 AM</td>
                            <td>06:00 PM</td>
                            <td>8.83 hrs</td>
                            <td><span class="badge badge-warning">Late</span></td>
                        </tr>
                        <tr>
                            <td>Jul 06, 2026</td>
                            <td>08:20 AM</td>
                            <td>05:15 PM</td>
                            <td>8.92 hrs</td>
                            <td><span class="badge badge-success">Present</span></td>
                        </tr>
                        <tr>
                            <td>Jul 05, 2026</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td><span class="badge badge-secondary">Weekend</span></td>
                        </tr>
                        <tr>
                            <td>Jul 04, 2026</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td><span class="badge badge-secondary">Weekend</span></td>
                        </tr>
                        <tr>
                            <td>Jul 03, 2026</td>
                            <td>08:35 AM</td>
                            <td>05:20 PM</td>
                            <td>8.75 hrs</td>
                            <td><span class="badge badge-success">Present</span></td>
                        </tr>
                        <tr>
                            <td>Jul 02, 2026</td>
                            <td>08:30 AM</td>
                            <td>05:30 PM</td>
                            <td>9.00 hrs</td>
                            <td><span class="badge badge-success">Present</span></td>
                        </tr>
                        <tr>
                            <td>Jul 01, 2026</td>
                            <td>08:25 AM</td>
                            <td>05:15 PM</td>
                            <td>8.83 hrs</td>
                            <td><span class="badge badge-success">Present</span></td>
                        </tr>
                        <tr>
                            <td>Jun 30, 2026</td>
                            <td>08:40 AM</td>
                            <td>05:30 PM</td>
                            <td>8.83 hrs</td>
                            <td><span class="badge badge-success">Present</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-calendar-alt"></i> July 2026 Calendar</h3>
                </div>
                <div style="padding: 20px;">
                    <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 5px; text-align: center; margin-bottom: 10px;">
                        <div style="font-weight: 600; color: var(--secondary); font-size: 0.85rem;">Sun</div>
                        <div style="font-weight: 600; color: var(--secondary); font-size: 0.85rem;">Mon</div>
                        <div style="font-weight: 600; color: var(--secondary); font-size: 0.85rem;">Tue</div>
                        <div style="font-weight: 600; color: var(--secondary); font-size: 0.85rem;">Wed</div>
                        <div style="font-weight: 600; color: var(--secondary); font-size: 0.85rem;">Thu</div>
                        <div style="font-weight: 600; color: var(--secondary); font-size: 0.85rem;">Fri</div>
                        <div style="font-weight: 600; color: var(--secondary); font-size: 0.85rem;">Sat</div>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 5px; text-align: center;">
                        <div style="padding: 8px; color: #cbd5e1;">28</div>
                        <div style="padding: 8px; color: #cbd5e1;">29</div>
                        <div style="padding: 8px; color: #cbd5e1;">30</div>
                        <div style="padding: 8px; background: #d1fae5; border-radius: 6px; color: #065f46; font-weight: 600;">1</div>
                        <div style="padding: 8px; background: #d1fae5; border-radius: 6px; color: #065f46; font-weight: 600;">2</div>
                        <div style="padding: 8px; background: #d1fae5; border-radius: 6px; color: #065f46; font-weight: 600;">3</div>
                        <div style="padding: 8px; background: #f1f5f9; border-radius: 6px; color: var(--secondary);">4</div>
                        <div style="padding: 8px; background: #f1f5f9; border-radius: 6px; color: var(--secondary);">5</div>
                        <div style="padding: 8px; background: #d1fae5; border-radius: 6px; color: #065f46; font-weight: 600;">6</div>
                        <div style="padding: 8px; background: #fef3c7; border-radius: 6px; color: #92400e; font-weight: 600;">7</div>
                        <div style="padding: 8px; background: #d1fae5; border-radius: 6px; color: #065f46; font-weight: 600;">8</div>
                        <div style="padding: 8px; background: var(--primary); border-radius: 6px; color: white; font-weight: 600;">9</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">10</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">11</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">12</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">13</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">14</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">15</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">16</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">17</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">18</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">19</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">20</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">21</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">22</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">23</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">24</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">25</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">26</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">27</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">28</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">29</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">30</div>
                        <div style="padding: 8px; border-radius: 6px; color: var(--dark);">31</div>
                    </div>
                    <div style="margin-top: 20px; display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                        <span style="display: flex; align-items: center; gap: 5px; font-size: 0.85rem;"><span style="width: 12px; height: 12px; background: #d1fae5; border-radius: 3px; display: inline-block;"></span> Present</span>
                        <span style="display: flex; align-items: center; gap: 5px; font-size: 0.85rem;"><span style="width: 12px; height: 12px; background: #fef3c7; border-radius: 3px; display: inline-block;"></span> Late</span>
                        <span style="display: flex; align-items: center; gap: 5px; font-size: 0.85rem;"><span style="width: 12px; height: 12px; background: var(--primary); border-radius: 3px; display: inline-block;"></span> Today</span>
                        <span style="display: flex; align-items: center; gap: 5px; font-size: 0.85rem;"><span style="width: 12px; height: 12px; background: #f1f5f9; border-radius: 3px; display: inline-block;"></span> Weekend</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection