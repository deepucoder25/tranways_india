<section class="about-section py-5">
    <div class="navbar-container">
        <div class="row gx-5 align-items-center">
            <!-- Left Column -->
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="about-label">
                    <span class="line"></span> ABOUT US
                </div>
                <h2 class="about-heading">
                    Moving Lives,<br>Delivering <span class="text-orange">Trust.</span>
                </h2>
                
                <div class="about-separator">
                    <i class="bi bi-truck separator-icon"></i>
                    <div class="separator-line"></div>
                    <i class="bi bi-geo-alt separator-icon"></i>
                </div>
                
                <p class="about-text">
                    At <strong><?=isset($company3) ? $company3 : 'MoveRight Packers and Movers'?></strong>, we understand that moving is more than just shifting boxes—it's moving your memories, your life, and your future. That's why we provide safe, reliable and stress-free moving solutions tailored to your needs.
                </p>
                <p class="about-text">
                    With professional packing, secure transportation and timely delivery, we ensure a smooth moving experience from start to finish.
                </p>
                
                <div class="about-contact-box mt-4">
                    <div class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="contact-text-left">
                        <span class="q-text">Have Questions?</span>
                        <span class="h-text">We're here to help!</span>
                    </div>
                    <div class="contact-divider"></div>
                    <div class="contact-text-right">
                        <span class="c-text">Call Us Anytime</span>
                        <span class="p-number"><?=isset($phone) ? $phone : '1800 123 4567'?></span>
                    </div>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="col-lg-7">
                <div class="about-image-wrapper">
                    <img src="<?=base_url('assets/images/about/about_team.png')?>" alt="About Us" class="img-fluid about-main-img" loading="lazy">
                </div>
                
                <!-- Features Row -->
                <div class="row mt-5 feature-row">
                    <div class="col-md-3 col-6 text-center feature-item">
                        <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                        <h5 class="feature-title">Safe & Secure</h5>
                        <p class="feature-text">We use high-quality packing materials to protect your belongings.</p>
                    </div>
                    <div class="col-md-3 col-6 text-center feature-item">
                        <div class="feature-icon"><i class="bi bi-clock"></i></div>
                        <h5 class="feature-title">On-Time Delivery</h5>
                        <p class="feature-text">We value your time and ensure items are delivered on schedule.</p>
                    </div>
                    <div class="col-md-3 col-6 text-center feature-item">
                        <div class="feature-icon"><i class="bi bi-people"></i></div>
                        <h5 class="feature-title">Experienced Team</h5>
                        <p class="feature-text">Our trained professionals handle your belongings with care.</p>
                    </div>
                    <div class="col-md-3 col-6 text-center feature-item">
                        <div class="feature-icon"><i class="bi bi-tag"></i></div>
                        <h5 class="feature-title">Transparent Pricing</h5>
                        <p class="feature-text">No hidden charges. Affordable pricing with upfront estimates.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stats Row -->
        <div class="stats-row mt-5">
            <div class="row align-items-center">
                <div class="col-md-3 col-6 stat-wrap mb-4 mb-md-0">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="bi bi-emoji-smile text-orange"></i></div>
                        <div class="stat-content">
                            <span class="stat-number">10,000+</span>
                            <p class="stat-label">Happy Customers</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-6 stat-wrap mb-4 mb-md-0">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="bi bi-box-seam text-orange"></i></div>
                        <div class="stat-content">
                            <span class="stat-number">15,000+</span>
                            <p class="stat-label">Successful Moves</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-6 stat-wrap">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="bi bi-geo-alt text-orange"></i></div>
                        <div class="stat-content">
                            <span class="stat-number">500+</span>
                            <p class="stat-label">Cities Served</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-6 stat-wrap">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="bi bi-award text-orange"></i></div>
                        <div class="stat-content">
                            <span class="stat-number">8+</span>
                            <p class="stat-label">Years of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
