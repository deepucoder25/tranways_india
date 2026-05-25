<section class="testimonial-section py-5 bg-white">
    <div class="navbar-container">
        
        <!-- Top Heading Area -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <div class="testimonial-top-icon mb-2">
                    <div class="icon-line"></div>
                    <i class="bi bi-chat-quote"></i>
                    <div class="icon-line"></div>
                </div>
                <div class="service-label justify-content-center">
                    WHAT OUR CUSTOMERS SAY
                </div>
                <h2 class="service-heading">
                    Real Experiences.<span style="color: var(--accent-color, #f7a01c);">Trusted by Many.</span>
                </h2>
                <p class="service-desc mx-auto">
                    We don't just move things, we move trust.<br>Here's what our happy customers have to say about their moving experience with us.
                </p>
            </div>
        </div>
        
        <!-- Testimonial Cards Slider -->
        <div class="testimonial-slider-wrapper position-relative mt-4 pb-5">
            
            <button class="testi-nav-btn prev-btn" onclick="document.getElementById('testiTrack').scrollBy({left: -350, behavior: 'smooth'})">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="testi-nav-btn next-btn" onclick="document.getElementById('testiTrack').scrollBy({left: 350, behavior: 'smooth'})">
                <i class="bi bi-chevron-right"></i>
            </button>

            <div class="testimonial-slider-track" id="testiTrack">
            <!-- Card -->
            <div class="testi-slide">
                <div class="testimonial-card">
                    <div class="testi-shadow-block bg-blue"></div>
                    <div class="card-body">
                        <div class="quote-icon bg-blue">
                            <i class="bi bi-quote"></i>
                        </div>
                        <div class="avatar-wrapper">
                            <img src="<?=base_url('assets/images/testimonials/avatar_1_1779701252959.png')?>" alt="Customer" class="img-fluid rounded-circle">
                        </div>
                        <p class="testi-text">The team was punctual, professional and handled everything with great care. My move was completely hassle-free!</p>
                        <div class="rating-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <div class="testi-ribbon bg-blue">
                        <h5 class="customer-name">Rohit Mehra</h5>
                        <div class="customer-loc"><i class="bi bi-geo-alt-fill"></i> Bangalore to Mumbai</div>
                    </div>
                </div>
            </div>
            
            <!-- Card -->
            <div class="testi-slide">
                <div class="testimonial-card">
                    <div class="testi-shadow-block bg-yellow"></div>
                    <div class="card-body">
                        <div class="quote-icon bg-yellow">
                            <i class="bi bi-quote"></i>
                        </div>
                        <div class="avatar-wrapper">
                            <img src="<?=base_url('assets/images/testimonials/avatar_2_1779701284570.png')?>" alt="Customer" class="img-fluid rounded-circle">
                        </div>
                        <p class="testi-text">Very polite staff and excellent packing quality. All my items reached safely and on time. Highly recommended!</p>
                        <div class="rating-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <div class="testi-ribbon bg-yellow text-dark">
                        <h5 class="customer-name text-dark">Priya Sinha</h5>
                        <div class="customer-loc text-dark"><i class="bi bi-geo-alt-fill"></i> Delhi to Pune</div>
                    </div>
                </div>
            </div>
            
            <!-- Card -->
            <div class="testi-slide">
                <div class="testimonial-card">
                    <div class="testi-shadow-block bg-blue"></div>
                    <div class="card-body">
                        <div class="quote-icon bg-blue">
                            <i class="bi bi-quote"></i>
                        </div>
                        <div class="avatar-wrapper">
                            <img src="<?=base_url('assets/images/testimonials/avatar_3_1779701345077.png')?>" alt="Customer" class="img-fluid rounded-circle">
                        </div>
                        <p class="testi-text">They took care of my car transport and household items perfectly. Everything was delivered in perfect condition.</p>
                        <div class="rating-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <div class="testi-ribbon bg-blue">
                        <h5 class="customer-name">Arvind Kumar</h5>
                        <div class="customer-loc"><i class="bi bi-geo-alt-fill"></i> Chennai to Hyderabad</div>
                    </div>
                </div>
            </div>
            
            
            </div>
        </div>
        <!-- Bottom Banner -->
        <div class="testi-bottom-banner mt-4">
            <div class="row align-items-center justify-content-between g-4 text-center">
                
                <div class="col-12 col-sm-6 col-lg-auto banner-item-col flex-fill">
                    <div class="banner-item">
                        <div class="banner-icon-circle"><i class="bi bi-shield-check"></i></div>
                        <span class="banner-text">Safe<br>Packing</span>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-auto banner-item-col flex-fill">
                    <div class="banner-item">
                        <div class="banner-icon-circle"><i class="bi bi-clock"></i></div>
                        <span class="banner-text">On-Time<br>Delivery</span>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-auto banner-item-col flex-fill">
                    <div class="banner-item">
                        <div class="banner-icon-circle"><i class="bi bi-person-badge"></i></div>
                        <span class="banner-text">Trained<br>Professionals</span>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-auto banner-item-col flex-fill">
                    <div class="banner-item">
                        <div class="banner-icon-circle"><i class="bi bi-hand-thumbs-up"></i></div>
                        <span class="banner-text">100% Customer<br>Satisfaction</span>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</section>
