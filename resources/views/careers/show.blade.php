<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job->title }} - Job Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href={{asset('css/apply.css')}}>
</head>

<body>
    <header>
        <div class="container header-wrapper">
            <div class="logo-placeholder">
                <a href="{{ route('careers.index') }}">
                    <span class="bank-name">ChillVibe HR</span>
                    <span class="bank-sub">Part of National Company Group</span>
                </a>
            </div>
            <nav class="top-nav">
                <a href="{{ route('careers.index') }}" class="back-link"><i class="fas fa-arrow-left"></i> Back to
                    Careers</a>
            </nav>
        </div>
    </header>

    <div class="hero">
        <img src="https://media.istockphoto.com/id/517374252/photo/business-office-building-in-london-england.jpg?s=612x612&w=0&k=20&c=mC7RfqWnNBEkmfbem-cHjd7O10XbiZ0SCfJuIZkmfKg="
            alt="Business Office Building">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>{{ $job->title }}</h1>
            <p>Posted by {{ $job->postedBy ? $job->postedBy->name : 'HR Department' }}</p>
        </div>
    </div>

    <div class="page-wrapper">
        <div class="breadcrumb">
            <a href="{{ route('careers.index') }}">Careers</a>
            <span>&gt;</span>
            <span class="current">{{ $job->title }}</span>
        </div>

        <div class="job-detail-card">
            <div class="job-detail-header">
                <div>
                    <h1>{{ $job->title }}</h1>
                    <div class="job-detail-meta">
                        <span><i class="far fa-calendar-alt"></i> Posted {{ $job->created_at->diffForHumans() }}</span>
                        <span><i class="fas fa-building"></i> {{ $job->postedBy ? $job->postedBy->name : 'HR Department' }}</span>
                    </div>
                </div>
                
            </div>

            <div class="job-description-content">
                {!! $job->description !!}
            </div>

            <div style="margin-top: 24px; border-top: 1px solid #eee; padding-top: 20px;">
                <a href="{{ route('careers.apply', $job->id) }}" class="btn-red">Apply Now</a>
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
    </footer>
</body>

</html>