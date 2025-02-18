<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('assets/img/architectlogo.jpg') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 5px rgba(13, 110, 253, 0.5);
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="login-container">
            <div class="login-title">Login</div>
            
            <!-- Session Status -->
            <x-auth-session-status class="alert alert-info" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="text-danger" />
                </div>
                
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-control" required>
                    <x-input-error :messages="$errors->get('password')" class="text-danger" />
                </div>
                
                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                    <label class="form-check-label" for="remember_me">Remember me</label>
                </div>
                
                <!-- Login Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>

                <!-- Forgot Password & Register -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot your password?</a>
                    @endif
                </div>

                <div class="text-center mt-3">
                    <span>New here? </span>
                    <a href="{{ route('register') }}" class="text-decoration-none text-primary">Register Now</a>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
