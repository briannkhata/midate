<?php include 'top.php';?>
    <!-- ==========Breadcrumb-Section========== -->

    <!-- ==========Community-Section========== -->
    <section class="community-section inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-filter">
                        <div class="left">
                            <a href="#"  data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-sliders-h"></i>  Filter your search
                            </a>
                        </div>
                        <div class="right">
                            <span class="span">
                                Order By : 
                            </span>
                            <div class="filter-right">
                                <select class="nice-select select-bar">
                                    <option value="">Lcation</option>
                                    <option value="">Age</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($this->M_user->get_users2() as $row){?>
                <div class="col-lg-6">
                    <div class="single-friend">
                        <img src="<?=base_url();?>assets/images/profile/friend1.png" alt="<?=$row['name'];?>">
                        <div class="content">
                            <a href="<?=base_url();?>User/profile/<?=$row['user_id'];?>" class="name">
                                <?=$row['name'];?> | <?=$row['gender'];?>
                            </a>
                            <p class="date">
                                <?=$row['location'];?>
                            </p>
                            <hr>
                            <a href="<?=base_url();?>User/profile/<?=$row['user_id'];?>" class="connnect-btn">
                                <i class="fa fa-thumbs-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
    <?php }?>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-area text-center">
                        <a href="#"><i class="fas fa-angle-double-left"></i><span></span></a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#" class="active">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Community-Sectionn========== -->
    <?php include 'bottom.php';?>