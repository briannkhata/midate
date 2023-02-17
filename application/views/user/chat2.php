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

    <!-- Themify icons -->
    <link href="<?=base_url();?>dist/icons/themify/themify-icons.css" rel="stylesheet">

    <!-- Material design icons -->
    <link href="<?=base_url();?>dist/icons/materialicons/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Bundle styles -->
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/bundle.css">

    <!-- Slick -->
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/slick/slick.css">

    <!-- Fancybox -->
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/fancybox/jquery.fancybox.min.css" type="text/css"/>

    <!-- Intro js -->
    <link rel="stylesheet" href="<?=base_url();?>dist/vendor/introjs/introjs.css" type="text/css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="<?=base_url();?>dist/css/app.min.css">
</head>
<body>

<!-- preloader -->
<div class="preloader">
    <img src="<?=base_url();?>dist/media/img/logo-2x.png" alt="logo">
    <p class="lead font-weight-bold text-muted my-5">Loading miDate ...</p>
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- ./ preloader -->

<!-- layout -->
<div class="layout">

    <!-- navigation -->
    <nav class="navigation">
        <div class="nav-group">
            <ul>
                <li class="logo">
                    <a href="#">
                        <img src="<?=base_url();?>dist/media/img/logo.png" alt="logo">
                    </a>
                </li>
               <!-- <li class="navigation-action-button dropright" title="New" data-placement="right">
                    <a href="#" data-intro-js="1" data-toggle="dropdown">
                        <i class="mdi mdi-plus"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item" data-left-sidebar="friends">Start Chat</a>
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#newGroup">Add Group</a>
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#intiveUsers">Invite users</a>
                    </div>
                </li>-->
                <li>
                    <a class="active" data-intro-js="2" data-left-sidebar="chats" href="#" data-toggle="tooltip"
                       title="Chats" data-placement="right">
                        <span class="badge badge-warning"></span>
                        <i data-feather="message-circle"></i>
                    </a>
                </li>
                <li>
                    <a data-left-sidebar="friends" href="#" data-toggle="tooltip"
                       title="Members" data-placement="right">
                        <span class="badge badge-danger"></span>
                        <i data-feather="users"></i>
                    </a>
                </li>

               <li>
                    <a data-left-sidebar="payments" data-toggle="tooltip" title="Payment History" data-placement="right"
                       href="#">
                        <i data-feather="align-center"></i>
                    </a>
                </li>

                <li class="brackets">
                    <a data-left-sidebar="activate-account" href="#" data-toggle="tooltip"
                       title="Activate Account" data-placement="right">
                        <!--<i data-feather="edit"></i>-->
                    </a>
                </li>

                <li class="d-none d-lg-block" data-toggle="tooltip" title="Settings" data-placement="right">
                    <a href="#" data-toggle="modal" data-right-sidebar="settings">
                        <!--<i data-feather="settings"></i>-->
                    </a>
                </li>
                <li data-toggle="tooltip" title="<?=$this->session->userdata('name');?>" data-placement="right">
                    <a href="<?=base_url();?>Login/logout" data-intro-js="3" data-toggle="dropdown">
                        <figure class="avatar avatar-sm">
                            <img src="<?=base_url();?>uploads/users/<?=$this->M_user->get_photo($this->session->userdata('user_id'));?>" class="rounded-circle" alt="image">
                        </figure>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#editProfile">Update
                            profile</a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#changeProfile">Change
                            profile</a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#changePassword">Change
                            Password</a>
                        <div class="dropdown-divider"></div>



                        <a href="#" class="dropdown-item" data-right-sidebar="user-profile">Profile</a>
                        <!--<a href="#" class="dropdown-item" data-toggle="modal" data-target="#settingsModal">Settings</a>
                        <a href="#" class="dropdown-item d-none d-md-block example-app-tour-start">Start Tour</a>-->

                        <div class="dropdown-divider"></div>
                        <a href="<?=base_url();?>Login/logout" class="dropdown-item text-danger">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ./ navigation -->

    <!-- Chat left sidebar -->
    <div id="chats" class="left-sidebar open">
        <div class="left-sidebar-header">
            <!--<div class="story-block">
                <h4 class="mb-4">Stories</h4>
                <div class="story-items mb-4" data-intro-js="4">
                    <div class="story-item">
                        <a href="#" class="avatar avatar-border-primary">
                            <span class="avatar-title bg-info rounded-circle">M</span>
                            <span class="story-content">Matteo Reedy</span>
                        </a>
                    </div>
                    <div class="story-item">
                        <a href="#" class="avatar avatar-border-success">
                            <img src="<?=base_url();?>dist/media/img/avatar6.jpg" class="rounded-circle" alt="image">
                            <span class="story-content">Meredith Dyet</span>
                        </a>
                    </div>
                    <div class="story-item">
                        <a href="#" class="avatar avatar-border-primary">
                            <span class="avatar-title bg-success rounded-circle">C</span>
                            <span class="story-content">Cesar Weems</span>
                        </a>
                    </div>
                    <div class="story-item">
                        <a href="#" class="avatar">
                            <img src="<?=base_url();?>dist/media/img/avatar2.jpg" class="rounded-circle" alt="image">
                            <span class="story-content">Pansy Coghill</span>
                        </a>
                    </div>
                    <div class="story-item">
                        <a href="#" class="avatar">
                            <img src="<?=base_url();?>dist/media/img/avatar7.jpg" class="rounded-circle" alt="image">
                            <span class="story-content">Cullen Scyone</span>
                        </a>
                    </div>
                    <div class="story-item">
                        <a href="#" class="avatar">
                            <img src="<?=base_url();?>dist/media/img/avatar1.jpg" class="rounded-circle" alt="image">
                            <span class="story-content">North Boorer</span>
                        </a>
                    </div>
                    <div class="story-item">
                        <a href="#" class="avatar">
                            <img src="<?=base_url();?>dist/media/img/avatar9.jpg" class="rounded-circle" alt="image">
                            <span class="story-content">Dilan Maasze</span>
                        </a>
                    </div>
                    <div class="story-item">
                        <a href="#" class="avatar">
                            <img src="<?=base_url();?>dist/media/img/avatar5.jpg" class="rounded-circle" alt="image">
                            <span class="story-content">Antons Cornier</span>
                        </a>
                    </div>
                </div>
            </div>
            -->
            <form>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn" type="button">
                            <i class="ti-search"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="Search chats">
                </div>
            </form>
        </div>
        <div class="left-sidebar-content">
            <ul class="list-group list-group-flush">
                <?php foreach ($this->M_user->get_mychats() as $rowo){?>

                <li class="list-group-item active">
                    <div>
                        <figure class="avatar mr-3">
                            <img src="<?=base_url();?>dist/media/img/avatar6.jpg" class="rounded-circle" alt="image">
                        </figure>
                    </div>
                    <div class="users-list-body">
                        <div>
                            <h5><?=$this->M_user->get_name($rowo['from']);?></h5>
                            <p><?=$rowo['message'];?></p>
                        </div>
                        <div class="users-list-action">
                            <small class="text-muted"><?=date('Y M d h:m:s',strtotime($rowo['sent']));?></small>
                        </div>
                    </div>
                </li>
                <?php }?>


            </ul>
        </div>
    </div>
    <!-- ./ Chat left sidebar -->

    <!-- Friends left sidebar -->
    <div id="friends" class="left-sidebar">
        <div class="left-sidebar-header">
            <form>
                <h4 class="mb-4">Members</h4>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn" type="button">
                            <i class="ti-search"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="Search friends">
                </div>
            </form>
        </div>
        <div class="left-sidebar-content">
            <ul class="list-group list-group-flush">
                <?php foreach ($this->M_user->get_nearby_members() as $row){?>
                <li class="list-group-item">
                    <div>
                        <figure class="avatar mr-3" style="height: 4.7rem;width: 4.7rem;">
                            <img src="<?=base_url();?>uploads/users/<?=$row['photo'];?>" class="rounded-circle" alt="image">
                        </figure>
                    </div>
                    <div class="users-list-body">
                        <div>
                            <h5><?=$row['name'];?> | <?=$row['gender'];?></h5>
                            <small> Looking for <?=$row['looking_for'];?></small>
                            <small><?=date('Y-m-d') - date('Y-m-d',strtotime($row['dob']));?> Years Old</small>
                            <small><?=$row['district'];?>,<?=$row['location'];?>,</small>
                        </div>
                    </div>
                </li>
                <?php }?>

            </ul>
        </div>
    </div>
    <!-- ./ Friends left sidebar -->

    <!-- Favorites left sidebar -->
    <div id="payments" class="left-sidebar">
        <div class="left-sidebar-header">
            <form>
                <h4 class="mb-4">Payment History</h4>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn" type="button">
                            <i class="ti-search"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="Search favorites">
                </div>
            </form>
        </div>
        <div class="left-sidebar-content">
            <ul class="list-group list-group-flush users-list">
                <li class="list-group-item">
                    <div class="users-list-body">
                        <div>
                            <h5>Jennica Kindred</h5>
                            <p>I know how important this file is to you. You can trust me ;)</p>
                        </div>
                        <div class="users-list-action">
                            <div class="action-toggle">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" href="#">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Open</a>
                                        <a href="#" class="dropdown-item">Remove favorites</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="users-list-body">
                        <div>
                            <h5>Marvin Rohan</h5>
                            <p>Lorem ipsum dolor sitsdc sdcsdc sdcsdcs</p>
                        </div>
                        <div class="users-list-action">
                            <div class="action-toggle">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" href="#">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Open</a>
                                        <a href="#" class="dropdown-item">Remove favorites</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="users-list-body">
                        <div>
                            <h5>Frans Hanscombe</h5>
                            <p>Lorem ipsum dolor sitsdc sdcsdc sdcsdcs</p>
                        </div>
                        <div class="users-list-action">
                            <div class="action-toggle">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" href="#">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Open</a>
                                        <a href="#" class="dropdown-item">Remove favorites</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="users-list-body">
                        <div>
                            <h5>Karl Hubane</h5>
                            <p>Lorem ipsum dolor sitsdc sdcsdc sdcsdcs</p>
                        </div>
                        <div class="users-list-action">
                            <div class="action-toggle">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" href="#">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Open</a>
                                        <a href="#" class="dropdown-item">Remove favorites</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Favorites left sidebar -->

    <!-- Archived left sidebar -->
    <div id="activate-account" class="left-sidebar">
        <div class="left-sidebar-header">
            <form>
                <h4 class="mb-4">Archived</h4>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn" type="button">
                            <i class="ti-search"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="Search archived">
                </div>
            </form>
        </div>
        <div class="left-sidebar-content">
            <ul class="list-group list-group-flush users-list">
                <li class="list-group-item">
                    <figure class="avatar mr-3">
                        <span class="avatar-title bg-danger rounded-circle">M</span>
                    </figure>
                    <div class="users-list-body">
                        <div>
                            <h5>Mercedes Pllu</h5>
                            <p>I know how important this file is to you. You can trust me ;)</p>
                        </div>
                        <div class="users-list-action">
                            <div class="action-toggle">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" href="#">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Open</a>
                                        <a href="#" class="dropdown-item">Restore</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <figure class="avatar mr-3">
                        <span class="avatar-title bg-secondary rounded-circle">R</span>
                    </figure>
                    <div class="users-list-body">
                        <div>
                            <h5>Rochelle Golley</h5>
                            <p>Lorem ipsum dolor sitsdc sdcsdc sdcsdcs</p>
                        </div>
                        <div class="users-list-action">
                            <div class="action-toggle">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" href="#">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Open</a>
                                        <a href="#" class="dropdown-item">Restore</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Archived left sidebar -->

    <?php foreach($this->M_user->get_user_by_id(3) as $row0){?>
    <!-- chat -->
    <div class="chat"> <!-- no-message -->
        <div class="chat-preloader d-none">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="no-message-container">
            <div class="row mb-5">
                <div class="col-md-4 offset-4">
                    <img src="<?=base_url();?>uploads/users/<?=$row0['photo'];?>" class="img-fluid" alt="image">
                </div>
            </div>
            <p class="lead">Choose a chat or start a <a href="#" data-left-sidebar="friends">new chat</a>.</p>
        </div>
        <div class="chat-header">
            <div class="chat-header-user">
                <figure class="avatar avatar-state-success">
                    <img src="<?=base_url();?>uploads/users/<?=$row0['photo'];?>" class="rounded-circle" alt="image">
                </figure>
                <div>
                    <h5><a href="#" data-right-sidebar="user-profile" title="Click to view Profile"><?=$row0['name'];?></a></h5>

                    <?php $status = $this->M_user->get_online_status(3);
                    if($status == 1){?>
                    <small class="text-success">Online</small>
                    <?php } else{ ?>
                        <small class="text-warning">Onffline</small>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="chat-body">
            <div class="messages" id="msgBody">

                <?php
                //!file_exists(base_url()."uploads/users/".$this->M_user->get_photo($chat["from"] == $from ? $from : $to))) ?
                $from = $this->session->userdata('user_id');
                $to = $row0['user_id'];
                foreach($this->M_user->get_user_chats($to,$from) as $chat) {
                    echo '<div class="message-item '.($chat["from"] == $from ? 'out' : 'in').'">
                            <div class="message-avatar">
                               <figure class="avatar avatar-sm">
                                    <img src='.base_url()."uploads/users/".$this->M_user->get_photo($chat["from"] == $from ? $from : $to).' class="rounded-circle" alt="image">
                                </figure>
                                <div>
                                  <h5>'.$this->M_user->get_name($chat["from"] == $from ? $from : $to).'</h5>
                                  <div class="time">'.date('d, M Y h:m:s',strtotime($chat['sent'])).'</div>
                                </div>
                            </div>
                        </div>
                        <div class="message-item '.($chat["from"] == $from ? 'out' : 'in').'">
                            <div class="message-content">
                                <div class="message-text">'.$chat['message'].'</div>
                            </div>
                        </div>';
                 }?>

                <div class="message-item in in-typing">
                    <div class="message-content">
                        <div class="message-text">
                            <div class="writing-animation">
                                <div class="writing-animation-line"></div>
                                <div class="writing-animation-line"></div>
                                <div class="writing-animation-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-footer" data-intro-js="6">
            <form class="d-flex" id="FormMessages">
                <?php $name = $this->M_user->get_name($to);?>
                <input type="text" class="form-control form-control-main" name="message" id="message" placeholder="Say hie to <?=$name;?>.">
                <input type="hidden" name="from" id="from" value="<?=$from;?>">
                <input type="hidden" name="to" id="to" value="<?=$to;?>">
                <div>
                    <button class="btn btn-primary ml-2 btn-floating" type="submit" id="batani">
                        <i class="mdi mdi-send"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- ./ chat -->
    <?php }?>



</div>
<!-- ./ layout -->

<!-- Notifications -->
<div class="right-sidebar" id="notifications">
    <div class="right-sidebar-header">
        <span class="right-sidebar-title">Notifications</span>
        <a data-right-sidebar="settings" title="Settings" href="#">
            <i class="mdi mdi-cog"></i>
        </a>
        <a href="#" class="right-sidebar-close">
            <i class="mdi mdi-close"></i>
        </a>
    </div>
    <div class="right-sidebar-content">
        <ul class="list-group list-group-flush">
            <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                <div class="d-flex">
                    <figure class="avatar avatar-state-warning mr-3">
                        <span class="avatar-title bg-info-bright text-info rounded-circle">
                            <i class="mdi mdi-server"></i>
                        </span>
                    </figure>
                    <div>
                        <div>You joined a group</div>
                        <span class="text-muted small">
                            <i class="mdi mdi-clock-outline small mr-1"></i> Today
                        </span>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Unread</a>
                        <a href="#" class="dropdown-item">Detail</a>
                        <a href="#" class="dropdown-item">Delete</a>
                    </div>
                </div>
            </li>
            <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                <div class="d-flex">
                    <figure class="avatar avatar-state-warning mr-3">
                        <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                            <i class="mdi mdi-server"></i>
                        </span>
                    </figure>
                    <div>
                        <div>Storage is running low!</div>
                        <span class="text-muted small">
                            <i class="mdi mdi-clock-outline small mr-1"></i> Today
                        </span>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Unread</a>
                        <a href="#" class="dropdown-item">Detail</a>
                        <a href="#" class="dropdown-item">Delete</a>
                    </div>
                </div>
            </li>
            <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                <div class="d-flex">
                    <figure class="avatar mr-3">
                                <span class="avatar-title bg-secondary-bright text-secondary rounded-circle">
                                    <i class="mdi mdi-file-document-outline"></i>
                                </span>
                    </figure>
                    <div>
                        <div>1 person sent a file</div>
                        <span class="text-muted small">
                            <i class="mdi mdi-clock-outline small mr-1"></i> 50 min ago
                        </span>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Unread</a>
                        <a href="#" class="dropdown-item">Detail</a>
                        <a href="#" class="dropdown-item">Delete</a>
                    </div>
                </div>
            </li>
            <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                <div class="d-flex">
                    <figure class="avatar mr-3">
                        <span class="avatar-title bg-success-bright text-success rounded-circle">
                            <i class="mdi mdi-download"></i>
                        </span>
                    </figure>
                    <div>
                        <div>Reports ready to download</div>
                        <span class="text-muted small">
                            <i class="mdi mdi-clock-outline small mr-1"></i> 5 hour ago
                        </span>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Unread</a>
                        <a href="#" class="dropdown-item">Detail</a>
                        <a href="#" class="dropdown-item">Delete</a>
                    </div>
                </div>
            </li>
            <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                <div class="d-flex">
                    <figure class="avatar mr-3">
                                    <span class="avatar-title bg-info-bright text-info rounded-circle">
                                        <i class="mdi mdi-lock"></i>
                                    </span>
                    </figure>
                    <div>
                        <div>2 steps verification</div>
                        <span class="text-muted small">
                                    <i class="mdi mdi-clock-outline small mr-1"></i> Yesterday
                                </span>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Unread</a>
                        <a href="#" class="dropdown-item">Detail</a>
                        <a href="#" class="dropdown-item">Delete</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- ./ Notifications -->

<!-- User profile -->
<?php foreach ($this->M_user->get_user_by_id(3) as $pro){?>
<div class="right-sidebar" id="user-profile">
    <div class="right-sidebar-header with-tab-menu">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                   aria-controls="home" aria-selected="true">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                   aria-controls="profile" aria-selected="false">Media</a>
            </li>
        </ul>
        <a href="#" class="right-sidebar-close">
            <i class="mdi mdi-window-close"></i>
        </a>
    </div>
    <div class="right-sidebar-content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <div class="mt-4 mb-4">
                    <h6>Name</h6>
                    <p class="text-muted"><?=$pro['name'];?></p>
                </div>
                <div class="mt-4 mb-4">
                    <h6>Age</h6>
                    <p class="text-muted"><?=date('Y-m-d') - date('Y-m-d',strtotime($pro['dob']));?> Years Old
                    </p>
                </div>
                <div class="mt-4 mb-4">
                    <h6>Gender</h6>
                    <p class="text-muted"><?=$pro['gender'];?></p>
                </div>
                <div class="mt-4 mb-4">
                    <h6>Looking For</h6>
                    <p class="text-muted"><?=$pro['looking_for'];?></p>
                </div>

                <div class="mt-4 mb-4">
                    <h6>Age Range</h6>
                    <p class="text-muted"><?=$pro['age_from'];?> Years To <?=$pro['age_to'];?> Years</p>
                </div>

                <p class="text-muted"><?=$pro['about'];?></p>
                <div class="mt-4 mb-4">
                    <h6>Phone</h6>
                    <p class="text-muted"><?=$pro['phone'];?></p>
                </div>
                <div class="mt-4 mb-4">
                    <h6>Email</h6>
                    <p class="text-muted"><?=$pro['email'];?></p>
                </div>

                <div class="mt-4 mb-4">
                    <h6>Location</h6>
                    <p class="text-muted"><?=$pro['country'];?>, <?=$pro['district'];?>,<?=$pro['location'];?></p>
                </div>

                <div class="mt-4 mb-4">
                    <h6>Church</h6>
                    <p class="text-muted"><?=$pro['church'];?></p>
                </div>
                <div class="mt-4 mb-4">
                    <h6>Profession</h6>
                    <p class="text-muted"><?=$pro['profession'];?></p>
                </div>

                <div class="mt-4 mb-4">
                    <h6>Dating Type</h6>
                    <p class="text-muted"><?=$pro['dating_type'];?></p>
                </div>
                <div class="mt-4 mb-4">
                    <h6>Hobbies</h6>
                    <p class="text-muted"><?=$pro['hobies'];?></p>
                </div>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                            <div>
                                <div class="text-center mb-4">
                                    <figure class="avatar avatar-xl mb-4">
                                        <img src="<?=base_url();?>uploads/users/<?=$pro['photo'];?>" class="img-responsive" alt="image">
                                    </figure>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Change Profile</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </li>
                        <?php foreach ($this->M_user->get_user_photos(3) as $ph){?>
                        <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                            <div>
                                <figure class="avatar avatar-sm mr-2">
                                    <span class="avatar-title bg-secondary rounded-circle">
                                        <i class="mdi mdi-image"></i>
                                    </span>
                                </figure>
                                avatar_image.png
                            </div>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Set Profile</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </li>
                        <?php }?>
                        <li class="list-group-item py-3 px-0 d-flex justify-content-between" data-toggle="modal" data-target="#addPhoto">
                            <div>
                                <figure class="avatar avatar-sm mr-2">
                                    <span class="avatar-title bg-success rounded-circle" data-toggle="modal" data-target="#addPhoto">
                                        <i class="mdi mdi-image-plus"></i>
                                    </span>
                                </figure>
                                Add Photos i.e <small>You can add only 4 Photos Maximum</small>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!-- ./ User profile -->



<div class="modal fade" id="addPhoto" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="mdi mdi-clipboard-edit-outline mr-2"></i> Add Photo to Gallery
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>
                </div>
                <form id="addPhoto3" action="<?=base_url();?>User/add_photo" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Image</label>
                            <div class="d-flex align-items-center">
                                <div>
                                    <figure class="avatar mr-3 item-rtl">
                                        <img src="" class="rounded-circle"  alt="image" id="blah2">
                                    </figure>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="photo2" id="photo2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Photo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--change profile picture-->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="mdi mdi-clipboard-edit-outline mr-2"></i> Change Password
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="mdi mdi-close"></i>
                </button>
            </div>
            <div class="modal-body">

                        <form id="password-change">

                            <div class="form-group">
                                <label for="city" class="col-form-label">Enter New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password"  name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="city" class="col-form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="cpassword">
                                </div>
                            </div>

                        </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="changePass">Change Password</button>
            </div>
        </div>
    </div>
</div>
<?php foreach($this->M_user->get_user_by_id($this->session->userdata('user_id')) as $row){?>
<div class="modal fade" id="changeProfile" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="mdi mdi-clipboard-edit-outline mr-2"></i> Change Profile
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="mdi mdi-close"></i>
                </button>
            </div>
            <form  action="<?=base_url();?>User/change_profile" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                     <label class="col-form-label">Image</label>
                          <div class="d-flex align-items-center">
                                    <div>
                                        <figure class="avatar mr-3 item-rtl">
                                            <img src="<?=base_url();?>uploads/users/<?=$row['photo'];?>" class="rounded-circle"
                                                 alt="image" id="blah">
                                        </figure>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="photo" id="photo">
                                    </div>
                          </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Change</button>
            </div>
            </form>

        </div>
    </div>
</div>
<?php }?>

<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <?php foreach ($this->M_user->get_user_by_id($this->session->userdata('user_id')) as $row){?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="mdi mdi-clipboard-edit-outline mr-2"></i> Update Profile
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab"
                               aria-controls="personal" aria-selected="true">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#about2" role="tab" aria-controls="about"
                               aria-selected="false">Interests & Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#social-links" role="tab"
                               aria-controls="social-links" aria-selected="false">About</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="personal" role="tabpanel">
                            <form>
                                <div class="form-group">
                                    <label for="fullname" class="col-form-label">Fullname</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" value="<?=$row['name'];?>" id="name">
                                        <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="mdi mdi-account-outline"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                <label class="col-form-label">Avatar</label>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <figure class="avatar mr-3 item-rtl">
                                            <img src="<?=base_url();?>dist/media/img/avatar4.jpg" class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>-->
                                <div class="form-group">
                                    <label for="phone" class="col-form-label">Phone</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="phone"  value="<?=$row['phone'];?>" id="phone" placeholder="" readonly>
                                        <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="mdi mdi-phone"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="col-form-label">Gender</label>
                                    <div class="input-group">
                                        <select name="gender" id="gender" class="form-control">
                                            <option selected disabled>Option</option>
                                            <option <?php if($row['gender'] =="Male") echo 'selected';?>  value="Male">Male</option>
                                            <option <?php if($row['gender'] =="Female") echo 'selected';?>  value="Female">Female</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="col-form-label">Date of Birth</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="dob"  name="dob" placeholder="" value="<?=$row['dob'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="col-form-label">Status</label>
                                    <div class="input-group">
                                        <select name="m_status" id="m_status" class="form-control">
                                            <option selected disabled>Option</option>
                                            <option <?php if($row['m_status'] =="Single") echo 'selected';?>  value="Single">Single</option>
                                            <option <?php if($row['m_status'] =="Widowed") echo 'selected';?> value="Widowed">Widowed</option>
                                            <option <?php if($row['m_status'] =="Married") echo 'selected';?> value="Married">Married</option>
                                            <option <?php if($row['m_status'] =="Divorced") echo 'selected';?> value="Divorced">Divorced</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="city" class="col-form-label">Dating Type</label>
                                    <div class="input-group">
                                        <select name="dating_type" id="dating_type" class="form-control">
                                            <option selected disabled>Option</option>
                                            <option <?php if($row['dating_type'] =="Serious") echo 'selected';?> value="Serious">Serious</option>
                                            <option <?php if($row['dating_type'] =="Casual") echo 'selected';?> value="Casual">Casual</option>
                                            <option <?php if($row['dating_type'] =="Sex") echo 'selected';?> value="Sex">Sex</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="about2" role="tabpanel">
                            <form>
                                <div class="form-group">
                                    <label for="city" class="col-form-label">Country</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="country" value="<?=$row['country'];?>" id="country" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="col-form-label">District</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?=$row['district'];?>" id="district" name="district" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="col-form-label">Location</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="location" value="<?=$row['location'];?>" id="location" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="city" class="col-form-label">Looking for</label>
                                    <div class="input-group">
                                        <select name="looking_for" id="looking_for" class="form-control">
                                            <option selected disabled>Option</option>
                                            <option <?php if($row['looking_for'] =="Men") echo 'selected';?> value="Men">Men</option>
                                            <option <?php if($row['looking_for'] =="Women") echo 'selected';?> value="Women">Women</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="city" class="col-form-label">Age From</label>
                                    <div class="input-group">
                                        <select name="age_from" id="age_from"  class="form-control">
                                            <option selected disabled>Option</option>
                                            <option <?php if($row['age_from'] =="18") echo 'selected';?> value="18">18</option>
                                            <option <?php if($row['age_from'] =="20") echo 'selected';?> value="20">20</option>
                                            <option <?php if($row['age_from'] =="24") echo 'selected';?> value="24">24</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="city" class="col-form-label">Age To</label>
                                    <div class="input-group">
                                        <select name="age_to" id="age_to" class="form-control">
                                            <option selected disabled>Option</option>
                                            <option <?php if($row['age_to'] =="24") echo 'selected';?> value="24">24</option>
                                            <option <?php if($row['age_to'] =="30") echo 'selected';?> value="30">30</option>
                                            <option <?php if($row['age_to'] =="35") echo 'selected';?> value="35">35</option>
                                            <option <?php if($row['age_to'] =="60") echo 'selected';?> value="60">60</option>
                                        </select>
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="tab-pane" id="social-links" role="tabpanel">
                            <form>
                                <div class="form-group">
                                    <label for="city" class="col-form-label">Profession</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="profession" value="<?=$row['profession'];?>" id="profession" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="col-form-label">Church</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="church" value="<?=$row['church'];?>" id="church" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="about-text" class="col-form-label">Write a few words that describe
                                        you</label>
                                    <textarea class="form-control" id="about" name="about"><?=$row['about'];?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="about-text" class="col-form-label">List down your Hobbies
                                        you</label>
                                    <textarea class="form-control" id="hobies" name="hobies"><?=$row['hobies'];?></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="submito">Save</button>
                </div>
            </div>
        <?php }?>
    </div>
</div>


<!-- Bundle scripts -->
<script src="<?=base_url();?>dist/vendor/bundle.js"></script>
<!-- Feather icons -->
<script src="<?=base_url();?>dist/icons/feather/feather.min.js"></script>
<!-- Slick -->
<script src="<?=base_url();?>dist/vendor/slick/slick.min.js"></script>
<!-- Fancybox -->
<script src="<?=base_url();?>dist/vendor/fancybox/jquery.fancybox.min.js"></script>
<!-- Intro js -->
<script src="<?=base_url();?>dist/vendor/introjs/intro.js"></script>
<!-- Jquery Stopwatch -->
<script src="<?=base_url();?>dist/vendor/jquery.stopwatch.js"></script>
<!-- Sweetalert2 -->
<script src="<?=base_url();?>dist/vendor/sweetalert2.js"></script>
<!-- App scripts -->
<script src="<?=base_url();?>dist/js/app.min.js"></script>

<!-- Examples -->
<script src="<?=base_url();?>dist/js/examples.min.js"></script>

<!-- Theme customizer scripts -->
<script src="<?=base_url();?>dist/js/theme-customizer.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        $("#submito").click(function() {
            var gender = $("#gender").val();
            var m_status = $("#m_status").val();
            var name = $("#name").val();
            var age_from = $("#age_from").val();
            var age_to = $("#age_to").val();
            var dob = $("#dob").val();
            var dating_type = $("#dating_type").val();
            var profession = $("#profession").val();
            var church = $("#church").val();
            var district = $("#district").val();
            var country = $("#country").val();
            var location = $("#location").val();
            var about = $("#about").val();
            var phone = $("#phone").val();
            var looking_for = $("#looking_for").val();
            var hobies = $("#hobies").val();


           /* if(message =='') {
                alert("Please fill all fields.");
                return false;
            }*/

            $.ajax({
                type: "POST",
                url: "<?=base_url();?>User/update_my_profile",
                data: {
                    gender : $("#gender").val(),
                    m_status : $("#m_status").val(),
                    name : $("#name").val(),
                    age_from : $("#age_from").val(),
                    age_to : $("#age_to").val(),
                    dob : $("#dob").val(),
                    dating_type : $("#dating_type").val(),
                    profession : $("#profession").val(),
                    church : $("#church").val(),
                    district : $("#district").val(),
                    country : $("#country").val(),
                    location : $("#location").val(),
                    about : $("#about").val(),
                    phone : $("#phone").val(),
                    looking_for : $("#looking_for").val(),
                    hobies : $("#hobies").val(),

                },
                cache: false,
                success: function(data) {
                    alert('Your profile updated successfully');
                    location.reload();
                },
                error: function(xhr, status, error) {
                    //console.error(xhr);
                }
            });
        });



        function readURL(input){
            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
          }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
          }
        }
        $("#photo").change(function(){readURL(this);});




        var form = document.getElementById("FormMessages");
        var mes = document.getElementById("message");
        mes.addEventListener("blur", function() {
            if (mes.value === "") {
                form.style.border = "1px solid red";
                var button = document.getElementById("batani");
                button.disabled = true;
                form.addEventListener("submit", function(event) {
                    event.preventDefault();
                });
            } else {
                mes.style.border = "";
            }
         });

            $("#FormMessages").submit(function(event) {
                event.preventDefault();
                var formData = $("#FormMessages").serialize();
                $.ajax({
                    type: "POST",
                    url: "<?=base_url();?>User/send_message",
                    data: formData,
                    success: function() {
                        // handle success
                        document.getElementById("message").value = "";
                    }
                });
            });

            $("#batani").on('click',function(event) {
                event.preventDefault();
                var formData = $("#FormMessages").serialize();
                $.ajax({
                    type: "POST",
                    url: "<?=base_url();?>User/send_message",
                    data: formData,
                    success: function() {
                        // handle success
                        document.getElementById("message").value = "";
                    }
                });
            });

            setInterval(function () {
                $.ajax({
                    method: "POST",
                    url: "<?=base_url();?>User/get_charts_realtime",
                    data: {
                        to:$('#to').val(),
                        from:$('#from').val()
                    },
                    dataType:'text',
                    success: function(data) {
                        $('#msgBody').html(data);
                    }
                });

            },700)

        $("#PicChange2").on('click',function(event) {
            event.preventDefault();
            var formData = $("#PicChange").serialize();
            $.ajax({
                type: "POST",
                url: "<?=base_url();?>User/change_profile",
                data: formData,
                success: function() {
                    // handle success
                    location.reload();
                }
            });
        });


        /*$("#addPhoto3").submit(function(event) {
            event.preventDefault();
            var formData = $("#addPhoto3").serialize();
            $.ajax({
                type: "POST",
                url: "<?=base_url();?>User/add_photo",
                data: formData,
                success: function() {
                    // handle success

                }
            });
        });*/


        $("#addPhoto3").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?=base_url();?>User/add_photo",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function()
                {
                    //$("#preview").fadeOut();
                    //$("#err").fadeOut();
                },
                success: function(data)
                {
                  /* if(data=='invalid')
                    {
                        // invalid file format.
                        $("#err").html("Invalid File !").fadeIn();
                    }
                    else
                    {
                        // view uploaded file.
                        $("#preview").html(data).fadeIn();
                        $("#form")[0].reset();
                    }*/
                    location.reload();
                },
                error: function(e)
                {
                    //$("#err").html(e).fadeIn();
                }
            });
        }));


        $("#PicChange").on("submit", function(e) {
            e.preventDefault();
            var formData = new FormData();
            $.ajax({
                url: "<?=base_url();?>User/change_profile",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

    });
</script>