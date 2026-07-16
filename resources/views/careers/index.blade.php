<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Job Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* ===== RESET ===== */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f7f9;
            color: #333;
            min-height: 100vh;
        }

        /* ===== HEADER ===== */
        header {
            background: #004b6e;
            border-bottom: 1px solid #003b58;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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
            color: white;
            letter-spacing: -0.5px;
        }

        .logo-placeholder .bank-sub {
            font-size: 13px;
            color: #c8dce8;
            padding-left: 12px;
            border-left: 2px solid rgba(255, 255, 255, 0.3);
            font-weight: 400;
        }

        .top-nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .top-nav .back-link {
            text-decoration: none;
            color: #c8dce8;
            font-weight: 600;
            font-size: 14px;
            transition: color 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .top-nav .back-link:hover {
            color: white;
        }

        .top-nav .btn-nav {
            text-decoration: none;
            background: white;
            color: #004b6e;
            padding: 8px 24px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .top-nav .btn-nav:hover {
            background: #e8f0f5;
            transform: translateY(-1px);
        }

        .top-nav .btn-nav:active {
            transform: translateY(0);
        }

        .user-welcome .welcome-text {
            color: white;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .user-welcome .welcome-text i {
            font-size: 18px;
        }

        .user-welcome .welcome-text strong {
            color: #ffd700;
        }

        .logout-form button {
            background: #6c757d;
            border: none;
            cursor: pointer;
        }

        .logout-form button:hover {
            background: #5a6268 !important;
            transform: translateY(-1px);
        }

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
            background: linear-gradient(to right, rgba(0, 66, 97, 0.9) 0%, rgba(0, 66, 97, 0.7) 50%, transparent 100%);
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
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-content p {
            margin-top: 8px;
            font-size: 1.125rem;
            color: #c1e0f0;
            max-width: 600px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        /* ===== MAIN LAYOUT ===== */
        .page-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 20px;
            display: grid;
            grid-template-columns: minmax(0, 1.65fr) minmax(320px, 0.85fr);
            gap: 32px;
            align-items: start;
        }

        /* ===== LEFT COLUMN ===== */
        .left-col {
            display: flex;
            flex-direction: column;
            gap: 32px;
            max-width: 820px;
            margin-left: auto;
        }

        .profile-card {
            border: 1px solid #e0e0e0;
            background: white;
            border-radius: 8px;
            padding: 20px 24px;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
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

        .profile-card .btn-red:hover {
            background: #b31c1c;
        }

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

        .job-list {
            display: flex;
            flex-direction: column;
            gap: 24px;
            margin-top: 8px;
        }

        .job-item {
            border-bottom: 1px dashed #ddd;
            padding-bottom: 24px;
        }

        .job-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

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

        .job-title-row h3:hover {
            color: #005a84;
        }

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

        .job-meta .separator {
            color: #ddd;
            display: none;
        }

        @media (min-width: 640px) {
            .job-meta .separator {
                display: inline;
            }
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
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 16px;
            max-width: 220px;
            margin: 0 auto;
            border: 1px solid rgba(255, 255, 255, 0.15);
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

        .mock-user-info .mock-name {
            font-weight: 700;
            color: #1a1a1a;
            font-size: 0.85rem;
        }

        .mock-user-info .mock-role {
            font-size: 0.7rem;
            color: #999;
        }

        .mock-bar {
            height: 6px;
            background: #f0f0f0;
            border-radius: 3px;
        }

        .mock-bar.w-full {
            width: 100%;
        }

        .mock-bar.w-5-6 {
            width: 83%;
        }

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

        .sticky-card .btn-get-started:hover {
            background: #b31c1c;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .header-wrapper {
                flex-direction: column;
                align-items: flex-start !important;
                gap: 10px !important;
            }

            .logo-placeholder .bank-sub {
                padding-left: 0 !important;
                border-left: none !important;
                display: block;
                margin-top: 2px;
                font-size: 12px !important;
            }

            .top-nav {
                width: 100%;
                justify-content: flex-start;
                gap: 12px !important;
            }

            .top-nav .careers-link {
                font-size: 14px !important;
                padding: 6px 0;
            }

            .top-nav .btn-business {
                padding: 6px 18px !important;
                font-size: 13px !important;
            }

            .hero {
                height: 200px;
            }

            .hero-content h1 {
                font-size: 1.75rem;
            }

            .hero-content p {
                font-size: 0.95rem;
            }

            .page-wrapper {
                grid-template-columns: 1fr;
                padding: 20px 16px;
                gap: 24px;
            }

            .left-col {
                max-width: none;
                margin-left: 0;
            }

            .section-title h2 {
                font-size: 1.5rem;
            }

            .right-col {
                position: static;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 8px 0 !important;
            }

            .container {
                padding: 0 12px;
            }

            .logo-placeholder .bank-name {
                font-size: 22px !important;
            }

            .logo-placeholder .bank-sub {
                font-size: 11px !important;
            }

            .top-nav {
                gap: 10px !important;
            }

            .top-nav .careers-link {
                font-size: 13px !important;
                padding: 4px 0 !important;
            }

            .top-nav .careers-link i {
                font-size: 12px;
            }

            .top-nav .btn-business {
                padding: 5px 14px !important;
                font-size: 12px !important;
            }

            .top-nav .btn-business i {
                font-size: 11px;
            }
        }

        /* ===== FOOTER ===== */
        .w-full {
            width: 100%;
        }

        .mt-16 {
            margin-top: 64px;
        }

        .bg-white {
            background-color: #ffffff;
        }

        .max-w-7xl {
            max-width: 1280px;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .px-6 {
            padding-left: 24px;
            padding-right: 24px;
        }

        .py-6 {
            padding-top: 24px;
            padding-bottom: 24px;
        }

        .py-10 {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .border-t {
            border-top-width: 1px;
            border-top-style: solid;
        }

        .border-gray-100 {
            border-color: #e5e7eb;
        }

        .text-sm {
            font-size: 14px;
        }

        .text-xs {
            font-size: 12px;
        }

        .text-xl {
            font-size: 20px;
        }

        .text-\[9px\] {
            font-size: 9px;
        }

        .text-gray-600 {
            color: #6b7280;
        }

        .text-gray-300 {
            color: #d1d5db;
        }

        .text-white {
            color: #ffffff;
        }

        .text-\[\#e31b23\] {
            color: #e31b23;
        }

        .font-medium {
            font-weight: 500;
        }

        .font-light {
            font-weight: 300;
        }

        .font-normal {
            font-weight: 400;
        }

        .font-semibold {
            font-weight: 600;
        }

        .font-black {
            font-weight: 900;
        }

        .mb-3 {
            margin-bottom: 12px;
        }

        .mb-1 {
            margin-bottom: 4px;
        }

        .flex {
            display: flex;
        }

        .flex-col {
            flex-direction: column;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .items-center {
            align-items: center;
        }

        .items-start {
            align-items: flex-start;
        }

        .justify-between {
            justify-content: space-between;
        }

        .space-x-3>*+* {
            margin-left: 12px;
        }

        .space-y-6>*+* {
            margin-top: 24px;
        }

        .space-y-2>*+* {
            margin-top: 8px;
        }

        .gap-2 {
            gap: 8px;
        }

        .w-10 {
            width: 40px;
        }

        .h-10 {
            height: 40px;
        }

        .h-6 {
            height: 24px;
        }

        .w-\[1px\] {
            width: 1px;
        }

        .w-5 {
            width: 20px;
        }

        .h-5 {
            height: 20px;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .bg-\[\#1877f2\] {
            background-color: #1877f2;
        }

        .bg-black {
            background-color: #000000;
        }

        .bg-\[\#0077b5\] {
            background-color: #0077b5;
        }

        .bg-\[\#ff0000\] {
            background-color: #ff0000;
        }

        .bg-\[\#229ed9\] {
            background-color: #229ed9;
        }

        .bg-\[\#003b54\] {
            background-color: #003b54;
        }

        .bg-gradient-to-tr {
            background-image: linear-gradient(to top right, #f9ce34, #ee2a7b, #6228d7);
        }

        .bg-slate-500 {
            background-color: #64748b;
        }

        .text-gray-400 {
            color: #9ca3af;
        }

        .text-gray-600 {
            color: #6b7280;
        }

        .hover\:text-gray-200:hover {
            color: #e5e7eb;
        }

        .no-underline {
            text-decoration: none;
        }

        .social-icon-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #1877f2;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .social-icon-link:hover {
            opacity: 0.85;
        }

        .social-icon-link svg {
            width: 20px;
            height: 20px;
            display: block;
        }

        .instagram-bg {
            background: linear-gradient(45deg, #f9ce34, #ee2a7b, #6228d7);
        }

        .opacity-90 {
            opacity: 0.9;
        }

        .opacity-80 {
            opacity: 0.8;
        }

        .opacity-60 {
            opacity: 0.6;
        }

        .tracking-wider {
            letter-spacing: 0.05em;
        }

        .tracking-tight {
            letter-spacing: -0.025em;
        }

        .leading-tight {
            line-height: 1.25;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .hover\:underline:hover {
            text-decoration: underline;
        }

        .hover\:opacity-90:hover {
            opacity: 0.9;
        }

        .transition {
            transition-property: all;
            transition-duration: 150ms;
        }

        .max-w-2xl {
            max-width: 672px;
        }

        .mx-2 {
            margin-left: 8px;
            margin-right: 8px;
        }

        @media (min-width: 768px) {
            .md\:flex-row {
                flex-direction: row;
            }

            .md\:items-center {
                align-items: center;
            }

            .md\:text-left {
                text-align: left;
            }

            .md\:space-y-0>*+* {
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container header-wrapper">
            <div class="logo-placeholder">
                <a href="{{ route('careers.index') }}">
                    <span class="bank-name">Company</span>
                    <span class="bank-sub">Part of National Company Group</span>
                </a>
            </div>
            <nav class="top-nav">
                <a href="{{ route('careers.index') }}" class="back-link"><i class="fas fa-briefcase"></i> Careers</a>
                <a href="{{ route('login') }}" class="btn-nav"><i class="fas fa-sign-in-alt"></i> Log In</a>
            </nav>
        </div>
    </header>
    <div class="hero">
        <img src="https://media.istockphoto.com/id/517374252/photo/business-office-building-in-london-england.jpg?s=612x612&w=0&k=20&c=mC7RfqWnNBEkmfbem-cHjd7O10XbiZ0SCfJuIZkmfKg="
            alt="Business Office Building">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Join Our Corporate Team</h1>
            <p>Discover a workspace built around innovation, growth, and sustainable financial developments.</p>
        </div>
    </div>

    <div class="page-wrapper">
        <div class="left-col">

            @if (session('success'))
                <div
                    style="background: #d4edda; color: #155724; padding: 12px 16px; border-radius: 6px; margin-bottom: 8px; font-size: 0.9rem; border: 1px solid #c3e6cb;">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            <section class="profile-card">
                <h2>Create Your Candidate Profile Now!</h2>
                <p>Unlock instant notifications and be the first to discover exciting new openings as soon as they're
                    posted. Don't miss out—take the next step in your career with us, the country's best!</p>
                <a href="{{ route('careers.apply', $jobOpenings->first()->id) }}" class="btn-red">Apply now</a>
            </section>

            <hr style="border: none; border-top: 1px solid #e0e0e0;">

            <div class="profile-card" style="text-align: left; padding: 24px 28px;">
                <div class="section-title" style="text-align: center;">
                    <h2>Current Open Positions</h2>
                    <p>Browse our latest job opportunities posted by HR</p>
                    <a href="{{ route('careers.status') }}" class="btn-outline-status">
                        <i class="fas fa-search"></i> Check Application Status
                    </a>
                </div>

                <div class="job-list">

                    @forelse ($jobOpenings as $job)
                        <div class="job-item">
                            <div class="job-title-row">
                                <h3 onclick="window.location='{{ route('careers.apply', $job->id) }}'">{{ $job->title }}
                                </h3>
                                <span class="badge-new">New</span>
                            </div>
                            <p class="job-desc">
                                {{ Str::limit($job->description, 300) }}
                            </p>
                            <div class="job-meta">
                                <span><i class="far fa-calendar-alt"></i> Posted
                                    {{ $job->created_at->diffForHumans() }}</span>
                                <span class="separator">|</span>
                                <span><i class="fas fa-building"></i>
                                    {{ $job->postedBy ? $job->postedBy->name : 'HR Department' }}</span>
                            </div>
                        </div>
                    @empty
                        <div class="job-item" style="text-align: center; padding: 40px 0; border-bottom: none;">
                            <p style="font-size: 1rem; color: #999;"><i class="fas fa-inbox"></i> No open positions right
                                now. Check back later!</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>

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
                    Setting up a digital profile lets our internal recruiters locate your credentials faster during
                    targeted talent pool acquisitions.
                </p>
                <a href="{{ route('login') }}" class="btn-get-started">Get Started</a>
            </div>
        </div>
    </div>

    <footer class="w-full mt-16 bg-white">
        <div class="max-w-7xl mx-auto px-6 py-6 border-t border-gray-100">
            <p class="text-sm font-medium text-gray-600 mb-3">Follow Us:</p>
            <div class="flex items-center space-x-3">
                <a href="#" class="social-icon-link" aria-label="Follow us on Facebook">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                </a>
                <a href="#" class="social-icon-link bg-black" aria-label="Follow us on TikTok">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.11-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                    </svg>
                </a>
                <a href="#" class="social-icon-link instagram-bg" aria-label="Follow us on Instagram">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                    </svg>
                </a>
                <a href="#" class="social-icon-link bg-[#0077b5]" aria-label="Follow us on LinkedIn">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>
                <a href="#" class="social-icon-link bg-[#ff0000]" aria-label="Subscribe on YouTube">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>
                <a href="#" class="social-icon-link bg-[#229ed9]" aria-label="Join us on Telegram">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M11.944 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0a12 12 0 00-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 01.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- Deep Blue Dynamic Legal Info Footer Block -->
        <div class="bg-[#003b54] text-gray-300 py-10 px-6 text-xs font-light">
            <div
                class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start md:items-center space-y-6 md:space-y-0">
                <!-- Left Branding Side -->
                <div class="flex items-center space-x-3">
                    <span class="text-xl font-black text-white tracking-wider">COMPANY<span
                            class="text-[#e31b23]"></span> NAME</span>
                    <div class="h-6 w-[1px] bg-slate-500 mx-2"></div>
                    <div class="text-[9px] uppercase leading-tight tracking-tight opacity-80">
                        Company Name <br> Group
                    </div>
                </div>
                <!-- Right Legal Credentials Side -->
                <div class="space-y-2 text-left md:text-left max-w-2xl">
                    <div class="flex flex-wrap items-center gap-2 font-normal text-gray-400 text-sm mb-1">
                        <a href="#"
                            class="text-gray-400 hover:text-gray-200 no-underline hover:underline">Disclaimer</a>
                        <span class="text-gray-600">|</span>
                        <a href="#" class="text-gray-400 hover:text-gray-200 no-underline hover:underline">Terms of
                            Use</a>
                        <span class="text-gray-600">|</span>
                        <a href="#" class="text-gray-400 hover:text-gray-200 no-underline hover:underline">Cookies</a>
                        <span class="text-gray-600">|</span>
                        <a href="#" class="text-gray-400 hover:text-gray-200 no-underline hover:underline">Privacy
                            Policy</a>
                    </div>
                    <p><span class="font-semibold text-white">SWIFT:</span> CMPNXXXX | General business licence NÂº B 14
                        dated 25 January 2021</p>
                    <p>123 Main Street, Sangkat Boeung Keng Kang I, Khan Boeung Keng Kang, Phnom Penh, Cambodia</p>
                    <p class="opacity-60">&copy; {{ date('Y') }} Company Name Group. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>