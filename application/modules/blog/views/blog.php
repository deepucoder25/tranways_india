<main class="main">
    <div class="site-breadcrumb" style="background: url(<?= base_url() ?>assets/images/slider/desktop-hero-bg.png)">
        <div class="container">
            <h1 class="breadcrumb-title">Our Blog</h1>
            <ul class="breadcrumb-menu">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li class="active">Our Blog</li>
            </ul>
        </div>
    </div>

    <div class="blog-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                        <span class="site-title-tagline"><i class="fas fa-truck-container"></i> Our Blog</span>
                        <h2 class="site-title">Our Latest News & <span>Blog</span></h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <?php
                $schemaData = []; // Initialize the schema data array

                if (!empty($blogs)):
                    foreach ($blogs as $b_arr):
                        $b = (object) $b_arr;
                        $custom_slug = !empty($b->slug) ? $b->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $b->title)))), "-");
                        $link = strtolower(site_url('blog/' . $custom_slug));

                        $image_path = FCPATH . 'uploads/blogs/' . $b->image;
                        $img = ($b->image && file_exists($image_path)) ? base_url("uploads/blogs/{$b->image}") : base_url('assets/images/about/packers_movers.jpg');

                        // Handle date parsing
                        $created_at = $b->created_at ?? date('Y-m-d H:i:s');
                        $day = date('d', strtotime($created_at));
                        $month = date('M', strtotime($created_at));

                        $schemaData[] = [
                            "@context" => "https://schema.org",
                            "@type" => "BlogPosting",
                            "headline" => $b->title,
                            "image" => $img,
                            "datePublished" => $created_at,
                            "author" => [
                                "@type" => "Person",
                                "name" => "Admin"
                            ],
                            "publisher" => [
                                "@type" => "Organization",
                                "name" => $company3,
                                "logo" => [
                                    "@type" => "ImageObject",
                                    "url" => base_url('assets/img/logo/logo.png')
                                ]
                            ],
                            "description" => substr(strip_tags($b->description), 0, 160) . '...'
                        ];
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp shadow " data-wow-delay=".25s">
                            <div class="blog-item-img">
                                <img src="<?= $img ?>" alt="<?= $b->title ?>" style="height: 250px; object-fit: cover; width: 100%;">
                                <div class="blog-date">
                                    <strong><?= $day ?></strong>
                                    <span><?= $month ?></span>
                                </div>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="<?= $link ?>"><i class="far fa-user-circle"></i> By Admin</a></li>
                                        <li><a href="<?= $link ?>"><i class="far fa-eye"></i> Verified</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="<?= $link ?>"><?= $b->title ?></a>
                                </h4>
                                <p>
                                    <?= substr(strip_tags($b->description), 0, 100) ?>...
                                </p>
                                <a class="theme-btn" href="<?= $link ?>">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p class="p-5 bg-light rounded shadow-sm">No blogs published yet. Check back soon!</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</main>  

<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
