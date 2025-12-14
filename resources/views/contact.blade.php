@extends('layouts.app')

@section('title', 'Contact Us')

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

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: start;
        }

        /* Contact Info */
        .contact-info {
            display: grid;
            gap: 30px;
        }

        .contact-info h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .contact-info p {
            color: #666;
            line-height: 1.6;
            font-size: 1.05rem;
        }

        .info-item {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-left: 4px solid #667eea;
        }

        .info-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.15);
        }

        .info-icon {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .info-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .info-text {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .info-text a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }

        .info-text a:hover {
            text-decoration: underline;
        }

        /* Contact Form */
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .contact-form h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .contact-form p {
            color: #666;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 14px 40px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Map Section */
        .map-section {
            background: #f8f9fa;
            padding: 80px 0;
            margin-top: 80px;
        }

        .map-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #333;
            font-weight: 700;
        }

        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            height: 500px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Business Hours */
        .business-hours {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-top: 40px;
        }

        .business-hours h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .hours-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .hour-item {
            display: flex;
            justify-content: space-between;
            padding-bottom: 12px;
            border-bottom: 1px solid #f0f0f0;
        }

        .hour-day {
            font-weight: 600;
            color: #333;
        }

        .hour-time {
            color: #667eea;
            font-weight: 600;
        }

        /* Social Links */
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
            justify-content: center;
        }

        .social-link {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
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
            .contact-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .map-container {
                height: 300px;
            }

            .hours-list {
                grid-template-columns: 1fr;
            }
        }

        /* Success Message */
        .alert {
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            animation: slideDown 0.3s ease;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border-left: 4px solid #28a745;
        }

        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            border-left: 4px solid #dc3545;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Get In Touch</h1>
            <p>We'd love to hear from you. Send us a message anytime!</p>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <!-- Contact Info -->
                <div class="contact-info">
                    <div>
                        <h2>Let's Talk</h2>
                        <p>Have questions or feedback? Our friendly team is here to help. Reach out to us through any of the channels below.</p>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">📍</div>
                        <div class="info-title">Our Address</div>
                        <div class="info-text">
                            Relevance Headquarters<br>
                            123 Shopping Street<br>
                            Mumbai, Maharashtra 400001<br>
                            India
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">📞</div>
                        <div class="info-title">Phone</div>
                        <div class="info-text">
                            <a href="tel:+919876543210">+91 98765 43210</a><br>
                            <a href="tel:+918765432109">+91 87654 32109</a><br>
                            <small style="color: #999; display: block; margin-top: 8px;">Mon - Sat: 9:00 AM - 7:00 PM IST</small>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">✉️</div>
                        <div class="info-title">Email</div>
                        <div class="info-text">
                            <a href="mailto:info@relevance.com">info@relevance.com</a><br>
                            <a href="mailto:support@relevance.com">support@relevance.com</a><br>
                            <a href="mailto:sales@relevance.com">sales@relevance.com</a>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">⏱️</div>
                        <div class="info-title">Response Time</div>
                        <div class="info-text">
                            We aim to respond to all inquiries within 24 hours. For urgent matters, please call our hotline.
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <p>Fill out the form below and we'll get back to you shortly</p>

                    @if (session('success'))
                        <div class="alert alert-success">
                            ✓ {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Please fix the following errors:</strong>
                            @foreach ($errors->all() as $error)
                                <div>• {{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input 
                                type="text" 
                                class="form-control @error('name') is-invalid @enderror" 
                                id="name" 
                                name="name"
                                placeholder="John Doe"
                                value="{{ old('name') }}"
                                required
                            >
                            @error('name')
                                <small style="color: #dc3545;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email"
                                placeholder="you@example.com"
                                value="{{ old('email') }}"
                                required
                            >
                            @error('email')
                                <small style="color: #dc3545;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input 
                                type="tel" 
                                class="form-control @error('phone') is-invalid @enderror" 
                                id="phone" 
                                name="phone"
                                placeholder="+91 98765 43210"
                                value="{{ old('phone') }}"
                                required
                            >
                            @error('phone')
                                <small style="color: #dc3545;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input 
                                type="text" 
                                class="form-control @error('subject') is-invalid @enderror" 
                                id="subject" 
                                name="subject"
                                placeholder="How can we help?"
                                value="{{ old('subject') }}"
                                required
                            >
                            @error('subject')
                                <small style="color: #dc3545;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea 
                                class="form-control @error('message') is-invalid @enderror" 
                                id="message" 
                                name="message"
                                placeholder="Tell us more about your inquiry..."
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <small style="color: #dc3545;">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn-submit">Send Message</button>
                    </form>

                    <div class="social-links">
                        <a href="#" class="social-link" title="Facebook">f</a>
                        <a href="#" class="social-link" title="Twitter">𝕏</a>
                        <a href="#" class="social-link" title="Instagram">📷</a>
                        <a href="#" class="social-link" title="LinkedIn">in</a>
                    </div>
                </div>
            </div>

            <!-- Business Hours -->
            <div class="business-hours">
                <h3>Business Hours</h3>
                <div class="hours-list">
                    <div class="hour-item">
                        <span class="hour-day">Monday - Friday</span>
                        <span class="hour-time">9:00 AM - 9:00 PM</span>
                    </div>
                    <div class="hour-item">
                        <span class="hour-day">Saturday</span>
                        <span class="hour-time">10:00 AM - 8:00 PM</span>
                    </div>
                    <div class="hour-item">
                        <span class="hour-day">Sunday</span>
                        <span class="hour-time">11:00 AM - 7:00 PM</span>
                    </div>
                    <div class="hour-item">
                        <span class="hour-day">Public Holidays</span>
                        <span class="hour-time">Closed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2>Find Us on the Map</h2>
            <div class="section-divider"></div>

            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.1234567890!2d72.8234567!3d19.0760!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9df51c9c9c9%3A0x9c9c9c9c9c9c9c9c!2sMumbai%2C%20Maharashtra%20400001!5e0!3m2!1sen!2sin!4v1234567890" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection