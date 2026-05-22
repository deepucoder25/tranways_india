<?php
$this->load->database();
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));
$this->load->helper('text');
include 'city_content.php';
$ctlink = strtolower(str_replace(" ", "-", $city));
if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
    include "data/$st.php";
} else {
    redirect("error?Invalid+Request");
}
foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} ?>
<!-- Custom City Page Slider -->
<section class="hero-slider-section position-relative overflow-hidden" style="background-image: url('<?= base_url('assets/images/home/hero_slider_bg_new.png') ?>');">

    <!-- Left Overlay Gradient -->
    <div class="position-absolute top-0 start-0 end-0 bottom-0 hero-slider-overlay"></div>

    <div class="container-fluid position-relative slider-container-custom">
        <div class="row align-items-center g-4">

            <!-- Left Column: Hero Texts & Features -->
            <div class="col-lg-6 col-md-12 text-start">

                <!-- Badge Pill -->
                <div class="hero-badge d-inline-flex align-items-center gap-2 mb-3">
                    <span class="hero-badge-icon d-flex align-items-center justify-content-center">
                        <i class="bi bi-geo-alt-fill"></i>
                    </span>
                    <span class="hero-badge-text">TOP RATED IN <?= strtoupper($city) ?>, <?= strtoupper($state) ?></span>
                </div>

                <!-- Main Heading -->
                <h1 class="hero-title text-dark fw-extrabold mt-2 mb-2">
                    Packers and Movers in<br>
                    <span class="highlight-text"><?= $city ?></span>
                </h1>

                <!-- Accent Orange Line -->
                <div class="accent-orange-line mb-4"></div>

                <!-- Description -->
                <p class="hero-description text-muted mb-4">
                    Looking for reliable relocation in <strong><?= $city ?></strong>? We provide safe, stress-free,
                    and damage-free packing and moving services across <?= $city ?> and surrounding areas.
                </p>

                <!-- Feature Cards Grid (Desktop View) -->
                <div class="desktop-features-row d-none d-md-flex align-items-stretch gap-3 mb-4">

                    <div class="feature-item-card flex-fill bg-white rounded-3 shadow-sm p-3 d-flex flex-column align-items-center text-center">
                        <span class="feature-card-icon icon-blue mb-2"><i class="bi bi-shield-check"></i></span>
                        <span class="feature-card-title">Safe & Secure</span>
                    </div>

                    <div class="feature-item-card flex-fill bg-white rounded-3 shadow-sm p-3 d-flex flex-column align-items-center text-center">
                        <span class="feature-card-icon icon-orange mb-2"><i class="bi bi-people-fill"></i></span>
                        <span class="feature-card-title">Professional Team</span>
                    </div>

                    <div class="feature-item-card flex-fill bg-white rounded-3 shadow-sm p-3 d-flex flex-column align-items-center text-center">
                        <span class="feature-card-icon icon-blue mb-2"><i class="bi bi-clock-history"></i></span>
                        <span class="feature-card-title">On-Time Delivery</span>
                    </div>

                    <div class="feature-item-card flex-fill bg-white rounded-3 shadow-sm p-3 d-flex flex-column align-items-center text-center">
                        <span class="feature-card-icon icon-orange mb-2"><i class="bi-currency-rupee">₹</i></span>
                        <span class="feature-card-title">Affordable Pricing</span>
                    </div>

                </div>

                <!-- CTA Buttons -->
                <div class="hero-actions-row d-flex align-items-center gap-4">
                    <a href="#city-content-area" class="btn btn-hero-explore d-inline-flex align-items-center gap-2">
                        EXPLORE SERVICES <i class="bi bi-arrow-down"></i>
                    </a>
                </div>

            </div>

            <!-- Right Column: Quote Form -->
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
            <div class="col-3 mobile-feature-col d-flex flex-column align-items-center text-center">
                <span class="feature-card-icon icon-blue mb-1"><i class="bi bi-shield-check"></i></span>
                <span class="mobile-feature-label">Safe &<br>Secure</span>
            </div>
            <div class="col-3 mobile-feature-col d-flex flex-column align-items-center text-center">
                <span class="feature-card-icon icon-orange mb-1"><i class="bi bi-people-fill"></i></span>
                <span class="mobile-feature-label">Professional<br>Team</span>
            </div>
            <div class="col-3 mobile-feature-col d-flex flex-column align-items-center text-center">
                <span class="feature-card-icon icon-blue mb-1"><i class="bi bi-clock-history"></i></span>
                <span class="mobile-feature-label">On-Time<br>Delivery</span>
            </div>
            <div class="col-3 mobile-feature-col d-flex flex-column align-items-center text-center">
                <span class="feature-card-icon icon-orange mb-1"><i class="bi-currency-rupee">₹</i></span>
                <span class="mobile-feature-label">Affordable<br>Pricing</span>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Area -->
<section id="city-content-area" class="py-5" style="background-color: #f4f7f6;">
    <div class="container">
        <div class="row g-4">
            
            <!-- col-8: About and Content Boxes -->
            <div class="col-lg-8">
                
                <!-- Box 1: About Section -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border border-light mb-4">
                    <div class="d-flex align-items-center gap-3 mb-4 border-bottom pb-3">
                        <div class="bg-orange text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-info-circle fs-4"></i>
                        </div>
                        <h2 class="fw-bold text-dark mb-0">About <?= $company3 ?> in <?= $city ?></h2>
                    </div>
                    <div class="text-muted lh-lg fs-6">
                        <p>Welcome to the most trusted moving experts in <strong><?= $city ?></strong>. For years, we have been helping families, professionals, and corporate businesses relocate safely and smoothly. Our <?= $city ?> branch is equipped with state-of-the-art packing materials, closed container trucks, and highly trained local staff who understand the nuances of shifting within this city.</p>
                        <p>Whether you are moving a few blocks away or planning a major intercity relocation from <?= $city ?>, our promise remains the same: 100% damage-free, on-time delivery with completely transparent pricing.</p>
                    </div>
                </div>

                <!-- Box 2: SEO Content Section -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border border-light mb-4">
                    <div class="d-flex align-items-center gap-3 mb-4 border-bottom pb-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-boxes fs-4"></i>
                        </div>
                        <h3 class="fw-bold text-dark mb-0">Moving Services in <?= $city ?></h3>
                    </div>
                    <div class="text-muted lh-lg city-seo-text">
                        <?php if(!empty(trim($htmlcontent))): ?>
                            <?= $htmlcontent ?>
                        <?php else: ?>
                            <p>We provide a comprehensive range of relocation services tailored for the residents and businesses of <?= $city ?>.</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="mb-2"><i class="bi bi-check2-circle text-success me-2 fs-5 align-middle"></i> <strong>Household Shifting:</strong> Safe packing of fragile items and heavy furniture.</li>
                                <li class="mb-2"><i class="bi bi-check2-circle text-success me-2 fs-5 align-middle"></i> <strong>Office Relocation:</strong> Zero-downtime moving of IT equipment and office infrastructure.</li>
                                <li class="mb-2"><i class="bi bi-check2-circle text-success me-2 fs-5 align-middle"></i> <strong>Vehicle Transport:</strong> Specialized enclosed carriers for cars and bikes.</li>
                                <li class="mb-0"><i class="bi bi-check2-circle text-success me-2 fs-5 align-middle"></i> <strong>Secure Storage:</strong> Short-term and long-term warehousing solutions.</li>
                            </ul>
                        <?php endif; ?>
                        
                        <?= !empty(trim($htmlcontent1)) ? $htmlcontent1 : '' ?>
                    </div>
                </div>

                <!-- Box 3: Why Choose Us Content -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border border-light">
                    <h3 class="fw-bold text-dark mb-4">Why Choose Us for Your <?= $city ?> Move?</h3>
                    <div class="text-muted lh-lg">
                        <?= !empty(trim($htmlcontent2)) ? $htmlcontent2 : '<p>We are distinguished by our commitment to quality. Our dedicated move coordinators handle your relocation from start to finish. With no hidden costs and a specialized local fleet, we ensure a premium experience.</p>' ?>
                    </div>
                </div>

            </div>

            <!-- col-4: Sidebar Boxes (2-3 boxes) -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 30px; z-index: 10;">

                    <!-- Sidebar Box 2: Quick Contact -->
                    <div class="bg-primary text-white rounded-4 p-4 text-center shadow-sm mb-4 position-relative overflow-hidden">
                        <h4 class="fw-bold mb-3 position-relative z-index-1">Need Urgent Help?</h4>
                        <p class="small text-white-50 mb-4 position-relative z-index-1">Our <?= $city ?> support team is available 24/7.</p>
                        
                        <a href="tel:<?= $this->comp['phone'] ?>" class="btn btn-light w-100 fw-bold py-3 mb-3 text-primary position-relative z-index-1">
                            <i class="bi bi-telephone-fill me-2"></i> <?= $this->comp['phone'] ?>
                        </a>
                        
                        <?php $whatsapp = isset($this->comp['whatsapp']) ? str_replace(' ', '', $this->comp['whatsapp']) : ''; ?>
                        <a href="https://wa.me/91<?= $whatsapp ?>" target="_blank" class="btn btn-success w-100 fw-bold py-3 position-relative z-index-1">
                            <i class="bi bi-whatsapp me-2"></i> WhatsApp Us
                        </a>
                    </div>

                    <!-- Sidebar Box 3: Coverage Area -->
                    <div class="bg-white rounded-4 p-4 border border-light shadow-sm text-center">
                        <div class="text-orange fs-1 mb-2"><i class="bi bi-pin-map-fill"></i></div>
                        <h5 class="fw-bold text-dark">Serving All of <?= $city ?></h5>
                        <p class="text-muted small mb-0">We cover every neighborhood, residential society, and commercial hub in and around the city.</p>
                    </div>

                </div>
            </div>
            
            <!-- col-12: Full Width Sections -->
            <div class="col-12 mt-5 pt-4 border-top">
                
                <!-- Core Expertise / Services Grid -->
                <div class="dynamic-services-section p-4 p-md-5 rounded-4 shadow-sm mb-5" style="background-color: #051124;">
                    <div class="text-center mb-5">
                        <h2 class="display-6 fw-bold text-white mb-3">Our Core Expertise</h2>
                        <p class="text-white-50 mx-auto" style="max-width: 600px;">Tailored logistics and moving solutions designed perfectly for the residents of <?= $city ?>.</p>
                    </div>
                    
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="service-glare-card p-4 text-center rounded-4 border border-secondary border-opacity-25 h-100">
                                <div class="text-orange fs-1 mb-3"><i class="bi bi-house-door"></i></div>
                                <h5 class="fw-bold text-white mb-2">Local Shifting</h5>
                                <p class="small text-white-50 mb-0">Lightning-fast moves across neighborhoods inside <?= $city ?> with extreme care.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="service-glare-card p-4 text-center rounded-4 border border-secondary border-opacity-25 h-100">
                                <div class="text-orange fs-1 mb-3"><i class="bi bi-globe-central-south-asia"></i></div>
                                <h5 class="fw-bold text-white mb-2">Domestic Move</h5>
                                <p class="small text-white-50 mb-0">Moving out of <?= $city ?>? We provide seamless Pan-India relocation services.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="service-glare-card p-4 text-center rounded-4 border border-secondary border-opacity-25 h-100">
                                <div class="text-orange fs-1 mb-3"><i class="bi bi-building"></i></div>
                                <h5 class="fw-bold text-white mb-2">Office Relocation</h5>
                                <p class="small text-white-50 mb-0">Zero-downtime IT and furniture moving for corporates and startups.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="service-glare-card p-4 text-center rounded-4 border border-secondary border-opacity-25 h-100">
                                <div class="text-orange fs-1 mb-3"><i class="bi bi-car-front"></i></div>
                                <h5 class="fw-bold text-white mb-2">Car Transport</h5>
                                <p class="small text-white-50 mb-0">Enclosed vehicle carriers keeping your prized automobiles scratch-free.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- FAQs Section -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border border-light">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-5">
                            <span class="text-orange fw-bold tracking-wider text-uppercase mb-2 d-block">Got Questions?</span>
                            <h2 class="display-6 fw-bold text-dark mb-4">Frequently Asked Questions</h2>
                            <p class="text-muted mb-4">Everything you need to know about shifting locally or domestically from <?= $city ?>.</p>
                            <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-pill d-inline-flex border">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="bi bi-info-circle"></i>
                                </div>
                                <span class="fw-bold text-dark pe-3">Still confused? Call us directly!</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="accordion faq-modern" id="cityFaqAccordion">
                                <div class="accordion-item border mb-3 rounded-3 overflow-hidden">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                            How is the moving cost calculated in <?= $city ?>?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#cityFaqAccordion">
                                        <div class="accordion-body text-muted bg-white border-top">
                                            We calculate the cost based on the volume of goods, distance of travel, packing materials needed, and manual labor required (like lack of elevators). We provide a transparent, upfront quote with zero hidden charges.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border mb-3 rounded-3 overflow-hidden">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-bold text-dark collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                            Are my goods insured during the move?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#cityFaqAccordion">
                                        <div class="accordion-body text-muted bg-white border-top">
                                            Absolutely. We offer comprehensive transit insurance to ensure that in the rare event of an accident or natural disaster, your valuable belongings are fully financially protected.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border rounded-3 overflow-hidden">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-bold text-dark collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                            Do you provide unpacking and rearranging services?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#cityFaqAccordion">
                                        <div class="accordion-body text-muted bg-white border-top">
                                            Yes! Our service doesn't just stop at dropping off boxes. Our team will carefully unpack your items and help organize heavy furniture precisely where you want it in your new home.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</section>
<style>
/* CSS Styles */
.bg-orange { background-color: #ff6a00 !important; }
.text-orange { color: #ff6a00 !important; }
.bg-gradient-blue { background: linear-gradient(135deg, #032b69 0%, #021a42 100%); }

.service-glare-card {
    transition: transform 0.3s, background-color 0.3s;
    background-color: transparent;
}
.service-glare-card:hover {
    transform: translateY(-5px);
    background-color: rgba(255,106,0,0.1);
    border-color: #ff6a00 !important;
}

.faq-modern .accordion-button:not(.collapsed) {
    color: #ff6a00 !important;
    box-shadow: none;
}
.faq-modern .accordion-button:focus {
    box-shadow: none;
}

.sidebar-quote-form input, .sidebar-quote-form select, .sidebar-quote-form textarea {
    background-color: #f8fafc;
    border: 1px solid #e2e8f0;
    font-size: 0.9rem;
    border-radius: 6px;
    padding: 10px;
}
.sidebar-quote-form input:focus, .sidebar-quote-form select:focus, .sidebar-quote-form textarea:focus {
    border-color: #ff6a00;
    box-shadow: 0 0 0 0.2rem rgba(255,106,0,0.25);
}
.city-seo-text p {
    font-size: 1.05rem;
    color: #475569;
}
</style>