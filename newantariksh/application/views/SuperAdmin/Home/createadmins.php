
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

                 <h3 class="text-center">Create Company</h3>

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
            <form role="form"  action="<?=site_url('User/addUser')?>" method="post">
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
				                         	<label class="control-label" for="companyname">Company Name<span class="text-danger"> *</span></label>
	                                       <Input type="text" name="companyname" placeholder="Enter Your Company Name" class="form-control" required>
				                            <div class="help-block"></div>
				                            </div>                      
		                        	</div>
			                        <div class="col-md-6 stoppaddignleft stoppaddignright">
			                            <div class="form-group field-subscriber-last_name required">
			                            <label class="control-label">Username<span class="text-danger"> *</span></label>
	                                   	<Input type="text" name="username" placeholder="Enter Your username" class="form-control" required>

			                            <div class="help-block"></div>
			                            </div>                        
			                        </div>
                    			</div>
			                	<div class="row">
			                    	<div class="col-md-6 stoppaddignleft">
			                            <div class="form-group field-subscriber-aadhar_number">
											  <label>Password<span class="text-danger">*</span></label>
		                                       <Input type="Password" name="password" placeholder="Enter Your Password" class="form-control" required>
											<div class="help-block"></div>
										</div>                       
									</div>
			                        <div class="col-md-6 stoppaddignleft stoppaddignright">
			                             <div class="form-group field-subscriber-pan_number">
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
					<div class="row stoppaddignleft stoppaddignright">
                        <div class="col-md-3 stoppaddignleft">
                            <div class="form-group field-subscriber-username required">
                                <label class="control-label" for="subscriber-username">Username</label>
                                <input type="text" id="subscriber-username" class="form-control rounded" name="username" aria-required="true">

                                <div class="help-block"></div>
                            </div>                           
                        </div>
                        <div class="col-md-3 stoppaddignleft">
                            <div class="form-group field-subscriber-password required">
                                <label class="control-label" for="subscriber-password">Password</label>
                                <input type="password" id="subscriber-password" class="form-control rounded" name="password"  aria-required="true">

                                <div class="help-block"></div>
                            </div>                           
                        </div>
                        <div class="col-md-3 stoppaddignleft">
                            <div class="form-group field-subscriber-password_repeat required">
                            <label class="control-label" for="subscriber-password_repeat">Confirm password</label>
                            <input type="password" id="subscriber-password_repeat" class="form-control rounded" name="Subscriber[password_repeat]" aria-required="true">

                            <div class="help-block"></div>
                            </div>                            
                        </div>
					    <div class="col-md-3 stoppaddignleft stoppaddignright">
					        <div class="form-group field-subscriber-portal_password required">
					        <label class="control-label" for="subscriber-portal_password">Portal Password</label>
					        <input type="password" id="subscriber-portal_password" class="form-control rounded" name="portal_password" aria-required="true">

					        <div class="help-block"></div>
					        </div>
					    </div>
					</div>
					<div class="row stoppaddignleft stoppaddignright">
                        <div class="col-md-4 stoppaddignleft">
	                        <div class="form-group field-subscriber-mobile_number required has-error">
								<label class="control-label" for="subscriber-mobile_number">Mobile Number</label>
								<input type="text" id="subscriber-mobile_number" class="form-control" name="mobile" placeholder="Example: +91-xxxxxxxxxx" pattern="[0-9]{10}" maxlength="10" title="number only">

								<div class="help-block " style="display: none">Mobile Number cannot be blank.</div>
							</div>                      
						</div>
                        <div class="col-md-4 stoppaddignleft">
	                        <div class="form-group field-subscriber-alternate_mobile_number">
								<label class="control-label" for="subscriber-alternate_mobile_number">Alternate Number</label>
								<input type="text" id="subscriber-alternate_mobile_number" class="form-control rounded" name="alternate_mobile" placeholder="Example: +91-xxxxxxxxxx" pattern="[0-9]{10}" maxlength="10" title="number only" >

								<div class="help-block"></div>
							</div>                      
					    </div>
                        <div class="col-md-4 stoppaddignleft stoppaddignright">
                        	<div class="form-group field-subscriber-contact_number">
								<label class="control-label" for="subscriber-contact_number">Contact Number</label>
								<input type="text" id="subscriber-contact_number" class="form-control rounded" name="contact_number" placeholder="Example: +91-xxxxxxxxxx" pattern="[0-9]{10}" maxlength="10" title="number only">

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
                        <div class="panel-group" id="accordion2">

                            <!-- panel1  -->
                            <div class="panel panel-default" id="panel5">
                              <div class="panel-heading" data-toggle="collapse" data-target="#service4">
                                <h4 class="panel-title"><a data-toggle="collapse" data-target="#service4" href="#service4">Address Details</a></h4>
                                <hr>
                              </div>

                      <div id="service4" class="panel-collapse fade collapse show">
                        <div class="panel-body">
                        	<!-- Service section -->
                    	 	<!-- <div class="row stoppaddignleft stoppaddignright">
		                        <div class="col-md-2 stoppaddignleft">
		                            <div class="form-group field-subscriber-is_roaming">
										<label class="control-label">NAS Binding</label>
										<input type="hidden" name="Subscriber[is_roaming]" value=""><div id="subscriber-is_roaming"><label><input type="radio" name="nas_binding" value="1"> yes</label>
										<label><input type="radio" name="nas_binding" value="0" checked=""> No</label></div>

										<div class="help-block"></div>
									</div>  
		                        </div>
		                        <div class="col-md-2 stoppaddignleft">
			                        <div class="form-group field-subscriber-bind_macaddress">
										<label class="control-label">MAC Binding</label>
										<input type="hidden" name="Subscriber[bind_macaddress]" value=""><div id="subscriber-bind_macaddress"><label><input type="radio" name="mac_binding" value="1" checked=""> yes</label>
										<label><input type="radio" name="mac_binding" value="0"> No</label></div>

										<div class="help-block"></div>
									</div>  
		                        </div>
		                        <div class="col-md-2 stoppaddignleft stoppaddignright">
		                            <div class="form-group field-subscriber-is_autorenew">
										<label class="control-label">Autorenew</label>
										<input type="hidden" name="Subscriber[is_autorenew]" value=""><div id="subscriber-is_autorenew"><label><input type="radio" name="autorenew" value="1"> yes</label>
										<label><input type="radio" name="autorenew" value="0" checked=""> No</label></div>

										<div class="help-block"></div>
									</div>  
		                        </div>
		                    </div> -->
		                    <!-- <div class="row stoppaddignleft stoppaddignright">
		                        <div class="col-md-4 stoppaddignleft">
		                            <div class="form-group field-subscriber-gst_number">
										<label class="control-label" for="subscriber-gst_number">GST Number</label>
										<input type="text" id="subscriber-gst_number" class="form-control rounded" name="gst_number" autocomplete="off">

										<div class="help-block"></div>
									</div>                        
								</div>
		                   	</div> -->
		                    <div class="row stoppaddignleft stoppaddignright">
		                        <div class="col-md-6 stoppaddignleft">
		                            <div class="form-group field-subscriber-address required">
										<label class="control-label" for="subscriber-address">Installation Address</label>
										<textarea id="subscriber-address" class="form-control rounded" name="install_address" maxlength="500" aria-required="true" > </textarea>

										<div class="help-block"></div>
										</div>                       
									</div>
		                        <div class="col-md-6 stoppaddignleft stoppaddignright">
		                            <div class="form-group field-subscriber-billing_address">
										<label class="control-label" for="subscriber-billing_address">Billing Address</label>
										<textarea id="subscriber-billing_address" class="form-control rounded" name="bill_address" maxlength="500"></textarea>

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


   <!--------------Billing details---->

	</div>
            <div class="col-md-6">                        
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
                        	<!-- address details -->
							<div class="row stoppaddignleft stoppaddignright">
	                    		<div id="collapse4" class="panel-collapse fade collapse show">
			                        <div class="panel-body">
				                        <div class="row stoppaddignleft stoppaddignright">
					                        <div class="col-md-6 stoppaddignleft">
						                        <div class="form-group field-company required">
													<label class="control-label" for="company">Company Name</label>
													<select id="company" class="form-control" name="company_name" aria-required="true">
													<option value="">Select...</option>
													<?php
														foreach ($companies as $comp) {
															echo '<option value="'.$comp->comp_id.'">'.$comp->comp_name.'</option>';
														}
													?>
													</select>

													<div class="help-block"></div>
												</div>                        
											</div>
					                        <div class="col-md-3 stoppaddignleft">
					                        	<div class="form-group field-subscriber-special_discount">
													<label class="control-label" for="subscriber-special_discount">Special Discount</label>
													<input type="text" id="subscriber-special_discount" class="form-control rounded" name="discount" value="0">

													<div class="help-block"></div>
												</div>                        
											</div>
					                        <div class="col-md-3 stoppaddignleft">
					                        	<div class="form-group field-subscriber-service_type">
													<label class="control-label" for="subscriber-service_type">Service Type</label>
													<select id="subscriber-service_type" class="form-control" name="service_type">
													<option value="3">Regular Customer</option>
													<option value="2">Postpaid Customer</option>
													<option value="1">Prepaid Customer</option>
													</select>

													<div class="help-block"></div>
												</div>                        
											</div>
					                    </div>
					                    <div class="row stoppaddignleft stoppaddignright">
											<div class="col-md-6 stoppaddignleft">
												<div class="form-group field-subscriber-opr_id required">
													<label class="control-label" for="subscriber-opr_id">Partner</label>
													<select id="subscriber-opr_id" class="form-control rounded" name="partner" onchange="" aria-required="true">
														<option value="">Select Partner</option>
														<option value="2">Antariksh</option>
														<option value="3">Hriday</option>
														<option value="4">Puran Nagar</option>
														<option value="5">Manglapuri</option>
														<option value="7">Rajnagar-2</option>
														<option value="8">Rajnagar-1</option>
														<option value="9">DOT</option>
														<option value="10">Delhicantt</option>
														<option value="11">Vikasnagar</option>
														<option value="12">Pushpanjali</option>
														<option value="13">Corporate</option>
														<option value="14">Free</option>
														<option value="15">Sagarpur</option>
														<option value="16">Najafgarh</option>
														<option value="17">Nanglidairy</option>
														<option value="18">Kakrola</option>
														<option value="19">Dwarka</option>
														<option value="21">Mahavir</option>
														<option value="22">Sadhnagar</option>
														<option value="23">Rajnagar</option>
														<option value="24">VipinGarden</option>
														<option value="25">VikasPuri</option>
														<option value="26">VashistPark</option>
														<option value="27">VAISHALI</option>
														<option value="28">UttamNagar</option>
														<option value="29">RajoriGarden</option>
														<option value="30">PochanPur</option>
														<option value="31">PalamVillage</option>
														<option value="32">NSP</option>
														<option value="33">MehramNagar</option>
														<option value="34">KrishnaPark</option>
														<option value="35">KirtiNagar</option>
														<option value="36">KanganHeri</option>
														<option value="37">KailashPuri</option>
														<option value="38">JankiPuri</option>
														<option value="39">JanakPuri</option>
														<option value="40">IndraPark</option>
														<option value="41">GuruGram</option>
														<option value="42">DurgaPark</option>
														<option value="43">DashrathPuri</option>
														<option value="44">BindaPur</option>
														<option value="45">BagDola</option>
														<option value="46">BijWasan</option>
														<option value="47">KapasHera</option>
														<option value="48">RajaPuri</option>
														<option value="49">Shyam Vihar</option>
														<option value="50">NasirPur</option>
														<option value="51">VijayEnclave</option>
														<option value="52">Goyladairy</option>
														<option value="53">Shahabad</option>
														<option value="54">Jagnnath Kumar</option>
													</select>

													<div class="help-block"></div>
												</div>                      
											</div>
					                        <div class="col-md-6 stoppaddignleft">
						                        <div class="form-group field-rclients required">
													<label class="control-label" for="rclients">Radius Client</label>
													<select id="rclients" class="form-control rounded" name="radius_client" aria-required="true">
													<option value="">Select...</option>
													</select>

													<div class="help-block"></div>
												</div>                      
											</div>
				                    	</div>
					                    <div class="row stoppaddignleft stoppaddignright">
					                        <div class="col-md-6 stoppaddignleft">
					                        	<div class="form-group field-company required">
													<label class="control-label" for="companys">Service</label>
													<select id="companys" class="form-control" name="service_new" aria-required="true">
														<option value="0">Select</option>
													<?php foreach ($services as $service): ?>
													<option value="<?=$service->service_id?>"><?=$service->service_name?></option>
													<?php endforeach;?>
													</select>

													<div class="help-block"></div>
												</div>                        
											</div>
					                        <div class="col-md-3 stoppaddignleft">
					                        	<div class="form-group field-subscriber-service_type">
													<label class="control-label" for="subscriber-service_typ">Next Renewal Service</label>
													<select id="subscriber-service_typ" class="form-control" name="next_renewal">
														<option value="0">Select</option>
													<?php foreach ($services as $service): ?>
													<option value="<?=$service->service_id?>"><?=$service->service_name?></option>
													<?php endforeach;?>
													</select>

													<div class="help-block"></div>
												</div>                        
											</div>

											<div class="col-md-3 stoppaddignleft">
						                        <div class="form-group field-subscriber-service_type">
													<label class="control-label" for="subscriber-servi">Assign To Employee</label>
													<select id="subscriber-servi" class="form-control" name="manager">
														<option value="0">Select</option>
													<?php
														foreach ($employees as $emp ) {
															// echo $emp->user_name;
															echo '<option value="'.$emp->id.'">'.$emp->first_name.' '.$emp->last_name.'</option>';
														}
													?>
													</select>

													<div class="help-block"></div>
												</div>                        
											</div>

											<div class="col-md-3 stoppaddignleft">
						                        <div class="form-group field-subscribe">
												<label class="control-label" for="subscriber-specia">Idle Timeout</label>
												<input type="text" id="subscriber-specia" class="form-control rounded" name="idle_timeout" value="600">

												<div class="help-block"></div>
												</div>                        
											</div>

							                <div class="col-md-3 stoppaddignleft">
								                <div class="form-group field-subscriber-special_discount">
								                    <label class="control-label" for="subscribe">Simultaneous Use</label>
								                    <input type="text" id="subscribe" class="form-control rounded" name="simult" value="1">

								                    <div class="help-block"></div>
							                    </div> 
							                </div>
						                    <div class="col-md-6 stoppaddignleft">
						                        <div class="form-group field-subscriber-special_discount">
						                            <label class="control-label">IP Address Mode</label>
						                            <select id="IPAddress" class="form-control" name="ipmode">
						                                <option value="NAS Pool" id="nas">Nas Pool</option>
						                                <option value="Static IP" id="static">Static Ip</option>
						                            </select>
						                            <input type="text" id="wanIp" class="form-control rounded" placeholder="wan Ip" name="wanIp" style="display: none;">
						                            <input type="text" id="LanIp" class="form-control rounded" placeholder="Lan Ip" name="LanIp" style="display: none;">
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
                </div>
            </div>
        </div>

        <!-------login details----------->                

         <div class="card" >
            <div class="card-body">
                <div class="panel-group" id="accordion">

                    <!-- panel1  -->
                    <div class="panel panel-default active" id="panel5">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse5">
                        <h4 class="panel-title"><a data-toggle="collapse" data-target="#collapse5" href="#collapse5">Plan Details</a></h4>
                        <hr>
                      </div>

			            <div id="collapse5" class="panel-collapse fade collapse show">
			                <div class="panel-body">
					            <div class="row stoppaddignleft stoppaddignright">
			                        <div class="col-md-4 stoppaddignleft">
			                            <div class="form-group field-subscriber-permanent_address required">
											<label class="control-label" for="start_date">Start Date</label>
											<input type="date" id="start_date" class="form-control rounded" name="start_date" autocomplete="off">


											<div class="help-block"></div>
										</div>                        
									</div>
			                        <div class="col-md-4 stoppaddignleft stoppaddignright">
			                            <div class="form-group field-subscriber-subscriber_details required">
										<label class="control-label" for="end_date">End Date</label>
										<input type="date" id="end_date" class="form-control rounded" name="end_date" autocomplete="off">


										<div class="help-block"></div>
										</div>     
			                   		</div>
			                   		<div class="col-md-4 stoppaddignleft stoppaddignright">
			                            <div class="form-group field-subscriber-permanent_address required">
											<label class="control-label" for="due_date">Due Date</label>
											<input type="date" id="due_date" class="form-control rounded" name="due_date" autocomplete="off">


											<div class="help-block"></div>
										</div>                        
									</div>
			                    </div> 
			                    <div class="row">

			                    	<div class="col-lg-12">
			                    		<hr>
			                    		<div align="right">  
			                    			<button type="submit" class="btn btn-primary" name="Frm_User">Add User</button>
			                    			<button type="submit" class="btn btn-secondary" name="Frm_User">Update User</button>
                    					</div>
			                    	</div>
			                    </div>
				           	</div>
			            </div>                                                 
            		</div>                                                 
           		 </div>                                                 
            </div>                                                 
		</div>
                        
                    </div>


                  </div><br>

                  
                </form>

                <div style="clear:both"></div>

            </div>
          </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    $(document).on('change','#IPAddress',function(){
        if($('#IPAddress').val() == 'Static IP') {
            $('#wanIp').css('display','block'); 
            $('#LanIp').css('display','block'); 
        } else {
            $('#wanIp').css('display','none'); 
            $('#LanIp').css('display','none'); 
        } 
    });
</script>
<script>
       $(document).ready(function(){
            $("#create_sub").submit(function(e){
                e.preventDefault();
                var formData= new FormData($(this)[0]);
                var pass=$('#subscriber-password').val();
                var cpass=$('#subscriber-password_repeat').val();
                if(pass!=cpass){
                    alert("PassWord And Confirm PassWord Are Not Same");
                }
                else{
                $.ajax({
                    url:"<?=base_url('index.php/Subscriber/create_user')?>",
                     type:"post",
                     data:formData,
                     contentType:false,
                     processData:false,
                     cache:false,

                    success:function(response)
                    {
                        alert(response);
                        location.reload();
                    }
                });
                }
            });

        });
    </script>

<!-- language options -->

<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
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