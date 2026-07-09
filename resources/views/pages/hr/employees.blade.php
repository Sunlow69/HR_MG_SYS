@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-user-tie"></i> Employee Management</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>Sarah Johnson</h4>
                <span>HR Manager</span>
            </div>
        </div>
    </div>

    <div class="alert alert-success"><i class="fas fa-check-circle"></i> Employee added successfully! Employee ID: EMP0043</div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Employees</h3>
            <button class="btn btn-primary" data-modal="addEmployeeModal">
                <i class="fas fa-plus"></i> Add Employee
            </button>
        </div>

        <div class="search-box">
            <input type="text" class="table-search form-control" data-table="employeesTable" placeholder="Search employees...">
        </div>

        <div class="table-container">
            <table class="data-table" id="employeesTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>EMP0001</td>
                    <td>James Miller</td>
                    <td>james.miller@hrms.com</td>
                    <td>Engineering</td>
                    <td>Senior Developer</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editEmployeeModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this employee?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>EMP0002</td>
                    <td>Emily Rodriguez</td>
                    <td>emily.rodriguez@hrms.com</td>
                    <td>Marketing</td>
                    <td>Marketing Manager</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editEmployeeModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this employee?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>EMP0003</td>
                    <td>Michael Chen</td>
                    <td>michael.chen@hrms.com</td>
                    <td>Engineering</td>
                    <td>DevOps Engineer</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editEmployeeModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this employee?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>EMP0004</td>
                    <td>Lisa Wong</td>
                    <td>lisa.wong@hrms.com</td>
                    <td>Finance</td>
                    <td>Accountant</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editEmployeeModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this employee?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>EMP0005</td>
                    <td>David Park</td>
                    <td>david.park@hrms.com</td>
                    <td>HR</td>
                    <td>Recruiter</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editEmployeeModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this employee?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>EMP0006</td>
                    <td>Robert Taylor</td>
                    <td>robert.taylor@hrms.com</td>
                    <td>Sales</td>
                    <td>Sales Representative</td>
                    <td><span class="badge badge-warning">On Leave</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editEmployeeModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this employee?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>EMP0007</td>
                    <td>Amanda Foster</td>
                    <td>amanda.foster@hrms.com</td>
                    <td>Engineering</td>
                    <td>Junior Developer</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editEmployeeModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this employee?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>EMP0008</td>
                    <td>Kevin Brooks</td>
                    <td>kevin.brooks@hrms.com</td>
                    <td>Marketing</td>
                    <td>Content Strategist</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-modal="editEmployeeModal"><i class="fas fa-edit"></i></button>
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this employee?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Employee Modal -->
<div class="modal" id="addEmployeeModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-user-plus"></i> Add New Employee</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="employees.html">
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">First Name *</label>
                            <input type="text" name="firstname" class="form-control" value="New" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Last Name *</label>
                            <input type="text" name="lastname" class="form-control" value="Employee" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Email *</label>
                    <input type="email" name="email" class="form-control" value="new.employee@hrms.com" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Phone</label>
                    <input type="tel" name="phone" class="form-control" value="+1 555-0000">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Department</label>
                            <select name="department_id" class="form-control">
                                <option value="">Select Department</option>
                                <option value="1" selected>Engineering</option>
                                <option value="2">Marketing</option>
                                <option value="3">Finance</option>
                                <option value="4">HR</option>
                                <option value="5">Sales</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Position</label>
                            <select name="position_id" class="form-control">
                                <option value="">Select Position</option>
                                <option value="1">Senior Developer</option>
                                <option value="2" selected>Junior Developer</option>
                                <option value="3">Marketing Manager</option>
                                <option value="4">Accountant</option>
                                <option value="5">Sales Representative</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Base Salary *</label>
                            <input type="number" name="salary" class="form-control" step="0.01" value="65000.00" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Hire Date *</label>
                            <input type="date" name="hire_date" class="form-control" value="2026-07-09" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="add_employee" class="btn btn-primary"><i class="fas fa-save"></i> Add Employee</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Employee Modal -->
<div class="modal" id="editEmployeeModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-edit"></i> Edit Employee</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="employees.html">
            <input type="hidden" name="user_id" value="1">
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" value="James" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" value="Miller" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Phone</label>
                    <input type="tel" name="phone" class="form-control" value="+1 555-0101">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Department</label>
                            <select name="department_id" class="form-control">
                                <option value="1" selected>Engineering</option>
                                <option value="2">Marketing</option>
                                <option value="3">Finance</option>
                                <option value="4">HR</option>
                                <option value="5">Sales</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Position</label>
                            <select name="position_id" class="form-control">
                                <option value="1" selected>Senior Developer</option>
                                <option value="2">Junior Developer</option>
                                <option value="3">Marketing Manager</option>
                                <option value="4">Accountant</option>
                                <option value="5">Sales Representative</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Employment Status</label>
                    <select name="employment_status" class="form-control">
                        <option value="active" selected>Active</option>
                        <option value="on_leave">On Leave</option>
                        <option value="probation">Probation</option>
                        <option value="terminated">Terminated</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="edit_employee" class="btn btn-primary"><i class="fas fa-save"></i> Update Employee</button>
            </div>
        </form>
    </div>
</div>

@endsection