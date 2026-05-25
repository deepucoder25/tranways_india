<body>
  <!-- Quote Modal (Original widget loaded dynamically) -->
  <?php $this->load->view('contacts/quotemodal') ?>

  <!-- Navbar Styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Top Bar -->
  <div class="topbar">
      <div class="navbar-container topbar-container">
          <div class="topbar-left">
              <div class="topbar-item">
                  <i class="bi bi-geo-alt-fill"></i>
                  <span><?=$address1?></span>
              </div>
              <div class="topbar-divider"></div>
              <div class="topbar-item">
                  <i class="bi bi-telephone-fill"></i>
                  <span><?=$phone?></span>
              </div>
              <div class="topbar-divider"></div>
              <div class="topbar-item">
                  <i class="bi bi-envelope-fill"></i>
                  <span><?=$mail?></span>
              </div>
          </div>
          <div class="topbar-right">
              <div class="social-icons">
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
              </div>
              <div class="topbar-divider"></div>
              <a href="#" class="login-btn">
                  <i class="bi bi-person-fill"></i>
                  <span>Login</span>
              </a>
          </div>
      </div>
  </div>

  <!-- Main Navbar -->
  <div class="navbar-wrapper">
      <nav class="main-navbar">
          <div class="navbar-container main-navbar-container">
              <a href="#" class="logo">
                  <i class="bi bi-truck logo-icon"></i>
                  <h3 class="company-name" id="dynamicCompanyName"></h3>
              </a>

              <ul class="nav-links">
                  <li><a href="#" class="active">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services <i class="bi bi-chevron-down" style="font-size: 11px;"></i></a></li>
                  <li><a href="#">Portfolio</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
              </ul>

              <div class="nav-actions">
                  <a href="#" class="action-icon">
                      <i class="bi bi-search"></i>
                  </a>
                  <a href="#" class="action-icon">
                      <i class="bi bi-bag-fill"></i>
                      <span class="badge">3</span>
                  </a>
                  <a href="#" class="btn-primary">
                      <i class="bi bi-send"></i>
                      Get Started
                  </a>
                  <div class="menu-toggle" id="hamburger-btn">
                      <i class="bi bi-list"></i>
                  </div>
              </div>
          </div>
      </nav>
  </div>

  <!-- Full Screen Mobile Menu Overlay -->
  <div class="mobile-menu-overlay" id="mobileMenu">
      <div class="mobile-menu-header">
          <a href="#" class="logo">
              <i class="bi bi-truck logo-icon"></i>
              <h3 class="company-name" id="dynamicCompanyNameMobile"></h3>
          </a>
          <div class="close-menu" id="closeMenuBtn">
              <i class="bi bi-x-lg"></i>
          </div>
      </div>
      <ul class="mobile-nav-links">
          <li><a href="#" class="active">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
      </ul>
      <div class="mobile-menu-footer">
          <a href="#" class="btn-primary w-100 text-center justify-content-center">
              <i class="bi bi-send"></i> Get Started
          </a>
          <div class="mobile-social mt-4 d-flex justify-content-center gap-3">
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
          </div>
      </div>
  </div>

  <script>
      const companyNameVariable = "MoveMasters";
      const companyNameElements = document.querySelectorAll('.company-name');
      companyNameElements.forEach(el => {
          el.textContent = companyNameVariable;
      });

      // Hamburger Menu Toggle
      const hamburgerBtn = document.getElementById('hamburger-btn');
      const closeMenuBtn = document.getElementById('closeMenuBtn');
      const mobileMenu = document.getElementById('mobileMenu');

      if (hamburgerBtn && closeMenuBtn && mobileMenu) {
          hamburgerBtn.addEventListener('click', () => {
              mobileMenu.classList.add('menu-open');
              document.body.style.overflow = 'hidden'; // Prevent scrolling
          });

          closeMenuBtn.addEventListener('click', () => {
              mobileMenu.classList.remove('menu-open');
              document.body.style.overflow = ''; // Restore scrolling
          });
      }
  </script>
