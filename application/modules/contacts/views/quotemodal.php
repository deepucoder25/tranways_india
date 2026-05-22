<!-- Quote Modal -->
<div class="modal fade" id="qteModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg" style="border-radius: 15px; overflow: hidden;">

      <!-- Header -->
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title fw-semibold"><i class="fa-solid fa-clipboard-list me-2"></i> Get a Free Quote</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Form -->
      <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
        <div class="modal-body bg-light">

          <!-- Row 1 -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label text-danger fw-semibold"><i class="fa-solid fa-user me-1"></i> Your Name</label>
              <input type="text" class="form-control shadow-sm" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label text-danger fw-semibold"><i class="fa-solid fa-phone me-1"></i> Mobile Number</label>
              <input type="tel" class="form-control shadow-sm" name="phone" id="phone" placeholder="Enter your mobile number">
            </div>
          </div>

          <!-- Row 2 -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label for="email" class="form-label text-danger fw-semibold"><i class="fa-solid fa-envelope me-1"></i> Your Email</label>
              <input type="email" class="form-control shadow-sm" name="email" id="email" placeholder="Enter your email">
            </div>
            <div class="col-md-6">
              <label for="mfrom" class="form-label text-danger fw-semibold"><i class="fa-solid fa-location-dot me-1"></i> From</label>
              <input type="text" class="form-control shadow-sm" name="mfrom" id="mfrom" placeholder="Moving From">
            </div>
          </div>
          <!-- Row 3 -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label for="mto" class="form-label text-danger fw-semibold"><i class="fa-solid fa-thumbtack me-1"></i> To</label>
              <input type="text" class="form-control shadow-sm" name="mto" id="mto" placeholder="Moving To">
            </div>
            <div class="col-md-6">
              <label for="message" class="form-label text-danger fw-semibold"><i class="fa-solid fa-comment me-1"></i> Message</label>
              <textarea name="message" id="message" class="form-control shadow-sm" rows="3" placeholder="Write your message"></textarea>
            </div>
          </div>
          <div id="resultquotemodal" class="mt-3"></div>
        </div>
        <div class="modal-footer d-flex justify-content-between bg-white">
          <button type="reset" class="btn btn-outline-secondary px-4" onclick="$('#resultquotemodal').html('');">
            <i class="fa-solid fa-rotate-left me-1"></i> Clear
          </button>
          <button type="submit" id="submitbquotemodal" class="btn btn-danger px-4">
            <i class="fa-solid fa-paper-plane me-1"></i> Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
