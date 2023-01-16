<?php include 'header.php';?>


<div class="container">
    <div class="row justify-content-end">
        <div class="image">
        </div>
        <div class="col-lg-7">
            <div class="log-reg-inner">
                <?php if ($this->session->flashdata('message')) { ?>

                <div class="alert alert-primary" role="alert">
                    <center><?=$this->session->flashdata('message'); ?> </center>
                </div>
                <?php }?>

                <div class="section-header">
                    <h2 class="title">
                        Welcome to miDate
                    </h2>
                    <p>
                        Let's create your profile! Just fill in the fields below, and
                        we’ll get a new account.
                    </p>
                </div>

                <div class="main-content">
                    <form action="<?=base_url();?>User/register" method="post">
                        <h4 class="content-title">Acount Details</h4>
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="tel" class="my-form-control" name="phone" id="phone"
                                placeholder="Enter Your Phone" required>
                        </div>

                        <div class="form-group">
                            <label for="">Password*</label>
                            <input type="password" class="my-form-control" name="password" id="password"
                                placeholder="Enter Your Password" required>
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password*</label>
                            <input type="password" class="my-form-control" id="cpassword" placeholder="Enter Your Password" required>
                        </div>
                        <h4 class="content-title mt-5">Profile Details</h4>
                        <div class="form-group">
                            <label for="">Name*</label>
                            <input type="text" class="my-form-control" name="name" id="name"
                                placeholder="Enter Your Full Name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Birthday*</label>
                            <input type="date" class="my-form-control">
                        </div>
                        <div class="form-group">
                            <label for="">I am a*</label>
                            <div class="option">
                                <div class="s-input nice-select-wraper">
                                    <select class="select-bar" name="gender" id="gender" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Looking for a*</label>
                            <div class="option">
                                <div class="s-input nice-select-wraper">
                                    <select class="select-bar" name="looking_for" id="looking_for" required>
                                        <option value="Man">Man</option>
                                        <option value="Woman">Woman</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Age From*</label>
                            <div class="option">
                                <div class="s-input nice-select-wraper">
                                    <select class="select-bar" name="age_from" id="age_from" required>
                                        <option value="18">18</option>
                                        <option value="20">20</option>
                                        <option value="24">24</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Age To*</label>
                            <div class="option">
                                <div class="s-input nice-select-wraper">
                                    <select class="select-bar" name="age_to" id="age_to" required>
                                        <option value="30">30</option>
                                        <option value="35">35</option>
                                        <option value="40">40</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Your Location*</label>
                            <input type="text" class="my-form-control" name="location"
                                placeholder="Enter Your Location" required>
                        </div>
                        <button type="submit" class="custom-button" id="regBTN">Create Your
                            Profile</button>

                        <div class="or">
                            <p>OR</p>
                        </div>
                        <div class="or-content">
                            <!--<p>Sign up with your email</p>
                  <a href="#" class="or-btn"><img src="assets/images/google.png" alt=""> Sign Up with Google</a>-->
                            <p class="or-signup">
                                Already have an account? <a href="<?=base_url();?>Home">
                                    Login in here
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

<!-- ========== Login & Registation Section ========== -->

<!-- Modal -->
<div class="modal fade" id="email-confirm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="top-img">
                    <img src="assets/images/c-image.png" alt="">
                </div>
                <div class="main-content">
                    <h4 class="title">
                        Check Your Inbox, Please!
                    </h4>
                    <p>
                        A link to verify account has been sent to the email supplied. Please open the link and follow
                        the prompts
                        to verify
                        email.
                    </p>
                    <p class="send-again">
                        Didn't get e-mail? <a href="#">
                            Send it again
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php';?>
<script>
    $('#cpassword').focusout(function(){
        var pass = $('#password').val();
        var pass2 = $('#cpassword').val();
        if(pass != pass2){
            alert('The passwords didn\'t match!');
            $('#regBTN').prop('disabled',true);
        }else{
          $('#regBTN').prop('disabled',false);
        }
    });
</script>