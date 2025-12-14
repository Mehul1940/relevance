@extends('layouts.app')

@section('title', 'Change Password')

@section('styles')
    <style>
        .password-container {
            padding: 40px 0;
            background-color: #f8f9fa;
            min-height: 75vh;
        }

        .password-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 500px;
            margin: 0 auto;
        }

        .password-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .password-header h2 {
            color: #333;
            font-weight: 600;
        }

        .password-header p {
            color: #666;
            margin-top: 10px;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .form-group label {
            font-weight: 500;
            color: #333;
            margin-bottom: 8px;
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .alert {
            border-radius: 8px;
            border: none;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
    <div class="password-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong>
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="password-card">
                        <div class="password-header">
                            <h2>Change Password</h2>
                            <p>Update your password to keep your account secure</p>
                        </div>

                        <form action="{{ route('password.update') }}" method="POST" novalidate>
                            @csrf

                            <div class="form-group mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input 
                                    type="password" 
                                    class="form-control @error('current_password') is-invalid @enderror" 
                                    id="current_password" 
                                    name="current_password" 
                                    placeholder="Enter your current password"
                                    required
                                >
                                @error('current_password')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    id="password" 
                                    name="password" 
                                    placeholder="Enter new password (minimum 8 characters)"
                                    required
                                    minlength="8"
                                >
                                <small class="text-muted d-block mt-2">
                                    • At least 8 characters<br>
                                    • Mix of letters and numbers recommended<br>
                                    • Use special characters for better security
                                </small>
                                @error('password')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input 
                                    type="password" 
                                    class="form-control @error('password_confirmation') is-invalid @enderror" 
                                    id="password_confirmation" 
                                    name="password_confirmation" 
                                    placeholder="Confirm new password"
                                    required
                                    minlength="8"
                                >
                                @error('password_confirmation')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-submit w-100 mb-3">
                                Update Password
                            </button>

                            <div class="back-link">
                                <a href="{{ route('profile') }}">← Back to Profile</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection