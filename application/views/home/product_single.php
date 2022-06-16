<!-- NAVBAR -->
<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home'); ?>">
            <img src="<?= base_url('assets/img/black.png'); ?>" alt="logo detail">
        </a>

    </div>
</nav>


<div class="s-product">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md">
                <img class="img-gall w-100 p-3" id="ImgGallery" src="<?= base_url('assets/img/product/') . $product['image']; ?>">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img class="small-img-gallery w-100 p-3" src="<?= base_url('assets/img/product/') . $product['image']; ?>">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img-gallery w-100 p-3" src="<?= base_url('assets/img/product/') . $product['image2']; ?>">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img-gallery w-100 p-3" src="<?= base_url('assets/img/product/') . $product['image3']; ?>">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img-gallery w-100 p-3" src="<?= base_url('assets/img/product/') . $product['image4']; ?>">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img-gallery w-100 p-3" src="<?= base_url('assets/img/product/') . $product['image5']; ?>">
                    </div>

                </div>

            </div>

            <div class="col-md">

                <div class="card-body">
                    <h3 class="fw-bold"><?= $product['title']; ?></h3>
                    <p class="mt-3"><?= $product['description']; ?></p>

                    <div class="row justify-content-center">
                        <div class="col-lg pt-4 pb-4">
                            <div class="ratio ratio-16x9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $product['youtube_embed']; ?>" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!-- End Video -->


                    <div class="row border-top-logo">
                        <h5 class="mt-3 fw-bolder">For more information :
                            <?php foreach ($jurusan as $j) : ?>
                                <?php if ($product['jurusan_id'] == $j['id'])
                                    echo $j['jurusan'];
                                ?>
                            <?php endforeach ?>
                        </h5>

                    </div>
                    <div class="row">
                        <div class="col-md mt-3">
                            <?php foreach ($jurusan as $j) : ?>
                                <?php if ($product['jurusan_id'] == $j['id'])
                                    $p =  $j['wa'];


                                ?>
                            <?php endforeach ?>
                            <a href="https://wa.me/62<?= $p; ?>" target="blank">
                                <div class="btn btn-outline-secondary w-100 p-3 fab fa-whatsapp">
                                    0<?= $p; ?>
                                </div>
                            </a>
                        </div>
                        <div class="col-md mt-3">
                            <?php foreach ($jurusan as $j) : ?>
                                <?php if ($product['jurusan_id'] == $j['id'])

                                    $e = $j['email'];

                                ?>
                            <?php endforeach ?>
                            <a href="mailto:<?= $e; ?>" target="blank">
                                <div class="btn btn-outline-secondary w-100 p-3 fas fa-envelope">
                                    <?= $e; ?>
                                </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="card mt-3 w-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2901943068755!2d110.40776671475705!3d-6.9750483702378325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4b345f77693%3A0x4a05a1f3b5fe39ba!2sSMK%20Negeri%20Jawa%20Tengah%20di%20Semarang!5e0!3m2!1sid!2sid!4v1655342863856!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <a href="https://goo.gl/maps/54xhp5q58BmXh6s58" target="blank" class="text-reset">
                            <div class="w-100 text-bold">Jl. Brotojoyo No.1, Plombokan, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50171</div>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- PRODUCTS -->
<div id="gallery" class="gallery">
    <div class="container pt-3 pb-3">
        <h2 class="section-subtitle">Latest Products</h2>
        <div class="row">
            <?php foreach ($all as $c) : ?>
                <div class="col-md-2 col-4 mt-3 gallery-item">
                    <a href="<?= base_url(); ?>home/productdetail/<?= $c['id'] ?>">
                        <img class="img-thumbnail transition" src="<?= base_url('assets/img/product/') . $c['image']; ?>" alt="image detail">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>