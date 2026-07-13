<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Job Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f7f9; color: #333; min-height: 100vh; display: flex; flex-direction: column; }

        /* Header */
        header {
            background: #004b6e;
            border-bottom: 1px solid #003b58;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 12px 0;
        }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .header-wrapper { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        .logo-placeholder a { text-decoration: none; display: flex; align-items: center; gap: 12px; }
        .logo-placeholder .bank-name { font-size: 28px; font-weight: 800; color: white; letter-spacing: -0.5px; }
        .logo-placeholder .bank-sub { font-size: 13px; color: #c8dce8; padding-left: 12px; border-left: 2px solid rgba(255,255,255,0.3); font-weight: 400; }
        .top-nav { display: flex; align-items: center; gap: 20px; }
        .top-nav a { text-decoration: none; font-weight: 600; font-size: 14px; }
        .top-nav .back-link { color: #c8dce8; }
        .top-nav .back-link:hover { color: white; }
        .top-nav .btn-nav { background: white; color: #004b6e; padding: 8px 24px; border-radius: 30px; font-size: 14px; transition: all 0.2s; }
        .top-nav .btn-nav:hover { background: #e8f0f5; }

        /* Form Wrapper */
        .auth-wrapper { display: flex; align-items: center; justify-content: center; flex: 1; padding: 40px 20px; }
        .auth-card { background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); padding: 40px; width: 100%; max-width: 420px; }
        .auth-card h1 { font-size: 1.5rem; color: #004261; text-align: center; margin-bottom: 4px; }
        .auth-card .subtitle { color: #888; font-size: 0.85rem; text-align: center; margin-bottom: 28px; }

        /* Alert */
        .alert { padding: 12px 16px; border-radius: 8px; font-size: 0.85rem; margin-bottom: 20px; }
        .alert-error { background: #ffe8e8; color: #c0392b; border: 1px solid #f5c6cb; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }

        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-weight: 600; font-size: 0.85rem; color: #555; margin-bottom: 6px; }
        .form-group input {
            width: 100%; padding: 12px 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 0.9rem;
            transition: border-color 0.2s; background: #fafbfc;
        }
        .form-group input:focus { outline: none; border-color: #148cb0; }

        .remember-me { display: flex; align-items: center; gap: 8px; margin-bottom: 20px; font-size: 0.85rem; color: #666; }
        .remember-me input[type="checkbox"] { width: 16px; height: 16px; accent-color: #004b6e; }

        .btn-submit { background: #d92525; color: white; border: none; padding: 14px 28px; border-radius: 6px;
            font-weight: 700; font-size: 1rem; cursor: pointer; transition: background 0.2s; width: 100%; }
        .btn-submit:hover { background: #b31c1c; }

        .auth-footer-text { text-align: center; margin-top: 20px; font-size: 0.85rem; color: #888; }
        .auth-footer-text a { color: #d92525; font-weight: 600; text-decoration: none; }
        .auth-footer-text a:hover { text-decoration: underline; }

        /* Footer */
        footer { text-align: center; padding: 20px 0; border-top: 1px solid #e5e8ec; margin-top: auto; }
        .footer-wrapper p { font-size: 0.8rem; color: #aaa; }

        @media (max-width: 768px) {
            .header-wrapper { flex-direction: column; align-items: flex-start; gap: 10px; }
            .logo-placeholder .bank-sub { padding-left: 0; border-left: none; display: block; margin-top: 2px; font-size: 12px; }
            .auth-card { padding: 24px; }
        }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="auth-wrapper">
        <div class="auth-card">
            <h1>Welcome Back!</h1>
            <p class="subtitle">Log in to access new opportunities and manage your applications.</p>

            @if($errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('auth.signin') }}">
                @csrf
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="your@email.com" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="remember-me">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit" class="btn-submit"><i class="fas fa-sign-in-alt"></i> Log In</button>
            </form>

            <div class="auth-footer-text">
                Don't have an account? <a href="{{ route('auth.signup') }}">Sign Up</a>
            </div>
        </div>
    </div>

    @include('partials.footer')

</body>
</html>
