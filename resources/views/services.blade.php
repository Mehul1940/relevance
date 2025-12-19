@extends('layouts.app')

@section('title', 'Services')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Our Services</h1>
            <p>Everything you need for an amazing shopping experience</p>
        </div>
    </div>

    <!-- Main Services -->
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="service-card">
                        <div class="service-icon-section">
                            <div class="service-icon">⚡</div>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Fast Delivery</h3>
                            <p class="service-description">Get your orders delivered quickly and reliably right to your doorstep.</p>
                            <ul class="service-features">
                                <li>24-48 hour delivery</li>
                                <li>Express shipping available</li>
                                <li>Real-time tracking</li>
                                <li>Nationwide coverage</li>
                                <li>Free delivery on orders over ₹500</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="service-card">
                        <div class="service-icon-section">
                            <div class="service-icon">🔒</div>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Secure Payment</h3>
                            <p class="service-description">Shop with complete peace of mind using our encrypted payment system.</p>
                            <ul class="service-features">
                                <li>100% secure checkout</li>
                                <li>Credit/Debit cards</li>
                                <li>Net banking</li>
                                <li>Digital wallets</li>
                                <li>Buyer protection guarantee</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="service-card">
                        <div class="service-icon-section">
                            <div class="service-icon">👥</div>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">24/7 Support</h3>
                            <p class="service-description">Our dedicated team is always here to help you with any questions.</p>
                            <ul class="service-features">
                                <li>Live chat support</li>
                                <li>Email assistance</li>
                                <li>Phone support</li>
                                <li>Quick response time</li>
                                <li>Multilingual support</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="service-card">
                        <div class="service-icon-section">
                            <div class="service-icon">↩️</div>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Easy Returns</h3>
                            <p class="service-description">Not satisfied? Return items hassle-free within 30 days.</p>
                            <ul class="service-features">
                                <li>30-day return policy</li>
                                <li>Free return shipping</li>
                                <li>Full refund guarantee</li>
                                <li>No questions asked</li>
                                <li>Quick refund processing</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="service-card">
                        <div class="service-icon-section">
                            <div class="service-icon">⭐</div>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Quality Assurance</h3>
                            <p class="service-description">All products are verified and tested before delivery.</p>
                            <ul class="service-features">
                                <li>Authentic products</li>
                                <li>Quality checks</li>
                                <li>Warranty coverage</li>
                                <li>Verified sellers</li>
                                <li>Certified suppliers</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="service-card">
                        <div class="service-icon-section">
                            <div class="service-icon">🎁</div>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Special Offers</h3>
                            <p class="service-description">Enjoy exclusive deals and rewards as a valued customer.</p>
                            <ul class="service-features">
                                <li>Seasonal discounts</li>
                                <li>Loyalty rewards</li>
                                <li>Early access sales</li>
                                <li>Exclusive deals</li>
                                <li>Birthday specials</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="container">
            <h2>How Relevance Works</h2>
            <div class="section-divider"></div>

            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <div class="step-title">Browse & Choose</div>
                        <div class="step-description">Explore our vast collection of quality products and find what you love</div>
                        <div class="step-arrow">→</div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <div class="step-title">Add to Cart</div>
                        <div class="step-description">Simply add items to your cart and proceed to checkout</div>
                        <div class="step-arrow">→</div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <div class="step-title">Secure Payment</div>
                        <div class="step-description">Pay securely using your preferred payment method</div>
                        <div class="step-arrow">→</div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="step-card">
                        <div class="step-number">4</div>
                        <div class="step-title">Delivery & Enjoy</div>
                        <div class="step-description">Receive your order and enjoy your purchase</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        function toggleAccordion(button) {
            const allButtons = document.querySelectorAll('.accordion-button');
            const allContents = document.querySelectorAll('.accordion-content');
            
            allButtons.forEach(btn => {
                if (btn !== button) {
                    btn.classList.remove('active');
                }
            });
            
            allContents.forEach(content => {
                if (content.previousElementSibling !== button) {
                    content.classList.remove('active');
                }
            });
            
            button.classList.toggle('active');
            button.nextElementSibling.classList.toggle('active');
        }
    </script>
@endsection