@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-building"></i> Departments</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>Sarah Johnson</h4>
                <span>HR Manager</span>
            </div>
        </div>
    </div>

    <div class="alert alert-success"><i class="fas fa-check-circle"></i> Department added successfully!</div>

    <div class="stats-grid" style="grid-template-columns: repeat(5, 1fr);">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-building"></i></div>
            <div class="stat-details">
                <h3>5</h3>
                <p>Total Departments</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-users"></i></div>
            <div class="stat-details">
                <h3>42</h3>
                <p>Total Employees</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-user-plus"></i></div>
            <div class="stat-details">
                <h3>6</h3>
                <p>Open Positions</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-money-bill-wave"></i></div>
            <div class="stat-details">
                <h3>$485K</h3>
                <p>Monthly Payroll</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-chart-line"></i></div>
            <div class="stat-details">
                <h3>12%</h3>
                <p>Growth Rate</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Departments</h3>
            <button class="btn btn-primary" data-modal="addDeptModal"><i class="fas fa-plus"></i> Add Department</button>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Department Name</th>
                    <th>Manager</th>
                    <th>Employees</th>
                    <th>Budget</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>DEP001</td>
                    <td><strong>Engineering</strong></td>
                    <td>James Miller</td>
                    <td>15</td>
                    <td>$185,000.00</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editDeptModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this department?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>DEP002</td>
                    <td><strong>Marketing</strong></td>
                    <td>Emily Rodriguez</td>
                    <td>8</td>
                    <td>$95,000.00</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editDeptModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this department?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>DEP003</td>
                    <td><strong>Finance</strong></td>
                    <td>Lisa Wong</td>
                    <td>6</td>
                    <td>$78,000.00</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editDeptModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this department?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>DEP004</td>
                    <td><strong>Human Resources</strong></td>
                    <td>Sarah Johnson</td>
                    <td>5</td>
                    <td>$62,000.00</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editDeptModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this department?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>DEP005</td>
                    <td><strong>Sales</strong></td>
                    <td>Robert Taylor</td>
                    <td>8</td>
                    <td>$65,000.00</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editDeptModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Delete this department?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-chart-pie"></i> Department Distribution</h3>
                </div>
                <div style="padding: 20px;">
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Engineering</span>
                            <span>36%</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--primary); width: 36%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Marketing</span>
                            <span>19%</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--success); width: 19%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Finance</span>
                            <span>14%</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--warning); width: 14%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Human Resources</span>
                            <span>12%</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--info); width: 12%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Sales</span>
                            <span>19%</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--danger); width: 19%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-bullseye"></i> Department Goals</h3>
                </div>
                <div style="padding: 20px;">
                    <div style="margin-bottom: 20px; padding: 15px; background: #f8fafc; border-radius: 8px; border-left: 4px solid var(--primary);">
                        <h5 style="margin-bottom: 5px;">Engineering</h5>
                        <p style="font-size: 0.9rem; color: var(--secondary);">Launch v3.0 product by Q3 2026. Hire 3 senior developers.</p>
                    </div>
                    <div style="margin-bottom: 20px; padding: 15px; background: #f8fafc; border-radius: 8px; border-left: 4px solid var(--success);">
                        <h5 style="margin-bottom: 5px;">Marketing</h5>
                        <p style="font-size: 0.9rem; color: var(--secondary);">Increase brand awareness by 25%. Launch summer campaign.</p>
                    </div>
                    <div style="margin-bottom: 20px; padding: 15px; background: #f8fafc; border-radius: 8px; border-left: 4px solid var(--warning);">
                        <h5 style="margin-bottom: 5px;">Finance</h5>
                        <p style="font-size: 0.9rem; color: var(--secondary);">Reduce operational costs by 10%. Implement new budgeting system.</p>
                    </div>
                    <div style="margin-bottom: 20px; padding: 15px; background: #f8fafc; border-radius: 8px; border-left: 4px solid var(--info);">
                        <h5 style="margin-bottom: 5px;">Sales</h5>
                        <p style="font-size: 0.9rem; color: var(--secondary);">Achieve $2M quarterly revenue. Expand to 2 new markets.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Department Modal -->
<div class="modal" id="addDeptModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-plus"></i> Add Department</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="departments.html">
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Department Name *</label>
                    <input type="text" name="dept_name" class="form-control" value="Operations" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Department Code</label>
                    <input type="text" name="dept_code" class="form-control" value="DEP006">
                </div>
                <div class="form-group">
                    <label class="form-label">Manager</label>
                    <select name="manager_id" class="form-control">
                        <option value="">Select Manager</option>
                        <option value="1">James Miller</option>
                        <option value="2">Emily Rodriguez</option>
                        <option value="3">Michael Chen</option>
                        <option value="4">Lisa Wong</option>
                        <option value="5">David Park</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Monthly Budget</label>
                    <input type="number" name="budget" class="form-control" step="0.01" value="50000.00">
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3">New department for operations management.</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Add Department</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Department Modal -->
<div class="modal" id="editDeptModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-edit"></i> Edit Department</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="departments.html">
            <input type="hidden" name="dept_id" value="1">
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Department Name *</label>
                    <input type="text" name="dept_name" class="form-control" value="Engineering" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Manager</label>
                    <select name="manager_id" class="form-control">
                        <option value="1" selected>James Miller</option>
                        <option value="2">Emily Rodriguez</option>
                        <option value="3">Michael Chen</option>
                        <option value="4">Lisa Wong</option>
                        <option value="5">David Park</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Monthly Budget</label>
                    <input type="number" name="budget" class="form-control" step="0.01" value="185000.00">
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3">Software development and IT infrastructure team.</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Department</button>
            </div>
        </form>
    </div>
</div>

@endsection