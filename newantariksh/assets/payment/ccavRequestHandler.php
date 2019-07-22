<html>
<head>
<title>Payment Page  </title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 
	//print_r($_POST);
	session_start();
	$_SESSION['paymentSess']=1;
	error_reporting(0);
	$merchant_data='';
	$working_key='49B30AF95E240AC666467812A095BBF1';//Shared by CCAVENUES
	$access_code='AVLC85GF94BB76CLBB';//Shared by CCAVENUES
	foreach ($_POST as $key => $value)
	{
		$merchant_data.=$key.'='.urlencode($value).'&';
	}
	//echo $merchant_data;
	 $encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
	<?php
	echo '<input type="hidden" name=encRequest value="'.$encrypted_data.'">';
	echo '<input type="hidden" name=access_code value="'.$access_code.'">';
	?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

