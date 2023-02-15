<nav class="navbar fixed-top bg-white navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?=base_url();?>dist/media/img/logo-full-2x.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>Home/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>Home/how_it_works">How it Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>Home/privacy">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>Home/register">Register</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url();?>">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php
