<html>
<head>
<title> Non-Seamless-kit</title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='FA7C52D061600093186F5D80507762A0';//Shared by CCAVENUES
	$access_code='AVDB83GA04BY83BDYB';//Shared by CCAVENUES


	// foreach ($_POST as $key => $value){
	// 	$merchant_data.=$key.'='.$value.'&';
	// }
$merchant_id=$_POST['merchant_id'];  // Merchant id(also User_Id) 

$billing_name=$_POST['name'];
$billing_tel=$_POST['mobile'];
$billing_email=$_POST['email'];
$amount=1;// your script should substitute the amount here in the quotes provided here
$tid=$_POST['reference_no']; 
//$url='http://staywala.com/staywala_file/cc2/redirecturl.php';
//$_POST['Redirect_Url'];         //your redirect URL where your customer will be redirected after authorisation from CCAvenue
$url=$_POST['redirect_url'];  
$currency = "INR";
$order_id=$_POST['reference_no']; 

 $merchant_param1=$_POST['nUid'];


 
$merchant_data= 'merchant_id='.$merchant_id.'&order_id='.$order_id.'&amount='.$amount.'&currency='.$currency.'&redirect_Url='.$url.'&cancel_url='.$url.'&billing_cust_name='.$billing_name.'&billing_cust_tel='.$billing_tel.'&billing_cust_email='.$billing_email.'&delivery_cust_name='.$billing_name.'&merchant_param1='.$merchant_param1;
	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.


  
?>
<!--<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> -->
<!--<?php-->
<!--echo "<input type=hidden name=encRequest value=$encrypted_data>";-->
<!--echo "<input type=hidden name=access_code value=$access_code>";-->
<!--?>-->
<!--</form>-->
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

