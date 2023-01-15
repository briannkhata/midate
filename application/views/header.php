<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MCH</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/fav-icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/fav-icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/fav-icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/fav-icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/fav-icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/fav-icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/fav-icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/fav-icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/fav-icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fav-icon/favicon-16x16.png">


    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/custom/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/responsive/responsive.css">


    <!--[if lt IE 9]>
   		<script src="js/html5shiv.js"></script>
	<![endif]-->



</head>

<body class="home">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- pre loader  -->

    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

    <!-- Scroll Top Button -->
    <button class="scroll-top transition3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>





    <!-- ========================== Header ==================== -->

    <header class="main_menu">
        <div class="container nav_wrapper">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <img alt="Brand" src="<?=base_url();?>assets/images/logo/logo3.png" class="img-responsive" width="150px" height="92px">
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?=base_url();?>" class="transition-ease">Home</a></li>
                        <li><a href="<?=base_url();?>home/about" class="transition-ease">Who We Are</a></li>
                        <li><a href="<?=base_url();?>home/clients" class="transition-ease">Clients</a></li>
                        <li><a href="<?=base_url();?>home/contact" class="transition-ease">CONTACT US</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <!-- Search Option -->

        </div><!--  End of .nav_wrapper -->
    </header>