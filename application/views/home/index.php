<!-- NAVBAR -->
<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home'); ?>">
            <img src="<?= base_url('assets/img/black.png'); ?>" alt="logo detail">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products">Our Product</a>
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CAROUSEL IMAGES -->
<section class="banner">
    <div class="owl-carousel owl-theme carousel-sliders">
        <div class="item">
            <img src="<?= base_url('assets/img/') . $home['hero_img_1']; ?>" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="caption text-center">
                    <h1 class="caption-heading"><?= $home['hero_des']; ?></h1>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?= base_url('assets/img/') . $home['hero_img_2']; ?>" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="caption text-center">
                    <h1 class="caption-heading"><?= $home['hero_des']; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-nav owl-nav"></div>
</section>

<!-- WELCOME CONTENT -->
<section id="about">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <img class="w-100 p-3" src="<?= base_url('assets/img/') . $home['about_img']; ?>" alt="School about">
            </div>
            <div class="col-md-6">
                <div class="about-content">
                    <h2 class="section-subtitle">About</h2>
                    <p><?= $home['about_des']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section id="products" class="products">
    <div class="container pt-5 pb-5">
        <h2 class="section-subtitle">Our Product</h2>
        <div class="row product-wrap">

            <?php foreach ($product as $c) : ?>
                <div class="col-md-3 col-6 mt-3 product-item">
                    <div class="product mb-4 ">
                        <a href="<?= base_url(); ?>home/productdetail/<?= $c['id'] ?>">
                            <div class="product-image ">
                                <img class="transition" src="<?= base_url('assets/img/product/') . $c['image']; ?>" alt="product detail">
                            </div>
                            <div class="product-detail p-2">
                                <h6 class="text-truncate">
                                    <p class="fw-bolder"><?= $c['title']; ?></p>
                                </h6>
                                <!--
                                <div class="product-info">

                                    <i class="fas fa-folder-open"></i> <?= $c['jurusan']; ?></br>
                                    <i class="fas fa-clock"></i> <?= date('d F Y', $c['create_at']); ?>

                                </div>
                                -->
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- end -->

            <div class="btn btn-primary load-more">View More</div>
        </div>
    </div>
</section>