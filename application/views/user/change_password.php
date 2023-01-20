<?php include 'top.php';?>

    <!-- ==========Breadcrumb-Section========== -->


<!-- ========= Profile Section Start -->

<section class="user-setting-section">
    <div class="container">
        <div class="row">
            <form action="<?=base_url();?>User/update_password" method="post">
                <?php if ($this->session->flashdata('message')) { ?>
                    <div class="alert alert-info" role="alert">
                        <?=$this->session->flashdata('message'); ?>
                    </div>
                <?php }?>
            <div class="col-xl-12 col-md-12 ">

                <div class="input-info-box mt-30">
                    <div class="header">
                        Change Password
                    </div>
                    <div class="content">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">New Password</label>
                                    <input type="password" name="password" id="password" placeholder="Enter   New Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Confirm New  Password</label>
                                    <input type="password" id="ConfirmPassword" placeholder="Enter Confirm  Password">
                                </div>
                            </div>
                            <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
                        </div>
                    </div>
                </div>
                <div class="buttons  mt-30">
                    <button type="submit" class="custom-button" id="sabumiti">Save Changes</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>

<!-- ========= Profile Section Start -->


<!-- ==========Newslater-Section========== -->
<?php include 'bottom.php';?>
<script>
    $(document).ready(function () {
        $("#ConfirmPassword").on('keyup', function(){
            var password = $("#password").val();
            var confirmPassword = $("#ConfirmPassword").val();
            if (password != confirmPassword) {
                $("#CheckPasswordMatch").html("Password does not match !").css("color", "red");
                $("#sabumiti").prop("disabled", true);
            }
            else {
                $("#CheckPasswordMatch").html("Password match !").css("color", "green");
                $("#sabumiti").prop("disabled", false);
            }
        });
    });
</script>

