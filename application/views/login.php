<?php include 'header.php';?>
<div class="container">
    <div class="row justify-content-end">
        <div class="image image-log">
        </div>
        <div class="col-lg-7">
            <div class="log-reg-inner">
                <?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-danger" role="alert">
                    <center><?=$this->session->flashdata('message'); ?> </center>
                </div>
                <?php }?>
                <div class="section-header inloginp">
                    <h2 class="title">
                        Welcome to miDate
                    </h2>
                </div>
                <div class="main-content inloginp">
                    <form action="<?=base_url();?>Login/signin" method="post">
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="tel" class="my-form-control" name="phone" placeholder="Enter Your Phone"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="my-form-control" name="password"
                                placeholder="Enter Your Password" required>
                        </div>
                        <p class="f-pass">
                            Forgot your password? <a href="#">recover password</a>
                        </p>
                        <div class="button-wrapper">
                            <button type="submit" name="login" class="custom-button">Sign IN</button>
                        </div>
                        <div class="or">
                            <p>OR</p>
                        </div>
                        <div class="or-content">
                            <!--<p>Sign up with your email</p>
                  <a href="#" class="or-btn"><img src="assets/images/google.png" alt=""> Sign Up with Google</a>-->
                            <p class="or-signup">
                                Don't have an account? <a href="<?=base_url();?>Home/register">
                                    Sign up here
                                </a>
                            </p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'footer.php';?>