<?php include 'header.php';?>
<div class="container">
    <div class="row justify-content-end">
        <div class="image">
        </div>
        <div class="col-lg-7">
            <div class="log-reg-inner">
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
                    <form action="#">
                        <h4 class="content-title">Acount Details</h4>
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="tel" class="my-form-control" placeholder="Enter Your Phone">
                        </div>
                       
                        <div class="form-group">
                            <label for="">Password*</label>
                            <input type="text" class="my-form-control" placeholder="Enter Your Password">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password*</label>
                            <input type="text" class="my-form-control" placeholder="Enter Your Password">
                        </div>
                        <h4 class="content-title mt-5">Profile Details</h4>
                        <div class="form-group">
                            <label for="">Name*</label>
                            <input type="text" class="my-form-control" placeholder="Enter Your Full Name">
                        </div>
                        <div class="form-group">
                            <label for="">Birthday*</label>
                            <input type="date" class="my-form-control">
                        </div>
                        <div class="form-group">
                            <label for="">I am a*</label>
                            <div class="option">
                                <div class="s-input mr-3">
                                    <input type="radio" name="gender1" id="males1"><label for="males1">Man</label>
                                </div>
                                <div class="s-input">
                                    <input type="radio" name="gender1" id="females1"><label for="females1">Woman</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Looking for a*</label>
                            <div class="option">
                                <div class="s-input mr-3">
                                    <input type="radio" name="gender2" id="males"><label for="males">Man</label>
                                </div>
                                <div class="s-input">
                                    <input type="radio" name="gender2" id="females"><label for="females">Woman</label>
                                </div>
                            </div>
                        </div>
                       <!-- <div class="form-group">
                            <label for="">Marial status*</label>
                            <div class="option">
                                <div class="s-input nice-select-wraper">
                                    <select class="select-bar">
                                        <option value="">Single</option>
                                        <option value="">Marid</option>
                                        <option value="">Marid</option>
                                        <option value="">Marid</option>
                                    </select>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label for="">Location*</label>
                            <input type="text" class="my-form-control" placeholder="Enter Your City">
                        </div>
                        <button class="custom-button" data-toggle="modal" data-target="#email-confirm">Create Your
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