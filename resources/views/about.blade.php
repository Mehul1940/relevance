@extends('layouts.app')

@section('title', 'About Us')

@section('styles')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About Relevance</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam tenetur in velit maxime vel earum iure laborum eius quam facere nobis impedit nostrum, animi error, sunt incidunt non esse aut, accusantium suscipit odio illo.</p>
                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-icon">🚀</div>
                            <div class="feature-text">
                                <h4>Fast Growth</h4>
                                <p>From startup to market leader</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">⭐</div>
                            <div class="feature-text">
                                <h4>Quality Products</h4>
                                <p>Carefully curated selection</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">📦</div>
                            <div class="feature-text">
                                <h4>Fast Delivery</h4>
                                <p>24-48 hour shipping</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">💯</div>
                            <div class="feature-text">
                                <h4>100% Guaranteed</h4>
                                <p>Satisfaction promise</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="{{ asset('images/about/1.jpeg') }}" alt="About Relevance">
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2>Our Core Values</h2>
            <div class="section-divider"></div>
            <p class="values-subtitle">These principles guide everything we do and define who we are as a company</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="value-card">
                        <div class="value-icon">✨</div>
                        <h3>Quality First</h3>
                        <p>We never compromise on quality. Every product meets our strict standards before it reaches you.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="value-card">
                        <div class="value-icon">🤝</div>
                        <h3>Customer Focused</h3>
                        <p>Your satisfaction is our priority. We listen, learn, and constantly improve based on your feedback.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="value-card">
                        <div class="value-icon">⚡</div>
                        <h3>Innovation</h3>
                        <p>We embrace technology to make shopping faster, easier, and more enjoyable for you.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="value-card">
                        <div class="value-icon">🌱</div>
                        <h3>Sustainability</h3>
                        <p>We're committed to responsible shopping practices that benefit our customers and the environment.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="value-card">
                        <div class="value-icon">🔒</div>
                        <h3>Trust & Security</h3>
                        <p>Your data and transactions are protected with the highest standards of security and encryption.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="value-card">
                        <div class="value-icon">📈</div>
                        <h3>Growth</h3>
                        <p>We grow together with our customers, suppliers, and team members. Your success is our success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endsection