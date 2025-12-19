<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Relevance</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fas fa-shopping-bag"></i> Relevance
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" 
                           href="{{ route('home') }}">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'active' : '' }}" 
                           href="{{ route('about') }}">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'services' ? 'active' : '' }}" 
                           href="{{ route('services') }}">
                            <i class="fas fa-concierge-bell"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'contact' ? 'active' : '' }}" 
                           href="{{ route('contact') }}">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
                    </li>
                </ul>

                <div class="auth-buttons ms-3">
                    @auth
                        <div class="nav-item dropdown">
                            <a class="user-dropdown dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        <i class="fas fa-user me-2"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('password.change') }}">
                                        <i class="fas fa-lock me-2"></i> Change Password
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" style="display: contents;">
                                        @csrf
                                        <button type="submit" class="dropdown-item logout" style="cursor: pointer; border: none; background: none; width: 100%; text-align: left;">
                                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn-login">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                        <a href="{{ route('register') }}" class="btn-register">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Toaster Container -->
    <div class="toast-container" id="toastContainer"></div>

    <!-- Main Content -->
    <main id="mainContent">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h5>About Relevance</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, ad. Rem ratione earum sequi sunt! Sunt, fugit non. Aliquam, sit, corrupti dolor fugit omnis impedit quam possimus tenetur laudantium, voluptatibus nisi assumenda neque illum!</p>
                </div>
                <div class="footer-section">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><a href="tel:+919876543210"><i class="fas fa-phone"></i> +91 8000696914</a></li>
                        <li><a href="mailto:info@relevance.com"><i class="fas fa-envelope"></i> bokdemehul870@gmail.com</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> Ahemdabad, India</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 Relevance Store. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toaster Notification Function
        function showToast(title, message, type = 'info', duration = 5000) {
            const toastContainer = document.getElementById('toastContainer');
            
            const icons = {
                success: 'fas fa-check-circle',
                error: 'fas fa-times-circle',
                warning: 'fas fa-exclamation-circle',
                info: 'fas fa-info-circle'
            };

            const toastWrapper = document.createElement('div');
            toastWrapper.className = 'toast-wrapper';

            const toastContent = `
                <div class="toast-notification ${type}">
                    <i class="toast-icon ${icons[type]}"></i>
                    <div class="toast-content">
                        <div class="toast-title">${title}</div>
                        <div class="toast-message">${message}</div>
                    </div>
                    <button class="toast-close" type="button">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;

            toastWrapper.innerHTML = toastContent;
            toastContainer.appendChild(toastWrapper);

            const closeBtn = toastWrapper.querySelector('.toast-close');
            closeBtn.addEventListener('click', function() {
                toastWrapper.classList.add('hide');
                setTimeout(() => toastWrapper.remove(), 400);
            });

            setTimeout(() => {
                if (toastWrapper.parentNode) {
                    toastWrapper.classList.add('hide');
                    setTimeout(() => toastWrapper.remove(), 400);
                }
            }, duration);
        }

        // Convert session alerts to toasts
        document.addEventListener('DOMContentLoaded', function() {
            // Check for session alerts in the page
            const htmlContent = document.documentElement.innerHTML;
            
            // Check for success message
            @if (session('success'))
                showToast('Success!', '{{ session('success') }}', 'success');
            @endif

            // Check for error message
            @if (session('error'))
                showToast('Error!', '{{ session('error') }}', 'error');
            @endif

            // Check for warning message
            @if (session('warning'))
                showToast('Warning!', '{{ session('warning') }}', 'warning');
            @endif

            // Check for info message
            @if (session('info'))
                showToast('Info', '{{ session('info') }}', 'info');
            @endif
        });

        // Expose showToast to global scope for use in other pages
        window.showToast = showToast;
    </script>

    @yield('scripts')
</body>
</html>