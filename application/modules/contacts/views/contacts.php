<?php $this->load->view('template/inner_hero', ['page_title' => 'Contact Us']); ?>
<nav class="breadcrumb-nav" data-animate="left" data-delay="1">
    <div class="container">
        <ol class="breadcrumb-custom mb-0">
            <li class="breadcrumb-item">
                <a href="<?=site_url()?>">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Contact Us
            </li>
        </ol>
    </div>
</nav>

<!-- Redesigned Content Starts Here -->
<section class="hs-main-section pb-5 bg-light position-relative" style="margin-top: -60px; z-index: 10;">
  
  <div class="container position-relative">
    
    <!-- 3 Info Cards Row -->
    <div class="row g-4 mb-5">
      <!-- Address Card -->
      <div class="col-lg-4 col-md-6">
        <div class="hs-card-premium bg-white rounded-4 shadow p-4 text-center h-100 border-0" style="transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div class="hs-icon-box bg-orange text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 60px; height: 60px;">
            <i class="bi bi-geo-alt-fill fs-3"></i>
          </div>
          <h5 class="fw-bold mb-2 text-dark">Office Location</h5>
          <address class="text-muted mb-0 small lh-base"><?=$address?></address>
        </div>
      </div>
      
      <!-- Phone Card -->
      <div class="col-lg-4 col-md-6">
        <div class="hs-card-premium bg-white rounded-4 shadow p-4 text-center h-100 border-0" style="transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div class="hs-icon-box bg-primary-blue text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm position-relative" style="width: 60px; height: 60px;">
            <i class="bi bi-telephone-fill fs-3 hs-animated-ring"></i>
          </div>
          <h5 class="fw-bold mb-2 text-dark">Call Us 24/7</h5>
          <p class="mb-1"><a href="<?=$phonehtml?>" class="text-muted text-decoration-none fw-bold fs-6"><?=$phone?></a></p>
          <p class="mb-0"><a href="<?=$phonehtml1?>" class="text-muted text-decoration-none fw-bold fs-6"><?=$phone1?></a></p>
        </div>
      </div>
      
      <!-- Email Card -->
      <div class="col-lg-4 col-md-6">
        <div class="hs-card-premium bg-white rounded-4 shadow p-4 text-center h-100 border-0" style="transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div class="hs-icon-box bg-orange text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 60px; height: 60px;">
            <i class="bi bi-envelope-fill fs-3"></i>
          </div>
          <h5 class="fw-bold mb-2 text-dark">Email Support</h5>
          <p class="text-muted small mb-2">Drop us a line anytime!</p>
          <a href="<?=$mailhtml?>" class="text-primary-blue text-decoration-none fw-bold fs-6"><?=$mail?></a>
        </div>
      </div>
    </div>
    
    <!-- Form and Map Row -->
    <div class="row g-5 align-items-stretch">
      <!-- Form Column -->
      <div class="col-lg-7">
        <div class="hs-card-premium bg-white rounded-4 shadow-sm p-4 p-md-5 h-100 border-top border-4 border-primary-blue">
          <div class="d-flex align-items-center mb-4">
            <i class="bi bi-chat-dots-fill text-orange fs-2 me-3"></i>
            <h3 class="fw-bold text-dark mb-0">Drop Us A <span class="text-primary-blue">Message</span></h3>
          </div>
          <p class="text-muted mb-4 pb-3 border-bottom">Fill out the form below to receive a free moving estimate or to ask any questions. Our team will get back to you within 30 minutes!</p>
          
          <form id="getintouchform" class="ajax-form" data-url="<?php echo site_url('contacts/contact'); ?>" data-result="resulttouch" onsubmit="return false;" class="row g-4">
            <div class="col-md-6 form_box">
              <label class="form-label fw-bold text-dark small text-uppercase">Full Name <span class="text-danger">*</span></label>
              <div class="input-group input-group-lg">
                <span class="input-group-text bg-light border-0 text-muted"><i class="bi bi-person"></i></span>
                <input type="text" name="name" placeholder="Full Name" class="form-control bg-light border-0 shadow-none px-3">
              </div>
            </div>
            <div class="col-md-6 form_box">
              <label class="form-label fw-bold text-dark small text-uppercase">Email Address <span class="text-danger">*</span></label>
              <div class="input-group input-group-lg">
                <span class="input-group-text bg-light border-0 text-muted"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" placeholder="Email Address" class="form-control bg-light border-0 shadow-none px-3">
              </div>
            </div>
            <div class="col-md-12 form_box">
              <label class="form-label fw-bold text-dark small text-uppercase">Phone Number <span class="text-danger">*</span></label>
              <div class="input-group input-group-lg">
                <span class="input-group-text bg-light border-0 text-muted"><i class="bi bi-telephone"></i></span>
                <input type="tel" name="phone" placeholder="Phone Number" class="form-control bg-light border-0 shadow-none px-3">
              </div>
            </div>
            <div class="col-12 form_box">
              <label class="form-label fw-bold text-dark small text-uppercase">Your Message <span class="text-danger">*</span></label>
              <div class="input-group input-group-lg">
                <span class="input-group-text bg-light border-0 text-muted align-items-start pt-3"><i class="bi bi-pencil-square"></i></span>
                <textarea class="form-control bg-light border-0 shadow-none px-3 py-3" name="message" placeholder="Tell us about your moving requirements..." rows="4"></textarea>
              </div>
            </div>
            <div class="col-12 form_box mt-4">
              <button type="button" id="submitcontactbtn" class="btn bg-orange text-white rounded-3 px-5 py-3 fw-bold shadow-sm w-100 hs-btn-pulse border-0 fs-5 text-uppercase letter-spacing-1">
                Send Message <i class="bi bi-arrow-right ms-2"></i>
              </button>
            </div>
            <div class="col-12" id="resulttouch"></div>
          </form>
        </div>
      </div>
      
      <!-- Map Column -->
      <div class="col-lg-5">
        <div class="hs-card-premium bg-white rounded-4 shadow-sm h-100 border-0 overflow-hidden position-relative p-2">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867495.57970536!2d74.1275402681546!3d18.8047856661642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcfc41e9c9cd6f9%3A0x1b2f22924be04fb6!2sMaharashtra!5e0!3m2!1sen!2sin!4v1760679431085!5m2!1sen!2sin" width="100%" height="100%" style="border:0; min-height: 500px; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           
           <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
             <h5 class="text-white fw-bold mb-1"><i class="bi bi-pin-map-fill text-orange me-2"></i> Find Us Here</h5>
             <p class="text-white-75 small mb-0">We operate pan-India. Visit our headquarters!</p>
           </div>
        </div>
      </div>
      
    </div>
  </div>
</section>