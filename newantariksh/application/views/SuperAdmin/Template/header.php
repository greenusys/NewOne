<?php
// print($_SESSION['loggedUser'][0]->user_role_id);
// $role_id=$this->session->loggedUser->user_role_id;
// $this->db->where('id',$role_id);
// $data=$this->db->get('roles')->row();
// $perm= $data->permission;
// print_r($perm);
?>


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
    <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Admin</title>
    <!-- Custom CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?=base_url('assets/libs/chartist/dist/chartist.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/extra-libs/c3/c3.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')?>" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/dist/css/style.min.css')?>" rel="stylesheet">
        <!-- This page plugin CSS -->
    <link href="<?=base_url('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/css/select2.css')?>" rel="stylesheet"> 
    <!--  <script data-cfasync="false" src="<?=base_url('assets/')?>cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <!--<script src="assets/libs/jquery/dist/jquery.min.js"></script>-->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url('assets/libs/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/libs/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- apps -->
    <script src="<?=base_url('assets/dist/js/app.min.js')?>"></script>
    <script src="<?=base_url('assets/dist/js/app.init.horizontal.js')?>"></script>
    <script src="<?=base_url('assets/dist/js/app-style-switcher.horizontal.js')?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?=base_url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/extra-libs/sparkline/sparkline.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?=base_url('assets/dist/js/waves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url('assets/dist/js/sidebarmenu.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url('assets/dist/js/custom.min.js')?>"></script>
    <!--This page plugins -->
    <script src="<?=base_url('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <!-- start - This is for export functionality only -->
    <script src="<?=base_url('assets/libs/buttons/1.5.1/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?=base_url('assets/libs/buttons/1.5.1/js/buttons.flash.min.js')?>"></script>
    <script src="<?=base_url('assets/libs/jszip/3.1.3/jszip.min.js')?>"></script>
    <script src="<?=base_url('assets/libs/pdfmake/0.1.32/pdfmake.min.js')?>"></script>
    <script src="<?=base_url('assets/libs/pdfmake/0.1.32/vfs_fonts.js')?>"></script>
    <script src="<?=base_url('assets/libs/buttons/1.5.1/js/buttons.html5.min.js')?>"></script>
    <script src="<?=base_url('assets/libs/buttons/1.5.1/js/buttons.print.min.js')?>"></script>
    <script src="<?=base_url('assets/dist/js/pages/datatable/datatable-advanced.init.js')?>"></script>  
    <script src="https://cdn.ckeditor.com/4.10.0/basic/ckeditor.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
    form div.required label.control-label:after {
    content: " * ";
    color: red;
}
.topbar .top-navbar .navbar-header {
        line-height: 33px;
}

.height34{
    height: 34px;
}
.topbar .top-navbar {
    min-height: auto !important;
    padding: 0;
}

.topbar {
    position: relative;
    z-index: 50;
    box-shadow: 1px 0 7px rgba(0, 0, 0, .05);
    background: #fff;
    height: 34px;
}

//asset/dist/css/style.min.css 36918

@media screen and (min-width: 768px){
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header {
        width: 199px;
        border-right: 1px solid rgba(0, 0, 0, .1);
    }
}
</style>
<style>
/*.table{
    color:white;
}
.table th{
    color:#b1afaf;
}*/

/*.form-control{*/
/*            background-color: #2c3b4c !important;*/
/*        }*/
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
            <nav class="navbar top-navbar navbar-expand-md navbar-dark height34" >
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="<?=base_url('index.php/Home')?>" class="logo">
                           
                               <img src="http://antariksh.co.in/img/antariksh-logo.png" alt="homepage" class="light-logo" /> 
                            </b>
                           
                            <span class="logo-text">
                               <img src="http://antariksh.co.in/img/antariksh-logo.png" alt="homepage" class="dark-logo" style="width: 100%;"/>
                            <img src="http://antariksh.co.in/img/antariksh-logo.png" class="light-logo" alt="homepage" style="width: 100%;" />
                            </span>
                        </a>
                    </div>
                  
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                
                <div class="navbar-collapse collapse height34 " id="navbarSupportedContent" >
                    <ul class="navbar-nav float-left mr-auto">
                       
                       
                    </ul>
                    <ul class="navbar-nav float-right">
                       <li class="nav-item dropdown">
                            
                        </li>
                         <li class="nav-item dropdown border-right">
                           
                        </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="" alt="user" class="rounded-circle" width="20">
                                <span class="m-l-5 font-medium d-none d-sm-inline-block"><?='$this->session->name'?> <i class="mdi mdi-chevron-down"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="" alt="user" class="rounded-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0"><?='$this->session->loggedUser->first_name'.' '.'$this->session->loggedUser->last_name'?></h4>
                                        <p class=" m-b-0"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="text-white" data-cfemail="a4cecbcae4c3c9c5cdc88ac7cbc9"><?='$this->session->loggedUser->email'?></a></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="<?=base_url('index.php/Profile')?>">
                                    <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <!-- <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-email m-r-5 m-l-5"></i> Inbox</a> -->
                                <!--<div class="dropdown-divider"></div>-->
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-settings m-r-5 m-l-5"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url('index.php/Login/logOut')?>">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <!--<div class="dropdown-divider"></div>-->
                                <!-- <div class="p-l-30 p-10">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
                                </div> -->
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
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Admin</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-av-timer"></i><span class="hide-menu">Admin </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                
                                <li class="sidebar-item"><a href="<?=base_url('index.php/Subscriber')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Show Admin </span></a></li>
                                
                                <li class="sidebar-item"><a href="<?=base_url('index.php/Subscriber/create')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Add Admin </span></a></li>
                                
                              
                            </ul>
                        </li>
                        
                     <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Company</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-collage"></i><span class="hide-menu">Company</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                 <li class="sidebar-item"><a href="<?=base_url('index.php/Location')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Show Company </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url('index.php/Location/state')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Add Company</span></a></li>
                                
                             </ul>
                        </li>  

                           
                          

                       
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Complaint</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-none"></i><span class="hide-menu">Complaint</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                 <li class="sidebar-item"><a href="<?=base_url('index.php/Complaint/fetchAllComplaint')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Complaint</span></a></li>
                                <!-- <li class="sidebar-item"><a href="<?=base_url('index.php/Complaint/createComplaint')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Create Complaint</span></a></li> -->
                                <!-- <li class="sidebar-item"><a href="<?=base_url('index.php/Complaint/cmsSetting')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> CMS Setting</span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url('index.php/Complaint/cmsManager')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> CMS Manager</span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url('index.php/Complaint/cmsEngg')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> CMS Enginner</span></a></li> -->
                               <!--  <li class="sidebar-item"><a href="<?=base_url('index.php/Complaint/cmsCustomerCare')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> CMS Customercare</span></a></li> -->
                                	
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Plan</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu"> Plan</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="<?=base_url('index.php/Plan')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Plan</span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url('index.php/Plan/createPlan')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Create Plan</span></a></li>
                              
                                
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">NAS/IPPOOL</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu"> NAS/IPPOOL</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="<?=base_url('index.php/Naas_Ippool/Radiusclient')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Radius Client</span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url('index.php/Naas_Ippool/createRadiusClient')?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Create Radius Client</span></a></li>
                               
                            </ul>
                        </li>
                      
                         
                         <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Reports</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-none"></i><span class="hide-menu">Reports</span></a>
                             <ul aria-expanded="false" class="collapse first-level">
                                
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-playlist-plus"></i> <span class="hide-menu">subscriber Reports/Logs</span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item"><a href="<?=base_url('index.php/Subscriberlog/subscriberReport')?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Subscriber Reports</span></a></li>
                                        <!-- <li class="sidebar-item"><a href="<?=base_url('index.php/Subscriberlog/registrationReport')?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Registration Report</span></a></li> -->
                                       <!--  <li class="sidebar-item"><a href="<?=base_url('index.php/Subscriberlog/Accesslog')?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Access Logs</span></a></li> -->
                                        <li class="sidebar-item"><a href="<?=base_url('index.php/Subscriberlog/sessionlogReport')?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Session Logs</span></a></li>
                                         <!-- <li class="sidebar-item"><a href="<?=base_url('index.php/Subscriberlog/Ipmaclog')?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> IP Mac Logs</span></a></li> -->
                                        <!-- <li class="sidebar-item"><a href="<?=base_url('index.php/Subscriberlog/Planwisesubscriber')?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Planwise Subscriber</span></a></li> -->
                                        <li class="sidebar-item"><a href="<?=base_url('index.php/Subscriberlog/Renewalreport')?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Renewal Report</span></a></li>
                                       
                                    </ul>
                           
                              
                              </ul>
                        </li>
                       
                    </ul>

               
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
