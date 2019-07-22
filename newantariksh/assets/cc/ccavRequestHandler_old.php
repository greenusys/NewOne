<html>
<head>
<title> Novvn-Seamless-kit</title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='49B30AF95E240AC666467812A095BBF1';//Shared by CCAVENUES
	$access_code='AVLC85GF94BB76CLBB';//Shared by CCAVENUES
	
	$merchant_id ='222231';

	print_r($_POST);
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}
echo $merchant_data.='&merchant_id='.$merchant_id;

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
	$production_url='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;
?>

<iframe src="<?php echo $production_url?>" id="paymentFrame" width="482" height="600" frameborder="0" scrolling="No" ></iframe>


<script type="text/javascript">
    	$(document).ready(function(){
    		 window.addEventListener('message', function(e) {
		    	 $("#paymentFrame").css("height",e.data['newHeight']+'px'); 	 
		 	 }, false);
	 	 	
		});
</script>
<!--<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> -->
<?php
// echo "<input type=hidden name=encRequest value=$encrypted_data>";
// echo "<input type=hidden name=access_code value=$access_code>";


?>
<!--</form>-->
</center>
<!--<script language='javascript'>document.redirect.submit();</script>-->


</body>
</html>

