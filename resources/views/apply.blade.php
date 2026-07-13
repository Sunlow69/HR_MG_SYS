<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply - Job Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f7f9; color: #333; min-height: 100vh; display: flex; flex-direction: column; }

        header {
            background: white;
            border-bottom: 1px solid #e5e8ec;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 12px 0;
        }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .header-wrapper { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        .logo-placeholder a { text-decoration: none; display: flex; align-items: center; gap: 12px; }
        .logo-placeholder .bank-name { font-size: 28px; font-weight: 800; color: #004b6e; letter-spacing: -0.5px; }
        .logo-placeholder .bank-sub { font-size: 13px; color: #777; padding-left: 12px; border-left: 2px solid #e5e8ec; font-weight: 400; }
        .top-nav { display: flex; align-items: center; gap: 20px; }
        .top-nav a { text-decoration: none; font-weight: 600; font-size: 14px; color: #004b6e; }
        .top-nav .btn-back { background: #eee; color: #333; padding: 8px 20px; border-radius: 30px; }

        .apply-wrapper { max-width: 700px; margin: 40px auto; padding: 0 20px; flex: 1; }
        .apply-card { background: white; border-radius: 8px; padding: 40px; box-shadow: 0 4px 12px rgba(0,0,0,0.06); }
        .apply-card h1 { font-size: 1.5rem; color: #004261; margin-bottom: 8px; }
        .apply-card p { color: #888; font-size: 0.9rem; margin-bottom: 24px; }

        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-weight: 600; font-size: 0.85rem; color: #555; margin-bottom: 6px; }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%; padding: 12px 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 0.9rem;
            transition: border-color 0.2s; background: #fafbfc;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            outline: none; border-color: #148cb0;
        }
        .form-group textarea { min-height: 120px; resize: vertical; }
        .btn-submit { background: #d92525; color: white; border: none; padding: 14px 28px; border-radius: 6px;
            font-weight: 700; font-size: 1rem; cursor: pointer; transition: background 0.2s; width: 100%; }
        .btn-submit:hover { background: #b31c1c; }

        footer { margin-top: auto; }
        .footer-bar { background: #003b54; color: #b0c8d8; text-align: center; padding: 20px; font-size: 0.8rem; }

        @media (max-width: 768px) {
            .apply-card { padding: 24px; }
            .header-wrapper { flex-direction: column; align-items: flex-start; gap: 10px; }
            .logo-placeholder .bank-sub { padding-left: 0; border-left: none; display: block; margin-top: 2px; font-size: 12px; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container header-wrapper">
            <div class="logo-placeholder">
                <a href="/">
                    <span class="bank-name">BANK</span>
                    <span class="bank-sub">Part of National Bank Group</span>
                </a>
            </div>
            <nav class="top-nav">
                <a href="{{ route('careers') }}" class="btn-back"><i class="fas fa-arrow-left"></i> Back to Careers</a>
            </nav>
        </div>
    </header>

    <div class="apply-wrapper">
        <div class="apply-card">
            <h1>Apply for a Position</h1>
            <p>Fill out the form below to submit your application. We'll review it and get back to you.</p>

            <form>
                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label>Email Address *</label>
                    <input type="email" name="email" placeholder="your@email.com" required>
                </div>
                <div class="form-group">
                    <label>Phone Number *</label>
                    <input type="tel" name="phone" placeholder="+855 12 345 678" required>
                </div>
                <div class="form-group">
                    <label>Position Applied For *</label>
                    <select name="position" required>
                        <option value="">Select a position...</option>
                        <option>Client Service Advisor</option>
                        <option>Customer Relations Officer</option>
                        <option>Large Business Loan Officer - Level 1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Cover Letter</label>
                    <textarea name="cover_letter" placeholder="Tell us why you'd be a great fit..."></textarea>
                </div>
                <button type="submit" class="btn-submit"><i class="fas fa-paper-plane"></i> Submit Application</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-bar">
            &copy; {{ date('Y') }} Company Name Group. All rights reserved.
        </div>
    </footer>

</body>
</html>
