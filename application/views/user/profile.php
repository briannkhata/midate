<?php include 'top.php';?>

    <!-- ==========Header-Section========== --> 

    <!-- ========= Profile Section Start -->
    <section class="profile-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7">
                    <div class="left-profile-area">
                        <div class="profile-about-box">
                            <div class="top-bg"></div>
                            <div class="p-inner-content">
                                <div class="profile-img">
                                    <img src="<?=base_url();?>assets/images/profile/profile-user.png" alt="">
                                    <div class="active-online"></div>
                                </div>
                                <h5 class="name">
                                    Albert Don
                                </h5>
                                <ul class="p-b-meta-one">
                                    <li>
                                        <span>21 Years Old</span>
                                    </li>
                                    <li>
                                        <span> <i class="fas fa-map-marker-alt"></i>Paris,France</span>
                                    </li>
                                </ul>
                                <div class="p-b-meta-two">
                                    <div class="left">
                                        <div class="icon">
                                            <i class="far fa-heart"></i>
                                        </div> 257
                                    </div>
                                    <div class="right">
                                        <a href="#" class="custom-button">
                                            <i class="fab fa-cloudversify"></i> Get Premium
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-meta-box">
                            <ul class="p-m-b">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#usermessage">
                                        <i class="far fa-envelope"></i>
                                        <div class="number">04</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#usernotification">
                                        <i class="far fa-bell"></i>
                                        <div class="number">04</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-cogs"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-uplodate-photo">
                            <h4 class="p-u-p-header">
                                <i class="fas fa-camera"></i> 21 Upload Photos 
                            </h4>
                            <div class="p-u-p-list">
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up1.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up1.jpg" class="img-popup"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up2.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up2.jpg" class="img-popup"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up3.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up3.jpg" class="img-popup"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up4.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up4.jpg" class="img-popup"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up5.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up5.jpg" class="img-popup"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up6.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up6.jpg" class="img-popup"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="profile-main-content">
                        <ul class="top-menu">
                            <li>
                                <a href="single-profile.html" class="active">
                                    Activity 
                                </a>
                            </li>
                            <li>
                                <a href="single-profile2.html">
                                    Profile 
                                </a>
                            </li>
                            <li>
                                <a href="single-profile3.html">
                                    Friends  
                                    <div class="num">04</div>
                                </a>
                            </li>
                            <li>
                                <a href="profile-notfound.html">
                                    Groups 
                                    <div class="num">14</div>
                                </a>
                            </li>
                            <li>
                                <a href="profile-notfound.html">
                                    Media 
                                    <div class="num">47</div>
                                </a>
                            </li>
                        </ul>
                        <ul class="top-menu-two">
                            <li>
                                <a href="#" class="active">
                                    Personal
                                </a>
                            </li>
                            <li>
                                <a href="profile-notfound.html">
                                    Favorites 
                                </a>
                            </li>
                            <li>
                                <a href="profile-notfound.html">
                                    Friends
                                </a>
                            </li>
                            <li>
                                <a href="profile-notfound.html">
                                    Groups 
                                </a>
                            </li>
                            <li>
                                <select class="nice-select select-bar">
                                    <option value="">ALL</option>
                                    <option value="">NEW</option>
                                    <option value="">OLD</option>
                                    <option value="">POPULAR</option>
                                </select>
                            </li>
                        </ul>
                        <div class="write-post-area">
                            <div class="write-area">
                                <img src="assets/images/profile/profile-user-sm.png" alt="">
                                <textarea placeholder="What's on your mind,Vernon"></textarea>
                            </div>
                            <div class="submit-area">
                                <div class="left">
                                    <a href="#" class="upload-btn">
                                        <i class="fas fa-paperclip"></i>
                                    </a>
                                    <div class="select-area">
                                        <select class="nice-select select-bar">
                                            <option value="">Public</option>
                                            <option value="">Friends</option>
                                            <option value="">Onlu me</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="right">
                                    <a href="#" class="custom-button">
                                        Post
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-single-post">
                            <div class="p-s-p-header-area">
                                <div class="img">
                                    <img src="assets/images/profile/profile-user-sm.png" alt="">
                                    <div class="active-online"></div>
                                </div>
                                <h6 class="name">
                                    Albert Don
                                </h6>
                                <span class="is-varify">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="usewrname">
                                    @albertdon
                                </span>
                                <span class="post-time">
                                    . 19h
                                </span>
                            </div>
                            <div class="p-s-p-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur 
                                    adipiscing elit. Nam vel porta felis.
                                </p>
                            </div>
                            <div class="p-s-p-content-footer">
                                <div class="left">
                                    <a href="#" class="comment">Comment</a>
                                    <a href="#" class="link"><i class="far fa-star"></i></a>
                                </div>
                                <div class="right">
                                    <a href="#" class="link"><i class="far fa-star"></i></a>
                                    <select class="nice-select select-bar">
                                        <option value="">ALL</option>
                                        <option value="">NEW</option>
                                        <option value="">OLD</option>
                                        <option value="">POPULAR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="profile-single-post">
                            <div class="p-s-p-header-area">
                                <div class="img">
                                    <img src="assets/images/profile/profile-user-sm.png" alt="">
                                    <div class="active-online"></div>
                                </div>
                                <h6 class="name">
                                    Albert Don
                                </h6>
                                <span class="is-varify">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="usewrname">
                                    @albertdon
                                </span>
                                <span class="post-time">
                                    . 19h
                                </span>
                            </div>
                            <div class="p-s-p-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur 
                                    adipiscing elit. Nam vel porta felis.
                                </p>
                                <img src="assets/images/profile/s-p-img1.jpg" alt="">
                            </div>
                            <div class="p-s-p-content-footer">
                                <div class="left">
                                    <a href="#" class="comment">Comment</a>
                                    <a href="#" class="link"><i class="far fa-star"></i></a>
                                </div>
                                <div class="right">
                                    <a href="#" class="link"><i class="far fa-star"></i></a>
                                    <select class="nice-select select-bar">
                                        <option value="">ALL</option>
                                        <option value="">NEW</option>
                                        <option value="">OLD</option>
                                        <option value="">POPULAR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="profile-single-post">
                            <div class="p-s-p-header-area">
                                <div class="img">
                                    <img src="assets/images/profile/profile-user-sm.png" alt="">
                                    <div class="active-online"></div>
                                </div>
                                <h6 class="name">
                                    Albert Don
                                </h6>
                                <span class="is-varify">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="usewrname">
                                    @albertdon
                                </span>
                                <span class="post-time">
                                    . 19h
                                </span>
                            </div>
                            <div class="p-s-p-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur 
                                    adipiscing elit. Nam vel porta felis.
                                </p>
                            </div>
                            <div class="p-s-p-content-footer">
                                <div class="left">
                                    <a href="#" class="comment">Comment</a>
                                    <a href="#" class="link"><i class="far fa-star"></i></a>
                                </div>
                                <div class="right">
                                    <a href="#" class="link"><i class="far fa-star"></i></a>
                                    <select class="nice-select select-bar">
                                        <option value="">ALL</option>
                                        <option value="">NEW</option>
                                        <option value="">OLD</option>
                                        <option value="">POPULAR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="load-more">Load More..</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-7">
                    <div class="profile-aside-area">
                        <div class="other-profile">
                            <div class="o-p-header">
                                <h6 class="title">
                                    You may like
                                </h6>
                            </div>
                            <div class="o-p-content">
                                <div class="p-u-p-list-slider owl-carousel">
                                    <div class="slider-item">
                                        <div class="p-u-p-list">
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img1.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img2.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img3.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img4.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img5.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img6.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img7.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img8.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <div class="p-u-p-list">
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img1.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img2.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img3.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img4.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img5.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img6.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img7.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img8.png" alt="">
                                                    <a href="single-profile.html" class=""><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-request">
                            <div class="c-r-heading">
                                <h6 class="title">
                                    <i class="far fa-comments"></i> Chat Request
                                </h6>
                            </div>
                            <div class="c-r-content">
                                <div class="c-r-content-list">
                                    <div class="single-c-r">
                                        <div class="left">
                                            <img src="assets/images/profile/c-r-img1.png" alt="">
                                            <div class="active-online"></div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                laura maria
                                            </h4>
                                            <p>
                                                true love is...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-c-r">
                                        <div class="left">
                                            <img src="assets/images/profile/c-r-img2.png" alt="">
                                            <div class="active-online"></div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                laura maria
                                            </h4>
                                            <p>
                                                true love is...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-c-r">
                                        <div class="left">
                                            <img src="assets/images/profile/c-r-img3.png" alt="">
                                            <div class="active-online"></div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                laura maria
                                            </h4>
                                            <p>
                                                true love is...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="load-more">
                                    load More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= Profile Section Start -->

    <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
       
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
                                       <i class="fas fa-angle-double-right"></i>  About Us
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
                                       <i class="fas fa-angle-double-right"></i>  Business License
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
                                       <i class="fas fa-angle-double-right"></i>  Safety Tips
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