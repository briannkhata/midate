<?php include 'top.php';?>

<!-- ==========Breadcrumb-Section========== -->


<!-- ========= Profile Section Start -->
<?php foreach ($this->M_user->get_user_by_id($this->session->userdata('user_id')) as $row){?>
<section class="user-setting-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="page-title">
                    Profile Info
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="profile-about-box">
                            <div class="top-bg"></div>
                            <div class="p-inner-content">
                                <div class="profile-img">
                                    <img src="<?=base_url();?>assets/images/profile/profile-user.png" alt="">
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
                        Update Profile
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="my-input-box">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="<?=$row['name'];?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="my-input-box">
                                    <label for="">Gender</label>
                                    <select name="age_from" id="">
                                        <option <?php if($row['gender'] == 'Males') echo 'selected';?> value="Male">Male</option>
                                        <option <?php if($row['gender'] == 'Females') echo 'selected';?> value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="my-input-box">
                                    <label for="">Date of Birth</label>
                                    <input type="date" name="dob" value="<?=$row['dob'];?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="my-input-box">
                                    <label for="">Phone</label>
                                    <input type="tel" name="phone" value="<?=$row['phone'];?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="my-input-box">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="<?=$row['email'];?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Location</label>
                                    <input type="text" name="location" value="<?=$row['location'];?>">
                                </div>
                            </div>






                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Looking for</label>
                                    <select name="age_from" id="">
                                        <option <?php if($row['looking_for'] == 'Males') echo 'selected';?> value="Males">Male</option>
                                        <option <?php if($row['looking_for'] == 'Females') echo 'selected';?> value="Females">Females</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Age From</label>
                                    <select name="age_from" id="">
                                        <option <?php if($row['age_from'] == '18') echo 'selected';?> value="18">18</option>
                                        <option <?php if($row['age_from'] == '24') echo 'selected';?> value="24">24</option>
                                        <option <?php if($row['age_from'] == '30') echo 'selected';?> value="30">30</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Age To</label>
                                    <select name="age_to" id="age_to">
                                        <option <?php if($row['age_to'] == '24') echo 'selected';?> value="24">24</option>
                                        <option <?php if($row['age_to'] == '35') echo 'selected';?> value="35">35</option>
                                        <option <?php if($row['age_to'] == '40') echo 'selected';?> value="40">40</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">About</label>
                                    <textarea name="about" value="<?=$row['about'];?>"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons  mt-30">
                    <button type="submit" class="custom-button">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>
<!-- ========= Profile Section Start -->


<!-- ==========Newslater-Section========== -->
<?php include 'bottom.php';?>
