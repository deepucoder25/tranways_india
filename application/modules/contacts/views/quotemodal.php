<!-- Quote Modal -->
<div class="modal fade custom-quote-modal" id="qteModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content premium-modal-content border-0 shadow-lg">

      <!-- Header -->
      <div class="modal-header modal-gradient-header text-white border-0 py-3">
        <h5 class="modal-title fw-bold mb-0" id="qteModalLabel">
            <i class="bi bi-gift-fill me-2 text-warning"></i> Get a Free Quote
        </h5>
        <p class="mb-0 text-white-50 ms-auto me-3 d-none d-md-block small">Fast & Transparent Pricing</p>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Form -->
      <form id="quotemodal" class="ajax-form premium-modal-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
        <div class="modal-body p-3 p-md-4 modal-body-gradient">

          <!-- Row 1 -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label text-dark fw-bold small text-uppercase tracking-wider mb-1">Your Name</label>
              <div class="input-group input-group-sm premium-input-group">
                <span class="input-group-text bg-white border-end-0 text-orange"><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control border-start-0 ps-0 bg-white shadow-none" name="name" id="name" placeholder="Enter your full name" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label text-dark fw-bold small text-uppercase tracking-wider mb-1">Mobile Number</label>
              <div class="input-group input-group-sm premium-input-group">
                <span class="input-group-text bg-white border-end-0 text-orange"><i class="bi bi-telephone-fill"></i></span>
                <input type="tel" class="form-control border-start-0 ps-0 bg-white shadow-none" name="phone" id="phone" placeholder="Enter your mobile number" required>
              </div>
            </div>
          </div>

          <!-- Row 2 -->
          <div class="row g-3 mb-3">
            <div class="col-md-12">
              <label for="email" class="form-label text-dark fw-bold small text-uppercase tracking-wider mb-1">Your Email</label>
              <div class="input-group input-group-sm premium-input-group">
                <span class="input-group-text bg-white border-end-0 text-orange"><i class="bi bi-envelope-fill"></i></span>
                <input type="email" class="form-control border-start-0 ps-0 bg-white shadow-none" name="email" id="email" placeholder="Enter your email address">
              </div>
            </div>
          </div>

          <!-- Row 3 -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label for="mfrom" class="form-label text-dark fw-bold small text-uppercase tracking-wider mb-1">Moving From</label>
              <div class="input-group input-group-sm premium-input-group">
                <span class="input-group-text bg-white border-end-0 text-orange"><i class="bi bi-geo-alt-fill"></i></span>
                <input type="text" class="form-control border-start-0 ps-0 bg-white shadow-none" name="mfrom" id="mfrom" placeholder="Current location">
              </div>
            </div>
            <div class="col-md-6">
              <label for="mto" class="form-label text-dark fw-bold small text-uppercase tracking-wider mb-1">Moving To</label>
              <div class="input-group input-group-sm premium-input-group">
                <span class="input-group-text bg-white border-end-0 text-orange"><i class="bi bi-pin-map-fill"></i></span>
                <input type="text" class="form-control border-start-0 ps-0 bg-white shadow-none" name="mto" id="mto" placeholder="Destination">
              </div>
            </div>
          </div>

          <!-- Row 4 -->
          <div class="row g-3 mb-2">
            <div class="col-md-12">
              <label for="message" class="form-label text-dark fw-bold small text-uppercase tracking-wider mb-1">Additional Message</label>
              <textarea name="message" id="message" class="form-control form-control-sm bg-white shadow-none premium-textarea" rows="2" placeholder="Tell us about the items you need to move..."></textarea>
            </div>
          </div>
          
          <div id="resultquotemodal" class="mt-2"></div>
        </div>
        
        <div class="modal-footer border-0 p-3 pt-0 modal-body-gradient d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-sm btn-outline-secondary fw-bold px-4 rounded-pill" onclick="$('#resultquotemodal').html('');">
             Clear Form
          </button>
          <button type="submit" id="submitbquotemodal" class="btn btn-sm btn-submit-gradient text-white fw-bold px-5 rounded-pill shadow-sm">
             Submit Request <i class="bi bi-arrow-right ms-1"></i>
          </button>
        </div>
      </form>

    </div>
  </div>
</div>

<style>
/* Internal CSS for Quote Modal */
.custom-quote-modal .premium-modal-content {
    border-radius: 16px;
    overflow: hidden;
}

.custom-quote-modal .modal-gradient-header {
    background: linear-gradient(135deg, #032b69 0%, #021a42 100%);
    position: relative;
}

.custom-quote-modal .modal-gradient-header::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0; height: 3px;
    background: linear-gradient(to right, #ffc107, #ff6a00);
}

.custom-quote-modal .modal-body-gradient {
    background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
}

.custom-quote-modal .tracking-wider {
    letter-spacing: 0.5px;
}

.custom-quote-modal .text-orange {
    color: #ff6a00 !important;
}

/* Designed Input Boxes */
.premium-input-group {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);
    transition: all 0.3s ease;
    border: 1px solid #dce1e6;
    background-color: #fff;
}

.premium-input-group:focus-within {
    border-color: #ff6a00;
    box-shadow: 0 0 0 4px rgba(255, 106, 0, 0.15);
    transform: translateY(-1px);
}

.premium-input-group .form-control, 
.premium-input-group .input-group-text {
    border: none !important;
    background-color: transparent !important;
    padding-top: 10px;
    padding-bottom: 10px;
}

.premium-input-group .form-control::placeholder,
.premium-textarea::placeholder {
    color: #adb5bd;
    font-weight: 400;
}

/* Designed Textarea */
.premium-textarea {
    border-radius: 8px;
    border: 1px solid #dce1e6;
    padding: 12px;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);
    transition: all 0.3s ease;
}

.premium-textarea:focus {
    border-color: #ff6a00;
    box-shadow: 0 0 0 4px rgba(255, 106, 0, 0.15);
    background-color: #fff;
    transform: translateY(-1px);
}

/* Submit Button */
.custom-quote-modal .btn-submit-gradient {
    background: linear-gradient(135deg, #ff6a00 0%, #d95300 100%);
    border: none;
    transition: transform 0.3s, box-shadow 0.3s;
}

.custom-quote-modal .btn-submit-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(255,106,0,0.3) !important;
    color: #fff;
}
</style>
