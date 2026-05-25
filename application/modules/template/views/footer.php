<!-- Footer Area -->
<footer class="main-footer">
    <!-- Top White Section -->
    <div class="footer-top">
        <div class="container footer-container">
            <div class="footer-row">
                <!-- Column 1: Company Info -->
                <div class="footer-col footer-col-info">
                    <a href="#" class="logo footer-logo">
                        <i class="bi bi-truck logo-icon"></i>
                        <h3 class="company-name" id="dynamicCompanyNameFooter"></h3>
                    </a>
                    <h2 class="footer-tagline">
                        We Move with Care,<br>
                        You Settle with <span class="text-accent">Peace</span>.
                    </h2>
                    <p class="footer-desc">
                        Safe packing, secure transportation and<br>on-time delivery &ndash; every time.
                    </p>
                    <div class="footer-contact-box">
                        <div class="contact-icon-wrapper">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contact-details-box">
                            <span class="contact-label">Need Help? Call Us Anytime</span>
                            <span class="contact-number"><?=$phone?></span>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Our Services -->
                <div class="footer-col">
                    <h4 class="footer-heading">OUR SERVICES</h4>
                    <ul class="footer-links">
                        <li><a href="#"><i class="bi bi-house"></i> Household Shifting</a></li>
                        <li><a href="#"><i class="bi bi-building"></i> Office Relocation</a></li>
                        <li><a href="#"><i class="bi bi-car-front"></i> Car Transportation</a></li>
                        <li><a href="#"><i class="bi bi-bicycle"></i> Bike Transportation</a></li>
                        <li><a href="#"><i class="bi bi-box-seam"></i> Packing & Unpacking</a></li>
                        <li><a href="#"><i class="bi bi-shop"></i> Storage Solutions</a></li>
                    </ul>
                </div>

                <!-- Column 3: Company -->
                <div class="footer-col">
                    <h4 class="footer-heading">COMPANY</h4>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Why Choose Us</a></li>
                        <li><a href="#">Our Process</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 5: Get A Free Quote -->
                <div class="footer-col footer-col-quote">
                    <h4 class="footer-heading">GET A FREE QUOTE</h4>
                    <p class="quote-desc">Quick, easy and hassle-free<br>moving experience.</p>
                    <img src="<?=base_url()?>assets/images/moving_boxes_plant.png" alt="Moving Boxes" class="footer-quote-img">
                    <a href="#" class="btn-enquire">
                        <span class="enquire-icon-wrap"><i class="bi bi-arrow-right"></i></span>
                        ENQUIRE NOW
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Middle Wave -->
    <div class="footer-wave-wrapper">
        <svg class="footer-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="var(--topbar-bg)" d="M0,50 C320,100 420,0 720,50 C1020,100 1120,0 1440,50 L1440,100 L0,100 Z"></path>
        </svg>
    </div>

    <!-- Bottom Dark Section -->
    <div class="footer-bottom">
        <!-- City Skyline Background -->
        <div class="skyline-bg"></div>
        <div class="container footer-container relative-z">
            <div class="footer-info-row">
                <!-- Head Office -->
                <div class="info-block">
                    <div class="info-icon"><i class="bi bi-geo-alt"></i></div>
                    <div class="info-text">
                        <span class="info-title">HEAD OFFICE</span>
                        <span class="info-desc"><?=$address?></span>
                    </div>
                </div>
                <!-- Working Hours -->
                <div class="info-block">
                    <div class="info-icon"><i class="bi bi-clock"></i></div>
                    <div class="info-text">
                        <span class="info-title">WORKING HOURS</span>
                        <span class="info-desc">Mon - Sat: 9:00 AM &ndash; 7:00 PM<br>Sunday: Closed</span>
                    </div>
                </div>
                <!-- Email Us -->
                <div class="info-block">
                    <div class="info-icon"><i class="bi bi-envelope"></i></div>
                    <div class="info-text">
                        <span class="info-title">EMAIL US</span>
                        <span class="info-desc"><?=$mail?><br><?=$supportmail?></span>
                    </div>
                </div>
                <!-- Follow Us -->
                <div class="info-block info-block-social">
                    <span class="info-title">FOLLOW US</span>
                    <div class="bottom-social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container footer-container">
                <div class="copyright-row">
                    <div class="copyright-item">
                        <i class="bi bi-shield-check shield-icon text-accent"></i>
                        <span>Your Belongings. <span class="text-accent">Our Responsibility.</span></span>
                    </div>
                    <div class="copyright-text">
                        &copy; <?=date('Y')?> <?=$company3?? "MoveMasters"?>. All rights reserved.
                    </div>
                    <div class="copyright-item">
                        <i class="bi bi-truck text-accent"></i>
                        <span>Safe. Secure. On Time. <span class="text-accent">Every Time.</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    if (document.getElementById('dynamicCompanyNameFooter')) {
        document.getElementById('dynamicCompanyNameFooter').textContent = typeof companyNameVariable !== 'undefined' ? companyNameVariable : 'MoveMasters';
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/js/form.js"></script>
</body>
</html>
