<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Relevance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-wrapper">
        <!-- LEFT SIDE - BANNER WITH IMAGE -->
        <div class="login-banner">
            <div class="banner-circle-1"></div>
            <div class="banner-circle-2"></div>

            <div class="banner-content">
                <h2 class="banner-heading">Welcome Back!</h2>

                <ul class="banner-features">
                    <li><i class="fas fa-check"></i> Fast checkout & delivery</li>
                    <li><i class="fas fa-check"></i> Track your orders</li>
                    <li><i class="fas fa-check"></i> Save preferences</li>
                    <li><i class="fas fa-check"></i> Exclusive benefits</li>
                </ul>
            </div>
        </div>

        <!-- RIGHT SIDE - FORM -->
        <div class="login-form-section">
            <div class="login-form-container">
                <div class="form-header">
                    <h1>Sign In</h1>
                    <p>Don't have an account? <a href="{{ route('register') }}">Create one now</a></p>
                </div>

                <form action="{{ route('login.post') }}" method="POST" novalidate id="loginForm">
                    @csrf

                    <!-- Alert Messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle"></i>
                            <div class="alert-content">
                                <strong>Login Failed!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <!-- Email Field -->
                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i>
                            Email Address
                        </label>
                        <div class="input-group">
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                placeholder="Enter your email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                            >
                        </div>
                        @error('email')
                            <span class="invalid-feedback"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="form-group">
                        <label for="password">
                            <i class="fas fa-lock"></i>
                            Password
                        </label>
                        <div class="input-group">
                            <span class="input-icon">
                            </span>
                            <input 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                id="password" 
                                name="password" 
                                placeholder="Enter your password"
                                required
                            >
                            <button class="btn-toggle-password" type="button" id="togglePassword" title="Show password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        @error('password')
                            <span class="invalid-feedback"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            id="remember" 
                            name="remember"
                            value="1"
                        >
                        <label class="form-check-label" for="remember">
                            Keep me signed in
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-login" id="loginBtn">
                        <span class="spinner"></span>
                        <span class="btn-text"><i class="fas fa-sign-in-alt"></i> Sign In</span>
                    </button>

                    <!-- Forgot Password -->
                    <div class="forgot-password-section">
                        <a href="#">
                            <i class="fas fa-question-circle"></i>
                            Forgot your password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>