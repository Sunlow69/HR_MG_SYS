@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-calendar-alt"></i> Schedules</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>Sarah Johnson</h4>
                <span>HR Manager</span>
            </div>
        </div>
    </div>

    <div class="alert alert-success"><i class="fas fa-check-circle"></i> Schedule created successfully!</div>

    <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr);">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-calendar-check"></i></div>
            <div class="stat-details">
                <h3>12</h3>
                <p>Total Schedules</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-user-tie"></i></div>
            <div class="stat-details">
                <h3>5</h3>
                <p>Interviews</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-users"></i></div>
            <div class="stat-details">
                <h3>4</h3>
                <p>Meetings</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-chalkboard-teacher"></i></div>
            <div class="stat-details">
                <h3>3</h3>
                <p>Trainings</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Schedules</h3>
            <button class="btn btn-primary" data-modal="addScheduleModal"><i class="fas fa-plus"></i> Add Schedule</button>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>For</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>Technical Interview - John Anderson</strong></td>
                    <td><span class="badge badge-info">Interview</span></td>
                    <td>James Miller</td>
                    <td>Jul 10, 2026 10:00</td>
                    <td>Jul 10, 2026 11:30</td>
                    <td>Conference Room A</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editScheduleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this schedule?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Weekly Team Standup</strong></td>
                    <td><span class="badge badge-warning">Meeting</span></td>
                    <td>All Employees</td>
                    <td>Jul 10, 2026 09:00</td>
                    <td>Jul 10, 2026 09:30</td>
                    <td>Main Hall</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editScheduleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this schedule?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>React Advanced Training</strong></td>
                    <td><span class="badge badge-success">Training</span></td>
                    <td>Engineering Team</td>
                    <td>Jul 11, 2026 14:00</td>
                    <td>Jul 11, 2026 17:00</td>
                    <td>Training Room B</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editScheduleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this schedule?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Project Deadline Review</strong></td>
                    <td><span class="badge badge-warning">Meeting</span></td>
                    <td>Michael Chen</td>
                    <td>Jul 12, 2026 15:00</td>
                    <td>Jul 12, 2026 16:00</td>
                    <td>Conference Room B</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editScheduleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this schedule?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>HR Policy Update Session</strong></td>
                    <td><span class="badge badge-success">Training</span></td>
                    <td>All Employees</td>
                    <td>Jul 13, 2026 10:00</td>
                    <td>Jul 13, 2026 12:00</td>
                    <td>Main Hall</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editScheduleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this schedule?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Interview - Maria Garcia</strong></td>
                    <td><span class="badge badge-info">Interview</span></td>
                    <td>Emily Rodriguez</td>
                    <td>Jul 14, 2026 11:00</td>
                    <td>Jul 14, 2026 12:00</td>
                    <td>Conference Room A</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editScheduleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this schedule?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Sprint Planning</strong></td>
                    <td><span class="badge badge-warning">Meeting</span></td>
                    <td>Engineering Team</td>
                    <td>Jul 15, 2026 09:30</td>
                    <td>Jul 15, 2026 11:00</td>
                    <td>Conference Room C</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editScheduleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this schedule?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Sales Strategy Workshop</strong></td>
                    <td><span class="badge badge-success">Training</span></td>
                    <td>Sales Team</td>
                    <td>Jul 16, 2026 13:00</td>
                    <td>Jul 16, 2026 16:00</td>
                    <td>Training Room A</td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editScheduleModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this schedule?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Schedule Modal -->
<div class="modal" id="addScheduleModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Add Schedule</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="schedules.html">
            <div class="modal-body">
                <div class="form-group">
                    <label>Title *</label>
                    <input type="text" name="title" class="form-control" value="New Team Meeting" required>
                </div>
                <div class="form-group">
                    <label>Type *</label>
                    <select name="schedule_type" class="form-control" required>
                        <option value="interview">Interview</option>
                        <option value="work" selected>Work</option>
                        <option value="meeting">Meeting</option>
                        <option value="training">Training</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Employee</label>
                    <select name="created_for" class="form-control">
                        <option value="" selected>All Employees</option>
                        <option value="1">James Miller</option>
                        <option value="2">Emily Rodriguez</option>
                        <option value="3">Michael Chen</option>
                        <option value="4">Lisa Wong</option>
                        <option value="5">David Park</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Start *</label>
                            <input type="datetime-local" name="start_datetime" class="form-control" value="2026-07-17T09:00" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>End *</label>
                            <input type="datetime-local" name="end_datetime" class="form-control" value="2026-07-17T10:00" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control" value="Conference Room A">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control">Weekly progress review meeting.</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="add_schedule" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Schedule Modal -->
<div class="modal" id="editScheduleModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Edit Schedule</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="schedules.html">
            <input type="hidden" name="schedule_id" value="1">
            <div class="modal-body">
                <div class="form-group">
                    <label>Title *</label>
                    <input type="text" name="title" class="form-control" value="Technical Interview - John Anderson" required>
                </div>
                <div class="form-group">
                    <label>Type *</label>
                    <select name="schedule_type" class="form-control" required>
                        <option value="interview" selected>Interview</option>
                        <option value="work">Work</option>
                        <option value="meeting">Meeting</option>
                        <option value="training">Training</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Employee</label>
                    <select name="created_for" class="form-control">
                        <option value="">All Employees</option>
                        <option value="1" selected>James Miller</option>
                        <option value="2">Emily Rodriguez</option>
                        <option value="3">Michael Chen</option>
                        <option value="4">Lisa Wong</option>
                        <option value="5">David Park</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Start *</label>
                            <input type="datetime-local" name="start_datetime" class="form-control" value="2026-07-10T10:00" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>End *</label>
                            <input type="datetime-local" name="end_datetime" class="form-control" value="2026-07-10T11:30" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control" value="Conference Room A">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control">Technical interview for Senior Software Engineer position.</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="edit_schedule" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection