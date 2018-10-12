<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile | Float Indonesia</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?= base_url();?>assets/assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/icon/icofont/css/icofont.css">

    <!-- Font Awesome -->
    <link href="<?= base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Date Picker css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/color/color-1.min.css" id="color"/>

</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
      <div class="loader-bg">
        <div class="loader-bar">
        </div>
      </div>
    <!-- Navbar-->
    <header class="main-header-top hidden-print">
        <a href="index.html" class="logo"><img class="img-fluid able-logo" src="<?= base_url();?>assets/images/logo.png" alt="Theme-logo"></a>
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
                    <img class="img-circle" src="assets/images/avatar-6.png" alt="User Image">
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
                            <li><a href="profile.html"><i class="icon-user"></i> Profile</a></li>
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
                                <img src="<?= base_url();?>assets/images/avatar-6.png" alt="PagePreloadingEffect"/>
                                <h3>Page Preloading Effect</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img src="<?= base_url();?>assets/images/avatar-6.png" alt="DraggableDualViewSlideshow"/>
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                           <a class="dummy-media-object" href="#!">
                                <img src="<?= base_url();?>assets/images/avatar-6.png" alt="TooltipStylesInspiration"/>
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="<?= base_url();?>assets/images/avatar-6.png" alt="NotificationStyles"/>
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
                    <p class="designation"> Web Developer <i class="icofont icofont-caret-down m-l-5"></i></p>
                </div>
            </div>
            <!-- sidebar profile Menu-->
            <ul class="nav sidebar-menu extra-profile-list">
                <li>
                 <a class="waves-effect waves-dark" href="profile.html">
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
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="index.html">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">Components</li>
                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> Artikel </span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="<?= base_url('index.php/artikel/alldata');?>"><i class="icon-arrow-right"></i>Lihat Data Artikel</a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url('index.php/artikel/summernote');?>"><i class="icon-arrow-right"></i>Buat Artikel</a></li>
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
                        <li><a class="waves-effect waves-dark" href="<?= base_url();?>form-elements-bootstrap.html"><i class="icon-arrow-right"></i> Form Elements Bootstrap</a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url();?>form-elements-materialize.html"><i class="icon-arrow-right"></i> Form Elements Material</a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url();?>form-elements-advance.html"><i class="icon-arrow-right"></i> Form Elements Advance</a></li>
                    </ul>
                </li>
                
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="basic-table.html">
                        <i class="icon-list"></i><span> Table</span>
                    </a>                
                </li>


                <li class="nav-level">More</li>

                <li class="active treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li class="active treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>
                                

                                <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>
                                <li class="active"><a class="waves-effect waves-dark" href="profile.html"><i class="icon-arrow-right"></i> Profile</a></li>
                            </ul>
                        </li>
                        <li><a class="waves-effect waves-dark" href="lock-screen.html" target="_blank"><i class="icon-arrow-right"></i> Lock Screen</a></li>
                        <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
                        <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>
                        <li><a class="waves-effect waves-dark" href="search-result.html"><i class="icon-arrow-right"></i> Search Result</a></li>
                    </ul>
                </li>


                <li class="nav-level">Menu Level</li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>Menu Level 1</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                Level Two
                            </a>
                        </li>
                        <li class="treeview">
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                <span>Level Two</span>
                                <i class="icon-arrow-down"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        Level Three
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        <span>Level Three</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
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
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Puspa Kartika" data-toggle="tooltip" data-placement="left" title="Puspa Kartika">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-6.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-3.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Michael Scofield</div>
                                <span>3 hours ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-4.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Irina Shayk</div>
                                <span>1 day ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-5.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Sara Tancredi</div>
                                <span>2 days ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-6.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-6.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip"  data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-6.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="<?= base_url();?>assets/images/avatar-1.png" alt="Generic placeholder image">
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
                <img class="media-object img-circle m-t-5" src="<?= base_url();?>assets/images/avatar-1.png" alt="Generic placeholder image">
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
                    <img class="media-object img-circle m-t-5" src="<?= base_url();?>assets/images/avatar-2.png" alt="Generic placeholder image">
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
            <div class="row">
                <div class="main-header">
                    <h4>Profile</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Extras</a>
                        </li>
                        <li class="breadcrumb-item"><a href="profile.html">Profile</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- Header end -->
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="card faq-left">
                        <div class="social-profile">
                            <img class="img-fluid" src="<?= base_url();?>assets/images/social/profile-2.jpg" alt="">
                            <div class="profile-hvr m-t-15">
                                <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                                <i class="icofont icofont-ui-delete c-pointer"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <h4 class="f-18 f-normal m-b-10 txt-primary">Puspa Kartikaning Wikono</h4>
                            <h5 class="f-14">Web Developer</h5>
                            <p class="m-b-15">Lorem ipsum dolor sit amet, consectet
                                ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte</p>
                            <ul>
                                <li class="faq-contact-card">
                                    <i class="icofont icofont-telephone"></i>
                                    +(1234) - 5678910
                                </li>
                                <li class="faq-contact-card">
                                    <i class="icofont icofont-world"></i>
                                    <a href="http://phoenixcoded.com">www.phoenixcoded.com</a>
                                </li>
                                <li class="faq-contact-card">
                                    <i class="icofont icofont-email"></i>
                                    <a href="mailto:joe@example.com">demo@phoenixcoded.com</a>
                                </li>
                            </ul>
                            <div class="faq-profile-btn">
                                <button type="button" class="btn btn-primary waves-effect waves-light">Follows
                                </button>
                                <button type="button" class="btn btn-success waves-effect waves-light">Message
                                </button>
                            </div>

                        </div>
                    </div>
                    <!-- end of card-block -->
                    <div class="card">
                        <div class="card-header"><h5 class="card-header-text">Technical Skill</h5></div>
                        <div class="card-block">
                            <div class="technical-skill">
                                <h6>Photoshop</h6>
                                <div class="faq-progress">
                                    <div class="progress">
                                        <span class="faq-text1"></span>
                                        <div class="faq-bar1"></div>
                                    </div>
                                </div>
                                <h6>Illustrator</h6>
                                <div class="faq-progress">
                                    <div class="progress">
                                        <span class="faq-text2"></span>
                                        <div class="faq-bar2"></div>
                                    </div>
                                </div>
                                <h6>PHP</h6>
                                <div class="faq-progress">
                                    <div class="progress">
                                        <span class="faq-text3"></span>
                                        <div class="faq-bar3"></div>
                                    </div>
                                </div>
                                <h6>Javascript</h6>
                                <div class="faq-progress">
                                    <div class="progress">
                                        <span class="faq-text4"></span>
                                        <div class="faq-bar4"></div>
                                    </div>
                                </div>
                                <h6>Communication</h6>
                                <div class="faq-progress">
                                    <div class="progress">
                                        <span class="faq-text5"></span>
                                        <div class="faq-bar5"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of technical skill -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                    <!-- end of card -->
                </div>
                <!-- end of col-lg-3 -->

                <!-- start col-lg-9 -->
                <div class="col-xl-9 col-lg-8">
                    <!-- Nav tabs -->
                    <div class="tab-header">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#project" role="tab">Projects</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#" role="tab">Item</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#" role="tab">Item</a>
                                <div class="slide"></div>
                            </li> 
                        </ul>
                    </div>
                    <!-- end of tab-header -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">
                            <div class="card">
                                <div class="card-header"><h5 class="card-header-text">About Me</h5>
                                    <button id="edit-btn" type="button" class="btn btn-primary waves-effect waves-light f-right" >
                                        <i  class="icofont icofont-edit"></i>
                                    </button>
                                </div>
                                <div class="card-block">
                                    <div class="view-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xl-6">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">Full Name</th>
                                                                    <td>Puspa Kartikaning Wikono</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Gender</th>
                                                                    <td>Female</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Birth Date</th>
                                                                    <td>March 25th, 1998</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Marital Status</th>
                                                                    <td>Single</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Location</th>
                                                                    <td>New York, USA</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->

                                                        <div class="col-lg-12 col-xl-6">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">Email</th>
                                                                    <td><a href="#!">Demo@phenix.com</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Mobile Number</th>
                                                                    <td>(0123) - 4567891</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Twitter</th>
                                                                    <td>@phoenixcoded</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Facebook</th>
                                                                    <td>phoenixcoded.demo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Website</th>
                                                                    <td><a href="#!">www.demo.com</a></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of general info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of view-info -->

                                    <div class="edit-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                         <span class="md-add-on">
                                                                             <i class="icofont icofont-ui-user"></i>
                                                                         </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input type="text" class="md-form-control">
                                                                                <label>Full Name</label>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <div class="form-radio">
                                                                            <form>
                                                                                <div class="md-group-add-on">
                                                      <span class="md-add-on">
                                                         <i class="icofont icofont-group-students"></i>
                                                      </span>
                                                                                    <div class="radio radiofill radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio"><i class="helper"></i> Male
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radiofill radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio"><i class="helper"></i> Female
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                        <span class="md-add-on">
                                                                             <i class="icofont icofont-ui-calendar"></i>
                                                                         </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input type="text" id="date" class="md-form-control">
                                                                                <label>Birthday Date</label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                         <span class="md-add-on">
                                                                             <i class="icofont icofont-users-alt-4"></i>
                                                                         </span>
                                                                            <div class="md-input-wrapper">
                                                                                <select class="md-form-control">
                                                                                    <option>Select Marital Status</option>
                                                                                    <option>Married</option>
                                                                                    <option>Unmarried</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                         <span class="md-add-on">
                                                                             <i class="icofont icofont-location-pin"></i>
                                                                         </span>
                                                                            <div class="md-input-wrapper">
                                                                                <textarea class="md-form-control" cols="2" rows="4"></textarea>
                                                                                <label>Address</label>

                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->

                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                         <span class="md-add-on">
                                                                             <i class="icofont icofont-email"></i>
                                                                         </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input type="email" class="md-form-control">
                                                                                <label>Email</label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                         <span class="md-add-on">
                                                                             <i class="icofont icofont-mobile-phone"></i>
                                                                         </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input type="number" class="md-form-control">
                                                                                <label>Mobile Number</label>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                         <span class="md-add-on">
                                                                             <i class="icofont icofont-social-twitter"></i>
                                                                         </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input type="email" class="md-form-control">
                                                                                <label>Twitter Id</label>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                         <span class="md-add-on">
                                                                             <i class="icofont icofont-social-facebook"></i>
                                                                         </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input type="email" class="md-form-control">
                                                                                <label>Facebook Name</label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                         <span class="md-add-on">
                                                                             <i class="icofont icofont-web"></i>
                                                                         </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input type="text" class="md-form-control">
                                                                                <label>Website</label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>

                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                    <div class="text-center">
                                                        <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                        <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                    </div>
                                                </div>
                                                <!-- end of edit info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->

                                    </div>
                                    <!-- end of view-info -->
                                </div>
                                <!-- end of card-block -->
                            </div>
                            <!-- end of card-->

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header"><h5 class="card-header-text">Experience</h5>
                                            <button id="btn-exp" type="button" class="btn btn-primary waves-effect waves-light f-right">
                                                <i  class="icofont icofont-edit"></i>
                                            </button>
                                        </div>
                                        <div class="card-block">
                                            <div class="view-exp">
                                                <ul class="basic-list list-icons faq-expi">
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Apple Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Infosys Systems</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Hawlett Packard</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  QuickHeal Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- end of view-info -->
                                            <div class="edit-exp">
                                                <ul class="basic-list list-icons faq-expi">
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing - Intel Marketing Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing - Intel Marketing Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing - Intel Marketing Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing - Intel Marketing Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                </ul>
                                                <div class="text-right m-t-10">
                                                    <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                    <a href="#!" id="exp-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                </div>
                                            </div>
                                            <!-- end of edit-info -->

                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                    <!-- end of card -->
                                </div>
                                <!-- end of col-lg-6 -->

                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header"><h5 class="card-header-text">Education</h5>
                                            <button id="edu-btn" type="button" class="btn btn-primary waves-effect waves-light f-right" >
                                                <i  class="icofont icofont-edit"></i>
                                            </button>
                                        </div>
                                        <div class="card-block">
                                            <div class="view-edu">
                                                <ul class="basic-list list-icons faq-expi">
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Apple Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Apple Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Apple Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Apple Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- end of view-edu -->
                                            <div class="edit-edu">
                                                <ul class="basic-list list-icons faq-expi">
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Intel Inc</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Cisco Systems</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Juniper Networks</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-verification-check"></i>
                                                        <h6>Marketing Managament - &nbsp;  Microsoft corporation</h6>
                                                        <h6>Oct 2013 - Mar 2014</h6>
                                                    </li>
                                                </ul>
                                                <div class="text-right m-t-10">
                                                    <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                    <a href="#!" id="edu-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                </div>

                                            </div>
                                            <!-- end of edit-edu -->
                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                    <!-- end of card -->
                                </div>
                                <!-- end of col-lg-6 -->
                            </div>
                            <!-- end of row of education and experience  -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header"><h5 class="card-header-text">Professional Skill</h5></div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-md-3 faq-chart">
                                                    <div class="chart" data-percent="75" data-barColor="#5cb85c" data-trackColor="#fff" data-lineWidth="5" data-barSize="150">
                                                        <div class="chart-percent"><span></span>%</div>
                                                    </div>
                                                    <!-- end of creativity chart -->
                                                    <h5>Creativity</h5>
                                                </div>
                                                <!-- end of col-lg-3 creativity chart -->
                                                <div class="col-md-3 faq-chart">
                                                    <div class="chart" data-percent="90" data-barColor="#c9302c" data-trackColor="#fff" data-lineWidth="5" data-barSize="150">
                                                        <div class="chart-percent"><span></span>%</div>
                                                    </div>
                                                    <!-- end of social media chart -->
                                                    <h5>Social Media</h5>
                                                </div>
                                                <!-- end of col-lg-3 social media chart -->
                                                <div class="col-md-3 faq-chart">
                                                    <div class="chart" data-percent="83" data-barColor="#ec971f" data-trackColor="#fff" data-lineWidth="5" data-barSize="150">
                                                        <div class="chart-percent"><span></span>%</div>
                                                    </div>
                                                    <!-- end of marketing chart -->
                                                    <h5>Marketing</h5>
                                                </div>
                                                <!-- end of col-lg-3 marketing chart -->
                                                <div class="col-md-3 faq-chart">
                                                    <div class="chart" data-percent="68" data-barColor="#025aa5" data-trackColor=" #fff" data-lineWidth="5" data-barSize="150">
                                                        <div class="chart-percent"><span></span>%</div>
                                                    </div>
                                                    <!-- end of leadership chart -->
                                                    <h5>Leadership</h5>
                                                </div>
                                                <!-- end of col-lg-3 leadership chart -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of card block -->
                                    </div>
                                    <!-- end of card -->
                                </div>
                                <!-- end of col-lg-12 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of tab-pane -->
                        <!-- end of about us tab-pane -->

                        <!-- start tab-pane of project tab -->
                        <div class="tab-pane" id="project" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Project Details</h5>
                                    <button type="button" class="btn btn-primary waves-effect waves-light f-right">
                                        + ADD PROJECTS</button>
                                </div>
                                <!-- end of card-header  -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="project-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center txt-primary pro-pic">Photo</th>
                                                        <th class="text-center txt-primary">Client</th>
                                                        <th class="text-center txt-primary">Start Date</th>
                                                        <th class="text-center txt-primary">End Date</th>
                                                        <th class="text-center txt-primary">Status</th>
                                                        <th class="text-center txt-primary">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="text-center">
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-success m-t-20">Finish</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-success">Finish</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-warning">Pending</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-success">Finish</span></td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-danger">cancel</span></td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-warning">Pending</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-success m-t-20">Finish</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-success m-t-20">Finish</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-warning">Pending</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-success m-t-20">Finish</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-warning">Pending</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <!-- end of table -->
                                            </div>
                                            <!-- end of table responsive -->
                                        </div>
                                        <!-- end of project table -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of card-main -->
                        </div>
                        <!-- end of project pane -->

                        <!-- start a question pane  -->

                        <div class="tab-pane" id="questions" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-questioning">
                                        <div class="accordion-box" id="question-open">
                                            <div class="faq-accordion">
                                                <a class="accordion-msg active">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- end of accrodion box class -->
                                    </div>
                                    <!-- end of class questing -->
                                </div>
                                <!-- end of col-lg-12 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of tab pane question -->

                        <!-- start memeber ship tab pane -->

                        <div class="tab-pane" id="members" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="card-member">
                                        <div class="accordion-box" id="member-open">
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <div class="accordion-desc">
                                                    <p>
                                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of accrodion box class -->
                                    </div>
                                    <!-- end of class questing -->
                                </div>
                                <!-- end of col-lg-12 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of memebership tab pane -->

                    </div>
                    <!-- end of main tab content -->
                </div>
            </div>

        </div>
        <!-- Container-fluid ends -->
    </div>
</div>



<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->


<!-- Required Jqurey -->
<script src="<?= base_url();?>assets/plugins/jquery/dist/jquery.min.js"></script>
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

<!-- pie chart.js -->
<script type="text/javascript" src="<?= base_url();?>assets/plugins/bower-jquery-easyPieChart/dist/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/pages/counter.js"></script>

<!-- Date picker.js -->
<script type="text/javascript" src="<?= base_url();?>assets/plugins/moment/moment.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- custom js -->
<script type="text/javascript" src="<?= base_url();?>assets/js/main.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/pages/profile.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/pages/elements.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/menu.min.js"></script>

</body>
</html>
