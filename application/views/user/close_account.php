<?php include 'top.php';?>
<!-- ==========Breadcrumb-Section========== -->


<!-- ========= Profile Section Start -->
<form action="<?=base_url();?>User/close_account2" method="post">
<section class="user-setting-section">
    <div class="container">
        <div class="row">

            <div class="col-xl-8 col-md-7 ">
                <div class="page-title">
                    Close Account
                </div>

                <div class="input-info-box mt-30">
                    <div class="header">
                        Warning:
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    If you close your account, you will be unsubscribed from all your followers and friends,
                                    and will lose access forever.
                                </p>
                                <div class="my-input-box">
                                    <input type="text" placeholder="Reason for closing the Account">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons  mt-30">
                    <button type="submit" class="custom-button">Delete Account</button>
                </div>
            </div>
        </div>
    </div>
</section>
</form>

<!-- ========= Profile Section Start -->


<!-- ==========Newslater-Section========== -->
<?php include 'bottom.php';?>
