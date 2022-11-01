<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Home | Wedding Planner</title>
    <link rel="apple-touch-icon" href="<?php echo base_url()."assets/" ?>app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()."assets/" ?>app-assets/images/ico/favicon.ico">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script>  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/vendors/css/editors/quill/quill.snow.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>app-assets/css/pages/app-email.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
              <!-- <div class="brand-logo"></div> -->
              <h2 class="brand-text mb-0">WeddPlann</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="<?php echo $home ?> nav-item"><a href="<?php echo base_url()."home" ?>"><i class="feather icon-homex"></i><span class="menu-title" data-i18n="Form Layout">Home</span></a></li>
          
          <li class=" navigation-header"><span>Menu</span>
          </li>
          <li class="<?php echo $calendar ?> nav-item"><a href="<?php echo base_url()."calendar" ?>"><i class="fa fa-calendar"></i><span class="menu-title" data-i18n="Ecommerce">Planning Calendar</span></a>
          <li><a href="#"><i class="fa fa-th-list"></i><span class="menu-title" data-i18n="Ecommerce">Planning Temp</span></a>
            <ul class="menu-content">
              <li class="<?php echo $lokasi ?> nav-item"><a href="<?php echo base_url()."location" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Venue / Lokasi</span></a></li>
              <li class="<?php echo $dekorasi ?> nav-item"><a href="<?php echo base_url()."dekorasi" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Dekorasi</span></a></li>
              <li class="<?php echo $catering ?> nav-item"><a href="<?php echo base_url()."catering" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Catering</span></a></li>
              <li class="<?php echo $video ?> nav-item"><a href="<?php echo base_url()."video" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Video / Photographer</span></a></li>
              <li class="<?php echo $seserahan ?> nav-item"><a href="<?php echo base_url()."seserahan" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Seserahan</span></a></li>
              <li class="<?php echo $sovenir ?> nav-item"><a href="<?php echo base_url()."sovenir" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Sovenir</span></a></li>
              <li class="<?php echo $seragam ?> nav-item"><a href="<?php echo base_url()."seragam" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Seragam / Busana</span></a></li>
              <li class="<?php echo $makeup ?> nav-item"><a href="<?php echo base_url()."makeup" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Makeup</span></a></li>
              <li class="<?php echo $bridesmide ?> nav-item"><a href="<?php echo base_url()."bridesmide" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">BrideSmide</span></a></li>
              <li class="<?php echo $entertaiment ?> nav-item"><a href="<?php echo base_url()."entertaiment" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Entertaiment</span></a></li>
              <li class="<?php echo $other ?> nav-item"><a href="<?php echo base_url()."/" ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Others</span></a></li>
            </ul>
          </li>
            <li class="<?php echo $fixplann ?> nav-item"><a href="form-layout.html"><i class="fa fa-check"></i><span class="menu-title" data-i18n="Form Layout">Fixed Planning</span></a></li>
            <li class="<?php echo $inv ?> nav-item"><a href="form-layout.html"><i class="fa fa-users"></i><span class="menu-title" data-i18n="Form Layout">Invite Guest</span></a></li>
            <li class="<?php echo $budget ?> nav-item"><a href="form-layout.html"><i class="fa fa-money"></i><span class="menu-title" data-i18n="Form Layout">Budget Planner</span></a></li>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">

      <!-- BEGIN: Header-->
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
          <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
              <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav">
                  <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                </ul>
                
              </div>
              <ul class="nav navbar-nav float-right">
                <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                  <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                  <div class="search-input">
                    <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                    <input class="input" type="text" placeholder="Explore Vuesax..." tabindex="-1" data-search="template-list"/>
                    <div class="search-input-close"><i class="feather icon-x"></i></div>
                    <ul class="search-list"></ul>
                  </div>
                </li>
                <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                      <div class="dropdown-header m-0 p-2">
                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                      </div>
                    </li>
                    <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                        <div class="media d-flex align-items-start">
                          <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                          <div class="media-body">
                            <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                          </div><small>
                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                        </div></a><a class="d-flex justify-content-between" href="javascript:void(0)">
                        <div class="media d-flex align-items-start">
                          <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                          <div class="media-body">
                            <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                          </div><small>
                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                        </div></a><a class="d-flex justify-content-between" href="javascript:void(0)">
                        <div class="media d-flex align-items-start">
                          <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                          <div class="media-body">
                            <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                          </div><small>
                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                        </div></a><a class="d-flex justify-content-between" href="javascript:void(0)">
                        <div class="media d-flex align-items-start">
                          <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                          <div class="media-body">
                            <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                          </div><small>
                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                        </div></a><a class="d-flex justify-content-between" href="javascript:void(0)">
                        <div class="media d-flex align-items-start">
                          <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                          <div class="media-body">
                            <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                          </div><small>
                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                        </div></a></li>
                    <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo $this->session->userdata('username'); ?></span><span class="user-status">Available</span></div><span><img class="round" src="<?php echo base_url()."assets/" ?>app-assets/images/portrait/small/avatar-s-11.png" alt="avatar" height="40" width="40"/></span></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url()."auth/auth_logout" ?>"><i class="feather icon-power"></i> Logout</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- END: Header-->