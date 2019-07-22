<?php
	session_start();
	if(!isset($_SESSION['paymentSess']))
	{
		header('Location:http://antariksh.co.in/radius/index.php/User');
	}
	$conn=new mysqli('localhost','newantariskh','demo@9090','newantariskh');
 include('Crypto.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Antariksh Broadband : Payement Response</title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $(document).on("click",".gpdf", function () {
            html2canvas($('#PDFcontent'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Invoice.pdf");
                }
            });
        });
    </script>
</head>
<body >
	<div class="container p-5"  >
		<?php

			error_reporting(0);
			
			$workingKey='49B30AF95E240AC666467812A095BBF1';		//Working Key should be provided here.
			$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
			$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
			$order_status="";
			$decryptValues=explode('&', $rcvdString);
			$dataSize=sizeof($decryptValues);
			echo "<center>";

			for($i = 0; $i < $dataSize; $i++) 
			{
				$information=explode('=',$decryptValues[$i]);
				$key[]=$information[0];
				$value[]=urldecode($information[1]);
				if($i==3)	$order_status=$information[1];
			}
			// print_r($key);
			// echo '<hr>';
			// echo 'INSERT INTO `tbl_payment`(`id`, `user_id`, `user_name`, `price`, `mnth`, `bill_day`, `dateOfPayment`, `TransactionID`, `PaymentID`, `paymentStatus`, `BillingPhone`, `DeliveryPhone`, `recp_num`) VALUES ';
			// echo '<hr>';
			//print_r($value);
			if($order_status==="Success")
			{
				$status=strtoupper($value[3]);
				$userId=$value[27];
				$email=$value[18];
				$name=$value[11];
				$address=$value[12];
				$orderId=$value[0];
				$tackingId=$value[1];
				$amount=$value[10];
				$zip=$value[15];
				$transactionDate=$value[40];
				$username=$value[26];
				$mobile=$value[17];
				date_default_timezone_set('Asia/Kolkata');
				$da=date('d-M-Y H:i:s');
				$d = new DateTime($da, new DateTimeZone('IST')); 
				$d->modify('first day of previous month');
				$year = $d->format('Y'); //2012
				$month = $d->format('M'); //12
				$fetch="select * from tbl_payment where user_id='$userId' and TransactionID='$tackingId'";
				$fetchSt=$conn->query($fetch);
				if($fetchSt->num_rows>0)
				{
					?>
					<div class="row my-5" >
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12" >
									<div class="alert alert-success" >
										<h5><span>Thank you for Payment. Your Card has been charged and your transaction is successful. </span></h5>
									</div>
								</div>
							</div>
							<!-- <div class="row ">
								<div class="col-md-6 offset-md-3 card p-2">
									<div >
										<div class="form-group row">
											<div class="col-md-12">
												<h4>Payment Reciept </h4>
												<hr>
											</div>
											
										</div>
										<div class="form-group row">
											<div class="col-md-6">
												<label class="float-left">Payment Status: </label>
											</div>
											<div class="col-md-6">
												<input type="text" name="status" value="<?=$status?>" class="form-control" readonly="">
											</div>
										</div>
										
										<div class="form-group row">
											<div class="col-md-6"><label class="float-left">Payment Tracking Id: </label></div>
											<div class="col-md-6"><input type="text" name="tackingId" value="<?=$tackingId?>" class="form-control" readonly=""></div>
											
											
										</div>
										
										<div class="form-group row">
											<div class="col-md-6"><label class="float-left">Transaction Date: </label></div>
											<div class="col-md-6"><input type="text" name="transactionDate" value="<?=$transactionDate?>" class="form-control" readonly=""></div>
											
											
										</div>
										
										<div class="form-group row">
											<div class="col-md-6"><label class="float-left">Username: </label></div>
											<div class="col-md-6"><input type="text" name="username" value="<?=$username?>" class="form-control" readonly=""></div>
											
											
										</div>
										
										<div class="form-group row">
											<div class="col-md-6"><label class="float-left">Email: </label></div>
											<div class="col-md-6"><input type="text" name="email" value="<?=$email?>" class="form-control" readonly=""></div>
											
											
										</div>
										
										<div class="form-group row">
											<div class="col-md-6"><label class="float-left">Amount: </label></div>
											<div class="col-md-6"><input type="text" name="amount" value="&#8377; <?=$amount?>" class="form-control" readonly=""></div>
											
											
										</div>
									</div>
										
										<div align="right" id="toShow">
											<a href="http://antariksh.co.in/radius/index.php/User" class="btn btn-success" >Home</a>
											<button  onclick="downloadImage(<?=$username?>)" class="btn btn-primary"> Print</button>
											
											
											
											
										</div>
								</div>
								
							</div> -->

							 
    <div class="row" id="PDFcontent">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row pt-5 pl-5 pr-5 pb-2">
                        <div class="col-md-6">
                            <img src="http://antariksh.co.in/images/antariksh-logo.jpg">
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice #550</p>
                            <p class="text-muted">Date: <?=$transactionDate?></p>
                        </div>
                    </div>

                    <hr class="">

                    <div class="row pt-2 pl-5 pr-5 ">
                        <div class="col-md-6">
                            <!-- <p class="font-weight-bold mb-4">Client Information</p> -->
                         	<p class="mb-1"><strong> Address: </strong></p>
                         	<p class="mb-1"><?=$address?></p>
                            <p class="mb-1"> <strong>Email:</strong> </p>
                            <p class="mb-1"><?=$email?></p>
                            <p class="mb-1"><?=$zip?></p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4"><strong>Payment Details</strong></p>
                            <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                            <p class="mb-1"><span class="text-muted">Payment Tracking Id: </span> <?=$tackingId?></p>
                            <p class="mb-1"><span class="text-muted">Name: </span><?=$name?></p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Email</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Software</td>
                                        <td>LTS Versions</td>
                                        <td>21</td>
                                        <td><?=$email?></td>
                                        <td>&#8377; <?=$amount?></td>
                                    </tr>
                                   
                                     <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td ><strong>GST(18%)</strong></td>
                                        
                                        <td>$23434</td>
                                    </tr>
                                     <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td ><strong>Total</strong></td>
                                        
                                        <td><strong>&#8377; <?=$amount?></strong></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=" bg-dark text-white p-4">
                        <div class="text-center">
                        
                            <div class="alert alert-success" >
                                <h5><span>Thank you for Payment. Your Card has been charged and your transaction is successful. </span></h5>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

			<div align="right" id="toShow">
				<a href="http://antariksh.co.in/radius/index.php/User" class="btn btn-success" >Home</a>
				<button class="btn btn-primary gpdf"> Print</button>
			</div>	
    </div>
    
   


							
							<br>
							
						</div>
					</div>
					<script type="text/javascript">
						
						setTimeout(function(){
							var data={
								status:'<?=$status?>',username:'<?=$username?>'
							};
							$.ajax({
								url:"http://antariksh.co.in/radius/index.php/User/updateBillAmount",
								type:"post",
								data:data,
								success:function(response)
										{
											console.log(response);
											response=JSON.parse(response);
											if(response.code==1)
											{
												$('#toShow').show();
											}
										}
							});
						},1000);
					</script>
					
					
					<?php
				}
				else
				{
					$insrtData="INSERT INTO `tbl_payment`(`user_id`, `user_name`, `price`, `mnth`, `bill_day`, `dateOfPayment`, `TransactionID`, `PaymentID`, `paymentStatus`, `BillingPhone`, `DeliveryPhone`, `recp_num`) VALUES('$userId','$username','$amount','$month','$da','$da','$tackingId','$tackingId','$status','$mobile','$mobile','12345')";
				$inseSt=$conn->query($insrtData);
				if($inseSt)
				{
					?>
					<!-- <div class="row my-5" >
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12" >
									<div class="alert alert-success" >
										<h5><span>Thank you for Payment. Your Card has been charged and your transaction is successful. </span></h5>
									</div>
								</div>
							</div>
							<div class="row ">
								<div class="col-md-6 offset-md-3 card p-2">
									<div >
										<div class="form-group row">
											<div class="col-md-12">
												<h4>Payment Reciept </h4>
												<hr>
											</div>
											
										</div>
										<div class="form-group row">
											<div class="col-md-6">
												<label class="float-left">Payment Status: </label>
											</div>
											<div class="col-md-6">
												<input type="text" name="status" value="<?=$status?>" class="form-control" readonly="">
											</div>
										</div>
										
										<div class="form-group row">
											<div class="col-md-6"><label class="float-left">Payment Tracking Id: </label></div>
											<div class="col-md-6"><input type="text" name="tackingId" value="<?=$tackingId?>" class="form-control" readonly=""></div>
											
											
										</div>
										
										<div class="form-group row">
											<div class="col-md-6"><label class="float-left">Transaction Date: </label></div>
											<div class="col-md-6"><input type="text" name="transactionDate" value="<?=$transactionDate?>" class="form-control" readonly=""></div>
											
											
										</div>
										
										<div class="form-group row">
											<div class="col-md-6"><label class="float-left">Username: </label></div>
											<div class="col-md-6"><input type="text" name="username" value="<?=$username?>" class="form-control" readonly=""></div>
											
											
										</div>
										
										<div class="form-group row">
											<div class="col-md-6"><label class="float-left">Email: </label></div>
											<div class="col-md-6"><input type="text" name="email" value="<?=$email?>" class="form-control" readonly=""></div>
											
											
										</div>
										
										<div class="form-group row">
											<div class="col-md-6"><label class="float-left">Amount: </label></div>
											<div class="col-md-6"><input type="text" name="amount" value="&#8377; <?=$amount?>" class="form-control" readonly=""></div>
											
											
										</div>
									</div>
										
										<div align="right" id="toShow">
											<a href="http://antariksh.co.in/radius/index.php/User" class="btn btn-info" >Home</a>
											<button  onclick="downloadImage(<?=$username?>)" class="btn btn-primary"> Print</button>
											
											
											
											
										</div>
								</div>
								
							</div>
							
							<br>
							
						</div>
					</div> -->
					<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row pt-5 pl-5 pr-5 pb-2">
                        <div class="col-md-6">
                            <img src="http://antariksh.co.in/images/antariksh-logo.jpg">
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice #550</p>
                            <p class="text-muted">Date: <?=$transactionDate?></p>
                        </div>
                    </div>

                    <hr class="">

                    <div class="row pt-2 pl-5 pr-5 ">
                        <div class="col-md-6">
                            <!-- <p class="font-weight-bold mb-4">Client Information</p> -->
                         	<p class="mb-1"><strong> Address: </strong></p>
                         	<p class="mb-1"><?=$address?></p>
                            <p class="mb-1"> <strong>Email:</strong> </p>
                            <p class="mb-1"><?=$email?></p>
                            <p class="mb-1"><?=$zip?></p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4"><strong>Payment Details</strong></p>
                            <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                            <p class="mb-1"><span class="text-muted">Payment Tracking Id: </span> <?=$tackingId?></p>
                            <p class="mb-1"><span class="text-muted">Name: </span><?=$name?></p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Email</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Software</td>
                                        <td>LTS Versions</td>
                                        <td>21</td>
                                        <td><?=$email?></td>
                                        <td>&#8377; <?=$amount?></td>
                                    </tr>
                                   
                                     <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td ><strong>GST(18%)</strong></td>
                                        
                                        <td>$23434</td>
                                    </tr>
                                     <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td ><strong>Total</strong></td>
                                        
                                        <td><strong>&#8377; <?=$amount?></strong></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=" bg-dark text-white p-4">
                        <div class="text-center">
                        
                            <div class="alert alert-success" >
                                <h5><span>Thank you for Payment. Your Card has been charged and your transaction is successful. </span></h5>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

			<div align="right" id="toShow">
				<a href="http://antariksh.co.in/radius/index.php/User" class="btn btn-success" >Home</a>
				<button  class="btn btn-primary gpdf"> Print</button>
			</div>	
    </div>
    <!--- onclick="downloadImage(<?=$username?>)"-->
					<script type="text/javascript">
						
						setTimeout(function(){
							var data={
								status:'<?=$status?>',username:'<?=$username?>'
							};
							$.ajax({
								url:"http://antariksh.co.in/radius/index.php/User/updateBillAmount",
								type:"post",
								data:data,
								success:function(response)
										{
											console.log(response);
											response=JSON.parse(response);
											if(response.code==1)
											{
												$('#toShow').show();
											}
										}
							});
						},1000);
					</script>
					
					
					<?php
				}
			}
				

				
				
			}
			else if($order_status==="Aborted")
			{
				
				?>
					<div class="row my-5">
						<div class="col-lg-12 my-5">
							<div class="alert alert-info">
								<h4><span>Your payment is aborted. We will keep you posted regarding the status of your order through e-mail.</span></h4>
								<a href="http://antariksh.co.in/radius/index.php/User" class="btn btn-info" >Home</a>
							</div>
							
						</div>
					</div>
				<?php
			
			}
			else if($order_status==="Failure")
			{
				
				?>
					<div class="row my-5">
						<div class="col-lg-12 my-5">
							<div class="alert alert-danger">
								<h4><span>Thank you for shopping with us.However,the transaction has been declined.</span></h4>
								<a href="http://antariksh.co.in/radius/index.php/User" class="btn btn-info" >Home</a>
							</div>
							
						</div>
					</div>
				<?php
			}
			else
			{
				?>
					<div class="row my-5">
						<div class="col-lg-12 my-5">
							<div class="alert alert-warning">
								<h4><span>Security Error. Illegal access detected.</span></h4>
								<a href="http://antariksh.co.in/radius/index.php/User" class="btn btn-info" >Home</a>
							</div>
							
						</div>
					</div>
				<?php
			
			}

			// echo "<br><br>";

			// echo '<table  width="70%">';
			// for($i = 0; $i < $dataSize; $i++) 
			// {
			// 	$information=explode('=',$decryptValues[$i]);

				
			//     echo '<tr><td>'.$information[0].'</td><td>'.urldecode($information[1]).'</td></tr>';
			//     $value[]=urldecode($information[1]);
			// }

			// echo "</table><br>";
			// echo "</center>";
			//print_r($value);
		?>
	</div>
	
		<!-- <script>
			
			// function download(divName){
			// 	// alert('Running');
			//     var a = document.body.appendChild(
			//         document.createElement("a")
			//     );
			//     a.download = "export.pdf";
			//     a.href = "data:text/pdf," + document.getElementById(divName).innerHTML; // Grab the HTML
			//     a.click(); // Trigger a click on the element
			// }
			// function printDiv(divName){
			// 	var printContents = document.getElementById(divName).innerHTML;
			// 	var originalContents = document.body.innerHTML;
			// 	document.body.innerHTML = printContents;
			// 	window.print();
			// 	document.body.innerHTML = originalContents;
			// }
			// $('#dwd').click(function() {
			//   var options = {};
			//   var pdf = new jsPDF('p', 'pt', 'a4');
			//   pdf.addHTML($("#toPrint"), 30, 30, options, function() {
			//     pdf.save('Invoice.pdf');
			//   });
			// });
			function downloadImage(username)
			{
				 html2canvas(document.querySelector("#toPrint")).then(canvas => {
					a = document.createElement('a'); 
					document.body.appendChild(a); 
					a.download = "Payment_Invoice.jpg"; 

					a.href =  canvas.toDataURL();
					
					a.click();
				});
		 	}
		 	
			// function sendInvoice(username,img)
		 // 	{

		 // 	}
		 	
		 	
		</script> -->

	
		
</body>
</html>
