
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$page_title;?></title>

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


            <div class="col-12">
                <h2 class="mb-4">1. Tell Us Who You Are</h2>
                <p class="lead mb-4"> To get started, create an account on our platform by providing your basic information, such as your name, age, and gender.
                    You can also add a profile picture and write a short bio to let others know more about you.</p>

            </div>
        <div class="col-12">
            <h2 class="mb-4">2. Find the Right Person</h2>
                <p class="lead mb-4">
                    Once you've created an account, you can browse through profiles of other members on our platform. You can filter profiles based on your preferences, such as age, location, interests, etc.
                    You can also see if someone is online and start a chat with them.
                </p>

            </div>


        <div class="col-12">
            <h2 class="mb-4">3. Connect</h2>
                <p class="lead mb-4">
                    If you find someone who you're interested in, you can send them a message or a virtual "wink" to let them know that you're interested in getting to know them better.
                    If they're also interested, they'll respond to your message or wink, and you can start a conversation.
                </p>

        </div>
            <div class="col-12">
                <h2 class="mb-4">4. Get to know each other</h2>
                <p class="lead mb-4">
                     As you chat with someone, you can get to know them better by asking questions about their interests, hobbies, and life goals.
                    You can also exchange photos, share funny stories, and discuss your favorite movies, books, or TV shows.
                </p>

            </div>

        <div class="col-12">
            <h2 class="mb-4">5.  Meet in person</h2>
            <p class="lead mb-4">
               If you feel a connection with someone, you can arrange to meet in person. We recommend meeting in a public place and taking things slow at first.
                Remember to stay safe and take precautions while getting to know someone.
            </p>

        </div>

        <div class="col-12">
            <h2 class="mb-4">6. Take it from there</h2>
            <p class="lead mb-4">
                After your first meeting, you can decide if you want to continue seeing each other. If things go well, you can start dating exclusively and build a meaningful relationship.
                If not, you can always go back to browsing profiles and searching for your perfect match..
            </p>

        </div>

        <div class="col-12">
            <p class="lead mb-4">
                At our dating platform, we're committed to providing a safe and enjoyable experience for all our members. We hope that you'll find love and happiness here!
            </p>

        </div>

    </div>
</section>
<!-- ./ Features -->

<!-- Newsletter -->
<?php include 'footer.php';?>