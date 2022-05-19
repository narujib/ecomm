<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/colors.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
    <link rel="shortcut icon" href="<?= base_url('assets/img/'); ?>smkjateng.png">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- fancybox -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
</head>

<body>
    <!-- TOPBAR -->
    <div class="topbar">
        <div class="container pt-2 pb-2">
            <div class="row">
                <div class="col-sm-6">
                    <div class="info-box">
                        <div class="info-item">
                            <i class="fas fa-phone"></i> 024-86570267
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i> <a href="mailto:humas@smknjateng.sch.id"> humas@smknjateng.sch.id</a>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-sign-in-alt"></i><a href="<?= base_url('auth'); ?>"> Login as admin</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-links content-right">
                        <a href="#" class="fb">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="tw">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="ig">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>