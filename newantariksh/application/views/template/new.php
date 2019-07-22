<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- Mirrored from www.wrappixel.com/demos/admin-templates/nice-admin/html/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 07:19:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Admin</title>
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
        <!-- This page plugin CSS -->
    <link href="../../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
      
       
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
/*.table{
    color:white;
}
.table th{
    color:#b1afaf;
}*/
a:hover {
    color: white;
}
.form-control{
            background-color: #2c3b4c !important;
        }
</style>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="index.php" class="logo">
                           
                               <img src="http://antariksh.co.in/img/antariksh-logo.png" alt="homepage" class="light-logo" /> 
                            </b>
                           
                            <span class="logo-text">
                               <img src="http://antariksh.co.in/img/antariksh-logo.png" alt="homepage" class="dark-logo" />
                            <img src="http://antariksh.co.in/img/antariksh-logo.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                  
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto">
                       
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-right">
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-22 mdi mdi-email-outline"></i>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <span class="with-arrow">
                                    <span class="bg-danger"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title text-white bg-danger">
                                            <h4 class="m-b-0 m-t-5">5 New</h4>
                                            <span class="font-light">Messages</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                                                    <span class="profile-status online pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                                                    <span class="profile-status busy pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Sonu Nigam</h5>
                                                    <span class="mail-desc">I've sung a song! See you at</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                                                    <span class="profile-status away pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Arijit Sinh</h5>
                                                    <span class="mail-desc">I am a singer!</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle">
                                                    <span class="profile-status offline pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link text-dark" href="javascript:void(0);">
                                            <b>See all e-Mails</b>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                         <li class="nav-item dropdown border-right">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline font-22"></i>
                                <span class="badge badge-pill badge-info noti">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-primary text-white">
                                            <h4 class="m-b-0 m-t-5">4 New</h4>
                                            <span class="font-light">Notifications</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-danger btn-circle">
                                                    <i class="fa fa-link"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Luanch Admin</h5>
                                                    <span class="mail-desc">Just see the my new admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-success btn-circle">
                                                    <i class="ti-calendar"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Event today</h5>
                                                    <span class="mail-desc">Just a reminder that you have event</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-info btn-circle">
                                                    <i class="ti-settings"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Settings</h5>
                                                    <span class="mail-desc">You can customize this template as you want</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-primary btn-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center m-b-5 text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle" width="40">
                                <span class="m-l-5 font-medium d-none d-sm-inline-block">Jonathan Doe <i class="mdi mdi-chevron-down"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0">Jonathan Doe</h4>
                                        <p class=" m-b-0"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4cecbcae4c3c9c5cdc88ac7cbc9">[email&#160;protected]</a></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
                                </div>
                            </div>
                        </li>
                       </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Subscriber</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-av-timer"></i><span class="hide-menu">Subscriber </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="user_list.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Show Subscriber </span></a></li>
                                <li class="sidebar-item"><a href="new_user_list.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Create Subscriber </span></a></li>
                                <li class="sidebar-item"><a href="new_ip_address_list.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Show Lease Subscriber</span></a></li>
                                <li class="sidebar-item"><a href="add_user.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Show Create Subscriber</span></a></li>
                                <li class="sidebar-item"><a href="add_user.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Online Subscriber</span></a></li>
                                <li class="sidebar-item"><a href="add_user.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Upload Section</span></a></li>
                                <li class="sidebar-item"><a href="add_user.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">View Radius Logs</span></a></li>
                                <li class="sidebar-item"><a href="add_user.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Advance Renewal Subscriber</span></a></li>
                            </ul>
                        </li>
                        
                     <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Location</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-collage"></i><span class="hide-menu">Location</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                 <li class="sidebar-item"><a href="dsa_add_user.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Country </span></a></li>
                                <li class="sidebar-item"><a href="new_dsa_user_list.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">State</span></a></li>
                                <li class="sidebar-item"><a href="new_dsa_user_sale.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">City </span></a></li>
                                 <li class="sidebar-item"><a href="dsa_add_user.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Area</span></a></li>
                                <li class="sidebar-item"><a href="new_dsa_user_list.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Location</span></a></li>
                                <li class="sidebar-item"><a href="new_dsa_user_sale.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Building</span></a></li>
                                
                             </ul>
                        </li>  

                           
                           <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Admin</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-collage"></i><span class="hide-menu">Admin</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                 <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Permission </span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Employee</span></a></li>
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Company</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">franchise	</span></a></li>
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Partner</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Franchise/Partner Topup</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Miscellaneous</span></a></li>
                             </ul>
                        </li>  


                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Notification</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-collage"></i><span class="hide-menu">Notification</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                 <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">SMS Api</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> SMS Template</span></a></li>
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Email Api</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Email Template </span></a></li>
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Push Alert</span></a></li>
                                                       
                             </ul>
                        </li>   
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Complaint</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-none"></i><span class="hide-menu">Complaint</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                 <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Complaint</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Create Complaint</span></a></li>
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> CMS Setting</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> CMS Manager</span></a></li>
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> CMS Customercare</span></a></li>
                                	
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Plan</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu"> Plan</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Plan</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Create Plan</span></a></li>
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Create Topup Plan</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Plan Assign</span></a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">NAS/IPPOOL</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu"> NAS/IPPOOL</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Radius Client</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Create Radius Client</span></a></li>
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">NatLog</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> IPPool</span></a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">System Setting</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu"> System Setting</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Setting</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Server Info</span></a></li>
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Login Info</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> CP Management</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Payment Gateway Setup</span></a></li>
                            </ul>
                        </li>
                         
                         <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Reports</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-none"></i><span class="hide-menu">Reports</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><i class="mdi mdi-adjust"></i><span class="hide-menu">Subscriber Reports/Logs</span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-responsive.html" aria-expanded="false"><i class="mdi mdi-adjust"></i><span class="hide-menu">Accounts Report</span></a></li>
                                
                            </ul>
                        </li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
