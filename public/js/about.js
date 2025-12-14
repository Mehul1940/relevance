/**
 * About Page - JavaScript Functionality
 * Handles animations, interactions, and dynamic features
 */

// ========== PAGE LOAD ANIMATIONS ==========
document.addEventListener('DOMContentLoaded', function() {
    initializeAnimations();
    initializeScrollEffects();
});

// ========== SCROLL ANIMATIONS ==========
function initializeScrollEffects() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all cards
    document.querySelectorAll('.value-card, .feature-item').forEach(element => {
        observer.observe(element);
    });
}

// ========== ANIMATIONS INITIALIZATION ==========
function initializeAnimations() {
    const aboutImage = document.querySelector('.about-image');
    const valueCards = document.querySelectorAll('.value-card');
    const featureItems = document.querySelectorAll('.feature-item');

    if (aboutImage) {
        aboutImage.addEventListener('mousemove', handleImageMouseMove);
        aboutImage.addEventListener('mouseleave', handleImageMouseLeave);
    }
}

// ========== IMAGE HOVER EFFECTS ==========
function handleImageMouseMove(e) {
    const image = this.querySelector('img');
    const rect = this.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateX = (y - centerY) / 10;
    const rotateY = (centerX - x) / 10;

    image.style.transform = `scale(1.03) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
}

function handleImageMouseLeave() {
    const image = this.querySelector('img');
    image.style.transform = 'scale(1) rotateX(0deg) rotateY(0deg)';
}

// ========== CARD INTERACTION ==========
function addCardInteractions() {
    const cards = document.querySelectorAll('.value-card');

    cards.forEach((card, index) => {
        card.addEventListener('mouseenter', function() {
            // Add subtle stagger effect
            this.style.animationDelay = `${index * 0.1}s`;
        });
    });
}

// ========== SMOOTH SCROLL ==========
function enableSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// ========== LAZY LOAD IMAGES ==========
function lazyLoadImages() {
    const images = document.querySelectorAll('img[data-src]');

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
}

// ========== PARALLAX EFFECT ==========
function initializeParallax() {
    const aboutImage = document.querySelector('.about-image');

    if (aboutImage) {
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset;
            const elementOffset = aboutImage.offsetTop;
            const distance = scrollTop - elementOffset;

            if (distance > -window.innerHeight && distance < window.innerHeight) {
                aboutImage.style.transform = `translateY(${distance * 0.5}px)`;
            }
        });
    }
}

// ========== PERFORMANCE MONITORING ==========
function monitorPerformance() {
    if (window.performance && window.performance.timing) {
        const perfData = window.performance.timing;
        const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
        console.log('Page Load Time: ' + pageLoadTime + 'ms');
    }
}

// ========== UTILITY FUNCTIONS ==========
function addClass(element, className) {
    if (element) {
        element.classList.add(className);
    }
}

function removeClass(element, className) {
    if (element) {
        element.classList.remove(className);
    }
}

function hasClass(element, className) {
    if (element) {
        return element.classList.contains(className);
    }
    return false;
}

// ========== EVENT DELEGATION ==========
function setupEventDelegation() {
    document.addEventListener('click', function(e) {
        // Handle card clicks
        if (e.target.closest('.value-card')) {
            const card = e.target.closest('.value-card');
            handleCardClick(card);
        }

        // Handle feature item clicks
        if (e.target.closest('.feature-item')) {
            const item = e.target.closest('.feature-item');
            handleFeatureClick(item);
        }
    });
}

function handleCardClick(card) {
    // Add your card click logic here
    console.log('Card clicked');
}

function handleFeatureClick(item) {
    // Add your feature item click logic here
    console.log('Feature item clicked');
}

// ========== EXPORT FUNCTIONS ==========
window.aboutPage = {
    initializeAnimations: initializeAnimations,
    initializeScrollEffects: initializeScrollEffects,
    enableSmoothScroll: enableSmoothScroll,
    lazyLoadImages: lazyLoadImages,
    initializeParallax: initializeParallax
};  