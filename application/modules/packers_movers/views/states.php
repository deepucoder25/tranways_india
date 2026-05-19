<main class="main">
    <section class="breadcrumb-hero" data-animate="bottom" data-delay="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10">
                    <div class="content-area">
                        <div class="accent-line"></div>
                        <h1 class="page-title">Branches</h1>
                        <p class="page-description">
                            Expert packers and movers ensuring safe, timely, and hassle-free relocations in every city.
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
                <li class="breadcrumb-item active" aria-current="page">
                    Branches
                </li>
            </ol>
        </div>
    </nav>

    <?php $this->view('packers_movers/states_widget.php'); ?>

</main>