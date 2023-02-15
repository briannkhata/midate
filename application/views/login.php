<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$this->db->get('tblsettings')->row()->app;?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url();?>dist/media/img/favicon.png" type="image/png">

    <!-- Google Nunito font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- Material design icons -->
    <link href="<?=base_url();?>dist/icons/materialicons/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.0/dist/sweetalert2.min.css">

    <!-- Bundle Styles -->
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/bundle.css">

    <!-- Landing page styles -->
    <link rel="stylesheet" href="<?=base_url();?>dist/css/landing-page.min.css">
</head>
<body class="auth" style="background: url(<?=base_url();?>dist/media/img/auth.jpg)">

<div class="form-wrapper">
    <!-- logo -->
    <div class="logo my-5">
        <img src="<?=base_url();?>dist/media/img/logo-full-2x.png" alt="logo">
    </div>
    <!-- ./ logo -->

    <?php if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-danger" role="alert">
            <?=$this->session->flashdata('message'); ?>
        </div>
    <?php }?>

    <h5>Sign in</h5>

    <!-- form -->
    <form action="<?=base_url();?>Login/signin" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <!--<div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="reset-password.html">Reset password</a>-->
        </div>
        <button class="btn btn-primary" type="submit" name="login">Sign in</button>
       <!--
        <div class="my-5">
            <p>Login with your social media account.</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-sm btn-facebook">
                        <i class="mdi mdi-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-sm btn-twitter">
                        <i class="mdi mdi-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-sm btn-linkedin">
                        <i class="mdi mdi-linkedin"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-sm btn-google">
                        <i class="mdi mdi-google"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-sm btn-instagram">
                        <i class="mdi mdi-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>-->


        <div class="my-5">
            <p>Don't have an account? <a href="<?=base_url();?>Home/register">Sign up now!</a></p>
        </div>

        <div class="my-5">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="<?=base_url();?>Home/about">
                        About MiDate
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="<?=base_url();?>Home/privacy">
                        Privacy Policy
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="<?=base_url();?>Home/how_it_works">
                        How it Works
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="<?=base_url();?>Home/models">
                        Models
                    </a>
                </li>
            </ul>
        </div>

    </form>
    <!-- ./ form -->

</div>

<!-- Bundle -->
<script src="<?=base_url();?>dist/vendor/bundle.js"></script>

<!-- Landing page scripts -->
<script src="<?=base_url();?>dist/js/landing-page.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.0/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Theme customizer scripts -->
<script>let LANDING_PAGE = true</script>
<script src="<?=base_url();?>dist/js/theme-customizer.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        // show the alert
        setTimeout(function() {
            $(".alert").alert('close');
        }, 2000);
    });
</script>