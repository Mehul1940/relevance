/**
 * Register Form - JavaScript Functionality
 * Handles password strength checking and form submission
 */

// ========== PASSWORD STRENGTH CHECKER ==========
function checkPasswordStrength(password) {
    const passwordReqs = document.querySelector('.password-requirements');
    const lengthReq = document.getElementById('req-length');
    const uppercaseReq = document.getElementById('req-uppercase');
    const numberReq = document.getElementById('req-number');

    // Show requirements box
    if (password.length > 0) {
        passwordReqs.classList.add('show');
    } else {
        passwordReqs.classList.remove('show');
    }

    // Check length requirement (8+ characters)
    if (password.length >= 8) {
        lengthReq.classList.remove('unmet');
        lengthReq.classList.add('met');
        lengthReq.innerHTML = '<span class="requirement-icon">✓</span><span>At least 8 characters</span>';
    } else {
        lengthReq.classList.add('unmet');
        lengthReq.classList.remove('met');
        lengthReq.innerHTML = '<span class="requirement-icon">✗</span><span>At least 8 characters</span>';
    }

    // Check uppercase requirement
    if (/[A-Z]/.test(password)) {
        uppercaseReq.classList.remove('unmet');
        uppercaseReq.classList.add('met');
        uppercaseReq.innerHTML = '<span class="requirement-icon">✓</span><span>One uppercase letter</span>';
    } else {
        uppercaseReq.classList.add('unmet');
        uppercaseReq.classList.remove('met');
        uppercaseReq.innerHTML = '<span class="requirement-icon">✗</span><span>One uppercase letter</span>';
    }

    // Check number requirement
    if (/[0-9]/.test(password)) {
        numberReq.classList.remove('unmet');
        numberReq.classList.add('met');
        numberReq.innerHTML = '<span class="requirement-icon">✓</span><span>One number</span>';
    } else {
        numberReq.classList.add('unmet');
        numberReq.classList.remove('met');
        numberReq.innerHTML = '<span class="requirement-icon">✗</span><span>One number</span>';
    }
}

// ========== FORM SUBMISSION ==========
document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.getElementById('registerForm');
    const registerBtn = document.getElementById('registerBtn');

    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            // Add loading state to button
            if (registerBtn) {
                registerBtn.classList.add('loading');
                registerBtn.disabled = true;
            }

            // Optional: Validate form before submission
            // You can add additional client-side validation here if needed
        });
    }

    // Initialize password requirements visibility
    const passwordInput = document.getElementById('password');
    if (passwordInput) {
        // Set initial state
        checkPasswordStrength(passwordInput.value);

        // Add event listener for real-time validation
        passwordInput.addEventListener('input', function() {
            checkPasswordStrength(this.value);
        });
    }
});

// ========== PASSWORD MATCH VALIDATION ==========
function validatePasswordMatch() {
    const password = document.getElementById('password').value;
    const passwordConfirm = document.getElementById('password_confirmation').value;

    if (password && passwordConfirm && password !== passwordConfirm) {
        // Optionally show a message or prevent submission
        console.warn('Passwords do not match');
    }
}

// Add event listener for confirm password field
document.addEventListener('DOMContentLoaded', function() {
    const passwordConfirmInput = document.getElementById('password_confirmation');
    if (passwordConfirmInput) {
        passwordConfirmInput.addEventListener('change', validatePasswordMatch);
    }
});

// ========== FORM FIELD VALIDATION ==========
function validateFormFields() {
    const form = document.getElementById('registerForm');
    if (!form) return true;

    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;

    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            field.classList.add('is-invalid');
            isValid = false;
        } else {
            field.classList.remove('is-invalid');
        }
    });

    return isValid;
}

// ========== CLEAR FIELD ERROR ON INPUT ==========
document.addEventListener('DOMContentLoaded', function() {
    const formInputs = document.querySelectorAll('.form-control');

    formInputs.forEach(input => {
        input.addEventListener('input', function() {
            if (this.value.trim()) {
                this.classList.remove('is-invalid');
            }
        });
    });
});

// ========== EXPORT FUNCTIONS FOR INLINE USE ==========
window.checkPasswordStrength = checkPasswordStrength;
window.validateFormFields = validateFormFields;