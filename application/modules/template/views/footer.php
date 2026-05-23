  <!-- ==================== FOOTER SECTION ==================== -->
  <footer class="main-footer">
    
   

    <!-- 2. Main Footer Body -->
    <div class="footer-body-wrapper">
      <!-- Slanted Curve Accent Graphics at Top Left -->
      <div class="footer-curve-accent">
        <svg viewBox="0 0 500 80" preserveAspectRatio="none" style="display: block; width: 100%; height: 100%;">
          <path d="M0,40 C150,80 300,10 500,40 L500,0 L0,0 Z" fill="#ffffff" />
          <!-- Blue background curve -->
          <path d="M0,0 C100,50 200,60 300,0 Z" fill="var(--primary-blue)" opacity="0.1" />
          <!-- Accent brand paths matching navigation style -->
          <path d="M0,20 C100,45 200,10 320,0" fill="none" stroke="var(--primary-blue)" stroke-width="6" stroke-linecap="round" />
          <path d="M0,10 C80,35 180,10 280,0" fill="none" stroke="var(--primary-orange)" stroke-width="4" stroke-linecap="round" />
        </svg>
      </div>

      <div class="container footer-main-container">
        <div class="row g-4">
          
          <!-- Column 1: Company Logo & Info -->
          <div class="col-lg-3 col-md-6 col-sm-12 footer-column-logo">
            <div class="footer-logo-area">
              <a href="<?= base_url() ?>" class="footer-logo-link">
                <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?=$company3?>" class="footer-logo-img">
              </a>
            </div>
            <p class="footer-company-desc">
              <span class="text-orange"><?=$company3?></span>is a trusted relocation partner, offering safe, secure and hassle-free moving services across India. Your satisfaction is our commitment.
            </p>
            <div class="footer-social-links">
              <a href="<?=$facebookhtml?>" class="social-circle" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="<?=$instagramhtml?>" class="social-circle" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
              <a href="<?= $twitterhtml?>" class="social-circle" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="<?=$linkedinhtml ?>" class="social-circle" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Column 2: Company Menu Links -->
          <div class="col-lg-2 col-md-6 col-sm-6 footer-column-menu">
            <h4 class="footer-title-header">COMPANY</h4>
            <ul class="footer-links-list">
              <li><a href="<?= site_url() ?>"><i class="bi bi-chevron-right"></i>Home</a></li>
              <li><a href="<?= site_url('about') ?>"><i class="bi bi-chevron-right"></i>About Us</a></li>
              <li><a href="<?= site_url('location') ?>"><i class="bi bi-chevron-right"></i>Location</a></li>
              <li><a href="<?= site_url('gallery') ?>"><i class="bi bi-chevron-right"></i>Gallery</a></li>
              <li><a href="<?= site_url('blog') ?>"><i class="bi bi-chevron-right"></i>Blog</a></li>
              <li><a href="<?= site_url('contacts') ?>"><i class="bi bi-chevron-right"></i>Contact Us</a></li>
            </ul>
          </div>

          <!-- Column 3: Our Services Links -->
          <div class="col-lg-2 col-md-6 col-sm-6 footer-column-menu">
            <h4 class="footer-title-header">OUR SERVICES</h4>
            <ul class="footer-links-list">
              <li><a href="<?= site_url('services/household-shifting') ?>"><i class="bi bi-chevron-right"></i>Household Shifting</a></li>
              <li><a href="<?= site_url('services/office-relocation') ?>"><i class="bi bi-chevron-right"></i>Office Shifting</a></li>
              <li><a href="<?= site_url('services/vehicle-transport') ?>"><i class="bi bi-chevron-right"></i>Vehicle Transportation</a></li>
              <li><a href="<?= site_url('services/packing-unpacking') ?>"><i class="bi bi-chevron-right"></i>Packing &amp; Unpacking</a></li>
              <li><a href="<?= site_url('services/loading-unloading') ?>"><i class="bi bi-chevron-right"></i>Loading &amp; Unloading</a></li>
              <li><a href="<?= site_url('services/storage-solutions') ?>"><i class="bi bi-chevron-right"></i>Warehousing Service</a></li>
            </ul>
          </div>

          <!-- Column 4: Useful Links -->
          <div class="col-lg-2 col-md-6 col-sm-6 footer-column-menu">
            <h4 class="footer-title-header">USEFUL LINKS</h4>
            <ul class="footer-links-list">
              <li><a href="<?= site_url('why-choose-us') ?>"><i class="bi bi-chevron-right"></i>Why Choose Us</a></li>
              <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-chevron-right"></i>FAQs</a></li>
              <li><a href="<?= site_url('moving-tips') ?>"><i class="bi bi-chevron-right"></i>Moving Tips</a></li>
              <li><a href="<?= site_url('terms-conditions') ?>"><i class="bi bi-chevron-right"></i>Terms &amp; Conditions</a></li>
              <li><a href="<?= site_url('privacy-policy') ?>"><i class="bi bi-chevron-right"></i>Privacy Policy</a></li>
            </ul>
          </div>

          <!-- Column 5: Get In Touch Card Section -->
          <div class="col-lg-3 col-md-6 col-sm-12 footer-column-touch">
            <div class="touch-card-container">
              
              <h4 class="touch-card-title">GET IN TOUCH</h4>
              <div class="touch-info-list">
                
                <div class="touch-info-item">
                  <div class="touch-icon-badge">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <a href="<?= $phonehtml ?>" class="touch-link-text"><?= $phone ?></a>
                </div>
                
                <div class="touch-info-item">
                  <div class="touch-icon-badge">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <a href="<?= $mailhtml ?>" class="touch-link-text"><?= $mail ?></a>
                </div>
                
                <div class="touch-info-item align-items-start">
                  <div class="touch-icon-badge mt-1">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <span class="touch-static-text"><?= $address ?></span>
                </div>
                
              </div>
              
            </div>
          </div>

        </div>
      </div>
    </div>
     <!-- 1. Features Highlight Bar -->
    <div class="footer-features-bar">
      <div class="container">
        <div class="features-card-wrapper">
          <div class="row g-4 justify-content-center">
            
            <div class="col-6 col-sm-6 col-md-4 col-lg-2-4 feature-item">
              <div class="feature-icon-circle">
                <i class="bi bi-shield-check"></i>
              </div>
              <div class="feature-text-content">
                <h5 class="feature-title">100% Safe</h5>
                <p class="feature-subtitle">&amp; Secure</p>
              </div>
            </div>
            
            <div class="col-6 col-sm-6 col-md-4 col-lg-2-4 feature-item">
              <div class="feature-icon-circle">
                <i class="bi bi-people-fill"></i>
              </div>
              <div class="feature-text-content">
                <h5 class="feature-title">Professional</h5>
                <p class="feature-subtitle">Team</p>
              </div>
            </div>
            
            <div class="col-6 col-sm-6 col-md-4 col-lg-2-4 feature-item">
              <div class="feature-icon-circle">
                <i class="bi bi-truck"></i>
              </div>
              <div class="feature-text-content">
                <h5 class="feature-title">On-Time</h5>
                <p class="feature-subtitle">Delivery</p>
              </div>
            </div>
            
            <div class="col-6 col-sm-6 col-md-4 col-lg-2-4 feature-item">
              <div class="feature-icon-circle">
                <i class="bi bi-box-seam"></i>
              </div>
              <div class="feature-text-content">
                <h5 class="feature-title">Affordable</h5>
                <p class="feature-subtitle">Pricing</p>
              </div>
            </div>
            
            <div class="col-6 col-sm-6 col-md-4 col-lg-2-4 feature-item">
              <div class="feature-icon-circle">
                <i class="bi bi-headset"></i>
              </div>
              <div class="feature-text-content">
                <h5 class="feature-title">24/7 Customer</h5>
                <p class="feature-subtitle">Support</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- 3. Bottom Bar / Sub-Footer -->
    <div class="footer-bottom-bar">
      <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center position-relative footer-bottom-container">
        
        <!-- Faint world map graphic background overlay -->
        <div class="bottom-map-graphic"></div>
        
        <div class="bottom-copyright-text">
          &copy; <?= date('Y') ?> <span class="text-orange"><?=$company3?></span> <?= $company3 ?>. All Rights Reserved.
        </div>
        
        <div class="bottom-links-menu">
          <a href="<?= site_url('process') ?>">Sitemap</a>
          <span class="bottom-menu-sep">|</span>
          <a href="<?= site_url('terms-conditions') ?>">Terms &amp; Conditions</a>
          <span class="bottom-menu-sep">|</span>
          <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
        </div>

        <!-- Silhouette delivery truck outline graphic -->
        <div class="bottom-truck-graphic"></div>
        
      </div>
    </div>

    <!-- Mobile Fixed Bottom Action Bar -->
    <div class="mobile-bottom-actions d-flex d-lg-none">
      <a href="<?= $phonehtml ?>" class="bottom-action-btn call-btn">
        <i class="bi bi-telephone-fill pulse-anim"></i> Call Now
      </a>
      <button class="bottom-action-btn quote-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
        <i class="bi bi-box-seam bounce-anim"></i> Get a Quote
      </button>
    </div>
  </footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/js/form.js"></script>
</body>

</html>
