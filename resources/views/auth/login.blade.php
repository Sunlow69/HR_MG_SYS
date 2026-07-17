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