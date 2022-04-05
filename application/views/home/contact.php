<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact Detail</h2>
            </div>
        </div>
    </div>
</section>

<section class="service-2 section">
    <div class="container">
        <div class="row">

            <div class="col">
                <div class="row">
                    <?php foreach ($jurusan as $j) : ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                            <div class="service-item">

                                <i class="tf-ion-ios-briefcase-outline"></i>

                                <h4 class=""><?= $j['jurusan']; ?></h4>
                                <p>Whatsapp : <?= $j['wa']; ?></p>
                                <p>Email : <?= $j['email']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- END COL -->

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->