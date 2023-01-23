
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/animate.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/odometer.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/main.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/responsive.css">
    <!-- <link rel="stylesheet" href="assets/css/dark.css"> -->
    <link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.png" type="image/x-icon">
    <title>miDate :: <?=$page_title;?></title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="#">
                    <img src="<?=base_url();?>assets/images/logo/logo.png" alt="logo">
                </a>
            </div>
           <ul class="menu">
                <li>
                    <a href="<?=base_url();?>User/members">Members</a>
                </li>
                <li>
                    <a href="<?=base_url();?>User/messages">Chat Requests</a>
                </li>
                <li>
                    <a href="<?=base_url();?>User/membership">Membership</a>
                </li>
                <li>
                    <a href="<?=base_url();?>User/my_profile">Profile</a>
                </li>
                <li class="separator">
                    <span>|</span>
                </li>
               
                <li class="user-profile">
                    <a href="#">
                        <img src="<?=base_url();?>assets/images/user-demo.png" alt="">
                        <?=$this->session->userdata('name');?>
                    </a>
                    <ul class="submenu">

                        <li>
                            <a href="<?=base_url();?>User/change_password/<?=$this->session->userdata('user_id');?>">Change Password</a>
                        </li>
                        <hr>
                        <li>
                            <a href="<?=base_url();?>User/upload_photos">Upload Photos</a>
                        </li>

                        <hr>
                        <li>
                            <a href="<?=base_url();?>User/update_profile">Update Profile</a>
                        </li>
                        <hr>
                        <li>
                            <a href="<?=base_url();?>User/close_account">Close Account</a>
                        </li>
                        <hr>
                        <li>
                            <a href="<?=base_url();?>Login/logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
    <div class="search-overlay">
        <div class="close"><i class="fas fa-times"></i></div>
        <form action="#">
            <input type="text"  placeholder="Write what you want..">
        </form>
    </div>
    <!-- ==========Header-Section========== -->

    <!-- ==========Breadcrumb-Section========== -->
    <section class="breadcrumb-area profile-bc-area">
        <div class="container">
            <div class="content">
              
            </div>
        </div>
    </section>