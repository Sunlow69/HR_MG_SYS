@extends('layouts.app')

@section('title', 'Role Management - HR Management System')

@section('content')

<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-briefcase"></i> Job Announcements</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>John Anderson</h4>
                <span>Candidate</span>
            </div>
            <img src="https://ui-avatars.com/api/?name=John+Anderson&background=10b981&color=fff" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div class="alert alert-success"><i class="fas fa-check-circle"></i> Application submitted successfully!</div>

    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Available Jobs</h3>
                    <div style="display: flex; gap: 10px;">
                        <select class="form-control" style="width: 150px;">
                            <option>All Departments</option>
                            <option>Engineering</option>
                            <option>Marketing</option>
                            <option>Finance</option>
                            <option>Sales</option>
                        </select>
                        <select class="form-control" style="width: 120px;">
                            <option>Full-time</option>
                            <option>Part-time</option>
                            <option>Contract</option>
                        </select>
                    </div>
                </div>

                <!-- Job 1 -->
                <div style="border-bottom: 1px solid #e2e8f0; padding: 25px 0;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px;">
                        <h4 style="color: var(--primary); margin-bottom: 5px;">Senior Software Engineer</h4>
                        <span class="badge badge-success">Open</span>
                    </div>
                    <p style="color: var(--secondary); margin-bottom: 15px; font-size: 0.9rem;">
                        <i class="fas fa-user-tag"></i> Full-time |
                        <i class="fas fa-map-marker-alt"></i> San Francisco, CA |
                        <i class="fas fa-dollar-sign"></i> $120,000 - $150,000 |
                        <i class="fas fa-calendar"></i> Deadline: Jul 30, 2026
                    </p>
                    <p style="margin-bottom: 15px; line-height: 1.6;">We are looking for an experienced Senior Software Engineer to join our growing Engineering team. You will be responsible for designing, developing, and maintaining high-performance web applications using modern technologies...</p>
                    <div style="margin-bottom: 15px;">
                        <span class="badge badge-info">React</span>
                        <span class="badge badge-info">Node.js</span>
                        <span class="badge badge-info">AWS</span>
                        <span class="badge badge-info">TypeScript</span>
                    </div>
                    <button class="btn btn-primary" data-modal="applyModal1"><i class="fas fa-paper-plane"></i> Apply Now</button>
                </div>

                <!-- Job 2 -->
                <div style="border-bottom: 1px solid #e2e8f0; padding: 25px 0;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px;">
                        <h4 style="color: var(--primary); margin-bottom: 5px;">Marketing Manager</h4>
                        <span class="badge badge-success">Open</span>
                    </div>
                    <p style="color: var(--secondary); margin-bottom: 15px; font-size: 0.9rem;">
                        <i class="fas fa-user-tag"></i> Full-time |
                        <i class="fas fa-map-marker-alt"></i> New York, NY |
                        <i class="fas fa-dollar-sign"></i> $85,000 - $110,000 |
                        <i class="fas fa-calendar"></i> Deadline: Jul 25, 2026
                    </p>
                    <p style="margin-bottom: 15px; line-height: 1.6;">Join our dynamic Marketing team as a Marketing Manager. You will lead strategic marketing campaigns, manage brand positioning, and drive customer acquisition across digital and traditional channels...</p>
                    <div style="margin-bottom: 15px;">
                        <span class="badge badge-info">Digital Marketing</span>
                        <span class="badge badge-info">SEO</span>
                        <span class="badge badge-info">Content Strategy</span>
                        <span class="badge badge-info">Analytics</span>
                    </div>
                    <button class="btn btn-primary" data-modal="applyModal2"><i class="fas fa-paper-plane"></i> Apply Now</button>
                </div>

                <!-- Job 3 -->
                <div style="border-bottom: 1px solid #e2e8f0; padding: 25px 0;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px;">
                        <h4 style="color: var(--primary); margin-bottom: 5px;">Data Analyst</h4>
                        <span class="badge badge-success">Open</span>
                    </div>
                    <p style="color: var(--secondary); margin-bottom: 15px; font-size: 0.9rem;">
                        <i class="fas fa-user-tag"></i> Full-time |
                        <i class="fas fa-map-marker-alt"></i> Remote |
                        <i class="fas fa-dollar-sign"></i> $70,000 - $90,000 |
                        <i class="fas fa-calendar"></i> Deadline: Aug 05, 2026
                    </p>
                    <p style="margin-bottom: 15px; line-height: 1.6;">We are seeking a detail-oriented Data Analyst to transform complex data into actionable insights. You will work closely with cross-functional teams to support data-driven decision making...</p>
                    <div style="margin-bottom: 15px;">
                        <span class="badge badge-info">SQL</span>
                        <span class="badge badge-info">Python</span>
                        <span class="badge badge-info">Tableau</span>
                        <span class="badge badge-info">Statistics</span>
                    </div>
                    <button class="btn btn-primary" data-modal="applyModal3"><i class="fas fa-paper-plane"></i> Apply Now</button>
                </div>

                <!-- Job 4 -->
                <div style="border-bottom: 1px solid #e2e8f0; padding: 25px 0;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px;">
                        <h4 style="color: var(--primary); margin-bottom: 5px;">UX Designer</h4>
                        <span class="badge badge-success">Open</span>
                    </div>
                    <p style="color: var(--secondary); margin-bottom: 15px; font-size: 0.9rem;">
                        <i class="fas fa-user-tag"></i> Full-time |
                        <i class="fas fa-map-marker-alt"></i> Austin, TX |
                        <i class="fas fa-dollar-sign"></i> $80,000 - $105,000 |
                        <i class="fas fa-calendar"></i> Deadline: Jul 28, 2026
                    </p>
                    <p style="margin-bottom: 15px; line-height: 1.6;">We are looking for a creative UX Designer to craft intuitive and engaging user experiences. You will collaborate with product and engineering teams to design solutions that delight our users...</p>
                    <div style="margin-bottom: 15px;">
                        <span class="badge badge-info">Figma</span>
                        <span class="badge badge-info">User Research</span>
                        <span class="badge badge-info">Prototyping</span>
                        <span class="badge badge-info">Design Systems</span>
                    </div>
                    <button class="btn btn-primary" data-modal="applyModal4"><i class="fas fa-paper-plane"></i> Apply Now</button>
                </div>

                <!-- Job 5 -->
                <div style="padding: 25px 0;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px;">
                        <h4 style="color: var(--primary); margin-bottom: 5px;">Sales Representative</h4>
                        <span class="badge badge-success">Open</span>
                    </div>
                    <p style="color: var(--secondary); margin-bottom: 15px; font-size: 0.9rem;">
                        <i class="fas fa-user-tag"></i> Full-time |
                        <i class="fas fa-map-marker-alt"></i> Chicago, IL |
                        <i class="fas fa-dollar-sign"></i> $60,000 - $80,000 + Commission |
                        <i class="fas fa-calendar"></i> Deadline: Aug 10, 2026
                    </p>
                    <p style="margin-bottom: 15px; line-height: 1.6;">Join our Sales team as a Sales Representative. You will identify new business opportunities, build relationships with clients, and drive revenue growth for the company...</p>
                    <div style="margin-bottom: 15px;">
                        <span class="badge badge-info">B2B Sales</span>
                        <span class="badge badge-info">CRM</span>
                        <span class="badge badge-info">Negotiation</span>
                        <span class="badge badge-info">Lead Generation</span>
                    </div>
                    <button class="btn btn-primary" data-modal="applyModal5"><i class="fas fa-paper-plane"></i> Apply Now</button>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">My Applications</h3>
                </div>
                <div style="padding: 15px; border-bottom: 1px solid #e2e8f0;">
                    <h5 style="margin-bottom: 5px;">Senior Software Engineer</h5>
                    <p style="font-size: 0.85rem; color: var(--secondary); margin-bottom: 5px;">Applied: Jul 09, 2026</p>
                    <span class="badge badge-info">Pending</span>
                </div>
                <div style="padding: 15px; border-bottom: 1px solid #e2e8f0;">
                    <h5 style="margin-bottom: 5px;">DevOps Engineer</h5>
                    <p style="font-size: 0.85rem; color: var(--secondary); margin-bottom: 5px;">Applied: Jul 01, 2026</p>
                    <span class="badge badge-warning">Interview</span>
                </div>
                <div style="padding: 15px;">
                    <h5 style="margin-bottom: 5px;">Product Manager</h5>
                    <p style="font-size: 0.85rem; color: var(--secondary); margin-bottom: 5px;">Applied: Jun 25, 2026</p>
                    <span class="badge badge-danger">Rejected</span>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-lightbulb"></i> Career Tips</h3>
                </div>
                <div style="padding: 15px;">
                    <p style="margin-bottom: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: var(--success);"></i> Tailor your resume for each position</p>
                    <p style="margin-bottom: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: var(--success);"></i> Research the company before applying</p>
                    <p style="margin-bottom: 10px; font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: var(--success);"></i> Follow up after submitting applications</p>
                    <p style="font-size: 0.9rem;"><i class="fas fa-check-circle" style="color: var(--success);"></i> Prepare for technical assessments</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Apply Modal 1 -->
<div class="modal" id="applyModal1">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Apply for: Senior Software Engineer</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="jobs.html">
            <input type="hidden" name="job_id" value="1">
            <div class="modal-body">
                <p><strong>Role:</strong> Full-time</p>
                <p><strong>Location:</strong> San Francisco, CA</p>
                <p><strong>Salary:</strong> $120,000 - $150,000</p>
                <div style="background: #f8fafc; padding: 15px; border-radius: 8px; margin: 15px 0;">
                    <p style="margin-bottom: 10px;"><strong>Description:</strong></p>
                    <p>We are looking for an experienced Senior Software Engineer to join our growing Engineering team. You will be responsible for designing, developing, and maintaining high-performance web applications.</p>
                </div>
                <div class="form-group">
                    <label class="form-label">Cover Letter</label>
                    <textarea name="cover_letter" class="form-control" rows="5" placeholder="Why are you a good fit for this role?"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Upload CV</label>
                    <input type="file" class="form-control" accept=".pdf,.doc,.docx">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="apply_job" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit Application</button>
            </div>
        </form>
    </div>
</div>

<!-- Apply Modal 2 -->
<div class="modal" id="applyModal2">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Apply for: Marketing Manager</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="jobs.html">
            <input type="hidden" name="job_id" value="2">
            <div class="modal-body">
                <p><strong>Role:</strong> Full-time</p>
                <p><strong>Location:</strong> New York, NY</p>
                <p><strong>Salary:</strong> $85,000 - $110,000</p>
                <div style="background: #f8fafc; padding: 15px; border-radius: 8px; margin: 15px 0;">
                    <p style="margin-bottom: 10px;"><strong>Description:</strong></p>
                    <p>Join our dynamic Marketing team as a Marketing Manager. You will lead strategic marketing campaigns and drive customer acquisition.</p>
                </div>
                <div class="form-group">
                    <label class="form-label">Cover Letter</label>
                    <textarea name="cover_letter" class="form-control" rows="5" placeholder="Why are you a good fit for this role?"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Upload CV</label>
                    <input type="file" class="form-control" accept=".pdf,.doc,.docx">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="apply_job" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit Application</button>
            </div>
        </form>
    </div>
</div>

<!-- Apply Modal 3 -->
<div class="modal" id="applyModal3">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Apply for: Data Analyst</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="jobs.html">
            <input type="hidden" name="job_id" value="3">
            <div class="modal-body">
                <p><strong>Role:</strong> Full-time</p>
                <p><strong>Location:</strong> Remote</p>
                <p><strong>Salary:</strong> $70,000 - $90,000</p>
                <div style="background: #f8fafc; padding: 15px; border-radius: 8px; margin: 15px 0;">
                    <p style="margin-bottom: 10px;"><strong>Description:</strong></p>
                    <p>We are seeking a detail-oriented Data Analyst to transform complex data into actionable insights.</p>
                </div>
                <div class="form-group">
                    <label class="form-label">Cover Letter</label>
                    <textarea name="cover_letter" class="form-control" rows="5" placeholder="Why are you a good fit for this role?"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Upload CV</label>
                    <input type="file" class="form-control" accept=".pdf,.doc,.docx">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="apply_job" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit Application</button>
            </div>
        </form>
    </div>
</div>

<!-- Apply Modal 4 -->
<div class="modal" id="applyModal4">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Apply for: UX Designer</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="jobs.html">
            <input type="hidden" name="job_id" value="4">
            <div class="modal-body">
                <p><strong>Role:</strong> Full-time</p>
                <p><strong>Location:</strong> Austin, TX</p>
                <p><strong>Salary:</strong> $80,000 - $105,000</p>
                <div style="background: #f8fafc; padding: 15px; border-radius: 8px; margin: 15px 0;">
                    <p style="margin-bottom: 10px;"><strong>Description:</strong></p>
                    <p>We are looking for a creative UX Designer to craft intuitive and engaging user experiences.</p>
                </div>
                <div class="form-group">
                    <label class="form-label">Cover Letter</label>
                    <textarea name="cover_letter" class="form-control" rows="5" placeholder="Why are you a good fit for this role?"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Upload CV</label>
                    <input type="file" class="form-control" accept=".pdf,.doc,.docx">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="apply_job" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit Application</button>
            </div>
        </form>
    </div>
</div>

<!-- Apply Modal 5 -->
<div class="modal" id="applyModal5">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Apply for: Sales Representative</h3>
            <button class="close-btn">&times;</button>
        </div>
        <form method="GET" action="jobs.html">
            <input type="hidden" name="job_id" value="5">
            <div class="modal-body">
                <p><strong>Role:</strong> Full-time</p>
                <p><strong>Location:</strong> Chicago, IL</p>
                <p><strong>Salary:</strong> $60,000 - $80,000 + Commission</p>
                <div style="background: #f8fafc; padding: 15px; border-radius: 8px; margin: 15px 0;">
                    <p style="margin-bottom: 10px;"><strong>Description:</strong></p>
                    <p>Join our Sales team as a Sales Representative. You will identify new business opportunities and drive revenue growth.</p>
                </div>
                <div class="form-group">
                    <label class="form-label">Cover Letter</label>
                    <textarea name="cover_letter" class="form-control" rows="5" placeholder="Why are you a good fit for this role?"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Upload CV</label>
                    <input type="file" class="form-control" accept=".pdf,.doc,.docx">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn">Cancel</button>
                <button type="submit" name="apply_job" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit Application</button>
            </div>
        </form>
    </div>
</div>

@endsection