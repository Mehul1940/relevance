@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <!-- Hero Section with Carousel -->
    <div class="hero-section">
        <!-- Carousel Slides -->
        <div class="carousel-container">
            <div class="carousel-slide active">
                <img src="{{ asset('images/banner/home.jpeg') }}" alt="Shopping Bags Collection">
            </div>
            <div class="carousel-slide">
                <img src="{{ asset('images/banner/home1.jpeg') }}" alt="Sale Promotion">
            </div>
            <div class="carousel-slide">
                <img src="{{ asset('images/banner/home2.jpeg') }}" alt="Store Display">
            </div>
        </div>

        <!-- Overlay -->
        <div class="hero-overlay"></div>

        <!-- Content -->
        <div class="hero-content">
            <h1>Welcome to Relevance</h1>
            <p>Discover Amazing Products at Unbeatable Prices</p>
            <div class="hero-buttons">
                <a href="#products" class="btn-hero btn-shop">Shop Now</a>
                <a href="{{ route('services') }}" class="btn-hero btn-deals">View Deals</a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2>Why Choose Relevance?</h2>
            <div class="section-divider"></div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">⚡</div>
                        <h3>Lightning Fast Delivery</h3>
                        <p>Get your orders delivered within 24-48 hours with our efficient logistics network covering the entire nation.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">🔒</div>
                        <h3>100% Secure Payment</h3>
                        <p>Shop with complete peace of mind using our encrypted payment gateway supporting all major payment methods.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">👥</div>
                        <h3>24/7 Customer Support</h3>
                        <p>Our dedicated support team is always available to help you with any questions or concerns anytime.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Products Section -->
    <section class="products-section" id="products">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="section-divider"></div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/product/1.jpeg') }}" alt="Smart Watch Pro">
                            <div class="product-badge">Sale</div>
                        </div>
                        <div class="product-info">
                            <div class="product-title">Smart Watch Pro</div>
                            <div class="product-description">Advanced fitness tracking with heart rate monitor and sleep tracking</div>
                            <div class="product-price">₹8,499</div>
                            <button class="btn-add-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/product/2.jpeg') }}" alt="Wireless Headphones">
                        </div>
                        <div class="product-info">
                            <div class="product-title">Wireless Headphones</div>
                            <div class="product-description">Noise cancellation with 30-hour battery life and premium sound</div>
                            <div class="product-price">₹3,999</div>
                            <button class="btn-add-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/product/3.jpeg') }}" alt="Gaming Laptop">
                            <div class="product-badge">Hot</div>
                        </div>
                        <div class="product-info">
                            <div class="product-title">Gaming Laptop</div>
                            <div class="product-description">16GB RAM, 512GB SSD, GTX Graphics for ultimate performance</div>
                            <div class="product-price">₹75,999</div>
                            <button class="btn-add-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/product/4.jpeg') }}" alt="Smartphone 5G">
                        </div>
                        <div class="product-info">
                            <div class="product-title">Smartphone 5G</div>
                            <div class="product-description">128GB storage, 6GB RAM, 48MP camera with 5G connectivity</div>
                            <div class="product-price">₹24,999</div>
                            <button class="btn-add-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/product/5.jpeg') }}" alt="Designer Sunglasses">
                        </div>
                        <div class="product-info">
                            <div class="product-title">Designer Sunglasses</div>
                            <div class="product-description">UV protection with polarized lenses and premium frame design</div>
                            <div class="product-price">₹1,499</div>
                            <button class="btn-add-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/product/6.jpeg') }}" alt="Running Shoes">
                            <div class="product-badge">New</div>
                        </div>
                        <div class="product-info">
                            <div class="product-title">Running Shoes</div>
                            <div class="product-description">Lightweight and breathable material with superior comfort</div>
                            <div class="product-price">₹4,299</div>
                            <button class="btn-add-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection