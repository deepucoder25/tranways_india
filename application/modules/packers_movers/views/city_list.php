<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<main class="main">
    <section class="breadcrumb-hero" data-animate="bottom" data-delay="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10">
                    <div class="content-area">
                        <div class="accent-line"></div>
                        <h1 class="page-title">Packers and Movers in <?=$state?></h1>
                        <p class="page-description">
                            Discover our trusted branches across <?=$state?>, delivering seamless and reliable moving experiences.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav class="breadcrumb-nav mb-3" data-animate="left" data-delay="1">
        <div class="container">
            <ol class="breadcrumb-custom mb-0">
                <li class="breadcrumb-item">
                    <a href="<?=site_url()?>">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?=site_url('branches')?>">Branches</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    Packers and Movers in <?=$state?>
                </li>
            </ol>
        </div>
    </nav>
    <div class="container feature-content-section py-3">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct) :
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="city-card-link d-block h-100 text-decoration-none">
                        <div class="city-card card border-0 shadow h-100">
                            <div class="city-card-body d-flex align-items-center justify-content-center gap-1 py-2">
                                <!-- Truck Icon on Left -->
                                <div class="icon">
                                <i class="fas fa-truck-fast display-6 dark-red"></i>
                                </div>
                                <!-- Title on Right -->
                                <div class="city-name">
                                    <span class="fw-semibold">Packers and Movers <b><?= $ct['nm'] ?></b></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</main>
