/**
 * Login Form - JavaScript Functionality
 * Handles form submission and interactions
 */

// ========== PASSWORD TOGGLE VISIBILITY ==========
document.addEventListener('DOMContentLoaded', function() {
    const togglePasswordBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    if (togglePasswordBtn && passwordInput) {
        togglePasswordBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                togglePasswordBtn.innerHTML = '<i class="fas fa-eye-slash"></i>';
                togglePasswordBtn.title = 'Hide password';
            } else {
                passwordInput.type = 'password';
                togglePasswordBtn.innerHTML = '<i class="fas fa-eye"></i>';
                togglePasswordBtn.title = 'Show password';
            }
        });
    }
});

// ========== FORM SUBMISSION ==========
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('form');
    const loginBtn = document.querySelector('.btn-login');

    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            // Add loading state to button
            if (loginBtn) {
                loginBtn.classList.add('loading');
                loginBtn.disabled = true;

                // Change button text
                const btnText = loginBtn.querySelector('.btn-text');
                if (btnText) {
                    btnText.textContent = 'Signing in...';
                }
            }
        });
    }
});

// ========== EMAIL FIELD VALIDATION ==========
document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('email');

    if (emailInput) {
        emailInput.addEventListener('blur', function() {
            validateEmail(this.value);
        });

        emailInput.addEventListener('input', function() {
            if (this.classList.contains('is-invalid')) {
                this.classList.remove('is-invalid');
            }
        });
    }
});

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const emailInput = document.getElementById('email');

    if (!emailRegex.test(email) && email !== '') {
        emailInput.classList.add('is-invalid');
        return false;
    }
    return true;
}

// ========== PASSWORD FIELD VALIDATION ==========
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');

    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            if (this.classList.contains('is-invalid')) {
                this.classList.remove('is-invalid');
            }
        });
    }
});

// ========== CLEAR FIELD ERROR ON INPUT ==========
document.addEventListener('DOMContentLoaded', function() {
    const formInputs = document.querySelectorAll('.form-control');

    formInputs.forEach(input => {
        input.addEventListener('input', function() {
            if (this.value.trim() && this.classList.contains('is-invalid')) {
                this.classList.remove('is-invalid');
            }
        });
    });
});

// ========== REMEMBER ME FUNCTIONALITY ==========
document.addEventListener('DOMContentLoaded', function() {
    const rememberCheckbox = document.getElementById('remember');

    if (rememberCheckbox) {
        // Load saved state
        const savedState = localStorage.getItem('loginRememberMe');
        if (savedState === 'true') {
            rememberCheckbox.checked = true;
        }

        // Save state on change
        rememberCheckbox.addEventListener('change', function() {
            localStorage.setItem('loginRememberMe', this.checked);
        });
    }
});

// ========== FORM FOCUS MANAGEMENT ==========
document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('email');

    // Focus on email field on page load
    if (emailInput) {
        emailInput.focus();

        // Move to password on Enter
        emailInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('password').focus();
            }
        });
    }
});

// ========== PREVENT MULTIPLE SUBMISSIONS ==========
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('form');

    if (loginForm) {
        let isSubmitting = false;

        loginForm.addEventListener('submit', function(e) {
            if (isSubmitting) {
                e.preventDefault();
                return;
            }
            isSubmitting = true;
        });
    }
});

// ========== KEYBOARD SHORTCUTS ==========
document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('keydown', function(e) {
        // Ctrl/Cmd + Enter to submit form
        if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') {
            const loginForm = document.querySelector('form');
            if (loginForm) {
                loginForm.submit();
            }
        }
    });
});

// ========== EXPORT FUNCTIONS ==========
window.validateEmail = validateEmail;