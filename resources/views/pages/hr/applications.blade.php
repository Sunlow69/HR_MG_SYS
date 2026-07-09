@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-file-alt"></i> Applications Review</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>Sarah Johnson</h4>
                <span>HR Manager</span>
            </div>
        </div>
    </div>

    <div class="alert alert-success"><i class="fas fa-check-circle"></i> Application accepted successfully!</div>

    <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr);">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-file-alt"></i></div>
            <div class="stat-details">
                <h3>24</h3>
                <p>Total Applications</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-clock"></i></div>
            <div class="stat-details">
                <h3>8</h3>
                <p>Pending Review</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-check"></i></div>
            <div class="stat-details">
                <h3>12</h3>
                <p>Accepted</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-times"></i></div>
            <div class="stat-details">
                <h3>4</h3>
                <p>Rejected</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Applications</h3>
        </div>
        <div class="search-box">
            <input type="text" class="table-search form-control" data-table="appsTable" placeholder="Search applications...">
        </div>
        <div class="table-container">
            <table class="data-table" id="appsTable">
                <thead>
                <tr>
                    <th>Candidate</th>
                    <th>Job Position</th>
                    <th>Applied Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>John Anderson</strong><br><small style="color: #64748b;">john.anderson@email.com</small></td>
                    <td>Senior Software Engineer<br><small style="color: #64748b;">Full-time</small></td>
                    <td>Jul 09, 2026</td>
                    <td><span class="badge badge-info">Pending</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="viewAppModal"><i class="fas fa-eye"></i> View</button>
                        <a href="#" class="btn btn-sm btn-warning" onclick="return confirm('Schedule interview?')"><i class="fas fa-calendar"></i></a>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Accept this candidate?')"><i class="fas fa-check"></i></a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Reject this candidate?')"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Maria Garcia</strong><br><small style="color: #64748b;">maria.garcia@email.com</small></td>
                    <td>Marketing Manager<br><small style="color: #64748b;">Full-time</small></td>
                    <td>Jul 08, 2026</td>
                    <td><span class="badge badge-info">Pending</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="viewAppModal"><i class="fas fa-eye"></i> View</button>
                        <a href="#" class="btn btn-sm btn-warning" onclick="return confirm('Schedule interview?')"><i class="fas fa-calendar"></i></a>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Accept this candidate?')"><i class="fas fa-check"></i></a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Reject this candidate?')"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Thomas Wright</strong><br><small style="color: #64748b;">thomas.wright@email.com</small></td>
                    <td>Data Analyst<br><small style="color: #64748b;">Full-time</small></td>
                    <td>Jul 07, 2026</td>
                    <td><span class="badge badge-warning">Interview</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="viewAppModal"><i class="fas fa-eye"></i> View</button>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Accept this candidate?')"><i class="fas fa-check"></i></a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Reject this candidate?')"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Sophie Brown</strong><br><small style="color: #64748b;">sophie.brown@email.com</small></td>
                    <td>UX Designer<br><small style="color: #64748b;">Full-time</small></td>
                    <td>Jul 06, 2026</td>
                    <td><span class="badge badge-success">Accepted</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="viewAppModal"><i class="fas fa-eye"></i> View</button>
                    </td>
                </tr>
                <tr>
                    <td><strong>Daniel Lee</strong><br><small style="color: #64748b;">daniel.lee@email.com</small></td>
                    <td>DevOps Engineer<br><small style="color: #64748b;">Full-time</small></td>
                    <td>Jul 05, 2026</td>
                    <td><span class="badge badge-danger">Rejected</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="viewAppModal"><i class="fas fa-eye"></i> View</button>
                    </td>
                </tr>
                <tr>
                    <td><strong>Jessica Martinez</strong><br><small style="color: #64748b;">jessica.martinez@email.com</small></td>
                    <td>Sales Representative<br><small style="color: #64748b;">Full-time</small></td>
                    <td>Jul 04, 2026</td>
                    <td><span class="badge badge-info">Pending</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="viewAppModal"><i class="fas fa-eye"></i> View</button>
                        <a href="#" class="btn btn-sm btn-warning" onclick="return confirm('Schedule interview?')"><i class="fas fa-calendar"></i></a>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Accept this candidate?')"><i class="fas fa-check"></i></a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Reject this candidate?')"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Ryan Cooper</strong><br><small style="color: #64748b;">ryan.cooper@email.com</small></td>
                    <td>Product Manager<br><small style="color: #64748b;">Full-time</small></td>
                    <td>Jul 03, 2026</td>
                    <td><span class="badge badge-warning">Interview</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="viewAppModal"><i class="fas fa-eye"></i> View</button>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Accept this candidate?')"><i class="fas fa-check"></i></a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Reject this candidate?')"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Olivia Turner</strong><br><small style="color: #64748b;">olivia.turner@email.com</small></td>
                    <td>HR Coordinator<br><small style="color: #64748b;">Full-time</small></td>
                    <td>Jul 02, 2026</td>
                    <td><span class="badge badge-success">Accepted</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="viewAppModal"><i class="fas fa-eye"></i> View</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- View Application Modal -->
<div class="modal" id="viewAppModal">
    <div class="modal-content" style="max-width: 700px;">
        <div class="modal-header">
            <h3><i class="fas fa-file-alt"></i> Application Details</h3>
            <button class="close-btn">&times;</button>
        </div>
        <div class="modal-body">
            <div style="margin-bottom: 20px;">
                <h4 style="color: var(--primary); margin-bottom: 10px;">Senior Software Engineer</h4>
                <p><strong>Role:</strong> Full-time</p>
            </div>
            <div style="background: #f8fafc; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <h5>Candidate Information</h5>
                <p><strong>Name:</strong> John Anderson</p>
                <p><strong>Email:</strong> john.anderson@email.com</p>
                <p><strong>Phone:</strong> +1 555-0145</p>
                <p><strong>Applied:</strong> Jul 09, 2026</p>
            </div>
            <div style="margin-bottom: 20px;">
                <h5>Cover Letter</h5>
                <p style="background: #f8fafc; padding: 15px; border-radius: 8px;">I am excited to apply for the Senior Software Engineer position. With over 7 years of experience in full-stack development and a passion for building scalable applications, I believe I would be a great fit for your team. I have extensive experience with React, Node.js, and cloud infrastructure.</p>
            </div>
            <p><a href="#" class="btn btn-primary btn-sm"><i class="fas fa-download"></i> Download CV</a></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-btn">Close</button>
        </div>
    </div>
</div>

@endsection
