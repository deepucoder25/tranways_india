<body>
  <!-- Quote Modal (Original widget loaded dynamically) -->
  <?php $this->load->view('contacts/quotemodal') ?>

  <header class="main-header d-none d-lg-block">
    <div class="nav-card-container">
      <div class="nav-card-inner">
        <!-- Logo Section -->
        <div class="logo-wrapper">
          <a href="<?= base_url() ?>" class="header-logo-link">
            <img src="<?= base_url('assets/images/logo.svg') ?>" alt="Tranways India Packers and Movers" class="logo-img">
          </a>
        </div>

        <!-- Right Side Two-Row Content -->
        <div class="header-right-content">
          <div class="header-top-bar">
            <div class="top-bar-curve">
              <svg viewBox="0 0 100 50" preserveAspectRatio="none" style="display: block; width: 100%; height: 100%;">
                <path d="M100,0 L45,0 C20,0 10,25 25,38 C35,48 48,50 70,50 L100,50 Z" fill="var(--primary-blue)" />
                <path d="M45,0 C20,0 10,25 25,38 C35,48 48,50 70,50" fill="none" stroke="var(--primary-orange)" stroke-width="5" stroke-linecap="round" />
              </svg>
            </div>
            
            <div class="top-bar-content">
              <a href="<?= $phonehtml ?>" class="top-info-link">
                <span class="icon-circle"><i class="bi bi-telephone-fill"></i></span>
                <span class="info-text"><?= $phone ?></span>
              </a>
              <span class="top-bar-sep">|</span>
              <a href="<?= $mailhtml ?>" class="top-info-link">
                <span class="icon-circle"><i class="bi bi-envelope-fill"></i></span>
                <span class="info-text"><?= $mail ?></span>
              </a>
            </div>
          </div>

          <!-- Row 2: Desktop Menu & Quote Button -->
          <div class="header-bottom-bar">
            <nav class="desktop-nav">
              <ul class="desktop-menu">
                <li class="menu-item active">
                  <a href="<?= site_url() ?>">HOME</a>
                </li>
                <li class="menu-item has-dropdown">
                  <a href="<?= site_url('about') ?>" class="dropdown-toggle-link">
                    ABOUT US <i class="bi bi-chevron-down dropdown-arrow"></i>
                  </a>
                  <ul class="dropdown-menu-list">
                    <li><a href="<?= site_url('about') ?>">About Us</a></li>
                    <li><a href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
                    <li><a href="<?= site_url('faqs') ?>">FAQs</a></li>
                    <li><a href="<?= site_url('moving-tips') ?>">Moving Tips</a></li>
                    <li><a href="<?= site_url('terms-conditions') ?>">Terms &amp; Conditions</a></li>
                    <li><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
                  </ul>
                </li>
                <li class="menu-item has-dropdown">
                  <a href="<?= site_url('services') ?>" class="dropdown-toggle-link">
                    SERVICES <i class="bi bi-chevron-down dropdown-arrow"></i>
                  </a>
                  <ul class="dropdown-menu-list">
                    <li><a href="<?= site_url('services/household-shifting') ?>">Household Shifting</a></li>
                    <li><a href="<?= site_url('services/office-relocation') ?>">Office Relocation</a></li>
                    <li><a href="<?= site_url('services/vehicle-transport') ?>">Vehicle Transport</a></li>
                    <li><a href="<?= site_url('services/packing-unpacking') ?>">Packing &amp; Unpacking</a></li>
                    <li><a href="<?= site_url('services/loading-unloading') ?>">Loading &amp; Unloading</a></li>
                    <li><a href="<?= site_url('services/storage-solutions') ?>">Storage Solutions</a></li>
                    <li><a href="<?= site_url('services/local-shifting') ?>">Local Shifting</a></li>
                    <li><a href="<?= site_url('services/domestic-shifting') ?>">Domestic Shifting</a></li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="<?= site_url('process') ?>">LOCATIONS</a>
                </li>
                <li class="menu-item">
                  <a href="<?= site_url('gallery') ?>">GALLERY</a>
                </li>
                <li class="menu-item">
                  <a href="<?= site_url('contacts') ?>">CONTACT</a>
                </li>
              </ul>
            </nav>

            <button class="btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
              <span class="btn-quote-icon"><i class="bi bi-box-seam"></i></span>
              <span class="btn-quote-text">GET A QUOTE</span>
              <i class="bi bi-arrow-right btn-quote-arrow"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <header class="mobile-header d-block d-lg-none">
    <div class="mobile-navbar-bar">
      <!-- Logo -->
      <a href="<?= base_url() ?>" class="mobile-logo-link">
        <img src="<?= base_url('assets/images/logo.svg') ?>" alt="Tranways India Logo" class="mobile-logo-img" loading="lazy">
      </a>

      <button class="mobile-hamburger-btn" id="hamburgerBtn" aria-label="Toggle Navigation">
        <i class="bi bi-list"></i>
      </button>
    </div>
  </header>

  <div class="menu-overlay" id="menuOverlay"></div>
  
  <div class="fullscreen-menu" id="fullscreenMenu">
    <!-- Absolute Close Button -->
    <button class="drawer-close-btn" id="closeMenuBtn" aria-label="Close Menu">
      <i class="bi bi-x-lg"></i>
    </button>

    <!-- Drawer Navigation List -->
    <div class="drawer-body">
      <ul class="drawer-menu-list">
        <li class="drawer-menu-item active">
          <a href="<?= site_url() ?>">
            <span class="drawer-item-left"><i class="bi bi-house-door-fill"></i>HOME</span>
            <span class="drawer-item-right"><i class="bi bi-chevron-right"></i></span>
          </a>
        </li>
        <li class="drawer-menu-item has-submenu">
          <div class="drawer-item-toggle" id="drawerAboutToggle">
            <span class="drawer-item-left"><i class="bi bi-person-fill"></i>ABOUT US</span>
            <span class="drawer-item-right"><i class="bi bi-chevron-down drawer-submenu-arrow"></i></span>
          </div>
          <ul class="drawer-submenu-list" id="drawerAboutSubmenu">
            <li><a href="<?= site_url('about') ?>">About Us</a></li>
            <li><a href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
            <li><a href="<?= site_url('faqs') ?>">FAQs</a></li>
            <li><a href="<?= site_url('moving-tips') ?>">Moving Tips</a></li>
            <li><a href="<?= site_url('terms-conditions') ?>">Terms &amp; Conditions</a></li>
            <li><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
          </ul>
        </li>
        
        <li class="drawer-menu-item has-submenu">
          <div class="drawer-item-toggle" id="drawerServicesToggle">
            <span class="drawer-item-left"><i class="bi bi-box-seam-fill"></i>SERVICES</span>
            <span class="drawer-item-right"><i class="bi bi-chevron-down drawer-submenu-arrow"></i></span>
          </div>
          <ul class="drawer-submenu-list" id="drawerSubmenu">
            <li><a href="<?= site_url('services/household-shifting') ?>">Household Shifting</a></li>
            <li><a href="<?= site_url('services/office-relocation') ?>">Office Relocation</a></li>
            <li><a href="<?= site_url('services/vehicle-transport') ?>">Vehicle Transport</a></li>
            <li><a href="<?= site_url('services/packing-unpacking') ?>">Packing &amp; Unpacking</a></li>
            <li><a href="<?= site_url('services/loading-unloading') ?>">Loading &amp; Unloading</a></li>
            <li><a href="<?= site_url('services/storage-solutions') ?>">Storage Solutions</a></li>
            <li><a href="<?= site_url('services/local-shifting') ?>">Local Shifting</a></li>
            <li><a href="<?= site_url('services/domestic-shifting') ?>">Domestic Shifting</a></li>
          </ul>
        </li>

        <li class="drawer-menu-item">
          <a href="<?= site_url('process') ?>">
            <span class="drawer-item-left"><i class="bi bi-gear-fill"></i>OUR PROCESS</span>
            <span class="drawer-item-right"><i class="bi bi-chevron-right"></i></span>
          </a>
        </li>
        <li class="drawer-menu-item">
          <a href="<?= site_url('gallery') ?>">
            <span class="drawer-item-left"><i class="bi bi-image-fill"></i>GALLERY</span>
            <span class="drawer-item-right"><i class="bi bi-chevron-right"></i></span>
          </a>
        </li>
        <li class="drawer-menu-item">
          <a href="<?= site_url('blog') ?>">
            <span class="drawer-item-left"><i class="bi bi-file-earmark-text-fill"></i>BLOG</span>
            <span class="drawer-item-right"><i class="bi bi-chevron-right"></i></span>
          </a>
        </li>
        <li class="drawer-menu-item">
          <a href="<?= site_url('contacts') ?>">
            <span class="drawer-item-left"><i class="bi bi-telephone-fill"></i>CONTACT US</span>
            <span class="drawer-item-right"><i class="bi bi-chevron-right"></i></span>
          </a>
        </li>
      </ul>
    </div>

    <!-- Drawer Sticky Footer CTAs -->
    <div class="drawer-footer-ctas">
      <a href="tel:<?= $phone ?>" class="btn-drawer-call">
        <i class="bi bi-telephone-fill"></i>CALL NOW
      </a>
      <button class="btn-drawer-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
        <i class="bi bi-box-seam"></i>GET A QUOTE
      </button>
    </div>
  </div>

  <script>
    $(function () {
      $('#hamburgerBtn').click(() => $('#fullscreenMenu, #menuOverlay').addClass('active'));
      $('#closeMenuBtn, #menuOverlay').click(() => $('#fullscreenMenu, #menuOverlay').removeClass('active'));
      $('#drawerServicesToggle, #drawerAboutToggle').click(function (e) {
        e.preventDefault();
        $(this).closest('.has-submenu').toggleClass('open');
      });
    });
  </script>