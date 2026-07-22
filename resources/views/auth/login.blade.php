<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In · Company Name</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href={{asset("css/login.css")}}>
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

    <div class="login-content">
        <!-- Left Side -->
        <div class="brand-section">
            <div class="company-top">
                Company Careers<div class="red-square"></div>
            </div>
            <div class="main-branding">
                <span class="company-logo-text">
                    COMPANY<span class="red">'</span> NAME
                </span>
                <span class="group-affinity">
                    GLOBAL<br>ENTERPRISE GROUP
                </span>
            </div>
            <p class="description-text">
                You're just a few steps away from discovering new job opportunities that match your skills and career
                goals. Sign in now and take the next step in your career!
            </p>
        </div>
        <!-- Right Side Form Card -->
        <div class="form-card">
            <div class="form-header">
                <h2>
                    <i class="fas fa-sign-in-alt" style="color: #004b6e; margin-right: 8px;"></i>
                    Welcome!
                </h2>
                <p>Sign in to access new opportunities and manage your applications.</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}"
                        required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <button type="button" class="password-toggle" onclick="togglePassword()">
                        <i class="fas fa-eye" id="toggleIcon"></i>
                    </button>
                </div>
                <div class="remember-me">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit" class="btn-primary">
                    <i class="fas fa-sign-in-alt"></i> Sign In
                </button>
            </form>

            <div class="form-footer">
                <a href="#" class="forgot-password">Forgot password?</a>
                <div class="or-separator">or</div>
                <a href="{{ route('auth.google.redirect') }}" class="btn-google">
                    <svg width="18" height="18" viewBox="0 0 48 48" style="vertical-align: middle; margin-right: 8px;">
                        <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"/>
                        <path fill="#FF3D00" d="M6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 16.318 4 9.656 8.337 6.306 14.691z"/>
                        <path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238C29.211 35.091 26.715 36 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"/>
                        <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 01-4.087 5.571l.003-.002 6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"/>
                    </svg>
                    Sign in with Google
                </a>
                <p class="register-link">
                    Don't have an account? <a href="#">Contact our IT Support for more</a>
                </p>
                <a href="{{ route('careers.index') }}" class="back-link">
                    <i class="fas fa-arrow-left"></i> Back to Careers
                </a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            var icon = document.getElementById("toggleIcon");
            if (x.type === "password") {
                x.type = "text";
                icon.className = "fas fa-eye-slash";
            } else {
                x.type = "password";
                icon.className = "fas fa-eye";
            }
        }
    </script>
</body>

</html>