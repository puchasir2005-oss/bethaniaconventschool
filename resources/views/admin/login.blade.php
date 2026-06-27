<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login – Bethania Convent School</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/school.css">
</head>
<body class="admin-login-body">
    <div class="admin-login-wrapper">
        <div class="admin-login-card">
            <div class="admin-login-logo">
                <img src="/images/school_logo.png" alt="Bethania Convent School">
            </div>
            <h1 class="admin-login-title">Admin Portal</h1>
            <p class="admin-login-subtitle">Bethania Convent School</p>

            @if(session('error'))
                <div class="alert-error" style="margin-bottom: 1.5rem;">
                    <span class="alert-icon">&#9888;</span>
                    {{ session('error') }}
                </div>
            @endif

            <form action="/admin/login" method="POST" class="admin-login-form">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="admin@bethania.com" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-input" placeholder="Enter password" required>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center; margin-top: 0.5rem;">
                    Sign In
                </button>
            </form>

            <a href="/" class="admin-login-back">&larr; Back to Website</a>
        </div>
    </div>
</body>
</html>
