<!-- Inner Page Hero Banner -->
<section class="inner-hero-banner position-relative overflow-hidden text-center py-5" <?php if(!empty($bg_image)): ?>style="background-image: url('<?= base_url($bg_image) ?>'); background-size: cover; background-position: center;"<?php endif; ?>>
  <div class="hero-overlay" <?php if(!empty($bg_image)): ?>style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(0,51,160,0.85) 0%, rgba(0,34,107,0.7) 100%);"<?php endif; ?>></div>
  <div class="hero-grid-pattern"></div>
  
  <!-- Animated Decorative Circles -->
  <div class="about-anim-circle about-anim-circle-1"></div>
  <div class="about-anim-circle about-anim-circle-2"></div>
  <div class="about-anim-circle about-anim-circle-3"></div>

  <div class="container position-relative z-index-2 py-4">
    <h1 class="text-white text-uppercase font-weight-bold mb-3"><?= isset($page_title) ? $page_title : '' ?></h1>
    <div class="hs-premium-breadcrumb d-inline-flex align-items-center gap-3 mt-3 py-2 px-4 rounded-pill shadow">
      <a href="<?= site_url() ?>" class="hs-bc-link"><i class="bi bi-house-door-fill me-1"></i>Home</a>
      
      <?php if(!empty($parent_title) && !empty($parent_link)): ?>
      <span class="hs-bc-sep"><i class="bi bi-chevron-double-right"></i></span>
      <a href="<?= site_url($parent_link) ?>" class="hs-bc-link"><?= $parent_title ?></a>
      <?php endif; ?>
      
      <span class="hs-bc-sep"><i class="bi bi-chevron-double-right"></i></span>
      <span class="hs-bc-active text-orange fw-bold"><?= isset($page_title) ? $page_title : '' ?></span>
    </div>
  </div>
</section>
