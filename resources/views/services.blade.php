@extends('layouts.app')

@section('title', 'Services')

@section('styles')
    <style>
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .page-header p {
            font-size: 1.1rem;
            opacity: 0.95;
        }

        /* Services Section */
        .services-section {
            padding: 80px 0;
        }

        .service-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.2);
        }

        .service-icon-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px;
            text-align: center;
            min-height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-icon {
            font-size: 4rem;
            color: white;
        }

        .service-content {
            padding: 30px;
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }

        .service-description {
            color: #666;
            line-height: 1.7;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .service-features {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-features li {
            color: #666;
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
            font-size: 0.9rem;
        }

        .service-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #667eea;
            font-weight: bold;
            font-size: 1.1rem;
        }

        /* How It Works */
        .how-it-works {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .how-it-works h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #333;
            font-weight: 700;
        }

        .step-card {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0 auto 20px;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .step-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }

        .step-description {
            color: #666;
            line-height: 1.6;
        }

        .step-arrow {
            display: none;
            font-size: 2rem;
            color: #667eea;
            position: absolute;
            right: -30px;
            top: 25px;
        }

        @media (min-width: 768px) {
            .step-arrow {
                display: block;
            }

            .step-card:last-child .step-arrow {
                display: none;
            }
        }

        /* Pricing Section */
        .pricing-section {
            padding: 80px 0;
        }

        .pricing-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #333;
            font-weight: 700;
        }

        .pricing-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.2);
            border-color: #667eea;
        }

        .pricing-card.featured {
            border-color: #667eea;
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.3);
        }

        .featured-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 5px 20px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .pricing-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .pricing-description {
            color: #666;
            margin-bottom: 30px;
            font-size: 0.9rem;
        }

        .pricing-amount {
            font-size: 2.5rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 30px;
        }

        .pricing-features {
            list-style: none;
            padding: 0;
            margin-bottom: 30px;
        }

        .pricing-features li {
            color: #666;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            font-size: 0.9rem;
        }

        .pricing-features li::before {
            content: '✓ ';
            color: #667eea;
            font-weight: bold;
        }

        .btn-pricing {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-pricing:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        /* FAQ Section */
        .faq-section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .faq-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #333;
            font-weight: 700;
        }

        .accordion-item {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .accordion-item:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .accordion-button {
            background: white;
            border: none;
            padding: 20px;
            width: 100%;
            text-align: left;
            font-weight: 600;
            color: #333;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .accordion-button:hover {
            background: #f8f9fa;
        }

        .accordion-button.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .accordion-icon {
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }

        .accordion-button.active .accordion-icon {
            transform: rotate(180deg);
        }

        .accordion-content {
            display: none;
            padding: 20px;
            background: #f8f9fa;
            color: #666;
            line-height: 1.7;
        }

        .accordion-content.active {
            display: block;
        }

        /* Section Divider */
        .section-divider {
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #667eea, #764ba2);
            margin: 0 auto 30px;
            border-radius: 2px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2rem;
            }

            .pricing-card.featured {
                transform: scale(1);
            }

            .step-arrow {
                display: none !important;
            }
        }
    </style>
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