<?php include 'top.php';?>
<!-- ==========Breadcrumb-Section========== -->


<!-- ========= Profile Section Start -->

<section class="user-setting-section">
    <div class="container">
        <div class="row">
            <?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-info" role="alert">
                    <?=$this->session->flashdata('message'); ?>
                </div>
            <?php }?>
            <form action="<?=base_url();?>User/add_photo" method="post" enctype="multipart/form-data">
                <div class="col-xl-12 col-md-12">
                    <div class="input-info-box mt-30">
                        <div class="header">
                            Upload Photo
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        Upload Photos. You have a space of 4 photos.
                                    </p>
                                    <div class="my-input-box">
                                        <input type="file" name="photo" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttons  mt-30">
                        <button type="submit" class="custom-button">Upload</button>
                    </div>
                </div>
             </form>
        </div>
    </div>
</section>

<!-- ========= Profile Section Start -->


<!-- ==========Newslater-Section========== -->
<?php include 'bottom.php';?>
