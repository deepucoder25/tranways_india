<main class="main">
    <!-- Breadcrumbs -->
    <div class="site-breadcrumb" style="background: url(<?= base_url() ?>assets/images/slider/desktop-hero-bg.png)">
        <div class="container">
            <h1 class="breadcrumb-title"><?= @$query[0]->title ?></h1> <!-- Dynamic title -->
            <ul class="breadcrumb-menu">
                <li><a href="<?= site_url() ?>">Home</a></li>
                <li><a href="<?= site_url('blog') ?>">Our Blog</a></li>
                <li class="active"><?= @$query[0]->title ?></li>
            </ul>
        </div>
    </div>
    <!-- Blog Single Post -->
    <div class="blog-single py-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog-single-wrap">
                        <div class="blog-single-content">
                            <!-- Blog Image -->
                            <div class="blog-thumb-img">
                                <?php 
                                $image_path = FCPATH . 'uploads/blogs/' . @$query[0]->image;
                                if (@$query[0]->image && file_exists($image_path)): ?>
                                    <img src="<?= base_url('uploads/blogs/' . @$query[0]->image) ?>" alt="<?= @$query[0]->title ?>">
                                <?php else: ?>
                                    <img src="<?= base_url('assets/images/about/packers_movers.jpg') ?>" alt="Default Image">
                                <?php endif; ?>
                            </div>
                            <!-- Blog Info -->
                            <div class="blog-info">
                                <div class="blog-meta">
                                    <div class="blog-meta-left">
                                        <ul>
                                            <li><i class="fa-solid fa-calendar-days"></i><?= date('M d, Y', strtotime($query[0]->created_at)) ?></li>
                                            <li><i class="far fa-user"></i> By Admin</li>
                                        </ul>
                                    </div>
                                    <!-- Share Button -->
                                    <div class="blog-meta-right">
                                        <a href="javascript:void(0);" class="share-link" data-bs-toggle="modal" data-bs-target="#shareModal"><i class="far fa-share-alt"></i> Share</a>
                                    </div>

                                    <!-- Bootstrap Modal Structure -->
                                    <div class="modal fade" id="shareModal" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Share this post</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="social-buttons d-grid gap-2">
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="btn btn-primary">
                                                            <i class="fab fa-facebook-f me-2"></i> Facebook
                                                        </a>
                                                        <a href="https://twitter.com/intent/tweet?url=YOUR_URL" target="_blank" class="btn btn-info text-white">
                                                            <i class="fab fa-twitter me-2"></i> Twitter
                                                        </a>
                                                        <a href="https://api.whatsapp.com/send?text=YOUR_URL" target="_blank" class="btn btn-success">
                                                            <i class="fab fa-whatsapp me-2"></i> WhatsApp
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        var currentUrl = window.location.href;
                                        document.querySelectorAll('.social-buttons a').forEach(function(btn) {
                                            var shareUrl = btn.getAttribute('href');
                                            btn.setAttribute('href', shareUrl.replace('YOUR_URL', encodeURIComponent(currentUrl)));
                                        });
                                    </script>

                                </div>

                                <!-- Blog Details -->
                                <div class="blog-details">
                                    <h3 class="blog-details-title mb-20"><?= @$query[0]->title ?></h3>
                                    <div class="blog-content-text">
                                        <?= nl2br(@$query[0]->content) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="blog-sidebar">
                        <!-- Search Widget -->
                        <div class="widget recent-post">
                            <h5 class="widget-title">Recent Posts</h5>

                            <?php if (!empty($recent_posts)): ?>
                                <?php foreach ($recent_posts as $post_arr): $post = (object)$post_arr; ?>
                                    <div class="recent-post-item">
                                        <div class="recent-post-img">
                                            <?php
                                            $image_file = $post->image;
                                            $full_path = FCPATH . 'uploads/blogs/' . $image_file;
                                            $imagePath = ($image_file && file_exists($full_path)) ? base_url('uploads/blogs/' . $image_file) : base_url('assets/images/about/packers_movers.jpg');
                                            $custom_slug = !empty($post->slug) ? $post->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $post->title)))), "-");
                                            ?>
                                            <img src="<?= $imagePath ?>" alt="thumb">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="<?= site_url('blog/'.$custom_slug) ?>"><?= $post->title ?></a></h6>
                                            <span><i class="far fa-clock"></i> <?= date('M d, Y', strtotime($post->created_at)) ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No recent posts available.</p>
                            <?php endif; ?>

                        </div>
                  
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes(@$query[0]->title) ?>",
    "image": [
        "<?= @$query[0]->image ? base_url('uploads/blogs/' . @$query[0]->image) : base_url('assets/img/blog/bs-3.jpg') ?>"
    ],
    "datePublished": "<?= date('c', strtotime(@$query[0]->created_at)) ?>",
    "author": {
        "@type": "Person",
        "name": "Admin"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= $company3 ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url('assets/img/logo/logo.png') ?>"
        }
    },
    "description": "<?= addslashes(substr(strip_tags(@$query[0]->description), 0, 160)) ?>",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= current_url() ?>"
    }
}
</script>