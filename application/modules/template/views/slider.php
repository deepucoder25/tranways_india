<!-- Hero Section (Static Single Hero) -->
<section class="hero-slider-section position-relative overflow-hidden" style="background-image: url('<?= base_url('assets/images/home/hero_slider_bg_new.png') ?>');">
  
  <!-- Left Overlay Gradient to ensure high text contrast and premium feel -->
  <div class="position-absolute top-0 start-0 end-0 bottom-0 hero-slider-overlay"></div>
  
  <div class="container-fluid position-relative slider-container-custom">
    <div class="row align-items-center g-4">
      
      <!-- Left Column: Hero Texts & Features -->
      <div class="col-lg-6 col-md-12 text-start">
        
        <!-- Badge Pill -->
        <div class="hero-badge d-inline-flex align-items-center gap-2 mb-3">
          <span class="hero-badge-icon d-flex align-items-center justify-content-center">
            <i class="bi bi-shield-fill-check"></i>
          </span>
          <span class="hero-badge-text">SAFE. SECURE. RELIABLE.</span>
        </div>

        <!-- Main Heading -->
        <h1 class="hero-title text-dark fw-extrabold mt-2 mb-2">
          Moving You Forward,<br>
          <span class="highlight-text">Every Step of the Way</span>
        </h1>

        <!-- Accent Orange Line -->
        <div class="accent-orange-line mb-4"></div>

        <!-- Description -->
        <p class="hero-description text-muted mb-4">
          From careful packing to safe delivery, <strong>Transway India Packers & Movers</strong> provides reliable, stress-free, and damage-free shifting services across India.
        </p>

        <!-- Feature Cards Grid (Desktop View) -->
        <div class="desktop-features-row d-none d-md-flex align-items-stretch gap-3 mb-4">
          
          <!-- Card 1 -->
          <div class="feature-item-card flex-fill bg-white rounded-3 shadow-sm p-3 d-flex flex-column align-items-center text-center">
            <span class="feature-card-icon icon-blue mb-2">
              <i class="bi bi-shield-check"></i>
            </span>
            <span class="feature-card-title">Safe & Secure</span>
          </div>

          <!-- Card 2 -->
          <div class="feature-item-card flex-fill bg-white rounded-3 shadow-sm p-3 d-flex flex-column align-items-center text-center">
            <span class="feature-card-icon icon-orange mb-2">
              <i class="bi bi-people-fill"></i>
            </span>
            <span class="feature-card-title">Professional Team</span>
          </div>

          <!-- Card 3 -->
          <div class="feature-item-card flex-fill bg-white rounded-3 shadow-sm p-3 d-flex flex-column align-items-center text-center">
            <span class="feature-card-icon icon-blue mb-2">
              <i class="bi bi-clock-history"></i>
            </span>
            <span class="feature-card-title">On-Time Delivery</span>
          </div>

          <!-- Card 4 -->
          <div class="feature-item-card flex-fill bg-white rounded-3 shadow-sm p-3 d-flex flex-column align-items-center text-center">
            <span class="feature-card-icon icon-orange mb-2">
              <i class="bi-currency-rupee">₹</i>
            </span>
            <span class="feature-card-title">Affordable Pricing</span>
          </div>

        </div>

        <!-- CTA Buttons -->
        <div class="hero-actions-row d-flex align-items-center gap-4">
          <a href="<?= site_url('about') ?>" class="btn btn-hero-explore d-inline-flex align-items-center gap-2">
            ABOUT US <i class="bi bi-arrow-right"></i>
          </a>
        </div>

      </div>

      <!-- Right Column: Quote Form loaded from contacts/quoteform.php -->
      <div class="col-lg-6 col-md-12">
        <div class="hero-quote-form-card shadow-lg bg-white rounded-4 overflow-hidden border border-light">
          <!-- Premium top ribbon -->
          <div class="py-2 px-4 text-white text-center fw-bold hero-quote-card-header">
            <i class="bi bi-gift-fill me-2 text-warning"></i> GET A FREE NO-OBLIGATION QUOTE
          </div>
          <div class="p-4 bg-white">
            <?php $this->load->view('contacts/quoteform'); ?>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>

<!-- Mobile View Feature Block -->
<div class="mobile-features-block d-block d-md-none bg-white py-3 px-2 border-top border-bottom">
  <div class="container">
    <div class="row g-0 align-items-stretch mobile-features-inner-row">
      
      <!-- Column 1 -->
      <div class="col-3 mobile-feature-col d-flex flex-column align-items-center text-center">
        <span class="feature-card-icon icon-blue mb-1">
          <i class="bi bi-shield-check"></i>
        </span>
        <span class="mobile-feature-label">Safe &<br>Secure</span>
      </div>

      <!-- Column 2 -->
      <div class="col-3 mobile-feature-col d-flex flex-column align-items-center text-center">
        <span class="feature-card-icon icon-orange mb-1">
          <i class="bi bi-people-fill"></i>
        </span>
        <span class="mobile-feature-label">Professional<br>Team</span>
      </div>

      <!-- Column 3 -->
      <div class="col-3 mobile-feature-col d-flex flex-column align-items-center text-center">
        <span class="feature-card-icon icon-blue mb-1">
          <i class="bi bi-clock-history"></i>
        </span>
        <span class="mobile-feature-label">On-Time<br>Delivery</span>
      </div>

      <!-- Column 4 -->
      <div class="col-3 mobile-feature-col d-flex flex-column align-items-center text-center">
        <span class="feature-card-icon icon-orange mb-1">
          <i class="bi-currency-rupee">₹</i>
        </span>
        <span class="mobile-feature-label">Affordable<br>Pricing</span>
      </div>

    </div>
  </div>
</div>
