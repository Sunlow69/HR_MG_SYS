<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - HR Management System</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="login-container">
    <div class="login-box" style="max-width: 500px;">
        <div class="login-logo">
            <h1><i class="fas fa-users-cog"></i> HRMS</h1>
            <p>Create Your Account</p>
        </div>

        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> Account created successfully! Please wait for admin approval or login.
        </div>

        <form method="GET" action="login.html">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">First Name *</label>
                        <input type="text" name="firstname" class="form-control" value="John" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">Last Name *</label>
                        <input type="text" name="lastname" class="form-control" value="Doe" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Email Address *</label>
                <input type="email" name="email" class="form-control" value="john.doe@example.com" required>
            </div>

            <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="tel" name="phone" class="form-control" value="+1 555-0123">
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">Password *</label>
                        <input type="password" name="password" class="form-control" value="password123" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">Confirm Password *</label>
                        <input type="password" name="confirm_password" class="form-control" value="password123" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                <i class="fas fa-user-plus"></i> Sign Up
            </button>
        </form>

        <div class="auth-link">
            <p>Already have an account? <a href="/login">Login</a></p>
        </div>
    </div>
</div>
</body>
</html>