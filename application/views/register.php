
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$this->db->get('tblsettings')->row()->app;?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url();?>dist/media/img/favicon.png" type="image/png">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700&amp;display=swap" rel="stylesheet">

    <!-- Material design icons -->
    <link href="<?=base_url();?>dist/icons/materialicons/css/materialdesignicons.min.css" rel="stylesheet">

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
        <div class="alert alert-success" role="alert">
            <?=$this->session->flashdata('message'); ?>
        </div>
    <?php }?>

    <h5>Create account</h5>

    <!-- form -->
    <form action="<?=base_url();?>User/register" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="country" placeholder="Country" required autofocus>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" name="phone" placeholder="Phone ie start with country code" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" required>
        </div>
        <button class="btn btn-primary" type="submit">Sign Up</button>
        <div class="my-5">
            Already have an account? <a href="<?=base_url();?>">Sign in now!</a>
        </div>
    </form>
    <!-- ./ form -->

</div>

<!-- Bundle -->
<script src="<?=base_url();?>dist/vendor/bundle.js"></script>

<!-- Landing page scripts -->
<script src="<?=base_url();?>dist/js/landing-page.min.js"></script>

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