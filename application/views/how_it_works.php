
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How it Works</title>

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url();?>dist/media/img/favicon.png" type="image/png">

    <!-- Google Nunito font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">

    <!-- Material design icons -->
    <link href="<?=base_url();?>dist/icons/materialicons/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Bundle styles -->
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/bundle.css">

    <!-- Slick -->
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/slick/slick.css">

    <!-- Fancybox -->
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/fancybox/jquery.fancybox.min.css" type="text/css"/>

    <!-- Aos animate -->
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/aos/aos.css" type="text/css"/>

    <!-- Landing page styles -->
    <link rel="stylesheet" href="<?=base_url();?>dist/css/landing-page.min.css">
</head>
<body>

<!-- Navbar -->
<?php include 'menu.php';?>

<!-- ./ Navbar -->

<!-- Features -->
<section class="py-8">
    <div class="container">

        <div class="row align-items-center justify-content-between py-8">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <img data-aos="zoom-in-right img-shadow" src="<?=base_url();?>dist/htw/icon1.png" class="img-fluid" alt="...">
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-2 col-lg-5 text-center text-lg-left mb-5 mb-lg-0">
                <h2 class="mb-4">Tell Us Who You Are</h2>
                <p class="lead mb-4">If you need a landing page for your application, <strong>Tinno</strong> meets your
                    needs. You can quickly create your front page with featured pages and widgets.</p>

            </div>
        </div>
        <div class="row align-items-center justify-content-between py-8">
            <div class="col-12 col-lg-6 text-center text-lg-left mb-5 mb-lg-0">
                <h2 class="mb-4">Find the Right Person</h2>
                <p class="lead mb-4"><strong>Tinno</strong> goes beyond standard molds and offers you a good design.
                    Moreover, it has an easily editable code structure.</p>

            </div>
            <div class="col-12 col-lg-5 offset-lg-1">
                <img data-aos="zoom-in-left"
                     src="<?=base_url();?>dist/htw/icon2.png" class="img-fluid"
                     alt="...">
            </div>
        </div>
        <div class="row align-items-center justify-content-between py-8">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <img data-aos="zoom-in-right"
                     src="<?=base_url();?>dist/htw/icon4.png" class="img-fluid"
                     alt="...">
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-2 col-lg-5 text-center text-lg-left mb-5 mb-lg-0">
                <h2 class="mb-4">Start Dating</h2>
                <p class="lead mb-4">We've put together what you may need to build your application. Call screens, chat
                    windows, emojis, permanent boxes and more are waiting for you.</p>

            </div>
        </div>
        <div class="row align-items-center justify-content-between py-8">
            <div class="col-12 col-lg-6 order-2 order-lg-1 col-lg-5 text-center text-lg-left mb-5 mb-lg-0">
                <h2 class="mb-4">Marry Each Other if All is good</h2>
                <p class="lead mb-4"><strong>Tinno</strong> has a design that looks great on many devices. It can run
                    smoothly on all new generation browsers.</p>

            </div>
            <div class="col-12 col-lg-5 offset-lg-1 order-2 order-lg-1">
                <img data-aos="zoom-in-left"
                     src="<?=base_url();?>dist/htw/icon3.png" class="img-fluid"
                     alt="...">
            </div>
        </div>
    </div>
</section>
<!-- ./ Features -->

<!-- Newsletter -->
<?php include 'footer.php';?>