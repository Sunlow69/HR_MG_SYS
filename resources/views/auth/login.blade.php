<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HR Management System</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="login-container">
    <div class="login-box">
        <div class="login-logo">
            <h1><i class="fas fa-users-cog"></i> HRMS</h1>
            <p>Human Resource Management System</p>
        </div>

        <form method="GET" action="dashboard.html">
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" value="admin@hrms.com">
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" value="password123">
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
        </form>

        <div class="auth-link">
            <p>Don't have an account? <a href="/signup">Sign Up</a></p>
        </div>
    </div>
</div>
</body>
</html>