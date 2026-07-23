<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Application Status - Job Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href={{asset('css/status.css')}}>
</head>

<body>
    <header>
        <div class="header-wrapper">
            <div class="logo-placeholder">
                <a href="{{ route('careers.index') }}">
                    <span class="bank-name">ChillVibe HR</span>
                    <span class="bank-sub">Part of National Company Group</span>
                </a>
            </div>
            <nav class="top-nav">
                <a href="{{ route('careers.index') }}" class="back-link"><i class="fas fa-briefcase"></i> Careers</a>
                <a href="{{ route('login') }}" class="btn-nav"><i class="fas fa-sign-in-alt"></i> Log In</a>
            </nav>
        </div>
    </header>

    <div class="page-body">
        <div class="card">
            <h2><i class="fas fa-search"></i> Check Your Application Status</h2>
            <p class="subtitle">Enter the email address you used when applying to see the status of your application(s).</p>

            <form action="{{ route('careers.status') }}" method="GET" class="search-form">
                <input type="email" name="email" placeholder="you@example.com" value="{{ $email }}" required>
                <button type="submit"><i class="fas fa-search"></i> Check Status</button>
            </form>
        </div>

        @if ($searched)
            <div class="card">
                @if ($applications->isEmpty())
                    <div class="empty-state">
                        <i class="fas fa-folder-open" style="font-size: 2rem; margin-bottom: 10px; display:block;"></i>
                        No applications found for <strong>{{ $email }}</strong>.
                    </div>
                @else
                    <p class="subtitle" style="margin-bottom: 14px;">
                        Showing {{ $applications->count() }} application{{ $applications->count() > 1 ? 's' : '' }} for <strong>{{ $email }}</strong>
                    </p>

                    @foreach ($applications as $application)
                        <div class="app-item">
                            <div class="app-title-row">
                                <h3>{{ $application->jobOpening->title ?? 'Job Posting Removed' }}</h3>
                                @if ($application->status === 'pending')
                                    <span class="badge badge-pending"><i class="fas fa-hourglass-half"></i> Pending</span>
                                @elseif ($application->status === 'accepted')
                                    <span class="badge badge-accepted"><i class="fas fa-check"></i> Accepted</span>
                                @else
                                    <span class="badge badge-rejected"><i class="fas fa-times"></i> Rejected</span>
                                @endif
                            </div>
                            <div class="app-meta">
                                <i class="far fa-calendar-alt"></i> Applied {{ $application->created_at->diffForHumans() }}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        @endif
    </div>
</body>

</html>