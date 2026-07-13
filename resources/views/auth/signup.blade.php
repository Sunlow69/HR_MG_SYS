<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up · Company Name</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-bg: #10415a;
            --primary-action: #148cb0;
            --text-on-dark: #f0f0f0;
            --text-on-light: #333333;
            --card-bg: #ffffff;
            --border-color: #d8dee2;
            --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: var(--font-family);
            background-color: var(--primary-bg);
            background-image: 
                linear-gradient(135deg, rgba(20, 140, 176, 0.1) 0%, rgba(16, 65, 90, 0.5) 50%),
                linear-gradient(225deg, rgba(20, 140, 176, 0.1) 0%, rgba(16, 65, 90, 0.5) 50%);
            background-blend-mode: overlay;
            color: var(--text-on-dark);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .page-container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }
        .brand-section { width: 45%; padding-right: 40px; }
        .company-top { font-size: 24px; font-weight: bold; display: flex; align-items: center; margin-bottom: 80px; }
        .company-top .red-square { width: 8px; height: 8px; background-color: #ed1c24; margin-left: 3px; display: inline-block; }
        .main-branding { margin-bottom: 20px; }
        .company-logo-text { font-size: 40px; font-weight: 800; letter-spacing: 1px; color: white; }
        .company-logo-text span.red { color: #ed1c24; }
        .group-affinity { font-size: 14px; opacity: 0.8; border-left: 2px solid rgba(255,255,255,0.3); padding-left: 10px; margin-left: 10px; display: inline-block; vertical-align: middle; }
        .description-text { font-size: 16px; line-height: 1.6; opacity: 0.9; max-width: 500px; }

        .form-card { background-color: var(--card-bg); border-radius: 8px; width: 450px; padding: 40px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); color: var(--text-on-light); }
        .form-header h2 { font-size: 22px; margin-bottom: 10px; color: #004b6e; }
        .form-header p { font-size: 14px; color: #666; margin-bottom: 30px; line-height: 1.5; }

        .input-group { margin-bottom: 20px; position: relative; }
        input[type="email"], input[type="password"], input[type="text"], input[type="tel"] {
            width: 100%; padding: 15px; border: 1px solid var(--border-color); border-radius: 4px; font-size: 14px; transition: border-color 0.2s; background: #fafbfc;
        }
        input:focus { outline: none; border-color: var(--primary-action); }

        .password-toggle {
            position: absolute; right: 15px; top: 50%; transform: translateY(-50%);
            background: none; border: none; cursor: pointer; color: #999; font-size: 18px;
        }
        .password-toggle:hover { color: #333; }

        .btn-primary {
            width: 100%; padding: 15px; background-color: var(--primary-action);
            border: none; border-radius: 4px; color: white; font-size: 16px; font-weight: 600;
            cursor: pointer; transition: background-color 0.2s;
        }
        .btn-primary:hover { background-color: #117a99; }

        .form-footer { margin-top: 20px; text-align: center; font-size: 14px; }

        .or-separator { display: flex; align-items: center; text-align: center; margin: 20px 0; color: #888; font-size: 12px; }
        .or-separator::before, .or-separator::after { content: ''; flex: 1; border-bottom: 1px solid var(--border-color); }
        .or-separator:not(:empty)::before { margin-right: .5em; }
        .or-separator:not(:empty)::after { margin-left: .5em; }

        .login-link { margin-top: 25px; color: #666; }
        .login-link a { color: var(--primary-action); text-decoration: none; font-weight: 600; }
        .login-link a:hover { text-decoration: underline; }

        .back-link { display: inline-block; margin-top: 18px; color: #999; text-decoration: none; font-size: 13px; }
        .back-link:hover { color: #004b6e; text-decoration: underline; }
        .back-link i { margin-right: 5px; }

        .demo-badge { display: inline-block; background: #ff9800; color: white; font-size: 10px; font-weight: 700; padding: 2px 10px; border-radius: 30px; letter-spacing: 0.5px; margin-left: 8px; text-transform: uppercase; }

        .password-requirements { font-size: 12px; color: #888; margin-top: 6px; display: flex; align-items: center; gap: 4px; }
        .password-requirements i { color: #004b6e; }

        .alert { padding: 12px 16px; border-radius: 4px; font-size: 0.85rem; margin-bottom: 20px; }
        .alert-error { background: #ffe8e8; color: #c0392b; border: 1px solid #f5c6cb; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }

        @media (max-width: 900px) {
            .page-container { flex-direction: column; justify-content: center; padding-top: 40px; gap: 30px; }
            .brand-section { width: 100%; text-align: center; padding-right: 0; margin-bottom: 20px; display: flex; flex-direction: column; align-items: center; }
            .company-top { margin-bottom: 40px; justify-content: center; }
            .group-affinity { display: block; border: none; margin: 5px 0 0 0; padding: 0; }
            .form-card { width: 100%; max-width: 450px; }
            .description-text { max-width: 100%; text-align: center; }
            .main-branding { text-align: center; }
        }
        @media (max-width: 480px) {
            .form-card { padding: 25px 20px; }
            .company-logo-text { font-size: 30px; }
            .company-top { font-size: 20px; margin-bottom: 25px; }
            .description-text { font-size: 14px; }
            .form-header h2 { font-size: 20px; }
        }
    </style>
</head>
<body>
    <div class="page-container">
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
                Create your account and start your journey with us. Join a team of passionate professionals and discover opportunities that match your skills and career goals.
            </p>
        </div>

        <!-- Right Side Form Card -->
        <div class="form-card">
            <div class="form-header">
                <h2>
                    <i class="fas fa-user-plus" style="color: #004b6e; margin-right: 8px;"></i>
                    Create Account
                </h2>
                <p>Fill in your details to get started with your career journey.</p>
            </div>

            @if($errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i> 
                    @foreach($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('auth.signup') }}">
                @csrf
                <div class="input-group">
                    <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
                </div>
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="Create a strong password" required>
                    <button type="button" class="password-toggle" onclick="togglePassword()">
                        <i class="fas fa-eye" id="toggleIcon"></i>
                    </button>
                    <div class="password-requirements">
                        <i class="fas fa-info-circle"></i> Minimum 6 characters
                    </div>
                </div>
                <div class="input-group">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="btn-primary">
                    <i class="fas fa-user-plus"></i> Create Account
                </button>
            </form>

            <div class="form-footer">
                <div class="or-separator">or</div>
                <p class="login-link">
                    Already have an account? <a href="{{ route('auth.signin') }}">Sign in</a>
                </p>
                <a href="{{ route('careers') }}" class="back-link">
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