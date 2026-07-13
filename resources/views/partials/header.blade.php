    <!-- Header -->
    <header>
        <div class="container header-wrapper">
            <div class="logo-placeholder">
                <a href="{{ route('careers') }}">
                    <span class="bank-name">BANK</span>
                    <span class="bank-sub">Part of National Bank Group</span>
                </a>
            </div>
            <nav class="top-nav">
                <a href="{{ route('careers') }}" class="back-link"><i class="fas fa-arrow-left"></i> Back to Careers</a>
                @if(Route::currentRouteName() === 'auth.signin')
                    <a href="{{ route('auth.signup') }}" class="btn-nav"><i class="fas fa-user-plus"></i> Sign Up</a>
                @else
                    <a href="{{ route('auth.signin') }}" class="btn-nav"><i class="fas fa-sign-in-alt"></i> Sign In</a>
                @endif
            </nav>
        </div>
    </header>
