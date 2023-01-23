<?php include 'top.php';?>

    <!-- ==========Header-Section========== --> 

    <!-- ========= Profile Section Start -->
<?php foreach ($this->M_user->get_user_by_id($this->session->userdata('user_id')) as $row){?>
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
                                    <?=$row['name'];?>
                                </h5>
                                <ul class="p-b-meta-one">
                                    <li>
                                        <span><?=date('Y-m-d') - date('Y-m-d',strtotime($row['dob']));?> Years Old</span>
                                    </li>
                                    <li>
                                        <span> <i class="fas fa-map-marker-alt"></i><?=$row['location'];?></span>
                                    </li>
                                </ul>
                                <div class="p-b-meta-two">
                                    <div class="left">
                                        <div class="icon">
                                            <i class="far fa-thumbs-up"></i>
                                        </div> <?=count($this->M_user->get_user_likes($this->session->userdata('user_id')));?>
                                    </div>
                                   <div class="right">
                                        <a href="#" class="custom-button">
                                        <?=$row['gender'];?>
                                        </a>
                                    </div>
                                </div>
                                 <hr>
                              
                                <div class="p-b-meta-two">
                                    <div class="left">
                                        Looking for
                                    </div>
                                    <div class="right">
                                        <?=$row['looking_for'];?>
                                    </div>
                                </div>
                                <div class="p-b-meta-two">
                                    <div class="left">
                                        Age Range
                                    </div>
                                    <div class="right">
                                        <?=$row['age_from'];?> To <?=$row['age_to'];?> Yrs
                                    </div>
                                </div>


                            </div>

                        </div>
                       <!-- <div class="profile-meta-box">
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
                        </div>-->
                        <div class="profile-uplodate-photo">
                           <!-- <h4 class="p-u-p-header">
                                <i class="fas fa-camera"></i> 3 Upload Photos
                            </h4>-->
                            <div class="p-u-p-list">
                                <?php foreach($this->M_user->get_my_photos($row['user_id']) as $loko){?>
                                    <div class="my-col">
                                        <div class="img">
                                            <img src="<?=base_url();?>uploads/users/<?=$loko['photo'];?>" alt="">
                                            <div class="overlay">
                                                <a href="<?=base_url();?>uploads/users/<?=$loko['photo'];?>" class="img-popup"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
              <div class="col-xl-5 col-lg-6">
                    <div class="profile-main-content">

                    <div class="profile-friends">
                            <div class="single-friend">
                                <img src="<?=base_url();?>assets/images/profile/friend1.png" alt="">
                                <div class="content">
                                    <a href="community-single.html" class="name">
                                        Erma Porter
                                      
                                    </a>
                                    <p class="date">
                                        a month ago
                                    </p>
                                    <a href="community-single.html" class="connnect-btn">
                                        View
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }?>
    <!-- ========= Profile Section Start -->

    <!-- ==========Newslater-Section========== -->
<?php include 'bottom.php';?>
