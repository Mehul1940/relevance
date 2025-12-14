@extends('layouts.app')

@section('title', 'My Profile')

@section('styles')
    <style>
        .profile-container {
            padding: 40px 0;
            background-color: #f8f9fa;
            min-height: 75vh;
        }

        .profile-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            margin: 0 auto 20px;
            border: 3px solid white;
        }

        .profile-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .profile-info-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .profile-info-row:last-child {
            border-bottom: none;
        }

        .profile-label {
            font-weight: 600;
            color: #333;
            width: 150px;
        }

        .profile-value {
            color: #666;
            flex: 1;
        }

        .btn-edit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            padding: 10px 15px;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .profile-section-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #667eea;
        }

        .alert {
            border-radius: 8px;
            border: none;
        }
    </style>
@endsection

@section('content')
    <div class="profile-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
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

                    <!-- Profile Header -->
                    <div class="profile-header">
                        <div class="profile-avatar">
                            {{ substr($user->name, 0, 1) }}
                        </div>
                        <h2>{{ $user->name }}</h2>
                        <p class="mb-0">{{ $user->email }}</p>
                    </div>

                    <!-- Profile Information -->
                    <div class="profile-card">
                        <h3 class="profile-section-title">Profile Information</h3>
                        
                        <div class="profile-info-row">
                            <span class="profile-label">Full Name:</span>
                            <span class="profile-value">{{ $user->name }}</span>
                        </div>

                        <div class="profile-info-row">
                            <span class="profile-label">Email:</span>
                            <span class="profile-value">{{ $user->email }}</span>
                        </div>

                        <div class="profile-info-row">
                            <span class="profile-label">Phone:</span>
                            <span class="profile-value">{{ $user->phone ?? 'Not provided' }}</span>
                        </div>

                        <div class="profile-info-row">
                            <span class="profile-label">Member Since:</span>
                            <span class="profile-value">{{ $user->created_at->format('M d, Y') }}</span>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('profile') }}?edit=true" class="btn btn-edit">
                                Edit Profile
                            </a>
                        </div>
                    </div>

                    <!-- Edit Profile Form -->
                    @if (request('edit') == 'true')
                        <div class="profile-card">
                            <h3 class="profile-section-title">Edit Profile</h3>
                            
                            <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input 
                                        type="text" 
                                        class="form-control @error('name') is-invalid @enderror" 
                                        id="name" 
                                        name="name" 
                                        value="{{ old('name', $user->name) }}"
                                        required
                                    >
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input 
                                        type="email" 
                                        class="form-control @error('email') is-invalid @enderror" 
                                        id="email" 
                                        name="email" 
                                        value="{{ old('email', $user->email) }}"
                                        required
                                    >
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input 
                                        type="tel" 
                                        class="form-control @error('phone') is-invalid @enderror" 
                                        id="phone" 
                                        name="phone" 
                                        value="{{ old('phone', $user->phone) }}"
                                        required
                                    >
                                    @error('phone')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-edit">
                                        Save Changes
                                    </button>
                                    <a href="{{ route('profile') }}" class="btn btn-outline-secondary">
                                        Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    @endif

                    <!-- Change Password -->
                    <div class="profile-card">
                        <h3 class="profile-section-title">Security</h3>
                        
                        <p class="text-muted mb-4">Keep your account secure by using a strong password</p>

                        <form action="{{ route('password.update') }}" method="POST">
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
                                    <span class="invalid-feedback">{{ $message }}</span>
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
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
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
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-edit">
                                Change Password
                            </button>
                        </form>
                    </div>

                    <!-- Logout -->
                    <div class="profile-card bg-light">
                        <h3 class="profile-section-title">Account</h3>
                        <p class="text-muted mb-3">You can logout from all devices</p>
                        
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection