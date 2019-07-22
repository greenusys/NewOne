<style>
.input-group{
    border: 1px solid #8080807a;border-radius: 5px;
}
.pad-8{
    padding: 7px
}
</style>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Quick Pay</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Quick Pay</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
<div class="container-fluid " style="background: white">
    <div class="row">
        <div class="col-md-3"><h4><i class="fas fa-check-circle"></i> Enter Your Number</h4></div>
        <div class="col-md-3"><h4><i class="fas fa-check-circle"></i> Transaction details</h4></div>
        <div class="col-md-3"><h4><i class="fas fa-check-circle"></i> Confirm & Pay</h4></div>
        <div class="col-md-3"><h4><i class="fas fa-check-circle"></i> Payment Status</h4></div>
    </div>    <br><br>
    <div class="row d-flex justify-content-center">
            <div class="card col-md-4" style="background: #0000000f;border-radius: 5px;">
                
                <div class="card-body" id="entr_no">
                    <form id="formUserDetails" action ="" method="post">
                      <h4>Enter your Registered Mobile No. or Customer ID</h4>
                        <div class="input-group" >
                            <span class="input-group-addon pad-8" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                            <input type="text" class="form-control" placeholder="Registered Mobile No.:" aria-describedby="basic-addon1" name="user_name" value="<?=$this->session->loggedUser->mobile?>" required="">
                        </div><br>
                     <input type="submit" class="btn btn-success" id="procd" value="Proceed">
                    </form>   
                </div>
                
                

                <div class="card-body" id="transactn_details" style="display: none">
                      <h4>Here is your payment details:</h4>
                        <form id="form2" action="">
                          <table class="table table-stripped">    
                            <tbody>
                                <tr>
                                    <td>Login Id:</td>
                                    <td><input type="text" class="userName form-control">
                                    <input type="hidden" name="userName" class="userName form-control"></td>
                                </tr>
                                 <tr>
                                    <td>Mobile Number:</td>
                                    <td><input type="text" class="userMob form-control">
                                    <input type="hidden" name="userMob" class="userMob form-control"></td>
                                </tr>
                                 <tr>
                                    <td>Service Payment:</td>
                                    <td><input type="text" class="servcPament form-control">
                                    <input type="hidden" vname="servcPament" class="servcPament form-control"></td>
                                </tr>
                                 <tr>
                                    <td>GST Tax:</td>
                                    <td>18 %</td>
                                </tr>
                                 <tr>
                                    <td>Swachata Tax:</td>
                                    <td>0 %</td>
                                </tr>
                                 <tr>
                                    <td>Total:</td>
                                    <td><input type="text" class="totalPament form-control">
                                    <input type="hidden" name="amount" class="totalPament form-control"></td>
                                </tr>
                            </tbody>    
                            
                        </table><br>
                        <input type="submit" class="btn btn-success" id="tran_procd" value="Proceed"> 
                      </form>
                        
                </div>

                <div class="card-body" id="confirm_pay" style="display: none">
                    <h4>Confirm Payment Details:</h4>
                      <form method="POST" name="customerData" action="http://antariksh.co.in/radius/assets/payment/ccavRequestHandler.php">
                        <input type="hidden" class="form-control" name="tid" id="tid" readonly value="<?=time()?>"/>
                        <input type="hidden" class="form-control" name="merchant_id" value="222231"/>
                        <input type="hidden" class="form-control" name="currency" value="INR"/>
                        <input type="hidden" class="form-control" name="redirect_url" value="http://antariksh.co.in/radius/assets/payment/ccavResponseHandler.php"/>
                        <input type="hidden" class="form-control" name="cancel_url" value="http://antariksh.co.in/radius/assets/payment/ccavResponseHandler.php"/>
                        <input type="hidden" class="form-control" name="language" value="EN"/>
                        <input type="hidden" class="form-control" name="delivery_name" value="<?=$this->session->loggedUser->first_name.' '.$this->session->loggedUser->last_name?>"/>
                        <input type="hidden" class="form-control" name="delivery_address" value="<?=$this->session->loggedUser->billing_address?>"/>
                        <input type="hidden" class="form-control" name="delivery_city" value="<?=$this->session->loggedUser->bill_city?>"/>
                        <input type="hidden" class="form-control" name="delivery_state" value="<?=$this->session->loggedUser->bill_state?>"/>
                        <input type="hidden" name="delivery_zip" class="form-control" value="<?=$this->session->loggedUser->bill_zip?>"/>
                        <input type="hidden" class="form-control" name="delivery_country" value="IND"/>
                        <input type="hidden" class="form-control" name="delivery_tel" value="<?=$this->session->loggedUser->mobile?>"/>
                        <input type="hidden" class="form-control" name="merchant_param1" value="<?=$this->session->loggedUser->user_name?>"/>
                        <input type="hidden" class="form-control" name="merchant_param2" value="<?=$this->session->loggedUser->id?>"/>
                        <input type="hidden" class="form-control" name="merchant_param3" value="<?=$this->session->loggedUser->bill_amount?>"/>
                        
                        <table width="100%"  align="center">
                  
                            <tr>
                                <td>Order Id    :</td><td><input type="text" readonly class="form-control" name="order_id" value="<?=time()?>"/></td>
                            </tr>
                            <tr>
                                <td>Amount  :</td><td><input type="text"  name="amount" readonly class="totalPament form-control"/></td>
                            </tr>
                         
                            <tr>
                                <td>Billing Name    :</td><td><input type="text" class="form-control" name="billing_name" value="<?=$this->session->loggedUser->first_name.' '.$this->session->loggedUser->last_name?>"/></td>
                            </tr>
                            <tr>
                                <td>Billing Address :</td><td><input type="text" class="form-control" name="billing_address" value="<?=$this->session->loggedUser->address?>"/></td>
                            </tr>
                            <tr>
                                <td>Billing City    :</td><td><input type="text" class="form-control" name="billing_city" value="<?=$this->session->loggedUser->city?>"/></td>
                            </tr>
                            <tr>
                                <td>Billing State   :</td><td><input type="text" class="form-control" name="billing_state" value="<?=$this->session->loggedUser->bill_state?>"/></td>
                            </tr>
                            <tr>
                                <td>Billing Zip :</td><td><input type="text" class="form-control" name="billing_zip" value="<?=$this->session->loggedUser->bill_zip?>"/></td>
                            </tr>
                            <tr>
                                <td>Billing Country :</td><td><input type="text" readonly class="form-control" name="billing_country" value="IND"/></td>
                            </tr>
                            <tr>
                                <td>Billing Tel :</td><td><input type="text"  name="billing_tel" class="userMob form-control"/></td>
                            </tr>
                            <tr>
                                <td>Billing Email   :</td><td><input type="text" class="form-control" name="billing_email" value="<?=$this->session->loggedUser->email?>"/></td>
                            </tr>
                          
                            <tr>
                                <td></td><td><INPUT TYPE="submit" value="Pay Now" class="btn btn-success"></td>
                            </tr>
                        </table>
                      </form>

                      <!-- <form name="frmPayment" action="http://www.antariksh.co.in/radius/assets/test/ccavRequestHandler.php" method="POST">
                        <table class="table table-stripped">    
                            <tbody>
                                <input type="hidden" name="merchant_id" value="<?php echo '222231'; ?>"> 
                                <input type="hidden" name="order_id" value="<?php echo time(); ?>"> 
                                <input type="hidden" name="language" value="EN">  -->
                                <!-- <input type="hidden" name="amount" value="1"> -->
                               <!--  <input type="hidden" name="currency" value="INR"> 
                                <input type="hidden" name="redirect_url" value="http://www.antariksh.co.in/radius/assets/test/ccavResponseHandler.php"> 
                                <input type="hidden" name="cancel_url" value="http://www.antariksh.co.in/radius/assets/test/ccavResponseHandler.php"> 
                                <tr>
                                    <td>Login Id:</td>
                                    <td><input type="text" class="userName form-control">
                                    <input type="hidden" name="userName" class="userName form-control"></td>
                                </tr>
                               
                                 <tr>
                                    <td>Mobile Number:</td>
                                    <td><input type="text" class="userMob form-control">
                                    <input type="hidden" name="userMob" class="userMob form-control"></td>
                                </tr>
                                 <tr>
                                    <td>Service Payment:</td>
                                    <td><input type="text" class="servcPament form-control">
                                    <input type="hidden" name="servcPament" class="servcPament form-control"></td>
                                </tr>
                                 <tr>
                                    <td>GST Tax:</td>
                                    <td>18 %</td>
                                </tr>
                                 <tr>
                                    <td>Swachata Tax:</td>
                                    <td>0 %</td>
                                </tr>
                                 <tr>
                                    <td>Total:</td>
                                    <td><input type="text" class="totalPament form-control">
                                    <input type="hidden" name="amount" class="totalPament form-control"></td>
                                </tr>
                            </tbody>    
                            
                        </table><br>
                         -->
                       
                        
                        <!-- <div>
                        <input type="hidden" name="billing_name" value="<?=$this->session->loggedUser->first_name.' '.$this->session->loggedUser->last_name?>" class="form-control" Placeholder="Billing Name">
                        <input type="hidden" name="billing_address" value="<?=$this->session->loggedUser->address?>" class="form-field" Placeholder="Billing Address">
                        </div>
                        <div>
                        <input type="hidden" name="billing_state" value="<?=$this->session->loggedUser->bill_state?>" class="form-field" Placeholder="State"> 
                        <input type="hidden" name="billing_zip" value="<?=$this->session->loggedUser->bill_zip?>" class="form-field" Placeholder="Zipcode">
                        </div>
                        <div>
                        <input type="hidden" name="billing_country" value="IND" class="form-field" Placeholder="Country">
                        <input type="hidden" name="billing_tel" value="<?=$this->session->loggedUser->phone?>" class="form-field" Placeholder="Phone">
                        </div> 
                        <div>
                        <input type="hidden" name="billing_email" value="<?=$this->session->loggedUser->email?>" class="form-field" Placeholder="Email">
                        </div>
                        <div>
                        <button class="btn btn-success" type="submit">Pay Now</button>
                        </div>
                    </form> -->
                     <!-- <form action="http://www.antariksh.co.in/radius/assets/cc/ccavRequestHandler_old.php" method="post"> -->
                        <!-- <form action="http://antariksh.co.in/post.php" method="post" enctype="multipart/form-data"> -->
			        <!-- <input type="text" name="reference_no" value="<?php echo time();?>">
			        <input type="text" name="return_url" value="http://www.antariksh.co.in/response.php">
			        <input type="text" name="channel" value="10">
			        <input type="text" name="account_id" value="23605">
			       
			        <input type="text" name="nUid" value="<?=$this->session->loggedUser->id?>">
			        <input type="text" name="description" value="Payment of services">
			        <input type="text" name="mode" value="LIVE">
			        <input type="text" name="user_name" value="<?=$this->session->loggedUser->user_name?>">
			        <input type="text" name="name" value="<?=$this->session->loggedUser->first_name.' '.$this->session->loggedUser->last_name?>">
			        <input type="text" name="address" value="<?=$this->session->loggedUser->address?>">
			        <input type="text" name="city" value="<?=$this->session->loggedUser->city?>">
			        <input type="text" name="state" value="<?=$this->session->loggedUser->state?>">
			        <input type="text" name="postal_code" value="110018">
			        <input type="text" name="country" value="IND">
			        <input type="text" name="email" value="<?=$this->session->loggedUser->email?>">
			        <input type="text" name="phone" value="<?=$this->session->loggedUser->phone?>">
			        <input type="text" name="ship_name" value="<?=$this->session->loggedUser->first_name.' '.$this->session->loggedUser->last_name?>">
			        <input type="text" name="ship_address" value="<?=$this->session->loggedUser->billing_address?>">
			        <input type="text" name="ship_city" value="<?=$this->session->loggedUser->bill_city?>">
			        <input type="text" name="ship_state" value="<?=$this->session->loggedUser->bill_state?>">
			        <input type="text" name="ship_postal_code" value="<?=$this->session->loggedUser->bill_zip?>">
			        <input type="text" name="ship_country" value="IND">
			        <input type="text" name="ship_phone" value="<?=$this->session->loggedUser->phone?>">
            <table class="table table-stripped">    
                <tbody>
                    <tr>
                        <td>Login Id:</td><td class="userName"></td>
                    </tr>
                     <tr>
                        <td>Mobile Number:</td><td class="userMob"></td>
                    </tr>
                     <tr>
                        <td>Service Payment:</td> <td class="servcPament"></td>
                    </tr>
                     <tr>
                        <td>GST Tax:</td>
                        <td>18 %</td>
                    </tr>
                     <tr>
                        <td>Swachata Tax:</td>
                        <td>0 %</td>
                    </tr>
                     <tr>
                        <td>Total:</td>
                        <td class="totalPament" ></td>
                    </tr>
                </tbody>    
                
            </table><br> -->
            <!-- <tr>
                    <td>Parameter Name:</td><td>Parameter Value:</td>
                </tr>
                <tr>
                    <td colspan="2"> Compulsory information</td>
                </tr>
                <tr>
                    <td>TID :</td><td><input type="text" name="tid" id="tid" readonly value="<?=time()?>" /></td>
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    <td>Order Id    :</td><td><input type="text" name="order_id" value="123654789"/></td>
                </tr>
                <tr>
                    <td>Amount  :</td><td><input type="text" name="amount" value="1"/></td>
                </tr>
                <tr>
                    <td>Currency    :</td><td><input type="text" name="currency" value="INR"/></td>
                </tr>
                <tr>
                    <td>Redirect URL    :</td><td><input type="text" name="redirect_url" value="http://www.antariksh.co.in/radius/assets/cc/ccavResponseHandler.php"/></td>
                </tr>
                <tr>
                    <td>Cancel URL  :</td><td><input type="text" name="cancel_url" value="http://www.antariksh.co.in/radius/assets/cc/ccavResponseHandler.php"/></td>
                </tr>
                <tr>
                    <td>Language    :</td><td><input type="text" name="language" value="EN"/></td>
                </tr>
                <tr>
                    <td colspan="2">Billing information(optional):</td>
                </tr>
                <tr>
                    <td>Billing Name    :</td><td><input type="text" name="billing_name" value="Charli"/></td>
                </tr>
                <tr>
                    <td>Billing Address :</td><td><input type="text" name="billing_address" value="Room no 1101, near Railway station Ambad"/></td>
                </tr>
                        <input type="submit" class="btn btn-success" value="Pay" id="confrm_procd" value="Proceed"> --> 
                      <!-- </form> -->

                        
                </div>
            </div>

    </div>   
</div>
</div>
</div>
<Script>
    $(document).on("click","#procd",function(){
        $("#entr_no").hide(); 
        $('#formUserDetails').submit(function(e){
            e.preventDefault();
            var formData= new FormData($(this)[0]);
            $.ajax({
                url:"<?=base_url('index.php/User/proceedQuickpay')?>",
                type:"post",
                cache:false,
                contentType:false,
                processData:false,
                data:formData,
                success:function(response)
                        {
                            //alert(response); 
                            response=JSON.parse(response);   
                            if(response.code==1)
                            {

                                $("#transactn_details").show(); 
                                $(".userName").val(response.data[0].user_name); 
                                $(".userName").text(response.data[0].user_name); 
                                $(".userMob").val(response.data[0].mobile); 
                                $(".userMob").text(response.data[0].mobile); 
                                // alert(response.data[0].bill_amount);
                                var bil= response.data[0].bill_amount;
                                var totalAmount=Number(bil) + Number(0.18*response.data[0].bill_amount);
                                $(".servcPament").val(response.data[0].bill_amount+' /-');
                                $(".servcPament").text(response.data[0].bill_amount+' /-');  
                                $(".totalPament").val(totalAmount);   
                                $(".totalPament").text(totalAmount+' /-'); 
       
                            }
                            // 
                        }
            });
        });
        
        //$("#transactn_details").show(); 

    });
     $(document).on("click","#tran_procd",function(){
       
        $("#transactn_details").hide(); 
        $('#form2').submit(function(e){
            e.preventDefault();
            var formData= new FormData($(this)[0]);
            $.ajax({
                url:"<?=base_url('index.php/User/proceedPaymentDetails')?>",
                type:"post",
                cache:false,
                contentType:false,
                processData:false,
                data:formData,
                success:function(response)
                        {
                           // alert(response);    
                        }
            });
        });
        $("#confirm_pay").show(); 
    });
    //   $(document).on("click","#confrm_procd",function(){
    //     $("#entr_no").hide(); 
    //     $("#transactn_details").show(); 
    // });
</Script>   

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/nice-admin/html/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 07:20:53 GMT -->
</html>