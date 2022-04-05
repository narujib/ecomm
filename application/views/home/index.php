<div class="hero-slider">
    <div class="slider-item th-fullpage hero-area" style="background-image: url(<?= base_url('assets/home/images/SLIDER-1.jpg'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Product <br> SMK N Jawa Tengah</h1>
                    <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, <br> veritatis tempore nostrum id
                        officia quaerat eum corrupti, <br> ipsa aliquam velit.</p>

                </div>
            </div>
        </div>
    </div>
    <div class="slider-item th-fullpage hero-area" style="background-image: url(<?= base_url('assets/home/images/SLIDER-2.jpg'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Product<br> SMK N Jawa Tengah</h1>
                    <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Create just what you need
                        for your Perfect Website. Choose from a wide range
                        <br> of Elements & simply put them on our Canvas.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>


<!--
		Start Counter Section
		==================================== -->

<section class="about-2 section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title">
                    <h2>About</h2>
                    <div class="border"></div>
                    <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
                </div>
            </div>

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

<!--
Start About Section
==================================== -->
<section class="service-2 section">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <!-- section title -->
                <div class="title text-center">
                    <h2>Our Product</h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>

            <?php $i = 1; ?>
            <?php foreach ($product as $c) : ?>

                <a href="<?= base_url(); ?>home/productSingle/<?= $c['id'] ?>" class="text-reset col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <img src="<?= base_url('assets/img/product/') . $c['image']; ?>" class="img-fluid img-thumbnail">
                        <h4 class="mt-3"><?= $c['title']; ?></h4>

                        <p class="text-muted font-italic">
                            <?= date('d F Y', $c['create_at']); ?> / <?= $c['jurusan']; ?>
                        </p>

                    </div>
                </a>
                <?php $i++; ?>
            <?php endforeach; ?>
            <!-- END COL -->


        </div>
    </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->