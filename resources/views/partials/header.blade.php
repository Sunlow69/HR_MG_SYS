    <!-- Header -->
    <header>
        <div class="container header-wrapper">
            <div class="logo-placeholder">
                <a href="{{ route('careers') }}">
                    <span class="bank-name">Coffee</span>
                    <span class="bank-sub">Best Local Coffee Group</span>
                </a>
            </div>
            <nav class="top-nav">
                @auth
                    <div class="user-welcome">
                        <span class="welcome-text"><i class="fas fa-user-circle"></i> Welcome, <strong>{{ Auth::user()->name }}</strong></span>
                    </div>
                    <form method="POST" action="{{ route('auth.logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn-business" style="background:#6c757d;border:none;cursor:pointer;padding:8px 24px;border-radius:30px;font-weight:600;font-size:14px;color:white;">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('careers') }}" class="back-link"><i class="fas fa-briefcase"></i> Careers</a>
                    <a href="{{ route('auth.signup') }}" class="btn-nav"><i class="fas fa-user-plus"></i> Sign Up</a>
                    <a href="{{ route('auth.signin') }}" class="btn-nav"><i class="fas fa-sign-in-alt"></i> Log In</a>
                @endauth
            </nav>
        </div>
    </header>
