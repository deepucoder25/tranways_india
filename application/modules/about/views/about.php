<?php $this->load->view('template/inner_hero', ['page_title' => 'About Us']); ?>

<!-- Our Legacy & Journey Section -->
<section class="about-legacy-section py-5 position-relative">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <div class="legacy-content-wrapper">
          <span class="section-subtitle-badge">OUR JOURNEY & LEGACY</span>
          <h2 class="legacy-main-title mt-2 mb-4">Decades of Relocation <span class="text-orange">Trust & Excellence</span></h2>
          <p class="lead text-muted mb-4">
            Founded with a vision to redefine the packing and moving industry in India, <span class="text-orange font-weight-bold"><?=$company3?></span> has emerged as one of the nation's most trusted logistics partners. We simplify shifting, turning stressful relocations into seamless transitions.
          </p>
          <p class="text-muted mb-4">
            Since our inception, we have completed thousands of residential, commercial, industrial, and vehicle relocations. Our IBA approval and ISO 9001:2015 certification stand as testament to our commitment to maintaining high quality standards, reliable transit safety, and fair corporate pricing.
          </p>
        </div>
      </div>
      
      <!-- Visual Collage / Side Image Banner -->
      <div class="col-lg-6">
        <div class="about-visual-collage position-relative">
          <div class="collage-main-img-wrapper overflow-hidden rounded-4 shadow-lg border border-3 border-white">
            <img src="<?= base_url('assets/images/choose_us_main.png') ?>" alt="<?=$company3?> Team Packing Shifting" class="img-fluid w-100 collage-main-img" onerror="this.src='https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80'">
          </div>
          
          <!-- Float Badges -->
          <div class="floating-badge-about top-left-badge position-absolute shadow-lg rounded-3 bg-white p-3 d-flex align-items-center gap-2 border-start border-4 border-orange">
            <i class="bi bi-award-fill text-orange font-weight-bold"></i>
            <div class="badge-text-box">
              <h5 class="badge-title mb-0">ISO Certified</h5>
              <span class="badge-subtitle text-muted">9001:2015 Standards</span>
            </div>
          </div>

          <div class="floating-badge-about bottom-right-badge position-absolute shadow-lg rounded-3 bg-white p-3 d-flex align-items-center gap-2 border-start border-4 border-blue">
            <i class="bi bi-star-fill text-blue font-weight-bold"></i>
            <div class="badge-text-box">
              <h5 class="badge-title mb-0">Trusted Shifting</h5>
              <span class="badge-subtitle text-muted">Over 12+ Years Care</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Accreditations & Badges Section -->
<section class="about-accreditations-section py-4 bg-light">
  <div class="container text-center">
    <div class="accreditations-wrapper shadow-sm rounded-4 bg-white p-4">
      <div class="row g-4 justify-content-center align-items-center">
        <div class="col-6 col-md-3">
          <div class="accred-item p-2">
            <i class="bi bi-bank2 accred-icon text-blue mb-2"></i>
            <h4 class="accred-title mb-0">IBA APPROVED</h4>
            <p class="accred-desc text-muted mb-0">Valid Bank Claim Shifting</p>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="accred-item p-2 border-start-md">
            <i class="bi bi-shield-check accred-icon text-orange mb-2"></i>
            <h4 class="accred-title mb-0">ISO 9001:2015</h4>
            <p class="accred-desc text-muted mb-0">Certified Quality Packing</p>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="accred-item p-2 border-start-md">
            <i class="bi bi-file-earmark-lock accred-icon text-blue mb-2"></i>
            <h4 class="accred-title mb-0">GOVT REGISTERED</h4>
            <p class="accred-desc text-muted mb-0">Lic. 100% Tax Compliant</p>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="accred-item p-2 border-start-md">
            <i class="bi bi-safe accred-icon text-orange mb-2"></i>
            <h4 class="accred-title mb-0">TRANSIT COVERED</h4>
            <p class="accred-desc text-muted mb-0">Goods Safety Insurance</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Corporate Core Values -->
<section class="about-values-section py-5">
  <div class="container text-center">
    <span class="section-subtitle-badge">â€” â€¢ OUR CORE VALUES â€¢ â€”</span>
    <h2 class="values-main-title mt-2 mb-5">Pillars of Our <span class="text-orange">Commitment & Care</span></h2>
    
    <div class="row g-4">
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="value-card shadow-sm p-4 rounded-4 bg-white border border-light h-100 transition-smooth">
          <div class="value-icon-circle bg-light-blue text-blue mx-auto mb-3">
            <i class="bi bi-shield-fill-check"></i>
          </div>
          <h3 class="value-card-title mb-2">Safety First</h3>
          <p class="value-card-desc text-muted">
            We handle your valuable goods with utmost care. From top-grade multi-layer bubble wrapping to robust wooden boxes, safe arrival is our top guarantee.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="value-card shadow-sm p-4 rounded-4 bg-white border border-light h-100 transition-smooth">
          <div class="value-icon-circle bg-light-orange text-orange mx-auto mb-3">
            <i class="bi bi-people-fill"></i>
          </div>
          <h3 class="value-card-title mb-2">Client-Centricity</h3>
          <p class="value-card-desc text-muted">
            Relocation is personal. We tailor every shifting coordinate to accommodate your custom schedules, specific deadlines, and specialized packing concerns.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="value-card shadow-sm p-4 rounded-4 bg-white border border-light h-100 transition-smooth">
          <div class="value-icon-circle bg-light-blue text-blue mx-auto mb-3">
            <i class="bi bi-eye-fill"></i>
          </div>
          <h3 class="value-card-title mb-2">Transparency</h3>
          <p class="value-card-desc text-muted">
            No hidden taxes, zero undisclosed costs, and fully itemized estimations. You pay exactly what you are quoted with thorough billing transparency.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="value-card shadow-sm p-4 rounded-4 bg-white border border-light h-100 transition-smooth">
          <div class="value-icon-circle bg-light-orange text-orange mx-auto mb-3">
            <i class="bi bi-award-fill"></i>
          </div>
          <h3 class="value-card-title mb-2">Excellence</h3>
          <p class="value-card-desc text-muted">
            Continuous crew training, digital fleet route optimization, and rigorous safety checks allow us to deliver a top tier, zero hassle shifting process.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Company History Milestones Section -->
<section class="about-milestones-section py-5 bg-light position-relative">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-subtitle-badge">â€” â€¢ MILESTONES & GROWTH â€¢ â€”</span>
      <h2 class="milestones-main-title mt-2 mb-3">Our Corporate <span class="text-orange">Shifting Milestones</span></h2>
      <p class="lead text-muted max-w-600 mx-auto">
        Tracing the journey of Tranways India from a small logistics startup to a premier PAN-India Packers & Movers leader.
      </p>
    </div>
    
    <div class="position-relative milestones-row-wrapper mt-5">
      <!-- Horizontal Progress Line (Visible on Desktop) -->
      <div class="milestones-progress-line d-none d-lg-block"></div>
      
      <div class="row g-4 position-relative z-index-2">
        <!-- Card 1: 2012 -->
        <div class="col-lg-3 col-md-6 col-12">
          <div class="milestone-grid-card shadow-sm p-4 rounded-4 bg-white border border-light h-100 text-center transition-smooth position-relative">
            <div class="milestone-year-badge bg-blue text-white mb-3">2012</div>
            <div class="milestone-icon-wrapper text-blue mb-3">
              <i class="bi bi-flag-fill"></i>
            </div>
            <h3 class="milestone-card-title mb-2">The Foundation</h3>
            <p class="milestone-card-desc text-muted mb-0">
              Started with a small office and single cargo vehicle, serving home shifting needs locally. Established our first local reputation for quality care.
            </p>
          </div>
        </div>
        
        <!-- Card 2: 2016 -->
        <div class="col-lg-3 col-md-6 col-12">
          <div class="milestone-grid-card shadow-sm p-4 rounded-4 bg-white border border-light h-100 text-center transition-smooth position-relative">
            <div class="milestone-year-badge bg-orange text-white mb-3">2016</div>
            <div class="milestone-icon-wrapper text-orange mb-3">
              <i class="bi bi-globe2"></i>
            </div>
            <h3 class="milestone-card-title mb-2">PAN-India Expansion</h3>
            <p class="milestone-card-desc text-muted mb-0">
              Opened branch coordinates across key metro hubs (Delhi, Mumbai, Pune, Bangalore). Earned national IBA approval, validating our commercial shifting safety.
            </p>
          </div>
        </div>
        
        <!-- Card 3: 2021 -->
        <div class="col-lg-3 col-md-6 col-12">
          <div class="milestone-grid-card shadow-sm p-4 rounded-4 bg-white border border-light h-100 text-center transition-smooth position-relative">
            <div class="milestone-year-badge bg-blue text-white mb-3">2021</div>
            <div class="milestone-icon-wrapper text-blue mb-3">
              <i class="bi bi-cpu-fill"></i>
            </div>
            <h3 class="milestone-card-title mb-2">Digital GPS Shifting</h3>
            <p class="milestone-card-desc text-muted mb-0">
              Upgraded to 100% GPS enabled logistics container tracking. Implemented our high-end booking platform and customer support dashboards.
            </p>
          </div>
        </div>
        
        <!-- Card 4: 2026 -->
        <div class="col-lg-3 col-md-6 col-12">
          <div class="milestone-grid-card shadow-sm p-4 rounded-4 bg-white border border-light h-100 text-center transition-smooth position-relative">
            <div class="milestone-year-badge bg-orange text-white mb-3">2026</div>
            <div class="milestone-icon-wrapper text-orange mb-3">
              <i class="bi bi-trophy-fill"></i>
            </div>
            <h3 class="milestone-card-title mb-2">Shifting Leader</h3>
            <p class="milestone-card-desc text-muted mb-0">
              Serving over 150+ operational cities PAN-India. Trusted relocation partner with high-end safety certifications, serving top corporate and private clients.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


