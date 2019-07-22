<?php 
	$pPrice=1;

	$Tax=10;
	$nTax=($pPrice*$Tax)/100;

	$swaTax=11;
	$nSwaTax=($pPrice*$swaTax)/100;

	$nTotal=$pPrice+$nTax+$nSwaTax;

// if($authUsrDetails['user_type']!='usrDSA'){
	$generalDataOne = array(
	'TotalOne' => number_format($nTotal,2)
	);

	$nVal=str_replace(',', '', $generalDataOne['TotalOne']);
	$generalData = array(
	'Total' => $nVal
	);
	//echo $generalData['Total'];
// }else if($authUsrDetails['user_type']=='usrDSA'){
	$authUsrDetails['comission']=10;
	$cCommission= ($nTotal*$authUsrDetails['comission'])/100;
	$TotalWithCommission=$nTotal-$cCommission;
	/*$generalData = array(
	'Total' => number_format($TotalWithCommission,2)
	);*/
	//print_r($generalData);

	$generalDataOne = array(
	'TotalOne' => number_format($TotalWithCommission,2)
	);

	$nVal=str_replace(',', '', $generalDataOne['TotalOne']);
	$generalData = array(
	'Total' => $nVal
	);
// }
//session_start();

	
	//session_start();
	$HASHING_METHOD = 'sha512'; // md5,sha1
	$ACTION_URL = "https://secure.ebs.in/pg/ma/payment/request/";

	//https://secure.ebs.in/pg/ma/payment/pagehdfc/action/error/rid/6e29aed98229a85546ebfe5d53fcdfffNjc0NDY0NQ%3D%3D/
	// This post.php used to calculate hash value using md5 and redirect to payment page.

	
	if(isset($_POST['secretkey'])){
		$_SESSION['SECRET_KEY'] = $_POST['secretkey'];
		$_SESSION['nUname'] = $_POST['nUname'];
		$_SESSION['nUid'] = $_POST['nUid'];
	}else
		$_SESSION['SECRET_KEY'] = '039d7dae061a6d3147a147e98e5072d3'; //set your secretkey here
		$hashData = $_SESSION['SECRET_KEY'];
		unset($_POST['secretkey']);
		unset($_POST['submitted']);
		//$_POST['amount']=$generalData['Total'];
		ksort($_POST);
		// print_r($_POST);
		$i=1;
		foreach ($_POST as $key => $value){
			if (strlen($value) > 0) {
				$hashData .= '|'.$value;
			}
			if($i==3){
				$hashData .= '|'.$generalData['Total'];
			}
			$i++;
		}
		echo $hashData;
	if (strlen($hashData) > 0) {
		 $secureHash = strtoupper(hash($HASHING_METHOD, $hashData));
	}
?>

<html>
<body onLoad="document.payment.submit();">
<!-- <body > -->
    <h3>Please wait, redirecting to process payment..</h3>.
    
    <form action="<?php echo $ACTION_URL;?>" name="payment" method="POST">
    <?php
    $j=1;
    
    foreach($_POST as $key => $value) {
        ?>
      
        <input type="hidden" value="<?php echo $value;?>" name="<?php echo $key;?>"/>
        <?php
        if($j==3){?>
        	
            <input type="hidden" value="<?php echo $generalData['Total'];?>" name="<?php echo 'amount';?>"/>
            <?php
        }
        $j++;

    }
    ?>
    <input type="hidden" value="<?php echo $secureHash; ?>" name="secure_hash"/>
    </form>
</body>
</html>