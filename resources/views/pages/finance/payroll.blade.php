@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-money-check-alt"></i> Payroll Management</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>Lisa Wong</h4>
                <span>Finance Manager</span>
            </div>
            <img src="https://ui-avatars.com/api/?name=Lisa+Wong&background=f59e0b&color=fff" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div class="alert alert-success"><i class="fas fa-check-circle"></i> Payroll generated successfully!</div>

    <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr);">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-money-check-alt"></i></div>
            <div class="stat-details">
                <h3>3</h3>
                <p>Pending Payroll</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-check-circle"></i></div>
            <div class="stat-details">
                <h3>39</h3>
                <p>Processed Payments</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-dollar-sign"></i></div>
            <div class="stat-details">
                <h3>$485,620</h3>
                <p>Total Monthly Payroll</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-exclamation-triangle"></i></div>
            <div class="stat-details">
                <h3>$28,500</h3>
                <p>Total Deductions</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ready for Payroll Generation</h3>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Employee</th>
                    <th>Base Salary</th>
                    <th>Net Salary</th>
                    <th>Effective Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>James Miller</strong><br><small>EMP0001</small></td>
                    <td>$85,000.00</td>
                    <td><strong>$93,000.00</strong></td>
                    <td>2026-07-01</td>
                    <td>
                        <form method="GET" action="payroll.html" style="display: inline;">
                            <input type="hidden" name="user_id" value="1">
                            <input type="hidden" name="salary_id" value="1">
                            <input type="date" name="pay_period_start" required style="padding: 5px;" value="2026-07-01">
                            <input type="date" name="pay_period_end" required style="padding: 5px;" value="2026-07-31">
                            <button type="submit" name="generate_payroll" class="btn btn-sm btn-primary"><i class="fas fa-calculator"></i> Generate</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><strong>Emily Rodriguez</strong><br><small>EMP0002</small></td>
                    <td>$75,000.00</td>
                    <td><strong>$79,950.00</strong></td>
                    <td>2026-07-01</td>
                    <td>
                        <form method="GET" action="payroll.html" style="display: inline;">
                            <input type="hidden" name="user_id" value="2">
                            <input type="hidden" name="salary_id" value="2">
                            <input type="date" name="pay_period_start" required style="padding: 5px;" value="2026-07-01">
                            <input type="date" name="pay_period_end" required style="padding: 5px;" value="2026-07-31">
                            <button type="submit" name="generate_payroll" class="btn btn-sm btn-primary"><i class="fas fa-calculator"></i> Generate</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><strong>Michael Chen</strong><br><small>EMP0003</small></td>
                    <td>$90,000.00</td>
                    <td><strong>$99,000.00</strong></td>
                    <td>2026-07-01</td>
                    <td>
                        <form method="GET" action="payroll.html" style="display: inline;">
                            <input type="hidden" name="user_id" value="3">
                            <input type="hidden" name="salary_id" value="3">
                            <input type="date" name="pay_period_start" required style="padding: 5px;" value="2026-07-01">
                            <input type="date" name="pay_period_end" required style="padding: 5px;" value="2026-07-31">
                            <button type="submit" name="generate_payroll" class="btn btn-sm btn-primary"><i class="fas fa-calculator"></i> Generate</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Payroll Records</h3>
            <div style="display: flex; gap: 10px;">
                <select class="form-control" style="width: 150px;">
                    <option>July 2026</option>
                    <option>June 2026</option>
                    <option>May 2026</option>
                </select>
                <button class="btn btn-primary"><i class="fas fa-download"></i> Export</button>
            </div>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Employee</th>
                    <th>Period</th>
                    <th>Gross</th>
                    <th>Deductions</th>
                    <th>Net Pay</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>James Miller</strong><br><small>EMP0001</small></td>
                    <td>Jun 01 - Jun 30, 2026</td>
                    <td>$93,000.00</td>
                    <td>$3,500.00</td>
                    <td><strong>$89,500.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><span style="color: var(--secondary); font-size: 0.85rem;"><i class="fas fa-check"></i> Jul 05, 2026</span></td>
                </tr>
                <tr>
                    <td><strong>Emily Rodriguez</strong><br><small>EMP0002</small></td>
                    <td>Jun 01 - Jun 30, 2026</td>
                    <td>$79,950.00</td>
                    <td>$1,800.00</td>
                    <td><strong>$78,150.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><span style="color: var(--secondary); font-size: 0.85rem;"><i class="fas fa-check"></i> Jul 05, 2026</span></td>
                </tr>
                <tr>
                    <td><strong>Lisa Wong</strong><br><small>EMP0004</small></td>
                    <td>Jun 01 - Jun 30, 2026</td>
                    <td>$65,800.00</td>
                    <td>$1,200.00</td>
                    <td><strong>$64,600.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><span style="color: var(--secondary); font-size: 0.85rem;"><i class="fas fa-check"></i> Jul 05, 2026</span></td>
                </tr>
                <tr>
                    <td><strong>Robert Taylor</strong><br><small>EMP0006</small></td>
                    <td>Jun 01 - Jun 30, 2026</td>
                    <td>$63,500.00</td>
                    <td>$1,000.00</td>
                    <td><strong>$62,500.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><span style="color: var(--secondary); font-size: 0.85rem;"><i class="fas fa-check"></i> Jul 05, 2026</span></td>
                </tr>
                <tr>
                    <td><strong>Kevin Brooks</strong><br><small>EMP0008</small></td>
                    <td>Jun 01 - Jun 30, 2026</td>
                    <td>$59,620.00</td>
                    <td>$900.00</td>
                    <td><strong>$58,720.00</strong></td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Mark as paid?')"><i class="fas fa-check"></i> Mark Paid</a>
                    </td>
                </tr>
                <tr>
                    <td><strong>David Park</strong><br><small>EMP0005</small></td>
                    <td>Jun 01 - Jun 30, 2026</td>
                    <td>$55,200.00</td>
                    <td>$800.00</td>
                    <td><strong>$54,400.00</strong></td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success" onclick="return confirm('Mark as paid?')"><i class="fas fa-check"></i> Mark Paid</a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Amanda Foster</strong><br><small>EMP0007</small></td>
                    <td>Jun 01 - Jun 30, 2026</td>
                    <td>$50,600.00</td>
                    <td>$600.00</td>
                    <td><strong>$50,000.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><span style="color: var(--secondary); font-size: 0.85rem;"><i class="fas fa-check"></i> Jul 05, 2026</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-line"></i> Payroll Summary</h3>
        </div>
        <div class="row">
            <div class="col-6">
                <div style="padding: 20px;">
                    <h4 style="margin-bottom: 15px;">June 2026 Breakdown</h4>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Gross Payroll</span>
                            <span>$467,670.00</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--primary); width: 100%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Tax Deductions</span>
                            <span>$18,500.00</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--danger); width: 40%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Insurance</span>
                            <span>$6,200.00</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--warning); width: 15%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Other Deductions</span>
                            <span>$3,800.00</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--secondary); width: 10%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="padding: 15px; background: #f8fafc; border-radius: 8px; margin-top: 20px;">
                        <div style="display: flex; justify-content: space-between;">
                            <strong>Net Payroll</strong>
                            <strong style="color: var(--primary);">$439,170.00</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div style="padding: 20px;">
                    <h4 style="margin-bottom: 15px;">Department Payroll Distribution</h4>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Engineering</span>
                            <span>$185,000 (40%)</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--primary); width: 40%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Marketing</span>
                            <span>$95,000 (20%)</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--success); width: 20%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Sales</span>
                            <span>$78,000 (17%)</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--warning); width: 17%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Finance</span>
                            <span>$65,000 (14%)</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--info); width: 14%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>HR</span>
                            <span>$44,670 (9%)</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--danger); width: 9%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
