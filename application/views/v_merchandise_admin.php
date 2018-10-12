<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buat Merchandise | Float Indonesia</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords"  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/images/favicon2.png" type="image/x-icon">
    <link rel="icon" href="<?= base_url();?>assets/images/favicon2.ico" type="image/x-icon">

    <script type="text/javascript" src="<?= base_url();?>assets/summernote/jquery-3.3.1.js"></script>
    <!-- <link href="<?= base_url();?>assets/summernote/bootstrap.css" rel="stylesheet"> -->

             
    <!-- include summernote css/js -->
    <link href="<?= base_url();?>assets/summernote/summernote-bs4.css" rel="stylesheet">
    <script src="<?= base_url();?>assets/summernote/summernote-bs4.js"></script>
            
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/color/color-1.min.css" id="color"/>

</head>
<body class="sidebar-mini fixed">
  <?php 
  if(!empty($this->session->flashdata('alert'))){
    $alert = $this->session->flashdata('alert');
    echo "<script> alert('".$alert."'); </script>";
  }
  ?>
 <div class="wrapper">
     <div class="loader-bg">
    <div class="loader-bar">
    </div>
  </div>
<!-- Navbar-->
        <header class="main-header-top hidden-print">
        <a href="index.html" class="logo"><img class="img-fluid able-logo" src="<?= base_url();?>assets/images/logo-float.png" alt="Theme-logo"></a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu f-right">
            </div>
            <ul class="top-nav">
              <!--Notification Menu-->

              <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                    <i class="icofont icofont-search-alt-1"></i>
                </a>
              </li>
              <li class="dropdown notification-menu">
                <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                <i class="icon-bell"></i>
                <!-- <span class="badge badge-danger header-badge">9</span> -->
              </a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                  <li class="bell-notification">
                    <a href="javascript:;" class="media">
                    <span class="media-left media-icon">
                    <img class="img-circle" src="<?= base_url();?>assets/images/avatar-1.png" alt="User Image">
                  </span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block-time">2min ago</span></div></a>
                    </li>
                  <li class="bell-notification">
                    <a href="javascript:;" class="media">
                    <span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-2.png" alt="User Image">
                  </span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block-time">20min ago</span></div></a>
                    </li>
                  <li class="bell-notification">
                    <a href="javascript:;" class="media"><span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-3.png" alt="User Image">
                  </span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block-time">3 hours ago</span></div></a>
                    </li>
                  <li class="not-footer">
                    <a href="#!">See all notifications.</a>
                  </li>
                </ul>
              </li>
              <!-- chat dropdown -->
              <li class="pc-rheader-submenu ">
                        <a href="#!" class="drop icon-circle displayChatbox">
                            <i class="icon-bubbles"></i>
                            <!-- <span class="badge badge-danger header-badge blink">5</span> -->
                        </a>

                    </li>
              <!-- window screen -->
              <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>

                    </li>
              <!-- User Menu-->
              <li class="dropdown">
                <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                              <span><img class="img-circle " src="<?= base_url();?>assets/images/avatar-6.png" style="width:40px;" alt="User Image"></span>
                              <span><b><?php echo $this->session->userdata("username") ?></b> <i class=" icofont icofont-simple-down"></i></span>

              </a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                  <li><a href="<?= base_url('index.php/profile/profile_admin');?>"><i class="icon-user"></i> Profile</a></li>
                  <li><a href="message.html"><i class="icon-envelope-open"></i> My Messages</a></li>
                  <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                <li><a href="lock-screen.html"><i class="icon-lock"></i> Lock Screen</a></li>
                  <li><a href="#!"><i class="icon-logout"></i> Logout</a></li>

                </ul>
              </li>
            </ul>

              <!-- search -->
                <div id="morphsearch" class="morphsearch">
                <form class="morphsearch-form">

                    <input class="morphsearch-input" type="search" placeholder="Search..."/>

                    <button class="morphsearch-submit" type="submit">Search</button>

                </form>
                <div class="morphsearch-content">
                    <div class="dummy-column">
                        <h2>People</h2>
                        <a class="dummy-media-object" href="#!">
                            <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
                            <h3>Sara Soueidan</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                            <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"/>
                            <h3>Shaun Dona</h3>
                        </a>
                    </div>
                    <div class="dummy-column">
                        <h2>Popular</h2>
                        <a class="dummy-media-object" href="#!">
                            <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect"/>
                            <h3>Page Preloading Effect</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                            <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow"/>
                            <h3>Draggable Dual-View Slideshow</h3>
                        </a>
                    </div>
                    <div class="dummy-column">
                        <h2>Recent</h2>
                       <a class="dummy-media-object" href="#!">
                            <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration"/>
                            <h3>Tooltip Styles Inspiration</h3>
                        </a>
                        <a class="dummy-media-object" href="#!">
                            <img src="assets/images/avatar-1.png" alt="NotificationStyles"/>
                            <h3>Notification Styles Inspiration</h3>
                        </a>
                    </div>
                    </div><!-- /morphsearch-content -->
                <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
            </div>
            <!-- search end -->
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print " >
<section class="sidebar" id="sidebar-scroll">
            
          <div class="user-panel">
            <div class="f-left image"><img src="<?= base_url();?>assets/images/avatar-6.png" alt="User Image" class="img-circle"></div>
            <div class="f-left info">
              <p><?php echo $this->session->userdata("username") ?></p>
              <p class="designation">Web Programmer <i class="icofont icofont-caret-down m-l-5"></i></p>
            </div>
          </div>
          <!-- sidebar profile Menu-->
          <ul class="nav sidebar-menu extra-profile-list">
            <li>
   <a class="waves-effect waves-dark" href="<?= base_url('index.php/profile/profile_admin');?>">
                      <i class="icon-user"></i>
                     <span class="menu-text">View Profile</span>
                     <span class="selected"></span>
                 </a>

            </li>
            <li>
                <a class="waves-effect waves-dark" href="javascript:void(0)">
                    <i class="icon-settings"></i>
                    <span class="menu-text">Settings</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li>
                <a class="waves-effect waves-dark" href="javascript:void(0)">
                    <i class="icon-logout"></i>
                    <span class="menu-text">Logout</span>
                    <span class="selected"></span>
                </a>
            </li>
        </ul>
        <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">Navigation</li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url('index.php/Admin/index');?>"">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">Components</li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> Kelola Artikel</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="<?php echo base_url()?>index.php/artikel/summernote"><i class="icon-arrow-right"></i>Buat Artikel</a></li>
                            <li><a class="waves-effect waves-dark" href="<?php echo base_url()?>index.php/marchandise/datamerchandise"><i class="icon-arrow-right"></i>Buat Merchandise</a></li>
                            <li><a class="waves-effect waves-dark" href="<?php echo base_url()?>index.php/gallery/allgallery"><i class="icon-arrow-right"></i>Tambah Gallery</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-eye"></i><span> Lihat Data</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="<?php echo base_url()?>index.php/artikel/alldata"><i class="icon-arrow-right"></i>Lihat Data Artikel</a></li>
                             <li><a class="waves-effect waves-dark" href="<?php echo base_url()?>index.php/"><i class="icon-arrow-right"></i>Lihat Data Merchandise</a></li>
                             <li><a class="waves-effect waves-dark" href="<?php echo base_url()?>index.php/gallery/alldata_gallery_admin"><i class="icon-arrow-right"></i>Lihat Data Gallery</a></li>
                        </ul>
                    </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-chart"></i><span> Charts &amp; Maps</span><span class="label label-success menu-caption">New</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="float-chart.html"><i class="icon-arrow-right"></i> Float Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="morris-chart.html"><i class="icon-arrow-right"></i> Morris Charts</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Forms</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="form-elements-bootstrap.html"><i class="icon-arrow-right"></i> Form Elements Bootstrap</a></li>
                        <li><a class="waves-effect waves-dark" href="form-elements-materialize.html"><i class="icon-arrow-right"></i> Form Elements Material</a></li>
                        <li><a class="waves-effect waves-dark" href="form-elements-advance.html"><i class="icon-arrow-right"></i> Form Elements Advance</a></li>
                    </ul>
                </li>
                
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="basic-table.html">
                        <i class="icon-list"></i><span> Table</span>
                    </a>                
                </li>
        </section>
    </aside>
<!-- Sidebar chat start -->
       <div id="sidebar" class="p-fixed header-users showChat">
            <div class="had-container">
                <div class="card card_main header-users-main">
                    <div class="card-content user-box">

                         <div class="md-group-add-on p-20">
                                 <span class="md-add-on">
                                    <i class="icofont icofont-search-alt-2 chat-search"></i>
                                 </span>
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control"  name="username" id="search-friends">
                                        <label>Search</label>
                                    </div>

                        </div>
                        <div class="media friendlist-main">

                            <h6>Friend List</h6>

                        </div>
                        <div class="main-friend-list">
                          <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Alice</div>
                                  <span>1 hour ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                  <div class="live-status bg-danger"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Michael Scofield</div>
                                  <span>3 hours ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Irina Shayk</div>
                                  <span>1 day ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                                  <div class="live-status bg-danger"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Sara Tancredi</div>
                                  <span>2 days ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Alice</div>
                                  <span>1 hour ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Alice</div>
                                  <span>1 hour ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip"  data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Alice</div>
                                  <span>1 hour ago</span>
                              </div>
                          </div>
                           <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                           <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                           <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                           <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="icofont icofont-rounded-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                    </a>
                </div>
            </div>
            <div class="media chat-reply-box">
              <div class="md-input-wrapper">
                    <input type="text" class="md-form-control" id="inputEmail" name="inputEmail" >
                    <label>Share your thoughts</label>
                   <span class="highlight"></span>
                 <span class="bar"></span>  <button type="button" class="chat-send waves-effect waves-light">
                     <i class="icofont icofont-location-arrow f-20 "></i>
                 </button>

                  </div>

            </div>
        </div>
<!-- Sidebar chat end-->
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
       <div class="container-fluid">
        <!-- Row Starts -->
        <div class="row">
            <div class="col-sm-12 p-0">
                <div class="main-header">
                    <h4>Halaman Membuat Merchandise</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.php/halaman_awal"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Pages</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Row end -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="md-card-block">
                            <p class="m-b-20">

          <form action="datamerchandise" method="POST" enctype="multipart/form-data">
            <body id="page-top" bgcolor="black">    
                    <div class="col-md-15 container dim-container" style="padding-bottom: 470px;" >
            <div id="edit" style="padding-bottom: 10px; display: block;">
            <div class="card">
              <div class="card-header"> <h5> Masukkan Data Merchandise </h5> <i class="fa fa-bell fa-fw"></i> </div>
                <div class="card-body">
                <div class="row">
                  <div class="col-md-2 text-center">
                    <img src="<?= base_url();?>assets/images/avatar-6.png" width="150px" />
                  </div>
                  <div class="col-md-9">

                  <div class="form-group">
                  <b> Nama Produk  </b>
                  <input type="text" class="form-control" id="product" name="product" required>
                    </div>

                  <div class="form-group">
                    <b>Kategori</b>
                       <select class="form-control" id="exampleSelect1">
                          <option>1</option>
                            <option>2</option>
                             <option>3</option>
                                <option>4</option>
                                    <option>5</option>
                                         </select>
                    </div>

                  <div class="form-group">
                  <b> Harga </b>
                  <input type="text" class="form-control" id="price" name="price" required>
                    </div>

                  <div class="form-group">
                  <b> Deskripsi Produk </b>
                  <textarea class="form-control" rows="15" name="desc" id="summernote"></textarea>
                  <br>
                   <div class="md-group-add-on">
                  <span class="md-add-on-file">
                  <button class="btn btn-success waves-effect waves-light">Upload</button>
                  </span>
                   <div class="md-input-file">
                    <input type="file" id="picture" name="picture" class=""/>
                  <input type="text" class="md-form-control md-form-file">
                     <label class="md-label-file">Upload File</label>
                       </div>
                           </div>
              </div>
              </div>
            </div>
            <center><button type="submit" class="btn btn-primary btn-lg">Submit</button></center>
          </form>
                            <p class="m-b-20">
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Container-fluid ends -->
     </div>
</div>


<!-- Warning Section Ends -->
<script src="<?= base_url();?>assets/summernote/bootstrap.min.js"></script>


               <script type="text/javascript">
                 $(document).ready(function() {
                    $('#summernote').summernote({
                      height: 350 
                    });
                  });
               </script>
<!-- Required Jqurey 
<script src="<?= base_url();?>assets/plugins/jquery/dist/jquery.min.js"></script>-->
<script src="<?= base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url();?>assets/plugins/tether/dist/js/tether.min.js"></script>
<!-- Required Fremwork -->
<script src="<?= base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="<?= base_url();?>assets/plugins/Waves/waves.min.js"></script>

<!-- Scrollbar JS-->
<script src="<?= base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?= base_url();?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="<?= base_url();?>assets/plugins/classie/classie.js"></script>

<!-- notification -->
<script src="<?= base_url();?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- custom js -->
<script type="text/javascript" src="<?= base_url();?>assets/js/main.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/pages/elements.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/menu.min.js"></script>

</body>
</html>
