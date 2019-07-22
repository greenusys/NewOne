
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
               <!--  <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="mdi mdi-emoticon font-20 text-muted"></i>
                                            <p class="font-16 m-b-5">Clients</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h1 class="font-light text-right">121</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 75%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- Column -->
                    <!-- Column -->
                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="mdi mdi-image font-20  text-muted"></i>
                                            <p class="font-16 m-b-5">New Projects</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h1 class="font-light text-right">169</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Column -->
                    <!-- Column -->
                   <!--  <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="mdi mdi-currency-eur font-20 text-muted"></i>
                                            <p class="font-16 m-b-5">New Invoices</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h1 class="font-light text-right">157</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 65%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Column -->
                    <!-- Column -->
                   <!--  <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="mdi mdi-poll font-20 text-muted"></i>
                                            <p class="font-16 m-b-5">New Sales</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h1 class="font-light text-right">236</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 70%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>-->
               
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card" >
            <div class="card-body">
                  <div class="panel-group" id="accordion">

                    <!-- panel1  -->
                    <div class="panel panel-default" id="panel1">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse1">
                        <h4 class="panel-title"><a data-toggle="collapse" data-target="#collapse1" href="#collapse1"><i class="fas fa-file-alt"></i> Invoices</a></h4>
                      </div>

                      <div id="collapse1" class="panel-collapse collapse fade show">
                        <div class="panel-body">
                          <table class="table table-striped table-hover ">
                      
                            <tbody>
                                <tr>
                                    <td class="float-right pt-4">Select Year</td>                                    
                                    <td><select name="year" class="form-control" id="year">
                                        <option value="0">Select Year</option>
                                        <option value="2015" <?php if(isset($_POST['year']) && $_POST['year']==2015) echo 'selected=selected'; ?>>2015</option>
                                        <option value="2016" <?php if(isset($_POST['year']) && $_POST['year']==2016) echo 'selected=selected'; ?>>2016</option>
                                        <option value="2017" <?php if(isset($_POST['year']) &&  $_POST['year']==2017) echo 'selected=selected'; ?>>2017</option>
                                        <option value="2018" <?php if(isset($_POST['year']) && $_POST['year']==2018) echo 'selected=selected'; ?>>2018</option>
                                    </select>
                                    </td>   
                                    <td></td>
                                    <td class="float-right pt-4">Select Month</td>
                                    <td>
                                        <select name="month" class="form-control" id="month">
                                            <option value="0" selected="" disabled="">Select </option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </td>  
                                    <td><button class="btn-success btn">Submit</button></td> 
                                </tr>                  
                            </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card" >
            <div class="card-body">
                <div class="panel-group" id="accordion">

                 <div class="panel panel-default" id="panel3" data-toggle="collapse" data-target="#collapse3">
              <div class="panel-heading" data-toggle="collapse" data-target="#collapse3">
                <h4 class="panel-title"><a data-toggle="collapse" data-target="#collapse3" href="#collapse3" class="collapsed"><i class="fas fa-file-alt"></i> View Traffic Report </a></h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse fade show">
                        <div class="panel-body">
                          <table class="table table-striped table-hover table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Login Id</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Service Plan</th>
                                    <th>Bill Amount</th>
                                    <th>Service Tax</th>
                                    <th>Swakshata Tax</th>
                                    <th>Total Billed Amount </th>
                                    <th>For The Month</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>    
                          	<tbody>
			                    <?php 

				                    function getUserBillAmount($row) {
										$billAmount = 0;
										// print_r($row);
										if ($row->billing_type === 'Corporate') {
											echo $billAmount = $row->bill_amount;
										} else {
											echo $billAmount = $row->price;
										}
										
										 $serviceTax = ($billAmount );
										$totalBill = $billAmount + $serviceTax;
										
										return array(
										'bill_amount' => $billAmount,
										'service_tax' => $serviceTax,
										'total_bill' => $totalBill,
										);
									}
									
									
			                    $p=1;
			                    foreach($report as  $row) :
									$servcDetails = $userService;
									//print_r($row);
									
									if($row->bill_amount!='' && $row->bill_amount!=0){
										$newPrice=$row->bill_amount;
									}else{
										$newPrice=$servcDetails->price;
									}
									
									$newTax=$servcDetails->servc_tax+$servcDetails->swa_tax;
									$newTaxVal=($newPrice*$newTax)/100;
									$newTotal=$newPrice+$newTaxVal;
									
			                        $Tax=$servcDetails->servc_tax;
			                        $pPrice=$row->price;
			                        $nTax=($pPrice*$Tax)/100;
			                        $nTotal=$pPrice+$nTax;
									
			                        /*$Tax=$row->servc_tax;
			                        $pPrice=$row->price;
			                        $nTax=($pPrice*$Tax)/100;
			                        $nTotal=$pPrice+$nTax;*/
									
			                        $billDetails = getUserBillAmount($row);
			                       // echo 'For Month: '.$row->for_month;
			                        
									if(isset($row->for_month) && $row->for_month!=''){
										// $paymentStatus =selectallPaymentStatus($row->for_month, $row->id);

										
				                       $paymentOnlineOffline = $paymentOnlineOffline;
			                        
			                            if(empty($_POST['year']) ){
			                                $yPar=date('Y');
			                            }else{
			                                $yPar=$_POST['year'];
			                            }
			                            
			                            //$getPdfAccordingToMonth = $oUser->getPdfAccordingToMonth($row->id, $row->for_month, $_POST['year);
			                        }else{
										if(empty($_POST['year'])){
			                                $yPar=date('Y');
			                            }else{
			                                $yPar=$_POST['year'];
			                            }
										
										
										if(empty($_POST['year'])){
			                                $row->for_month=date('M');
			                            }else{
			                                $row->for_month=$_POST['month'];
			                            }
										//$row->for_month = date('M');$yPar=date('Y');
										// $getPdfAccordingToMonth = getPdfAccordingToMonth($row->id, $row->for_month, $yPar);
									}
				                    ?>
			                        <tr>
			                            <td><?php echo $p ;?></td>
			                            <td><?=$row->username ?></td> 
			                            <td><?=$row->first_name.' '.$row->last_name ?></td> 
			                            <td><?php if($row->mobile!='') echo $row->mobile; else { echo $row->phone; } ?></td>                            <td><?=$row->email ?></td>  
			                            <td><?=$row->service_name?>  </td>                        
			                           
			                            <td><?= $newPrice.' /-'?></td>
			                            <td><?= $servcDetails->servc_tax.' %'?></td>
			                            <td><?= $servcDetails->swa_tax.' %'?></td>
			                            <td><?= $newTotal.' /-'?></td>
			                            <td><?= $row->for_month?></td>
			                            <td><?php 
			                           
			                            echo 'Pending (Ask Logic)';
										// if($paymentOnlineOffline[0]->paymentStatus!=''){
										// 	echo $paymentOnlineOffline[0]->paymentStatus;
										// }else{
										// 	echo 'Pending';
										// }
										//echo $paymentOnlineOffline[0]->paymentStatus?></td>
			                            <!--<td><a href="pdf-billing-report.php?start_date=<?=$range->start_date?>&end_date=<?=$range->end_date?>&id=<?=$row->id?>" target="_blank"><img src="../img/pdf_download.gif" />Download Pdf</a></td>-->
										
			                            <?php
										if($getPdfAccordingToMonth!=''){
											if($row->isBill==1){
												if($getPdfAccordingToMonth[0]->user_re_invoice_pdf!=''){
													?>
													<td><a href="http://antariksh.co.in/action_on_cron/invoicenew/<?php echo $getPdfAccordingToMonth[0]->user_re_invoice_pdf;?>" target="_blank"><img src="../img/pdf_download.gif" />View Pdf</a></td>
													<?php
												}else{
													?>
													<td><a href="http://antariksh.co.in/action_on_cron/invoicenew/<?php echo $getPdfAccordingToMonth[0]->user_invoice_pdf;?>" target="_blank"><img src="../img/pdf_download.gif" />View Pdf</a></td>
												<?php
												}
											}else{
												?>
												<td>N/A</td>
			                                    <?php
											}
			                            }else{
											?>
											<td>N/A</td>
											<?php
										}
									








										 /*?>if(count($getPdfAccordingToMonth[0]->user_invoice_pdf)>0){
											?>
											<td><a href="http://antariksh.co.in/action_on_cron/invoice/<?php echo $getPdfAccordingToMonth[0]->user_invoice_pdf;?>" target="_blank"><img src="../img/pdf_download.gif" />View Pdf</a></td>
											<?php
												//$pdfName=$getPdfAccordingToMonth[0]->user_invoice_pdf;
										}else{?>
											<td><a href="#"><img src="../img/pdf_download.gif" />View Pdf</a></td>
										<?php } ?><?php */?>
			                            
										</tr>
										<?php $p++; endforeach; ?>
			                        </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

</div>
         
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
        <!--     <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://wrappixel.com/">WrapPixel</a>.
            </footer> -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle">
            <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                        aria-selected="true">
                        <i class="mdi mdi-wrench font-20"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false">
                        <i class="mdi mdi-message-reply font-20"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                        aria-selected="false">
                        <i class="mdi mdi-star-circle font-20"></i>
                    </a>
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
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none m-t-20">
                        <li>
                            <div class="message-center chat-scroll">
                                <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
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
                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
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
                                <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
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
                                <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                    <span class="user-img">
                                        <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Nirav Joshi</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                    <span class="user-img">
                                        <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sunil Joshi</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                    <span class="user-img">
                                        <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Akshay Kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                    <span class="user-img">
                                        <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                    <span class="user-img">
                                        <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Varun Dhavan</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-15" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="m-t-20 m-b-20">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-success">
                                <i class="ti-user"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today
                                    <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="../../assets/images/users/2.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="../../assets/images/users/1.jpg"> </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-primary">
                                <i class="ti-user"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today
                                    <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="../../assets/images/users/4.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="../../assets/images/users/6.jpg"> </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/nice-admin/html/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 07:20:53 GMT -->
</html>