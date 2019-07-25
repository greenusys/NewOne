
<style>
.dataTables_info{
    display:none !important; 
}
.dataTables_paginate 
{
    display:none !important;  
}
</style>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
<div class="row">
<div class="col-5 align-self-center">
<h4 class="page-title">users</h4>
</div>
<div class="col-7 align-self-center">
<div class="d-flex align-items-center justify-content-end">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="#">Home</a>
</li>
<li class="breadcrumb-item active" aria-current="page">users</li>
</ol>
</nav>
</div>
</div>
</div>
</div>

<style>

thead input {
        width: 100%;
    }
  th{
    white-space: nowrap;
  }  
  td{
     white-space: nowrap;
  }
  table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td {
    border-bottom-width: 0;
    padding: 8px;
}
.table td, .table th {
    padding: 1px;
    vertical-align: top;
    border-top: 1px solid rgba(0, 0, 0, .1);
}
thead input {
    width: 100%;
    background: #efeaea;
}
#page a{
    
    margin:15px !important;
}
</style>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- File export -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

<div class="table-responsive">
    <?php
        if($this->session->flashdata('msg'))
        {
            echo '<div class="alert alert-info">'.$this->session->flashdata('msg').'</div>';
        }
    ?>
    <table id="file_export" class="table table-striped table-bordered display">
        <thead>
            <tr><th>Sno.</th>
                <th>Action</th>
                <th>State</th>
                <th>Status</th>
                <th>Username</th>
                <th>Name</th>
                <th>Account ID</th>
                <th>Mobile No.</th>
                
                <th>City Name</th>
                <th> Address</th>
                <th>Radius Client</th>
                <th>Plan</th>
               
                <th>Amount</th>
                <th>Renew Date</th>
                <th>Expiry Date</th>
                <th>Final Expiry Date</th>
                <th>Advance</th>
                <th>Account Type</th>
                <th>Service Type</th>
                <th>IP Type</th>
                <th>IP Address</th>
                <th>MAC Address</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = $this->uri->segment(3);
            foreach ($users as $author): ?>
            <tr>
                <td><?=$i+1;?></td>
                <td>
                   
                    <div class="btn-group">
                <button id="w10" class="btn-default btn">Actions</button>
                <button id="w9" class="btn-default btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                <ul id="w11" class="dropdown-menu-left dropdown-menu">
                    <?php

                    ?>
                    <li>
                        <a href="<?=base_url('index.php/Subscriber/renew/'.$author->id)?>" data-confirm="Do you want to assign package of 9999435610?" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/refresh_16.png')?>"></span>&nbsp;&nbsp;&nbsp;Activate Plan</a>
                        </li>
                    <li>
                        <a href="<?=base_url('index.php/Subscriber/update/'.$author->id)?>" data-confirm="Do you want Update Subscriber of 9999435610?" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/edit_16.png')?>"></span>&nbsp;&nbsp;&nbsp;Update User</a>
                    </li>
                   <!--  <li>
                        <a href="/minetworkx/web/subscriber/logout?id=1227" data-confirm="Do you want Logout Subscriber 9999435610?" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/setting_16.png')?>">
                        </span>&nbsp;&nbsp;&nbsp;Logout Subscriber</a>
                    </li> -->
                    <!-- <li>
                        <a href="/minetworkx/web/subscriber/resetmacaddress?id=1227" data-confirm="Do you want Reset MAC Address Subscriber 9999435610?" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/licrenew_16.png')?>"></span>&nbsp;&nbsp;&nbsp;Reset MAC Address</a>
                    </li> -->
                   <!--  <li>
                        <a href="/minetworkx/web/subscriber/resetexpirydate?id=1227" data-confirm="Do you want Reset Expiry Date Subscriber 9999435610?" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/calender_16.png')?>"></span>&nbsp;&nbsp;&nbsp;Reset Expiry Date</a>
                    </li> -->
                   <!--  <li>
                        <a href="/minetworkx/web/subscriber/terminatesubscriber?id=1227" data-confirm="Do you want Terminate Subscriber 9999435610?" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/delete_16.png')?>"></span>&nbsp;&nbsp;&nbsp;Terminate</a>
                    </li>
                    <li>
                        <a href="/minetworkx/web/subscriber/resetpassword?id=1227" data-confirm="Do you want Reset Password Subscriber 9999435610?" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/resetpwd_16.png')?>"></span>&nbsp;&nbsp;&nbsp;Reset Password</a>
                    </li>
                    <li>
                        <a href="/minetworkx/web/subscriber/resolvesubscriber?id=1227" data-confirm="Do you want Resolve Subscriber Issue 9999435610?" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/Tick_16x16.png')?>"></span>&nbsp;&nbsp;&nbsp;Resolve</a>
                    </li>
                    <li>
                        <a href="/minetworkx/web/subscriber/assignstaticip?id=1227" data-confirm="Do you want Assign Static Ip Subscriber 9999435610?" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/at_sign.png')?>"></span>&nbsp;&nbsp;&nbsp;DeAssign Static Ip</a>
                    </li>
                    <li>
                        <a href="/minetworkx/web/subscriber/userroaming?id=1227" data-confirm="Do you want NAS Binding Subscriber 9999435610?" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/red_16.png')?>"></span>&nbsp;&nbsp;&nbsp;NAS Binding</a>
                    </li> -->
                    <?php
                        $typ=$author->user_status;
                        switch ($typ) {
                            case 'Suspended':
                                # code...
                                ?>
                                <li>
                                    <a href="<?=base_url('index.php/Subscriber/acitvateU/').$author->id?>" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/pair_16.png')?>"></span>&nbsp;&nbsp;&nbsp;Active</a>
                                </li>
                                <?php
                                break;
                            case 'Active':
                                # code...
                                ?>
                                <li>
                                    <a href="<?=base_url('index.php/Subscriber/suspendU/').$author->id?>" tabindex="-1"><span class="" aria-hidden="true"><img class="" src="<?=base_url('assets/images/icons/pair_16.png')?>"></span>&nbsp;&nbsp;&nbsp;Suspend</a>
                                </li>
                                <?php
                                break;
                            default:
                                # code...
                                break;
                        }

                    ?>
                    
                </ul>
                    </div>
            
                </td>
                <td><span class="label label-success pull-left"><?=$author->user_status?></span></td>
                <td><span class="label label-danger pull-right">Offline</span></td>
                <td><a href="<?=base_url('index.php/Subscriber/basic_Details/').$author->id?>"><?= $author->user_name ?></a></td>
                <td><?php $fname=$author->first_name;
                $lname=$author->last_name;
                echo $fname." ".$lname;
                ?></td>
                <td><?php echo rand(000000,999999); ?></td>
                <td><?= $author->mobile ?></td>
                
                <td><?= $author->city ?></td>
                <td><?= $author->billing_address ?></td>
                <td><?= $author->company_name ?></td>
                <td><?= $author->service_name ?></td>
               
                <td><?= $author->bill_amount ?><a href="#" data-pjax="0"><span class="label label-lilac pull-right" style="background-color:purple;">Pay</span></a></td>
                <td><?php $timestamp = strtotime($author->due_date);
                    echo $date = date('Y-m-d', $timestamp);
                ?></td>
                <td><?php $timestamp = strtotime($author->due_date);
                    echo $date = date('Y-m-d', $timestamp);
                ?></td>
                <td><?php $timestamp = strtotime($author->due_date);
                    echo $date = date('Y-m-d', $timestamp);
                ?></td>
                <td>Yes/no</td>
                <td>PPPoE</td>
                <td><?=$type=$author->user_type?></td>
                <td>Dynamic</td>
                <td>NA</td>
                <td><?= $author->mac_address ?></td>
                
                <!--<td>29</td>-->
                <!--<td>2011/06/27</td>-->
                <!--<td>$183,000</td>-->
                <!--<td>Javascript Developer</td>-->
                <!--<td>Singapore</td>-->
                <!--<td>29</td>-->
                <!--<td>2011/06/27</td>-->
                <!--<td>$183,000</td>-->
            </tr>
             <?php $i++; endforeach; ?>
            
            <!--<tr>-->
            <!--     <td>2.</td>-->
            <!--    <td>System Architect</td>-->
            <!--    <td>Edinburgh</td>-->
            <!--    <td>61</td>-->
            <!--    <td>2011/04/25</td>-->
            <!--    <td>$320,800</td>-->
            <!--    <td>Michael Bruce</td>-->
            <!--    <td>Javascript Developer</td>-->
            <!--    <td>Singapore</td>-->
            <!--    <td>29</td>-->
            <!--    <td>2011/06/27</td>-->
            <!--    <td>$183,000</td>-->
            <!--    <td>Michael Bruce</td>-->
            <!--    <td>Javascript Developer</td>-->
            <!--    <td>Singapore</td>-->
            <!--    <td>29</td>-->
            <!--    <td>2011/06/27</td>-->
            <!--    <td>$183,000</td>-->
            <!--    <td>Michael Bruce</td>-->
            <!--    <td>Javascript Developer</td>-->
            <!--    <td>Singapore</td>-->
            <!--    <td>29</td>-->
            <!--    <td>2011/06/27</td>-->
            <!--    <td>$183,000</td>-->
            <!--    <td>Javascript Developer</td>-->
            <!--    <td>Singapore</td>-->
            <!--    <td>29</td>-->
            <!--    <td>2011/06/27</td>-->
            <!--    <td>$183,000</td>-->
            <!--</tr>-->
            <!--<tr>-->
            <!--     <td>3.</td>-->
            <!--    <td>System Architect</td>-->
            <!--    <td>Edinburgh</td>-->
            <!--    <td>22</td>-->
            <!--    <td>2011/04/25</td>-->
            <!--    <td>$320,800</td>-->
            <!--    <td>Michael Bruce</td>-->
            <!--    <td>Javascript Developer</td>-->
            <!--    <td>Singapore</td>-->
            <!--    <td>29</td>-->
            <!--    <td>2011/06/27</td>-->
            <!--    <td>$183,000</td>-->
            <!--    <td>Michael Bruce</td>-->
            <!--    <td>Javascript Developer</td>-->
            <!--    <td>Singapore</td>-->
            <!--    <td>29</td>-->
            <!--    <td>2011/06/27</td>-->
            <!--    <td>$183,000</td>-->
            <!--    <td>Michael Bruce</td>-->
            <!--    <td>Javascript Developer</td>-->
            <!--    <td>Singapore</td>-->
            <!--    <td>29</td>-->
            <!--    <td>2011/06/27</td>-->
            <!--    <td>$183,000</td>-->
            <!--    <td>Javascript Developer</td>-->
            <!--    <td>Singapore</td>-->
            <!--    <td>29</td>-->
            <!--    <td>2011/06/27</td>-->
            <!--    <td>$183,000</td>-->
            <!--</tr>-->
        </tbody>
    </table>
    <p id="page"><?php echo $links; ?></p>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

</div>

<aside class="customizer">
<a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
<div class="customizer-body">
<ul class="nav customizer-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle font-20"></i></a>
</li>
</ul>
<div class="tab-content" id="pills-tabContent">
<!-- Tab 1 -->
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
<div class="p-15 border-bottom">
<!-- Sidebar -->
<h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
<div class="custom-control custom-checkbox m-t-10">
<input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
<label class="custom-control-label" for="theme-view">Dark Theme</label>
</div>
<div class="custom-control custom-checkbox m-t-10">
<input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
<label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
</div>
<div class="custom-control custom-checkbox m-t-10">
<input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
<label class="custom-control-label" for="header-position">Fixed Header</label>
</div>
<div class="custom-control custom-checkbox m-t-10">
<input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
<label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
</div>
</div>
<div class="p-15 border-bottom">
<!-- Logo BG -->
<h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
<ul class="theme-color">
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>
</ul>
<!-- Logo BG -->
</div>
<div class="p-15 border-bottom">
<!-- Navbar BG -->
<h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
<ul class="theme-color">
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>
</ul>
<!-- Navbar BG -->
</div>
<div class="p-15 border-bottom">
<!-- Logo BG -->
<h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
<ul class="theme-color">
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>
</ul>
<!-- Logo BG -->
</div>
</div>

</div>
</div>
</aside>
<div class="chat-windows"></div>
 <script>
     $(document).ready(function(){
         
     });
 </script>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!--<script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../assets/libs/jquery/dist/jquery.min.js"></script>-->
<!-- Bootstrap tether Core JavaScript -->
<!--<script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>-->
<!--<script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!-- apps -->
<!--<script src="../../dist/js/app.min.js"></script>-->
<!--<script src="../../dist/js/app.init.horizontal.js"></script>-->
<!--<script src="../../dist/js/app-style-switcher.horizontal.js"></script>-->
<!-- slimscrollbar scrollbar JavaScript -->
<!--<script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>-->
<!--<script src="../../assets/extra-libs/sparkline/sparkline.js"></script>-->
<!--Wave Effects -->
<!--<script src="../../dist/js/waves.js"></script>-->
<!--Menu sidebar -->
<!--<script src="../../dist/js/sidebarmenu.js"></script>-->
<!--Custom JavaScript -->
<!--<script src="../../dist/js/custom.min.js"></script>-->
<!--This page plugins -->