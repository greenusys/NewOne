
<style>
    form div.required label.control-label:after {
    content: " * ";
    color: red;
}
a:hover {
    color:black;
}
    
</style>

<div class="page-wrapper">

<div class="container-fluid">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- basic table -->
<!-- alternative pagination -->
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">

       

            </div>
<!-- <div class="row">
	<div>
		<a href="<?=base_url('index.php/Subscriber')?>" class="btn btn-success btn_ch">Show Subscribe</a>
		<a href="<?=base_url('index.php/Subscriber/create')?>" class="btn btn-success btn_ch">Create Subscribe</a> -->
		<!-- <a href="" class="btn btn-success btn_ch">Show Lease Subscribe</a>
		<a href="" class="btn btn-success btn_ch">Create Lease Subscribe</a>
		<a href="" class="btn btn-success btn_ch">Online Subscribe</a>
		<a href="" class="btn btn-success btn_ch">View Radius Logs</a> -->
<!-- 	</div>
</div>	 -->

	<div class="row">
		<!-- <div class="col-md-1">
			<div>
				<ul class="list-unstyled">
					<li class="mb-2"><a href="<?=base_url('index.php/Subscriber')?>" class="btn btn-success btn_ch">Show Subscribe</a></li>
					<li class="mb-2"> <a href="<?=base_url('index.php/Subscriber/create')?>" class="btn btn-success btn_ch">Create Subscribe</a></li>
				</ul>	
				
			</div>
		</div> -->
		<div class="col-md-12">
        <div class="box-content" style="min-height: 750px">
        	<?php
        		if($this->session->flashdata('msg'))
        		{
        			echo '<div class="alert alert-info">'.$this->session->flashdata('msg').'</div>';
        		}
        	?>
            <form role="form"  action="<?=base_url('index.php/Superadmin/addCompany')?>" method="post">
            	 <h3 class="text-center">Create Company</h3>
               	<hr>
            	<input type="hidden" name="url" value="<?= $this->uri->uri_string();?>">
                <div class="row">
                <div class="col-md-6">
                <div class="card" >
                    <div class="card-body">
                        <div class="panel-group" id="accordion">

                            <!-- panel1  -->
	                        <div class="panel panel-default active" id="panel1">
	                          <div class="panel-heading" data-toggle="collapse" data-target="#collapse1">
	                            <h4 class="panel-title"><a data-toggle="collapse" data-target="#collapse1" href="#collapse1">User Details</a></h4>
	                            <hr>
	                          </div>
						<div id="collapse1" class="panel-collapse fade collapse show">
                        	<div class="panel-body">
		                    	<div class="row stoppaddignleft stoppaddignright">
			                        <div class="col-md-6 stoppaddignleft">
			                            <div class="form-group field-subscriber-first_name required">
				                         	<label class="control-label" for="companyname">Company Name</label>
	                                       <Input type="text" name="companyname" placeholder="Enter Your Company Name" class="form-control" required>
				                            <div class="help-block"></div>
				                            </div>                      
		                        	</div>
			                        <div class="col-md-6 stoppaddignleft stoppaddignright">
			                            <div class="form-group field-subscriber-last_name required">
			                            <label class="control-label">Username</label>
	                                   	<Input type="text" name="username" placeholder="Enter Your username" class="form-control" required>

			                            <div class="help-block"></div>
			                            </div>                        
			                        </div>
                    			</div>
			                	<div class="row">
			                    	<div class="col-md-6 stoppaddignleft">
			                            <div class="form-group field-subscriber-aadhar_number required">
											  <label>Password<span class="text-danger">*</span></label>
		                                       <Input type="Password" name="password" placeholder="Enter Your Password" class="form-control" required>
											<div class="help-block"></div>
										</div>                       
									</div>
			                        <div class="col-md-6 stoppaddignleft stoppaddignright">
			                             <div class="form-group field-subscriber-pan_number required">
											  <label>Confirm Password<span class="text-danger">*</span></label>
		                                       <Input type="Password" name="confirm_password" placeholder="Enter Your Password Again" class="form-control" required>
											<div class="help-block"></div>
										</div>                      
									</div>
			                    </div>
			                    <div class="row stoppaddignleft stoppaddignright">
						            <div class="form-group field-subscriber-email_id required col-12" >
										<label class="control-label" for="subscriber-email_id">Email ID</label>
										<input type="email" id="subscriber-email_id" placeholder="Example: John@Carter.com" class="form-control" name="email" aria-required="true">
										<div class="help-block"></div>
									</div>                    
								</div>
                        	</div>
                      	</div>
                  	</div>
                </div>
            </div>
        </div>
       <!--------------service ------------->            
       <div class="card" >
                    <div class="card-body">
                        <div class="panel-group" id="accordion">

                            <!-- panel1  -->
                            <div class="panel panel-default" id="panel3">
                              <div class="panel-heading" data-toggle="collapse" data-target="#collapse3">
                                <h4 class="panel-title"><a data-toggle="collapse" data-target="#collapse3" href="#collapse3">Service  Details</a></h4>
                                <hr>
                              </div>

                      <div id="collapse3" class="panel-collapse fade collapse show">
                      	<div class="panel-body">
		                    	<div class="row stoppaddignleft stoppaddignright">
			                        <div class="col-md-6 stoppaddignleft">
			                            <div class="form-group field-subscriber-first_name required">
				                         	<label class="control-label" for="gstnname">GSTN Name</label>
	                                       <Input type="text" name="gstnname" placeholder="Enter Your GSTN Name" class="form-control" required>
				                            <div class="help-block"></div>
				                            </div>                      
		                        	</div>
			                        <div class="col-md-6 stoppaddignleft stoppaddignright">
			                            <div class="form-group field-subscriber-last_name required">
			                            <label class="control-label">PAN CARD</label>
	                                   	<Input type="text" name="pannumber" placeholder="Enter Your PAN Number" class="form-control" required>

			                            <div class="help-block"></div>
			                            </div>                        
			                        </div>
                    			</div>
                        	</div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
     	 


   <!--------------Billing details---->

	</div>
            <div class="col-md-6">                        
                
            	<div class="card" >
                    <div class="card-body">
                        <div class="panel-group" id="accordion2">
                            <!-- panel1  -->
                            <div class="panel panel-default" id="panel5">
                              <div class="panel-heading" data-toggle="collapse" data-target="#service4">
                                <h4 class="panel-title"><a data-toggle="collapse" data-target="#service4" href="#service4">Address Details</a></h4>
                                <hr>
                              </div>
                      	<div id="service4" class="panel-collapse fade collapse show">
                    		<div class="panel-body">
                   			<div class="row stoppaddignleft stoppaddignright">
		                        <div class="col-md-6 stoppaddignleft">
		                            <div class="form-group field-subscriber-address required">
										<label class="control-label" for="subscriber-address">Installation Address</label>
										<textarea id="company-address" class="form-control rounded" name="install_address" maxlength="500" aria-required="true" > </textarea>

										<div class="help-block"></div>
										</div>                       
									</div>
		                        <div class="col-md-6 stoppaddignleft stoppaddignright">
		                            <div class="form-group field-subscriber-billing_address">
										<label class="control-label" for="subscriber-billing_address">Billing Address</label>
										<textarea id="company-billing_address" class="form-control rounded" name="bill_address" maxlength="500"></textarea>

										<div class="help-block"></div>
										</div>               
						            </div>
		                    </div>
		                    <div class="row stoppaddignleft stoppaddignright">
		                        <div class="col-md-12 stoppaddignleft">
		                            <div class="form-group field-subscriber-permanent_address">
										<label class="control-label" for="subscriber-permanent_address">Permanent Address</label>
										<textarea id="subscriber-permanent_address" class="form-control rounded" name="permanent_address" maxlength="500"></textarea>

										<div class="help-block"></div>
									</div>                        
								</div>
		                    </div>
                        </div>
                      </div>
                  </div>
	                </div>
		            </div>
	        	</div>  
	        	<div class="card" >
                    <div class="card-body">
                        <div class="panel-group" id="accordion2">
                            <!-- panel1  -->
                            <div class="panel panel-default" id="panel5">
                              <div class="panel-heading" data-toggle="collapse" data-target="#service4">
                                <h4 class="panel-title"><a data-toggle="collapse" data-target="#service4" href="#service4">Contact Details</a></h4>
                                <hr>
                              </div>
                      	<div id="service4" class="panel-collapse fade collapse show">
                    		<div class="panel-body">
                   			<div class="row stoppaddignleft stoppaddignright">
		                        <div class="col-md-6 stoppaddignleft">
		                            <div class="form-group field-subscriber-address">
										<label class="control-label" for="contactno1">Contact No 1</label>
										<Input type="text" name="contactno1" placeholder="Enter Your Contact No 1" class="form-control">
										<div class="help-block"></div>
										</div>                       
									</div>
		                        <div class="col-md-6 stoppaddignleft stoppaddignright">
		                            <div class="form-group field-subscriber-billing_address">
										<label class="control-label" for="contactperson1">Contact Person 1</label>
										<Input type="text" name="contactperson1" placeholder="Enter Your Contact Person 1" class="form-control">


										<div class="help-block"></div>
										</div>               
					            </div>
	                    	</div><br>
	                    	<div class="row stoppaddignleft stoppaddignright">
		                        <div class="col-md-6 stoppaddignleft">
		                            <div class="form-group field-subscriber-address">
										<label class="control-label" for="contactno2">Contact No 2</label>
										<Input type="text" name="contactno2" placeholder="Enter Your Contact No 2" class="form-control" >


										<div class="help-block"></div>
										</div>                       
									</div>
		                        <div class="col-md-6 stoppaddignleft stoppaddignright">
		                            <div class="form-group field-subscriber-billing_address">
										<label class="control-label" for="contactperson2">Contact Person 2</label>
										<Input type="text" name="contactperson2" placeholder="Enter Your Contact Person 2" class="form-control" >
										<div class="help-block"></div>
										</div>               
					            </div>
	                    	</div><br>
	                    	<div class="row stoppaddignleft stoppaddignright">
		                        <div class="col-md-6 stoppaddignleft">
		                            <div class="form-group field-subscriber-address">
										<label class="control-label" for="contactno3">Contact No 3</label>
										<Input type="text" name="contactno3" placeholder="Enter Your Contact No 3" class="form-control" >
										<div class="help-block"></div>
									</div>                       
									</div>
		                        <div class="col-md-6 stoppaddignleft stoppaddignright">
		                            <div class="form-group field-subscriber-billing_address">
										<label class="control-label" for="contactperson3">Contact Person 3</label>
										<Input type="text" name="contactperson3" placeholder="Enter Your Contact Person 3" class="form-control">
										<div class="help-block"></div>
										</div>               
					            </div>
	                    	</div>
		                    
                        </div>
                      </div>
                  </div>
	                </div>
		            </div>
	        	</div> 

        <!-------login details----------->                
                        
        </div>


      	</div><br>
	        <div class="text-center">                           
	            <input type="submit" value="Submit"  class="btn btn-primary">';
	        </div>
  		</form>

                <div style="clear:both"></div>

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
<!-- <footer class="footer text-center">
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
<!-- End Tab 1 -->

</div>
</div>
</aside>
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
</body>

<!-- Mirrored from www.wrappixel.com/demos/admin-templates/nice-admin/html/horizontal/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 07:25:22 GMT -->
</html>