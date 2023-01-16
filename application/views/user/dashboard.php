<?php include 'top.php';?>

<!-- ==========Breadcrumb-Section========== -->

<section class="user-setting-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-5">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span>My Profile</span>
                                <div class="t-icon">
                                    <i class="fas fa-plus"></i>
                                    <i class="fas fa-minus"></i>
                                </div>
                            </button>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="links">
                                    <li>
                                        - <a class="active" href="user-setting.html">Users</a>
                                    </li>
                                    <li>
                                        - <a href="user-setting.html">Profile Info</a>
                                    </li>
                                    <li>
                                        <a href="user-notification.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="user-friend-request.html">Friend Requests</a>
                                    </li>
                                    <li>
                                        <a href="user-badges.html">Badges</a>
                                    </li>
                                    <li>
                                        <a href="user-badges.html"> - Photos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <span>
                                    Account
                                </span>
                                <div class="t-icon">
                                    <i class="fas fa-plus"></i>
                                    <i class="fas fa-minus"></i>
                                </div>
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="links">
                                    <li>
                                        <a href="user-account-info.html">Account Info</a>
                                    </li>
                                    <li>
                                        <a href="user-change-pass.html">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="user-privicy-setting.html">Privacy Settings</a>
                                    </li>
                                    <li>
                                        <a href="user-verify-account.html">Verified account</a>
                                    </li>
                                    <li>
                                        <a href="user-close-account.html">Close Account</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <div class="icon">
                                    <i class="far fa-credit-card"></i>
                                </div>
                                <span>
                                    Subscriptions & Payments
                                </span>
                                <div class="t-icon">
                                    <i class="fas fa-plus"></i>
                                    <i class="fas fa-minus"></i>
                                </div>
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="links">
                                    <li>
                                        <a href="user-billing.html">Billing & Payout</a>
                                    </li>
                                    <li>
                                        <a href="user-plan.html">Upgrade Membership Plan</a>
                                    </li>
                                    <li>
                                        <a href="user-purchase.html">View Purchase History</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-7 ">
                <div class="page-title">
                    Profile Info
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="profile-about-box">
                            <div class="top-bg"></div>
                            <div class="p-inner-content">
                                <div class="profile-img">
                                    <img src="assets/images/profile/profile-user.png" alt="">
                                    <div class="active-online"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="up-photo-card mb-30">
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="content">
                                <h4>
                                    Change Avatar
                                </h4>
                                <span>
                                    120x120p size minimum
                                </span>
                            </div>
                        </div>
                        <div class="up-photo-card">
                            <div class="icon">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="content">
                                <h4>
                                    Change Cover
                                </h4>
                                <span>
                                    1200x300p size minimum
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-info-box mt-30">
                    <div class="header">
                        About your Profile
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Profile Name</label>
                                    <input type="text" placeholder="Profile Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Public Email</label>
                                    <input type="text" placeholder="Public Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <textarea name="" placeholder="Write a little description about you..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Country</label>
                                    <select name="" id="">
                                        <option value="" disabled selected>Select Country</option>
                                        <option value="">United State</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">City</label>
                                    <select name="" id="">
                                        <option value="" disabled selected>Select City</option>
                                        <option value="">New Work</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Birthday</label>
                                    <input type="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Occupation</label>
                                    <input type="text" placeholder="Occupation">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Status</label>
                                    <select name="" id="">
                                        <option value="">In a Relationship</option>
                                        <option value="">Single</option>
                                        <option value="">Marid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Birthplace</label>
                                    <input type="text" placeholder="Birthplace">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-info-box mt-30">
                    <div class="header">
                        Interests
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Favourite TV Shows</label>
                                    <textarea name="" placeholder="Favourite TV Shows"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Favourite Music Bands / Artists</label>
                                    <textarea name="" placeholder="Favourite Music Bands / Artists"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Favourite Movies</label>
                                    <textarea name="" placeholder="Favourite Movies"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Favourite Games </label>
                                    <textarea name="" placeholder="Favourite Games "></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Favourite Games </label>
                                    <textarea name="" placeholder="Favourite Games"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-info-box mt-30">
                    <div class="header">
                        Jobs & Education
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Title or Place</label>
                                    <input type="text" placeholder="Title or Place">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Year Started</label>
                                    <select name="" id="">
                                        <option value="">2014</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Year End</label>
                                    <select name="" id="">
                                        <option value="">2017</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Description</label>
                                    <textarea name="" id="" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Title or Place</label>
                                    <input type="text" placeholder="Title or Place">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Year Started</label>
                                    <select name="" id="">
                                        <option value="">2014</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Year End</label>
                                    <select name="" id="">
                                        <option value="">2017</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Description</label>
                                    <textarea name="" id="" placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons  mt-30">
                    <button type="submit" class="custom-button">Save Changes</button>
                    <button class="custom-button2">Discard All</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========= Profile Section Start -->


<!-- ==========Newslater-Section========== -->
<footer class="footer-section">
    <img class="shape1" src="assets/images/footer/f-shape.png" alt="">
    <img class="shape2" src="assets/images/footer/flower01.png" alt="">
    <img class="shape3" src="assets/images/footer/right-shape.png" alt="">
    <div class="newslater-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="newslater-container">
                        <div class="newslater-wrapper">
                            <div class="icon">
                                <img src="assets/images/footer/n-icon.png" alt="">
                            </div>
                            <p class="text">Sign up to recieve a monthly email on the latest news!</p>
                            <form class="newslater-form">
                                <input type="text" placeholder="Your Email Address">
                                <button type="submit">
                                    <i class="fab fa-telegram-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-links">
            <div class="row">
                <div class="col-lg-12">
                    <hr class="hr">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="link-wrapper one">
                        <h4 class="f-l-title">
                            Our Information
                        </h4>
                        <ul class="f-solial-links">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Customer Reviews
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Success Stories
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Business License
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="link-wrapper two">
                        <h4 class="f-l-title">
                            My Account
                        </h4>
                        <ul class="f-solial-links">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Manage Account
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Safety Tips
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Account Varification
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Safety & Security
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Membership Level
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php include 'bottom.php';?>