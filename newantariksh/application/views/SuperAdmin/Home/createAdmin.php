
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
            <form role="form"  action="<?=base_url('index.php/Superadmin/addAdmin')?>" method="post">
            	<div class="card">
            		<div class="card-body">
            			<h3 class="text-center">Create Admin</h3>		
            		</div>
            	</div>
            	 
               	<!-- <hr> -->
            	<input type="hidden" name="url" value="<?= $this->uri->uri_string();?>">
                <div class="row">
                <div class="col-md-6">
                <div class="card" >
                    <div class="card-body">
                        <div class="panel-group" id="accordion">

                            <!-- panel1  -->
	                        <div class="panel panel-default active" id="panel1">
	                          <div class="panel-heading" data-toggle="collapse" data-target="#collapse1">
	                            <h4 class="panel-title"><a data-toggle="collapse" data-target="#collapse1" href="#collapse1">Admin Details</a></h4>
	                            <hr>
	                          </div>
						<div id="collapse1" class="panel-collapse fade collapse show">
                        	<div class="panel-body">
		                    	<div class="row stoppaddignleft stoppaddignright">
			                        <div class="col-md-6 stoppaddignleft">
			                            <div class="form-group field-subscriber-first_name required">
				                         	<label class="control-label" for="companyname">Admin Name</label>
	                                       <Input type="text" name="adminname" placeholder="Enter Admin Name" class="form-control" required>
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
											  <label class="control-label" for="subscriber-email_id">Email ID</label>
										<input type="email" id="subscriber-email_id" placeholder="Example: John@Carter.com" class="form-control" name="email" aria-required="true">
										<div class="help-block"></div>
										</div>                      
									</div>
			                    </div>
			                   <div class="row">
			                   		<div class="col-md-6 stoppaddignleft stoppaddignright">
			                            <div class="form-group field-subscriber-pan_number required">
											<label class="control-label" for="subscriber-email_id">Email ID</label>
											<input type="email" id="subscriber-email_id" placeholder="Example: John@Carter.com" class="form-control" name="altemail" aria-required="true">
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
       <!--------------service ------------->            
       <div class="card" >
            <div class="card-body">
                <div class="panel-group" id="accordion">
                            <!-- panel1  -->
                    <div class="panel panel-default" id="panel3">
                        <div class="panel-heading" data-toggle="collapse" data-target="#collapse3">
                            <h4 class="panel-title"><a data-toggle="collapse" data-target="#collapse3" href="#collapse3">Contact  Details</a></h4>
                                <hr>
                        </div>

	                <div id="collapse3" class="panel-collapse fade collapse show">
	                  	<div class="panel-body">
	                    	 <div class="row">
			                    	<div class="col-md-6 stoppaddignleft">
			                            <div class="form-group field-subscriber-aadhar_number required">
											  <label>Contact Person 1<span class="text-danger">*</span></label>
		                                       <Input type="text" name="cont_person1" placeholder="First Contact Person Name" class="form-control" required>
											<div class="help-block"></div>
										</div>                       
									</div>
			                        <div class="col-md-6 stoppaddignleft stoppaddignright">
			                             <div class="form-group field-subscriber-pan_number required">
											  <label class="control-label" for="subscriber-email_id">Contact No. 1</label>
										<input type="text" id="subscriber-email_id" placeholder="First Contact Person Number" class="form-control" name="cont_no1" aria-required="true">
										<div class="help-block"></div>
										</div>                      
									</div>
			                    </div>
			                    <div class="row">
			                    	<div class="col-md-6 stoppaddignleft">
			                            <div class="form-group field-subscriber-aadhar_number required">
											  <label>Contact Person 2<span class="text-danger">*</span></label>
		                                       <Input type="text" name="cont_person2" placeholder="Second Contact Person Name" class="form-control" required>
											<div class="help-block"></div>
										</div>                       
									</div>
			                        <div class="col-md-6 stoppaddignleft stoppaddignright">
			                             <div class="form-group field-subscriber-pan_number required">
											  <label class="control-label" for="subscriber-email_id">Contact No. 2</label>
										<input type="text" id="subscriber-email_id" placeholder="Second Contact Person Number" class="form-control" name="cont_no2" aria-required="true">
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
										<textarea id="subscriber-address" class="form-control rounded" name="install_add" maxlength="500" aria-required="true" > </textarea>

										<div class="help-block"></div>
										</div>                       
									</div>
		                        <div class="col-md-6 stoppaddignleft stoppaddignright">
		                            <div class="form-group field-subscriber-billing_address required">
										<label class="control-label" for="subscriber-billing_address">Correspondance Address</label>
										<textarea id="subscriber-billing_address" class="form-control rounded" name="corres_add" maxlength="500"></textarea>

										<div class="help-block"></div>
										</div>               
						            </div>
		                    </div>
		                    <div class="row">
		                    	<div class="col-lg-12">
		                            <label>Choose Company <span class="text-danger">*</span></label><br>
		                            <div classs="row">
		                            	<select name="company[]" class="form-control" multiple="">
		                                <?php                                         
		                                foreach ($company as $key) 
		                                {
		                                    ?>
		                                    <option name="permission[]" value="<?=$key->id?>"><?=$key->comp_name?></option>
		                                        <!-- <div class="col-lg-6">
		                                            <input type="checkbox" name="permission[]" value="<?=$key->id?>"><span class="mr-4"> <?=$key->comp_name?></span>
		                                        </div> -->
		                                    <?php   
		                                }
		                                ?>
		                            	</select>
		                            </div>
		                        </div>
		                    </div>
		                    <br>
		                    <div class="row stoppaddignleft stoppaddignright">
		                        <div class="col-md-12 stoppaddignleft">
		                        	<hr>
		                            <div class="form-group field-subscriber-permanent_address">
										<input type="submit" value="Add Admin" class="btn btn-success">
										<input type="submit" value="Update Admin" class="btn btn-info">

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
	        	<!--  -->

        <!-------login details----------->                
                        
        </div>


      	</div><br>
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


<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
</body>

<!-- Mirrored from www.wrappixel.com/demos/admin-templates/nice-admin/html/horizontal/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 07:25:22 GMT -->
</html>