<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Relevance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
</head>
<body>
    <div class="register-wrapper">
        <!-- LEFT SIDE - IMAGE WITH OVERLAY AND BANNER -->
        <div class="register-image">
            <div class="banner-circle-1"></div>
            <div class="banner-circle-2"></div>
            <div class="image-overlay"></div>

            <div class="register-banner-content">
                <h2 class="banner-heading">Join Our Community!</h2>

                <ul class="banner-features">
                    <li><i class="fas fa-shield-alt"></i> Secure checkout</li>
                    <li><i class="fas fa-truck"></i> Fast delivery</li>
                    <li><i class="fas fa-crown"></i> Amazing discounts</li>
                </ul>
            </div>
        </div>

        <!-- RIGHT SIDE - FORM -->
        <div class="register-form-section">
            <div class="register-form-container">
                <!-- Header -->
                <div class="form-header">
                    <h2>Create Account</h2>
                </div>

                <!-- Form -->
                <form action="{{ route('register.post') }}" method="POST" novalidate id="registerForm">
                    @csrf

                    <!-- Error Alert -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle"></i>
                            <div class="alert-content">
                                <strong>Registration Failed!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <!-- Full Name -->
                    <div class="form-group">
                        <label for="name">
                            <i class="fas fa-user"></i>
                            Full Name
                        </label>
                        <input 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            id="name" 
                            name="name" 
                            placeholder="John Doe"
                            value="{{ old('name') }}"
                            required
                            autofocus
                        >
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email & Phone Row -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">
                                <i class="fas fa-envelope"></i>
                                Email
                            </label>
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                placeholder="your@email.com"
                                value="{{ old('email') }}"
                                required
                            >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">
                                <i class="fas fa-phone"></i>
                                Phone
                            </label>
                            <input 
                                type="tel" 
                                class="form-control @error('phone') is-invalid @enderror" 
                                id="phone" 
                                name="phone" 
                                placeholder="9876543210"
                                value="{{ old('phone') }}"
                                required
                            >
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">
                            <i class="fas fa-lock"></i>
                            Password
                        </label>
                        <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password" 
                            placeholder="••••••••"
                            required
                            minlength="8"
                        >
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="password_confirmation">
                            <i class="fas fa-check-circle"></i>
                            Confirm Password
                        </label>
                        <input 
                            type="password" 
                            class="form-control @error('password_confirmation') is-invalid @enderror" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            placeholder="••••••••"
                            required
                            minlength="8"
                        >
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Terms Checkbox -->
                    <div class="form-check">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            id="agree_terms" 
                            name="agree_terms" 
                            value="1"
                            required
                        >
                        <label class="form-check-label" for="agree_terms">
                            I agree to the <a href="#" target="_blank">Terms and Conditions</a> and <a href="#" target="_blank">Privacy Policy</a>
                        </label>
                    </div>

                    <!-- Create Account Button -->
                    <button type="submit" class="btn-register" id="registerBtn">
                        <span class="spinner"></span>
                        <span class="btn-text"><i class="fas fa-user-check"></i> Create Account</span>
                    </button>

                    <!-- Footer Link -->
                    <div class="register-footer">
                        Already have an account? <a href="{{ route('login') }}">Sign in here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/register.js') }}"></script>
</body>
</html>