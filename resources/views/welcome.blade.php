<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>RTM Trucking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @vite(['resources/css/app.css'])
</head>
<body>
<header id="main-header" class="web-header">
    <div class="container top-contiainer">
        <div class="d-flex top-header">
            <ul class="list-group list-group-horizontal ms-auto list-unstyled gap-2">
                <li class="head-buttons"><a class="nav-link web-button sp-bordered-button text-uppercase" href="#">DOT #00000 |  MT #0000</a></li>
                <li class="head-buttons"><a class="nav-link web-button blue-button text-uppercase" href="#">CFR Direct <img src="https://i.ibb.co/HL5ct6wW/arrow-button.png"></a></li>
                <li class="head-buttons"><a class="nav-link web-button yellow-button text-uppercase" href="#">Go FreightMate <img src="https://i.ibb.co/HL5ct6wW/arrow-button.png"></a></li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="https://i.ibb.co/35Hy4rdC/web-logo.png" alt="rtm-logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav align-items-end ms-auto gap-4 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#fleet">Fleet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#how-it-works">How It Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>

<div class="main-wrapper">
    <section id="hero" class="hero-section position-relative overflow-hidden">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" id="heroVideo">
            <source src="https://contemporarymediagrp.com/wp-content/uploads/2025/10/hero-video.mp4" type="video/mp4">
        </video>

        <!-- Overlay (optional for readability) -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.4);"></div>

        <!-- Hero Content -->
        <div class="container position-relative z-3 text-start text-white d-flex flex-column justify-content-center" style="min-height: 100vh;">
            <div class="hero-content">
                <h1>Local Delivery. On-Site Storage. Since 2005.</h1>
                <p>Dependable storage containers for small items — with the convenience of local delivery and the protection of temperature control.</p>
                <div class="inline-web-buttons">
                    <a href="#" class="web-button dark-button text-uppercase">Get A Quote</a>
                    <a href="#" class="web-button light-button text-uppercase ms-2">Call Now</a>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="storage-sec section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-head top-border">Storage Containers <span style="color: #088C8A;">+</span> Local Delivery</h2>
                </div>
                <div class="col-md-6">
                    <p>We don't just drop off a box and drive away — we deliver <b>ready-to-use, secure, and temperature-controlled containers</b> designed for small items and short-term storage needs. Whether it's overflow inventory, seasonal supplies, or tools for an upcoming job, we make sure your goods stay protected, organized, and accessible right where you need them.</p>
                </div>
            </div>
            <div class="row storage-row">
                <div class="col-md-3">
                    <div class="storage-box">
                        <div class="storage-box-head d-flex gap-2">
                            <img src="{{ asset('images/icon01.png') }}" alt="storage-box1" height="30px">
                            <h3 class="storage-box-head">On-Site Storage</h3>
                        </div>
                        <p class="storage-box-para">Perfect for retail, offices, events, and construction sites. Each container is clean, lockable, and weather-resistant — so your assets stay safe and dry.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="storage-box">
                        <div class="storage-box-head d-flex gap-2">
                            <img src="{{ asset('images/icon02.png') }}" alt="storage-box2" height="30px">
                            <h3 class="storage-box-head">Temperature Control</h3>
                        </div>
                        <p class="storage-box-para">Heat-sensitive materials? No problem. Our temperature-controlled options maintain a steady environment year-round for delicate items, electronics, and supplies.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="storage-box">
                        <div class="storage-box-head d-flex gap-2">
                            <img src="{{ asset('images/icon03.png') }}" alt="storage-box3" height="30px">
                            <h3 class="storage-box-head">Flexible Rentals</h3>
                        </div>
                        <p class="storage-box-para">Rent for a week, a month, or a season. Scale up or down anytime — we'll handle delivery, placement, and pickup.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="storage-box">
                        <div class="storage-box-head d-flex gap-2">
                            <img src="{{ asset('images/icon04.png') }}" alt="storage-box4" height="30px">
                            <h3 class="storage-box-head">White-Glove Delivery</h3>
                        </div>
                        <p class="storage-box-para">Our experienced team ensures safe, precise placement — even in tight spaces. Fast, careful, and always on schedule.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fleet" class="your-job-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="you-job-image">
                        <img src="{{ asset('images/your-job-img.png') }}" alt="Your Job" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="your-job-text">
                        <h2 class="section-head top-border">The Fleet That Fits Your Job</h2>
                        <p>From compact runs to heavier hauls, our fleet was built for versatility. Each vehicle is maintained to exacting standards — clean, efficient, and equipped to deliver your storage container or trailer safely and on time.</p>
                        <ul class="your-job-list list-unstyled">
                            <li class="d-flex align-items-start gap-2">
                                <span class="green-text">2</span>
                                <div class="list-text">
                                    <h4 class="list-head">Trucks</h4>
                                    <p class="list-para">Medium-duty haulers ideal for quick local runs and flexible scheduling.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-2">
                                <span class="green-text">18</span>
                                <div class="list-text">
                                    <h4 class="list-head">Trailers</h4>
                                    <p class="list-para">Rugged, reliable, and ready for placement at commercial or residential sites.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-2">
                                <span class="green-text">1</span>
                                <div class="list-text">
                                    <h4 class="list-head">Van</h4>
                                    <p class="list-para">Perfect for smaller deliveries and tight urban routes where space is limited.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="how-it-works" class="simple-start-sec text-center section-spacing">
        <div class="container">
            <div class="sec-heading">
                <h2 class="section-head bottom-border">Simple, Start to Finish</h2>
            </div>
            <div class="row start-row">
                <div class="col-md-4">
                    <div class="start-box">
                        <span class="start-box-number">1</span>
                        <h3>Request It</h3>
                        <p>Tell us what you need, where, and for how long.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="start-box">
                        <span class="start-box-number">2</span>
                        <h3>We Deliver</h3>
                        <p>Your storage container arrives clean, secure, and ready to use..</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="start-box">
                        <span class="start-box-number">3</span>
                        <h3>You Relax</h3>
                        <p>When you’re done, we handle the pickup — no hidden fees, no surprises.</p>
                    </div>
                </div>
            </div>
            <a href="#" class="web-button dark-button text-uppercase">Get A Quote</a>
        </div>
    </section>
    <section id="about" class="built-sec section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="built-text">
                        <h2 class="section-head top-border">Built on Customer Demand</h2>
                        <p>We started in 2005 as a small local delivery company — then expanded when our customers began asking for reliable storage solutions. What began as a favor turned into a full-service operation for on-site storage and trailer rentals, now trusted across the region.
                        <br><br>    
                        Our growth has always been customer-driven: honest service, fair pricing, and the kind of dependability that keeps people coming back.</p>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="customer-sec section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="section-head top-border">Customer Feedback</h2>
                </div>
                <div class="col-md-7">
                    <p>“We've used RTM for multiple construction projects. Their team is dependable, and their storage containers are spotless and secure. Highly recommend.”</p>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial Item -->
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="testimonial-head">
                                <img src="https://i.ibb.co/4wvQ650C/quote-icon.png" alt="quote-icon">
                                <h6>Liz Brown
                                    <img src="https://i.ibb.co/3YW94Njt/start-icons.png" alt="star-rating-cion" style="display: block;">
                                </h6>
                            </div>
                            <p>“RTM Trucking has been our go-to for local deliveries for years. They’re always on time, careful with every load, and incredibly easy to work with.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="testimonial-head">
                                <img src="https://i.ibb.co/4wvQ650C/quote-icon.png" alt="quote-icon">
                                <h6>Sarah Mitchell
                                    <img src="https://i.ibb.co/3YW94Njt/start-icons.png" alt="star-rating-cion" style="display: block;">
                                </h6>
                            </div>
                            <p>“We've used RTM for multiple construction projects. Their team is dependable, and their storage containers are spotless and secure. Highly recommend.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="testimonial-head">
                                <img src="https://i.ibb.co/4wvQ650C/quote-icon.png" alt="quote-icon">
                                <h6>Carlos Rivera
                                    <img src="https://i.ibb.co/3YW94Njt/start-icons.png" alt="star-rating-cion" style="display: block;">
                                </h6>
                            </div>
                            <p>“Professional, efficient, and reliable — that's RTM in a nutshell. They make logistics feel effortless.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="testimonial-head">
                                <img src="https://i.ibb.co/4wvQ650C/quote-icon.png" alt="quote-icon">
                                <h6>Bob Graham
                                    <img src="https://i.ibb.co/3YW94Njt/start-icons.png" alt="star-rating-cion" style="display: block;">
                                </h6>
                            </div>
                            <p>“The temperature-controlled containers were a lifesaver for our equipment. RTM handled everything from delivery to pickup without a hitch.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="testimonial-head">
                                <img src="https://i.ibb.co/4wvQ650C/quote-icon.png" alt="quote-icon">
                                <h6>Sarah Mitchell
                                    <img src="https://i.ibb.co/3YW94Njt/start-icons.png" alt="star-rating-cion" style="display: block;">
                                </h6>
                            </div>
                            <p>“We've used RTM for multiple construction projects. Their team is dependable, and their storage containers are spotless and secure. Highly recommend.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="testimonial-head">
                                <img src="https://i.ibb.co/4wvQ650C/quote-icon.png" alt="quote-icon">
                                <h6>Carlos Rivera
                                    <img src="https://i.ibb.co/3YW94Njt/start-icons.png" alt="star-rating-cion" style="display: block;">
                                </h6>
                            </div>
                            <p>“Professional, efficient, and reliable — that's RTM in a nutshell. They make logistics feel effortless.”</p>
                        </div>
                    </div>
                </div>

                <!-- Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section id="gallery-main" class="gallery-sec text-center section-spacing">
        <div class="container">
            <h2 class="section-head bottom-border">See How We Work</h2>
            <div class="row g-3 gallery">
                <div class="col-12 col-sm-6 col-md-6">
                <img src="{{ asset('images/gallery01.png') }}" class="img-fluid" data-bs-target="#lightboxModal" data-bs-slide-to="0" data-bs-toggle="modal">
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                <img src="{{ asset('images/gallery02.png') }}" class="img-fluid" data-bs-target="#lightboxModal" data-bs-slide-to="1" data-bs-toggle="modal">
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                <img src="{{ asset('images/gallery03.png') }}" class="img-fluid" data-bs-target="#lightboxModal" data-bs-slide-to="2" data-bs-toggle="modal">
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                <img src="{{ asset('images/gallery04.png') }}" class="img-fluid" data-bs-target="#lightboxModal" data-bs-slide-to="3" data-bs-toggle="modal">
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                <img src="{{ asset('images/gallery05.png') }}" class="img-fluid" data-bs-target="#lightboxModal" data-bs-slide-to="4" data-bs-toggle="modal">
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                <img src="{{ asset('images/gallery06.png') }}" class="img-fluid" data-bs-target="#lightboxModal" data-bs-slide-to="5" data-bs-toggle="modal">
                </div>
            </div>
            </div>

            <!-- Modal Lightbox -->
            <div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0">
                    <div id="lightboxCarousel" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">

                        <div class="carousel-item active"> 
                        <img src="{{ asset('images/gallery01.png') }}" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('images/gallery02.png') }}" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('images/gallery03.png') }}" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('images/gallery04.png') }}" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('images/gallery05.png') }}" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('images/gallery06.png') }}" class="d-block w-100" alt="">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section id="localcta-main" class="localcta-sec section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="section-head top-border">Serving Our Local Community</h2>
                </div>
                <div class="col-md-7">
                    <p>Proudly delivering throughout our regional network with same-day or next-day availability. We're local, responsive, and always just one call away.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact-sec section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="g-main">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3015.148104055666!2d-74.57226062423018!3d40.91249842531758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c37536c6a06d05%3A0xde11c8bea375dd62!2sCommercial%20Furniture%20Resource!5e0!3m2!1sen!2sin!4v1761579676308!5m2!1sen!2sin" width="48%" height="590" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-data">
                        <h2 class="section-head top-border">Ready When You Are</h2>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="post" id="contactForm" class="contact-form">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Name *" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="company" placeholder="Company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}">
                                    @error('company')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email *" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="phone" placeholder="Phone *" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="delivery_address" placeholder="Delivery Address *" class="form-control @error('delivery_address') is-invalid @enderror" value="{{ old('delivery_address') }}" required>
                                    @error('delivery_address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <select name="container_need" class="form-control @error('container_need') is-invalid @enderror" required>
                                        <option value="" disabled selected>Type of Vehicle *</option>
                                        <option value="Trucks">Trucks</option>
                                        <option value="Trailers">Trailers</option>
                                        <option value="Vans">Vans</option>
                                    </select>
                                    @error('container_need')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <select name="duration" class="form-control @error('duration') is-invalid @enderror" required>
                                        <option value="" disabled selected>Duration *</option>
                                        <option value="Hours">Hours</option>
                                        <option value="Days">Days</option>
                                        <option value="Weeks">Weeks</option>
                                    </select>
                                    @error('duration')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="notes" placeholder="Notes" class="form-control @error('notes') is-invalid @enderror" value="{{ old('notes') }}">
                                    @error('notes')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-submit">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                        <!-- Contact Info Section -->
                        <div class="row mt-4 contact-info">
                            <div class="col-md-4 d-flex align-items-start gap-2">
                                <img src="{{ asset('images/map-icon.png') }}" alt="location-icon">
                                <div>
                                    <h5 class="fw-bold mb-1">Address</h5>
                                    <p class="mb-0">319 Richard Mine Road<br>Wharton, NJ 07885</p>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-start gap-2">
                                <img src="{{ asset('images/contact-icon.png') }}" alt="phone-icon">
                                <div>
                                    <h5 class="fw-bold mb-1">Numbers</h5>
                                    <p class="mb-0">Phone- 973-442-1577<br>Fax- 973-442-1477</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <ul class="inline-social">
                                    <li><a href="#"></a><img src="https://i.ibb.co/vCVG8rQ3/fb-icon.png" alt="Facebook"></li>
                                    <li><a href="#"></a><img src="https://i.ibb.co/MksHp8VQ/youtube-icon.png" alt="YouTube"></li>
                                    <li><a href="#"></a><img src="https://i.ibb.co/RT9M1DZN/insta-icon.png" alt="Instagram"></li>
                                    <li><a href="#"></a><img src="https://i.ibb.co/sJmMynv1/tiktok-icon.png" alt="TikTok"></li>
                                    <li><a href="#"></a><img src="https://i.ibb.co/fYrh5b8G/linkedin-icon.png" alt="LinkedIn"></li>
                                    <li><a href="#"></a><img src="https://i.ibb.co/VcmS9173/twitter-icon.png" alt="Twitter"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<footer id="main-footer" class="web-footer text-center">
    <div class="bottom-footer">
        <p>© 2026 RJM TRUCKING. All rights reserved <br>Site design / development by - <a href="https://contemporarymediagrp.com" target="_blank">Contemporary Media Group, LLC</a></p>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @vite(['resources/js/app.js'])

<script>
document.addEventListener("DOMContentLoaded", () => {
  // ✅ Smooth Scroll
  const headerOffset = 120;
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.querySelector(anchor.getAttribute('href'));
      if (!target) return;

      const elementPosition = target.getBoundingClientRect().top;
      const offsetPosition = elementPosition + window.scrollY - headerOffset;

      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth"
      });
    });
  });

const swiper = new Swiper(".swiper", {
  // Optional parameters
  loop: true,
  centeredSlides: true,
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  breakpoints: {
    // when window width is >= 320px
    768: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    1024: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    // when window width is >= 640px
    1280: {
      slidesPerView: 4,
      spaceBetween: 30
    }
  }
});
});
</script>
</body>
</html>