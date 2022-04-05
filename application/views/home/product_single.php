<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?= $product['title']; ?></h2>
                <ol class="breadcrumb header-bradcrumb">

                </ol>
            </div>
        </div>
    </div>
</section>

<!-- blog details part start -->
<section class="blog-details section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <ul class="list-inline  mb-3">
                    <a href="<?= base_url('home/product'); ?>">
                        <li class="list-inline-item font-italic ">
                            Product
                        </li>
                    </a>
                    <li class="list-inline-item text-muted font-italic">
                        / <?= $product['title']; ?>

                    </li>

                </ul>

                <article class="post">
                    <div class="post-image">
                        <img class="img-fluid w-100" src="<?= base_url('assets/img/product/') . $product['image']; ?>" alt="post-image">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <!--<h3 class="mt-2"><?= $product['title']; ?></h3>-->
                        <ul class="list-inline">
                            <li class="list-inline-item text-muted font-italic">
                                <?= date('d F Y', $product['create_at']); ?> /
                            </li>
                            <li class="list-inline-item text-muted font-italic">

                                <?php foreach ($user as $u) : ?>
                                    <?php if ($product['user_id'] == $u['id']) {
                                        echo $u['name'];
                                    }
                                    ?>
                                <?php endforeach; ?> /

                            </li>
                            <li class="list-inline-item text-muted font-italic">
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if ($product['jurusan_id'] == $j['id']) {
                                        echo $j['jurusan'];
                                    }
                                    ?>
                                <?php endforeach; ?>
                            </li>
                        </ul>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam
                            eaque ipsa quae ab illo inventore veritatis et quasi archite beatae vitae dicta sunt explicabo. nemo enim ipsam
                            voluptatem quia voluptassit.aspernatur aut odit aut fugit.</p>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque poro quisquam est, qui dolorem
                            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                            labore et dolore magnam aliquam quaerat voluptatem</p>
                        <!-- blockquote -->
                        <blockquote data-aos="fade-left" data-aos-duration="1000">Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia deserunt mollit anim iest.laborum.
                            sed perspiciatis unde omnis iste natus error voluptatem accusantium dolore mque laudantium.</blockquote>
                        <p>Occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Seper spiciatis
                            unde omnis natus error sit voluptatem accusantium doloremque laudantium totam rem. aperiam eaque ipsa quae
                            ab illo inventore veritatis.</p>
                        <!-- post share -->
                        <ul class="post-content-share list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="tf-ion-social-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="tf-ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="tf-ion-social-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="tf-ion-social-skype"></i>
                                </a>
                            </li>
                        </ul>


                    </div>
                </article>
            </div>

        </div>
    </div>
</section>
<!-- blog details part end -->