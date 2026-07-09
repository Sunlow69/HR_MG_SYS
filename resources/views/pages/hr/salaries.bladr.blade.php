@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-dollar-sign"></i> Salary Management</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>Sarah Johnson</h4>
                <span>HR Manager</span>
            </div>
        </div>
    </div>

    <div class="alert alert-success"><i class="fas fa-check-circle"></i> Salary assigned successfully! Waiting for CEO confirmation.</div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Employee Salaries</h3>
        </div>
        <div class="search-box">
            <input type="text" class="table-search form-control" data-table="salaryTable" placeholder="Search employees...">
        </div>
        <div class="table-container">
            <table class="data-table" id="salaryTable">
                <thead>
                <tr>
                    <th>Employee</th>
                    <th>Base Salary</th>
                    <th>Bonus</th>
                    <th>Deductions</th>
                    <th>Promotion %</th>
                    <th>Loans</th>
                    <th>Net Salary</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>James Miller</strong><br><small>EMP0001</small></td>
                    <td>$85,000.00</td>
                    <td>$5,000.00</td>
                    <td>$2,500.00</td>
                    <td>10%</td>
                    <td>$1,000.00</td>
                    <td><strong>$93,000.00</strong></td>
                    <td><span class="badge badge-success">Confirmed</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-modal="salaryModal"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td><strong>Emily Rodriguez</strong><br><small>EMP0002</small></td>
                    <td>$75,000.00</td>
                    <td>$3,000.00</td>
                    <td>$1,800.00</td>
                    <td>5%</td>
                    <td>$0.00</td>
                    <td><strong>$79,950.00</strong></td>
                    <td><span class="badge badge-success">Confirmed</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-modal="salaryModal"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td><strong>Michael Chen</strong><br><small>EMP0003</small></td>
                    <td>$90,000.00</td>
                    <td>$7,000.00</td>
                    <td>$3,000.00</td>
                    <td>15%</td>
                    <td>$2,500.00</td>
                    <td><strong>$99,000.00</strong></td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-modal="salaryModal"><i class="fas fa-edit"></i> Edit</button>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Confirm this salary?')"><i class="fas fa-check"></i></a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Reject this salary?')"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Lisa Wong</strong><br><small>EMP0004</small></td>
                    <td>$65,000.00</td>
                    <td>$2,000.00</td>
                    <td>$1,200.00</td>
                    <td>0%</td>
                    <td>$0.00</td>
                    <td><strong>$65,800.00</strong></td>
                    <td><span class="badge badge-success">Confirmed</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-modal="salaryModal"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td><strong>David Park</strong><br><small>EMP0005</small></td>
                    <td>$55,000.00</td>
                    <td>$1,500.00</td>
                    <td>$800.00</td>
                    <td>0%</td>
                    <td>$500.00</td>
                    <td><strong>$55,200.00</strong></td>
                    <td><span class="badge badge-secondary">Not Set</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-modal="salaryModal"><i class="fas fa-edit"></i> Assign</button>
                    </td>
                </tr>
                <tr>
                    <td><strong>Robert Taylor</strong><br><small>EMP0006</small></td>
                    <td>$60,000.00</td>
                    <td>$2,500.00</td>
                    <td>$1,000.00</td>
                    <td>5%</td>
                    <td>$0.00</td>
                    <td><strong>$63,500.00</strong></td>
                    <td><span class="badge badge-success">Confirmed</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-modal="salaryModal"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td><strong>Amanda Foster</strong><br><small>EMP0007</small></td>
                    <td>$50,000.00</td>
                    <td>$1,000.00</td>
                    <td>$600.00</td>
                    <td>0%</td>
                    <td>$0.00</td>
                    <td><span class="badge badge-secondary">Not Set</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-modal="salaryModal"><i class="fas fa-edit"></i> Assign</button>
                    </td>
                </tr>
                <tr>
                    <td><strong>Kevin Brooks</strong><br><small>EMP0008</small></td>
                    <td>$58,000.00</td>
                    <td>$1,800.00</td>
                    <td>$900.00</td>
                    <td>3%</td>
                    <td>$0.00</td>
                    <td><strong>$59,620.00</strong></td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-modal="salaryModal"><i class="fas fa-edit"></i> Edit</button>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Confirm this salary?')"><i class="fas fa-check"></i></a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Reject this salary?')"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Assign/Edit Salary Modal -->
<div class="modal" id="salaryModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-dollar-sign"></i> Assign Salary</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="salaries.html" id="salaryForm">
            <input type="hidden" name="user_id" value="1">
            <div class="modal-body">
                <div style="background: #f8fafc; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <h5>James Miller</h5>
                    <p>EMP0001</p>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Base Salary *</label>
                            <input type="number" name="base_salary" class="form-control salary-calc" step="0.01" value="85000.00" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Bonus</label>
                            <input type="number" name="bonus" class="form-control salary-calc" step="0.01" value="5000.00">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Deductions</label>
                            <input type="number" name="deductions" class="form-control salary-calc" step="0.01" value="2500.00">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Promotion %</label>
                            <input type="number" name="promotion" class="form-control salary-calc" step="0.01" value="10.00">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Loans</label>
                            <input type="number" name="loans" class="form-control salary-calc" step="0.01" value="1000.00">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Effective Date</label>
                            <input type="date" name="effective_date" class="form-control" value="2026-07-01" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Net Salary (Auto-calculated)</label>
                    <input type="text" class="form-control" readonly style="font-weight: bold; color: var(--primary);" value="$93,000.00">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="assign_salary" class="btn btn-primary"><i class="fas fa-save"></i> Save Salary</button>
            </div>
        </form>
    </div>
</div>

@endsection