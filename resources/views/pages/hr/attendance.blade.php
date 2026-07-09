@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-clock"></i> All Attendance</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>Sarah Johnson</h4>
                <span>HR Manager</span>
            </div>
        </div>
    </div>

    <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr);">
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-check-circle"></i></div>
            <div class="stat-details">
                <h3>38</h3>
                <p>Present Today</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-clock"></i></div>
            <div class="stat-details">
                <h3>3</h3>
                <p>Late Arrivals</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-times-circle"></i></div>
            <div class="stat-details">
                <h3>1</h3>
                <p>Absent</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-calendar"></i></div>
            <div class="stat-details">
                <h3>42</h3>
                <p>Total Employees</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Today's Attendance - July 09, 2026</h3>
            <div style="display: flex; gap: 10px;">
                <input type="date" class="form-control" value="2026-07-09" style="width: 150px;">
                <button class="btn btn-primary"><i class="fas fa-filter"></i> Filter</button>
            </div>
        </div>
        <div class="search-box">
            <input type="text" class="table-search form-control" data-table="attendanceTable" placeholder="Search employees...">
        </div>
        <div class="table-container">
            <table class="data-table" id="attendanceTable">
                <thead>
                <tr>
                    <th>Employee</th>
                    <th>Department</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Work Hours</th>
                    <th>Status</th>
                    <th>Notes</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>James Miller</strong><br><small>EMP0001</small></td>
                    <td>Engineering</td>
                    <td>08:30 AM</td>
                    <td>--</td>
                    <td>--</td>
                    <td><span class="badge badge-success">Present</span></td>
                    <td>-</td>
                </tr>
                <tr>
                    <td><strong>Emily Rodriguez</strong><br><small>EMP0002</small></td>
                    <td>Marketing</td>
                    <td>08:45 AM</td>
                    <td>--</td>
                    <td>--</td>
                    <td><span class="badge badge-success">Present</span></td>
                    <td>-</td>
                </tr>
                <tr>
                    <td><strong>Michael Chen</strong><br><small>EMP0003</small></td>
                    <td>Engineering</td>
                    <td>09:15 AM</td>
                    <td>--</td>
                    <td>--</td>
                    <td><span class="badge badge-warning">Late</span></td>
                    <td>Traffic delay</td>
                </tr>
                <tr>
                    <td><strong>Lisa Wong</strong><br><small>EMP0004</small></td>
                    <td>Finance</td>
                    <td>08:20 AM</td>
                    <td>--</td>
                    <td>--</td>
                    <td><span class="badge badge-success">Present</span></td>
                    <td>-</td>
                </tr>
                <tr>
                    <td><strong>David Park</strong><br><small>EMP0005</small></td>
                    <td>HR</td>
                    <td>08:50 AM</td>
                    <td>--</td>
                    <td>--</td>
                    <td><span class="badge badge-success">Present</span></td>
                    <td>-</td>
                </tr>
                <tr>
                    <td><strong>Robert Taylor</strong><br><small>EMP0006</small></td>
                    <td>Sales</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td><span class="badge badge-danger">Absent</span></td>
                    <td>On approved leave</td>
                </tr>
                <tr>
                    <td><strong>Amanda Foster</strong><br><small>EMP0007</small></td>
                    <td>Engineering</td>
                    <td>08:35 AM</td>
                    <td>--</td>
                    <td>--</td>
                    <td><span class="badge badge-success">Present</span></td>
                    <td>-</td>
                </tr>
                <tr>
                    <td><strong>Kevin Brooks</strong><br><small>EMP0008</small></td>
                    <td>Marketing</td>
                    <td>09:05 AM</td>
                    <td>--</td>
                    <td>--</td>
                    <td><span class="badge badge-warning">Late</span></td>
                    <td>Doctor appointment</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-bar"></i> Monthly Attendance Summary</h3>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Employee</th>
                    <th>Present Days</th>
                    <th>Late Days</th>
                    <th>Absent Days</th>
                    <th>Total Work Hours</th>
                    <th>Attendance Rate</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>James Miller</strong></td>
                    <td>20</td>
                    <td>1</td>
                    <td>0</td>
                    <td>168.5 hrs</td>
                    <td><span class="badge badge-success">95%</span></td>
                </tr>
                <tr>
                    <td><strong>Emily Rodriguez</strong></td>
                    <td>21</td>
                    <td>0</td>
                    <td>0</td>
                    <td>172.0 hrs</td>
                    <td><span class="badge badge-success">100%</span></td>
                </tr>
                <tr>
                    <td><strong>Michael Chen</strong></td>
                    <td>19</td>
                    <td>2</td>
                    <td>0</td>
                    <td>165.0 hrs</td>
                    <td><span class="badge badge-success">90%</span></td>
                </tr>
                <tr>
                    <td><strong>Lisa Wong</strong></td>
                    <td>21</td>
                    <td>0</td>
                    <td>0</td>
                    <td>170.5 hrs</td>
                    <td><span class="badge badge-success">100%</span></td>
                </tr>
                <tr>
                    <td><strong>David Park</strong></td>
                    <td>20</td>
                    <td>1</td>
                    <td>0</td>
                    <td>167.0 hrs</td>
                    <td><span class="badge badge-success">95%</span></td>
                </tr>
                <tr>
                    <td><strong>Robert Taylor</strong></td>
                    <td>18</td>
                    <td>0</td>
                    <td>3</td>
                    <td>144.0 hrs</td>
                    <td><span class="badge badge-warning">86%</span></td>
                </tr>
                <tr>
                    <td><strong>Amanda Foster</strong></td>
                    <td>20</td>
                    <td>1</td>
                    <td>0</td>
                    <td>166.5 hrs</td>
                    <td><span class="badge badge-success">95%</span></td>
                </tr>
                <tr>
                    <td><strong>Kevin Brooks</strong></td>
                    <td>19</td>
                    <td>2</td>
                    <td>0</td>
                    <td>162.0 hrs</td>
                    <td><span class="badge badge-success">90%</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection