@extends('layouts.app')

@section('title', 'Contact Us')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium aliquid veniam recusandae excepturi libero illo quod, sapiente aliquam sint vitae maiores ea, iure mollitia. Vel quam voluptas aspernatur molestiae accusantium culpa dolorum, expedita, velit fugit numquam enim exercitationem odio sed iste cumque repellat omnis.   </p>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">📍</div>
                        <div class="info-title">Our Address</div>
                        <div class="info-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque alias in mollitia minima tempore magni debitis porro, officia facilis deleniti explicabo recusandae saepe totam est error ut velit laudantium voluptas quod aliquid dolorem.
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">📞</div>
                        <div class="info-title">Phone</div>
                        <div class="info-text">
                            <a href="tel:+919876543210">+91 8000696914</a><br>
                            <a href="tel:+918765432109">+91 9913164123</a><br>
                            <small style="color: #999; display: block; margin-top: 8px;">Mon - Sat: 9:00 AM - 7:00 PM IST</small>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <p>Fill out the form below and we'll get back to you shortly</p>

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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.1234567890!2d72.6403559805745!3d23.045499086315974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9df51c9c9c9%3A0x9c9c9c9c9c9c9c9c!2sR%20B%20Institute%20Of%20Management%20Studies%20(RBIMS)!5e0!3m2!1sen!2sin!4v1234567890" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection