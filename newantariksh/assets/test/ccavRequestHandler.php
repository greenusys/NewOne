<html>
<head>
<title> CCAvenue Payment Gateway Integration kit</title>
</head>
<body>
<center>

<?php include('Crypto.php')?>

<?php 
// print_r($_POST);
	error_reporting(0);
	$orderId='1';
	$merchant_data='';
	$working_key = '49B30AF95E240AC666467812A095BBF1';
	$access_code = 'AVLC85GF94BB76CLBB';
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}
	$merchant_data .= "order_id=".$orderId;
	
	 $encrypted_data=encrypt($merchant_data,$working_key);

?>

<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>