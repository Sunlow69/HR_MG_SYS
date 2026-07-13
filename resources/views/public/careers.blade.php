<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Job Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* ===== RESET ===== */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f7f9; color: #333; min-height: 100vh; }

        /* ===== HEADER ===== */
        header {
            background: white;
            border-bottom: 1px solid #e5e8ec;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .header-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        .logo-placeholder a {
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .logo-placeholder .bank-name {
            font-size: 28px;
            font-weight: 800;
            color: #004b6e;
            letter-spacing: -0.5px;
        }
        .logo-placeholder .bank-sub {
            font-size: 13px;
            color: #777;
            padding-left: 12px;
            border-left: 2px solid #e5e8ec;
            font-weight: 400;
        }
        .top-nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .top-nav .careers-link {
            text-decoration: none;
            color: #004b6e;
            font-weight: 600;
            font-size: 15px;
            padding: 8px 0;
            border-bottom: 3px solid #d92525;
            transition: color 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .top-nav .careers-link:hover { color: #d92525; }
        .top-nav .btn-business {
            text-decoration: none;
            background: #d92525;
            color: white;
            padding: 8px 24px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.2s, transform 0.1s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .top-nav .btn-business.btn-signup { background: #004b6e; }
        .top-nav .btn-business:hover { background: #b31c1c; transform: translateY(-1px); }
        .top-nav .btn-business.btn-signup:hover { background: #003b58; }
        .top-nav .btn-business:active { transform: translateY(0); }
        .user-welcome .welcome-text {
            color: #004b6e;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .user-welcome .welcome-text i { font-size: 18px; }
        .logout-form button {
            background: #6c757d;
            border: none;
            cursor: pointer;
        }
        .logout-form button:hover { background: #5a6268 !important; transform: translateY(-1px); }

        /* ===== HERO ===== */
        .hero {
            width: 100%;
            position: relative;
            height: 280px;
            overflow: hidden;
            display: flex;
            align-items: center;
            background: #004261;
        }
        .hero img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(0,66,97,0.9) 0%, rgba(0,66,97,0.7) 50%, transparent 100%);
        }
        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
            position: relative;
            z-index: 10;
            color: white;
        }
        .hero-content h1 {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: -0.5px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        .hero-content p {
            margin-top: 8px;
            font-size: 1.125rem;
            color: #c1e0f0;
            max-width: 600px;
            text-shadow: 0 1px 3px rgba(0,0,0,0.2);
        }

        /* ===== MAIN LAYOUT ===== */
        .page-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 20px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 32px;
        }

        /* ===== LEFT COLUMN ===== */
        .left-col { display: flex; flex-direction: column; gap: 32px; }

        .profile-card {
            border: 1px solid #e0e0e0;
            background: white;
            border-radius: 8px;
            padding: 20px 24px;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        }
        .profile-card h2 {
            font-size: 0.9rem;
            font-weight: 700;
            color: #004261;
        }
        .profile-card p {
            margin-top: 8px;
            font-size: 0.85rem;
            line-height: 1.5;
            color: #004261;
        }
        .profile-card .btn-red {
            display: inline-flex;
            align-items: center;
            margin-top: 12px;
            background: #d92525;
            color: white;
            padding: 8px 24px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 700;
            text-decoration: none;
            transition: background 0.2s;
        }
        .profile-card .btn-red:hover { background: #b31c1c; }

        .section-title h2 {
            font-size: 1.875rem;
            font-weight: 700;
            color: #004261;
            letter-spacing: -0.5px;
        }
        .section-title p {
            font-size: 0.875rem;
            color: #888;
            margin-top: 4px;
        }

        .job-list { display: flex; flex-direction: column; gap: 24px; margin-top: 8px; }
        .job-item {
            border-bottom: 1px dashed #ddd;
            padding-bottom: 24px;
        }
        .job-item:last-child { border-bottom: none; padding-bottom: 0; }
        .job-title-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
        }
        .job-title-row h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #004261;
            cursor: pointer;
            transition: color 0.2s;
        }
        .job-title-row h3:hover { color: #005a84; }
        .badge-new {
            background: #d92525;
            color: white;
            font-size: 0.65rem;
            font-weight: 700;
            text-transform: uppercase;
            padding: 2px 10px;
            border-radius: 30px;
            letter-spacing: 0.5px;
        }
        .job-desc {
            font-size: 0.875rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 12px;
        }
        .job-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 8px;
            font-size: 0.8rem;
            color: #999;
        }
        .job-meta .separator { color: #ddd; display: none; }
        @media (min-width: 640px) {
            .job-meta .separator { display: inline; }
        }

        /* ===== RIGHT COLUMN (Sticky) ===== */
        .right-col {
            position: sticky;
            top: 100px;
            align-self: start;
        }
        .sticky-card {
            background: linear-gradient(to bottom, #1e3a5f, #004261);
            color: white;
            padding: 24px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .sticky-card h4 {
            font-size: 1.25rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .sticky-card .red-label {
            background: #d92525;
            color: white;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 4px;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .mock-profile {
            background: rgba(255,255,255,0.1);
            border-radius: 12px;
            padding: 16px;
            max-width: 220px;
            margin: 0 auto;
            border: 1px solid rgba(255,255,255,0.15);
        }
        .mock-profile-inner {
            background: white;
            border-radius: 8px;
            padding: 12px;
            text-align: left;
            color: #333;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .mock-user {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .mock-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }
        .mock-user-info .mock-name { font-weight: 700; color: #1a1a1a; font-size: 0.85rem; }
        .mock-user-info .mock-role { font-size: 0.7rem; color: #999; }
        .mock-bar { height: 6px; background: #f0f0f0; border-radius: 3px; }
        .mock-bar.w-full { width: 100%; }
        .mock-bar.w-5-6 { width: 83%; }

        .sticky-card .sticky-text {
            font-size: 0.8rem;
            color: #b0c8d8;
            padding: 0 8px;
        }
        .sticky-card .btn-get-started {
            display: block;
            background: #d92525;
            color: white;
            text-align: center;
            padding: 12px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            transition: background 0.2s;
        }
        .sticky-card .btn-get-started:hover { background: #b31c1c; }

        /* ===== FOOTER ===== */
        .footer-social {
            max-width: 1200px;
            margin: 0 auto;
            padding: 24px 20px;
            border-top: 1px solid #eee;
        }
        .footer-social p { font-size: 0.9rem; font-weight: 600; color: #666; margin-bottom: 12px; }
        .social-icons { display: flex; align-items: center; gap: 10px; }
        .social-icons a {
            width: 40px; height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: opacity 0.2s;
        }
        .social-icons a:hover { opacity: 0.85; }
        .social-fb { background: #1877f2; }
        .social-tt { background: #000; }
        .social-ig { background: linear-gradient(45deg, #f9ce34, #ee2a7b, #6228d7); }
        .social-li { background: #0077b5; }
        .social-yt { background: #ff0000; }
        .social-tg { background: #229ed9; }

        .footer-legal {
            background: #003b54;
            color: #b0c8d8;
            padding: 32px 20px;
            font-size: 0.8rem;
        }
        .footer-legal-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        @media (min-width: 768px) {
            .footer-legal-inner {
                flex-direction: row;
                justify-content: space-between;
                align-items: flex-start;
            }
        }
        .footer-brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .footer-brand-name {
            font-size: 1.25rem;
            font-weight: 900;
            color: white;
            letter-spacing: 1px;
        }
        .footer-brand-name .red-dot { color: #d92525; }
        .footer-divider {
            width: 1px;
            height: 24px;
            background: #4a6a7a;
        }
        .footer-group {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            opacity: 0.7;
            line-height: 1.2;
        }
        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            color: white;
            font-size: 0.9rem;
            margin-bottom: 4px;
        }
        .footer-links a {
            color: white;
            text-decoration: none;
        }
        .footer-links a:hover { text-decoration: underline; }
        .footer-links span { color: #4a6a7a; }
        .footer-info { line-height: 1.6; }
        .footer-info strong { color: white; }
        .footer-copy { opacity: 0.6; margin-top: 4px; }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .header-wrapper { flex-direction: column; align-items: flex-start !important; gap: 10px !important; }
            .logo-placeholder .bank-sub { padding-left: 0 !important; border-left: none !important; display: block; margin-top: 2px; font-size: 12px !important; }
            .top-nav { width: 100%; justify-content: flex-start; gap: 12px !important; }
            .top-nav .careers-link { font-size: 14px !important; padding: 6px 0; }
            .top-nav .btn-business { padding: 6px 18px !important; font-size: 13px !important; }
            .hero { height: 200px; }
            .hero-content h1 { font-size: 1.75rem; }
            .hero-content p { font-size: 0.95rem; }
            .page-wrapper { grid-template-columns: 1fr; padding: 20px 16px; gap: 24px; }
            .section-title h2 { font-size: 1.5rem; }
            .right-col { position: static; }
        }
        @media (max-width: 480px) {
            header { padding: 8px 0 !important; }
            .container { padding: 0 12px; }
            .logo-placeholder .bank-name { font-size: 22px !important; }
            .logo-placeholder .bank-sub { font-size: 11px !important; }
            .top-nav { gap: 10px !important; }
            .top-nav .careers-link { font-size: 13px !important; padding: 4px 0 !important; }
            .top-nav .careers-link i { font-size: 12px; }
            .top-nav .btn-business { padding: 5px 14px !important; font-size: 12px !important; }
            .top-nav .btn-business i { font-size: 11px; }
        }
    </style>
</head>
<body>

    <!-- ===== HEADER ===== -->
    <header>
        <div class="container header-wrapper">
            <div class="logo-placeholder">
                <a href="{{ route('careers') }}">
                    <span class="bank-name">BANK</span>
                    <span class="bank-sub">Part of National Bank Group</span>
                </a>
            </div>
            @auth
            <!-- Logged In: Show username + Logout -->
            <nav class="top-nav">
                <a href="{{ route('careers') }}" class="careers-link">
                    <i class="fas fa-briefcase"></i> Careers
                </a>
                <div class="user-welcome">
                    <span class="welcome-text"><i class="fas fa-user-circle"></i> Welcome, <strong>{{ Auth::user()->name }}</strong></span>
                </div>
                <form method="POST" action="{{ route('auth.logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn-business" style="background:#6c757d;border:none;cursor:pointer;">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </nav>
            @else
            <!-- Not Logged In: Show Sign Up + Sign In -->
            <nav class="top-nav">
                <a href="{{ route('careers') }}" class="careers-link">
                    <i class="fas fa-briefcase"></i> Careers
                </a>
                <a href="{{ route('auth.signup') }}" class="btn-business btn-signup">
                    <i class="fas fa-user-plus"></i> Sign Up
                </a>
                <a href="{{ route('auth.signin') }}" class="btn-business">
                    <i class="fas fa-sign-in-alt"></i> Sign In
                </a>
            </nav>
            @endauth
        </div>
    </header>

    <!-- ===== HERO ===== -->
    <div class="hero">
        <img src="https://media.istockphoto.com/id/517374252/photo/business-office-building-in-london-england.jpg?s=612x612&w=0&k=20&c=mC7RfqWnNBEkmfbem-cHjd7O10XbiZ0SCfJuIZkmfKg=" alt="Business Office Building">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Join Our Corporate Team</h1>
            <p>Discover a workspace built around innovation, growth, and sustainable financial developments.</p>
        </div>
    </div>

    <!-- ===== MAIN CONTENT ===== -->
    <div class="page-wrapper">
        <!-- LEFT COLUMN -->
        <div class="left-col">
            <!-- Candidate Profile Section -->
            <section class="profile-card">
                <h2>Create Your Candidate Profile Now!</h2>
                <p>Unlock instant notifications and be the first to discover exciting new openings as soon as they're posted. Don't miss out—take the next step in your career with us, the country's best!</p>
                <a href="{{ route('apply') }}" class="btn-red">
                    Sign In as Candidate Only
                </a>
            </section>

            <hr style="border: none; border-top: 1px solid #e0e0e0;">

            <!-- Job Listings -->
            <div>
                <div class="section-title">
                    <h2>Current Open Positions</h2>
                    <p>Browse our latest job opportunities posted by HR</p>
                </div>

                <div class="job-list">
                    <!-- Job 1 -->
                    <div class="job-item">
                        <div class="job-title-row">
                            <h3>Client Service Advisor</h3>
                            <span class="badge-new">New</span>
                        </div>
                        <p class="job-desc">
                            To contribute to our growth and profitability through the provision of customer service quality and sales in respect of all products including understanding customer needs and choices, the communication of product features and its benefits and dealing with customers either process account opening or resolve any account related issues.
                        </p>
                        <div class="job-meta">
                            <span><i class="far fa-calendar-alt"></i> Expires in 1 week</span>
                            <span class="separator">|</span>
                            <span><i class="fas fa-map-marker-alt"></i> Peam Ro District Branch</span>
                        </div>
                    </div>

                    <!-- Job 2 -->
                    <div class="job-item">
                        <div class="job-title-row">
                            <h3>Customer Relations Officer</h3>
                            <span class="badge-new">New</span>
                        </div>
                        <p class="job-desc">
                            To increase the number of new Instant Accounts activations by providing good-quality services and cross-selling products through communities, sharing the reputation of branding, and earning more value by sharing product knowledge directly with customers.
                        </p>
                        <div class="job-meta">
                            <span><i class="far fa-calendar-alt"></i> Expires in 1 week</span>
                            <span class="separator">|</span>
                            <span><i class="fas fa-map-marker-alt"></i> Stoung District Branch</span>
                        </div>
                    </div>

                    <!-- Job 3 -->
                    <div class="job-item">
                        <div class="job-title-row">
                            <h3>Large Business Loan Officer - Level 1</h3>
                            <span class="badge-new">New</span>
                        </div>
                        <p class="job-desc">
                            To acquire and onboard large business loan clients as well as analyze and process their loan application by conducting credit investigations, scoring, credit checking, and other underwriting activities in order to ensure good lending and loan quality.
                        </p>
                        <div class="job-meta">
                            <span><i class="far fa-calendar-alt"></i> Expires in 2 months</span>
                            <span class="separator">|</span>
                            <span><i class="fas fa-map-marker-alt"></i> Samdach Sothearos Branch</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN (Sticky) -->
        <div class="right-col">
            <div class="sticky-card">
                <div>
                    <h4>Create Your</h4>
                    <div class="red-label">Careers Profile</div>
                </div>

                <div class="mock-profile">
                    <div class="mock-profile-inner">
                        <div class="mock-user">
                            <div class="mock-avatar">👤</div>
                            <div class="mock-user-info">
                                <div class="mock-name">Sok Satya</div>
                                <div class="mock-role">IT Specialist</div>
                            </div>
                        </div>
                        <div class="mock-bar w-full"></div>
                        <div class="mock-bar w-5-6"></div>
                    </div>
                </div>

                <p class="sticky-text">
                    Setting up a digital profile lets our internal recruiters locate your credentials faster during targeted talent pool acquisitions.
                </p>

                <a href="{{ route('apply') }}" class="btn-get-started">Get Started</a>
            </div>
        </div>
    </div>

    <!-- ===== FOOTER ===== -->
    <footer>
        <!-- Social Media Bar -->
        <div class="footer-social">
            <p>Follow Us:</p>
            <div class="social-icons">
                <a href="#" class="social-fb" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-tt" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="social-ig" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-li" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-yt" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-tg" aria-label="Telegram"><i class="fab fa-telegram-plane"></i></a>
            </div>
        </div>

        <!-- Legal Footer -->
        <div class="footer-legal">
            <div class="footer-legal-inner">
                <div class="footer-brand">
                    <span class="footer-brand-name">COMPANY<span class="red-dot">'</span> NAME</span>
                    <div class="footer-divider"></div>
                    <div class="footer-group">Company Name<br>Group</div>
                </div>
                <div>
                    <div class="footer-links">
                        <a href="#">Disclaimer</a> <span>|</span>
                        <a href="#">Terms of Use</a> <span>|</span>
                        <a href="#">Cookies</a> <span>|</span>
                        <a href="#">Privacy Policy</a>
                    </div>
                    <p class="footer-info">
                        <strong>SWIFT:</strong> CMPNXXXX | General business licence Nº B 14 dated 25 January 2021<br>
                        123 Main Street, Sangkat Boeung Keng Kang I, Khan Boeung Keng Kang, Phnom Penh, Cambodia
                    </p>
                    <p class="footer-copy">&copy; {{ date('Y') }} Company Name Group. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
