<!-- Inner Page Hero Banner -->
<section class="inner-hero-banner position-relative overflow-hidden text-center py-5">
  <div class="hero-overlay"></div>
  <div class="hero-grid-pattern"></div>
  <div class="container position-relative z-index-2 py-4">
    <h1 class="text-white text-uppercase font-weight-bold mb-3">Frequently Asked Questions</h1>
    <div class="custom-breadcrumb d-flex justify-content-center align-items-center gap-2">
      <a href="<?= site_url() ?>" class="breadcrumb-link text-white-50"><i class="bi bi-house-door-fill me-1"></i>Home</a>
      <span class="breadcrumb-sep text-white-50"><i class="bi bi-chevron-right"></i></span>
      <span class="breadcrumb-active text-orange font-weight-semibold">FAQs</span>
    </div>
  </div>
</section>

<!-- FAQs Content Grid Section -->
<section class="faqs-page-section py-5">
  <div class="container">
    <div class="row g-5">
      
      <!-- Left Sidebar: Category Info & Search Placeholder -->
      <div class="col-lg-4">
        <div class="faq-sidebar-card shadow-sm p-4 rounded-4 bg-white border border-light sticky-top" style="top: 100px; z-index: 10;">
          <span class="section-subtitle-badge mb-3 d-inline-block">— • HAVE QUESTIONS? • —</span>
          <h2 class="sidebar-faq-title mb-3">Answers to All Your Shifting <span class="text-orange">Queries</span></h2>
          <p class="text-muted mb-4">
            We have compiled answers to the most common queries regarding home shifting, vehicle transportation, insurance, IBA approvals, and safety regulations.
          </p>
          
          <div class="faq-quick-contact p-3 rounded-3 bg-light border-start border-4 border-orange">
            <h4 class="contact-card-sub mb-2">Need Direct Help?</h4>
            <p class="text-muted small mb-3">Our 24/7 relocation experts are ready to resolve any specific questions.</p>
            <div class="d-flex flex-column gap-2">
              <a href="tel:<?= $phone ?>" class="d-flex align-items-center gap-2 text-blue font-weight-semibold text-decoration-none">
                <i class="bi bi-telephone-fill text-orange"></i> <?= $phone ?>
              </a>
              <a href="mailto:<?= $mail ?>" class="d-flex align-items-center gap-2 text-blue font-weight-semibold text-decoration-none">
                <i class="bi bi-envelope-fill text-orange"></i> <?= $mail ?>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Right Side: Accordion Lists -->
      <div class="col-lg-8">
        <div class="faq-accordion-container d-flex flex-column gap-4">
          
          <!-- Category 1: General Shifting -->
          <div class="faq-group-wrapper">
            <h3 class="faq-category-header text-blue mb-3 border-bottom pb-2 d-flex align-items-center gap-2">
              <i class="bi bi-box-seam-fill text-orange"></i> General Shifting & Bookings
            </h3>
            
            <div class="accordion-list d-flex flex-column gap-3">
              <details class="faq-accordion-details shadow-sm rounded-3 bg-white border border-light transition-smooth" open>
                <summary class="faq-accordion-summary p-3 d-flex justify-content-between align-items-center font-weight-semibold cursor-pointer">
                  <span>How early should I book my relocation with Tranways India?</span>
                  <i class="bi bi-plus-lg toggle-icon-plus text-orange"></i>
                </summary>
                <div class="faq-accordion-content p-3 border-top border-light text-muted">
                  We highly recommend booking your move at least 7 to 10 days in advance for local shifting, and 14 days in advance for long-distance domestic relocation. This allows us to allocate the optimal vehicle size, prepare certified packing crews, and plan optimized transit routes.
                </div>
              </details>

              <details class="faq-accordion-details shadow-sm rounded-3 bg-white border border-light transition-smooth">
                <summary class="faq-accordion-summary p-3 d-flex justify-content-between align-items-center font-weight-semibold cursor-pointer">
                  <span>Do you provide pre-move physical survey checks?</span>
                  <i class="bi bi-plus-lg toggle-icon-plus text-orange"></i>
                </summary>
                <div class="faq-accordion-content p-3 border-top border-light text-muted">
                  Yes, absolutely. We offer both a free, zero-obligation physical on-site survey and a digital virtual survey. Our estimator checks item volumes, weight factors, delicate glassware counts, and accessibility parameters to supply you with a fixed, transparent quotation.
                </div>
              </details>

              <details class="faq-accordion-details shadow-sm rounded-3 bg-white border border-light transition-smooth">
                <summary class="faq-accordion-summary p-3 d-flex justify-content-between align-items-center font-weight-semibold cursor-pointer">
                  <span>Are there any hidden costs added on shifting day?</span>
                  <i class="bi bi-plus-lg toggle-icon-plus text-orange"></i>
                </summary>
                <div class="faq-accordion-content p-3 border-top border-light text-muted">
                  No. We maintain strict corporate standards regarding transparency. Our written estimations detail all costs including loading, unloading, packing materials, transport tolls, and fuel. Unless you add extra items on shifting day, the quoted price is exactly what you pay.
                </div>
              </details>
            </div>
          </div>
          
          <!-- Category 2: Packing & Safety -->
          <div class="faq-group-wrapper mt-2">
            <h3 class="faq-category-header text-blue mb-3 border-bottom pb-2 d-flex align-items-center gap-2">
              <i class="bi bi-shield-lock-fill text-orange"></i> Packing Standards & Safety
            </h3>
            
            <div class="accordion-list d-flex flex-column gap-3">
              <details class="faq-accordion-details shadow-sm rounded-3 bg-white border border-light transition-smooth">
                <summary class="faq-accordion-summary p-3 d-flex justify-content-between align-items-center font-weight-semibold cursor-pointer">
                  <span>What packing materials do you use for fragile household goods?</span>
                  <i class="bi bi-plus-lg toggle-icon-plus text-orange"></i>
                </summary>
                <div class="faq-accordion-content p-3 border-top border-light text-muted">
                  For fragile electronics, premium glassware, and delicate items, we employ specialized multi-layer packing. This includes heavy-duty bubble wrapping, thick corrugated sheets, thermocol cushioning plates, stretch wrap film, and customized strong wooden crates where necessary.
                </div>
              </details>

              <details class="faq-accordion-details shadow-sm rounded-3 bg-white border border-light transition-smooth">
                <summary class="faq-accordion-summary p-3 d-flex justify-content-between align-items-center font-weight-semibold cursor-pointer">
                  <span>What items are prohibited from being packed and shifted?</span>
                  <i class="bi bi-plus-lg toggle-icon-plus text-orange"></i>
                </summary>
                <div class="faq-accordion-content p-3 border-top border-light text-muted">
                  For transit safety regulations, we strictly prohibit the shifting of flammable items (gas cylinders, paint, petroleum products, crackers), liquid assets (oils, acids), perishable food goods, plants, cash, expensive jewelry, legal certificates, and personal weapon ammunition.
                </div>
              </details>

              <details class="faq-accordion-details shadow-sm rounded-3 bg-white border border-light transition-smooth">
                <summary class="faq-accordion-summary p-3 d-flex justify-content-between align-items-center font-weight-semibold cursor-pointer">
                  <span>How are my cars and bikes shifted domestically?</span>
                  <i class="bi bi-plus-lg toggle-icon-plus text-orange"></i>
                </summary>
                <div class="faq-accordion-content p-3 border-top border-light text-muted">
                  All vehicle relocations are executed inside custom, closed waterproof car-carrier containers. Vehicles are securely anchored inside using heavy-duty wheel-chock harnesses and specialized safety straps to prevent any lateral movement or collision damage during highway transit.
                </div>
              </details>
            </div>
          </div>
          
          <!-- Category 3: Claims & Claims Claims -->
          <div class="faq-group-wrapper mt-2">
            <h3 class="faq-category-header text-blue mb-3 border-bottom pb-2 d-flex align-items-center gap-2">
              <i class="bi bi-file-earmark-check-fill text-orange"></i> Claims, Insurance & IBA Rules
            </h3>
            
            <div class="accordion-list d-flex flex-column gap-3">
              <details class="faq-accordion-details shadow-sm rounded-3 bg-white border border-light transition-smooth">
                <summary class="faq-accordion-summary p-3 d-flex justify-content-between align-items-center font-weight-semibold cursor-pointer">
                  <span>Is transit insurance mandatory and how does it work?</span>
                  <i class="bi bi-plus-lg toggle-icon-plus text-orange"></i>
                </summary>
                <div class="faq-accordion-content p-3 border-top border-light text-muted">
                  While not legally mandatory, we highly recommend purchasing our comprehensive transit goods insurance (coverage fee is 1.5% to 3% of declared inventory value). In case of rare major highway accidents, natural disasters, or unexpected damage, the insurance cover ensures seamless legal financial compensation.
                </div>
              </details>

              <details class="faq-accordion-details shadow-sm rounded-3 bg-white border border-light transition-smooth">
                <summary class="faq-accordion-summary p-3 d-flex justify-content-between align-items-center font-weight-semibold cursor-pointer">
                  <span>Do you supply IBA-Approved bills for corporate relocation claims?</span>
                  <i class="bi bi-plus-lg toggle-icon-plus text-orange"></i>
                </summary>
                <div class="faq-accordion-content p-3 border-top border-light text-muted">
                  Yes, absolutely. We are a certified, IBA-approved packers and movers organization. We issue professional computerized IBA bills, consignment notes (LR copy), itemized packing checklists, and official receipts required by banks, public sector undertakings (PSUs), and corporates to claim relocation allowances.
                </div>
              </details>
            </div>
          </div>

        </div>
      </div>
      
    </div>
  </div>
</section>
