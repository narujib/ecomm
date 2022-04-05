<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Product</h2>
            </div>
        </div>
    </div>
</section>

<section class="service-2 section">
    <div class="container">
        <div class="row">

            <?php foreach ($product as $c) : ?>
                <a href="<?= base_url(); ?>home/productSingle/<?= $c['id'] ?>" class="text-reset col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <img src="<?= base_url('assets/img/product/') . $c['image']; ?>" class="img-fluid img-thumbnail">
                        <h4 class="mt-3"><?= $c['title']; ?></h4>

                        <p class="text-muted font-italic">
                            <?= date('d F Y', $c['create_at']); ?> / <?= $c['jurusan']; ?>
                        </p>
                        <p><?= $c['description']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
            <!-- END COL -->


        </div>
    </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->