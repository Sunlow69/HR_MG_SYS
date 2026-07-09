@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-wallet"></i> My Salary</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>James Miller</h4>
                <span>Employee</span>
            </div>
            <img src="https://ui-avatars.com/api/?name=James+Miller&background=2563eb&color=fff" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Current Salary Details</h3>
            <span class="badge badge-success">Active</span>
        </div>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; padding: 20px 0;">
        <div>
            <div style="margin-bottom: 20px; padding: 15px; background: #f8fafc; border-radius: 8px;">
                <p style="color: var(--secondary); font-size: 0.9rem; margin-bottom: 5px;">Base Salary</p>
                <p style="font-size: 1.5rem; font-weight: 600; color: var(--dark);">$85,000.00</p>
            </div>
            <div style="margin-bottom: 20px; padding: 15px; background: #f8fafc; border-radius: 8px;">
                <p style="color: var(--secondary); font-size: 0.9rem; margin-bottom: 5px;">Bonus</p>
                <p style="font-size: 1.5rem; font-weight: 600; color: var(--success);">+$5,000.00</p>
            </div>
            <div style="padding: 15px; background: #f8fafc; border-radius: 8px;">
                <p style="color: var(--secondary); font-size: 0.9rem; margin-bottom: 5px;">Promotion %</p>
                <p style="font-size: 1.5rem; font-weight: 600; color: var(--primary);">10%</p>
            </div>
        </div>
        <div>
            <div style="margin-bottom: 20px; padding: 15px; background: #f8fafc; border-radius: 8px;">
                <p style="color: var(--secondary); font-size: 0.9rem; margin-bottom: 5px;">Deductions</p>
                <p style="font-size: 1.5rem; font-weight: 600; color: var(--danger);">-$2,500.00</p>
            </div>
            <div style="margin-bottom: 20px; padding: 15px; background: #f8fafc; border-radius: 8px;">
                <p style="color: var(--secondary); font-size: 0.9rem; margin-bottom: 5px;">Loans</p>
                <p style="font-size: 1.5rem; font-weight: 600; color: var(--danger);">-$1,000.00</p>
            </div>
            <div style="padding: 20px; background: var(--primary); border-radius: 8px; color: white;">
                <p style="font-size: 0.9rem; margin-bottom: 5px; opacity: 0.9;">Net Salary</p>
                <p style="font-size: 2rem; font-weight: 700;">$93,000.00</p>
                <p style="font-size: 0.85rem; opacity: 0.8; margin-top: 5px;">Effective from: Jul 01, 2026</p>
            </div>
        </div>
    </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Payroll History</h3>
            <button class="btn btn-primary"><i class="fas fa-download"></i> Download All</button>
        </div>
        <div class="table-container">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Period</th>
                    <th>Gross</th>
                    <th>Deductions</th>
                    <th>Net Pay</th>
                    <th>Status</th>
                    <th>Payslip</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Jun 01 - Jun 30, 2026</td>
                    <td>$93,000.00</td>
                    <td>$3,500.00</td>
                    <td><strong>$89,500.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-file-pdf"></i> View</a></td>
                </tr>
                <tr>
                    <td>May 01 - May 31, 2026</td>
                    <td>$93,000.00</td>
                    <td>$3,500.00</td>
                    <td><strong>$89,500.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-file-pdf"></i> View</a></td>
                </tr>
                <tr>
                    <td>Apr 01 - Apr 30, 2026</td>
                    <td>$85,000.00</td>
                    <td>$3,200.00</td>
                    <td><strong>$81,800.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-file-pdf"></i> View</a></td>
                </tr>
                <tr>
                    <td>Mar 01 - Mar 31, 2026</td>
                    <td>$85,000.00</td>
                    <td>$3,200.00</td>
                    <td><strong>$81,800.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-file-pdf"></i> View</a></td>
                </tr>
                <tr>
                    <td>Feb 01 - Feb 28, 2026</td>
                    <td>$85,000.00</td>
                    <td>$3,200.00</td>
                    <td><strong>$81,800.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-file-pdf"></i> View</a></td>
                </tr>
                <tr>
                    <td>Jan 01 - Jan 31, 2026</td>
                    <td>$85,000.00</td>
                    <td>$3,200.00</td>
                    <td><strong>$81,800.00</strong></td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-file-pdf"></i> View</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-chart-line"></i> Salary Trend</h3>
                </div>
                <div style="padding: 20px;">
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Jan 2026</span>
                            <span>$81,800</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--primary); width: 85%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Feb 2026</span>
                            <span>$81,800</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--primary); width: 85%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Mar 2026</span>
                            <span>$81,800</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--primary); width: 85%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Apr 2026</span>
                            <span>$81,800</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--primary); width: 85%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>May 2026</span>
                            <span>$89,500</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--success); width: 93%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                    <div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                            <span>Jun 2026</span>
                            <span>$89,500</span>
                        </div>
                        <div style="background: #e2e8f0; border-radius: 10px; height: 20px;">
                            <div style="background: var(--success); width: 93%; height: 100%; border-radius: 10px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-info-circle"></i> Salary Information</h3>
                </div>
                <div style="padding: 20px;">
                    <div style="margin-bottom: 20px; padding: 15px; border-left: 4px solid var(--primary); background: #f8fafc; border-radius: 0 8px 8px 0;">
                        <h5 style="margin-bottom: 5px;">Pay Schedule</h5>
                        <p style="color: var(--secondary); font-size: 0.9rem;">Monthly, paid on the 5th of each month</p>
                    </div>
                    <div style="margin-bottom: 20px; padding: 15px; border-left: 4px solid var(--success); background: #f8fafc; border-radius: 0 8px 8px 0;">
                        <h5 style="margin-bottom: 5px;">Payment Method</h5>
                        <p style="color: var(--secondary); font-size: 0.9rem;">Direct Deposit - Bank of America ****4521</p>
                    </div>
                    <div style="margin-bottom: 20px; padding: 15px; border-left: 4px solid var(--warning); background: #f8fafc; border-radius: 0 8px 8px 0;">
                        <h5 style="margin-bottom: 5px;">Tax Information</h5>
                        <p style="color: var(--secondary); font-size: 0.9rem;">Federal Tax: 22% | State Tax: 5% | FICA: 7.65%</p>
                    </div>
                    <div style="padding: 15px; border-left: 4px solid var(--info); background: #f8fafc; border-radius: 0 8px 8px 0;">
                        <h5 style="margin-bottom: 5px;">Benefits</h5>
                        <p style="color: var(--secondary); font-size: 0.9rem;">Health Insurance, 401k (4% match), 15 PTO days</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection