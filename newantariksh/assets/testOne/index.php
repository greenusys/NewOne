<?php
$userData['price']=1;
$userData['servc_tax']=11;
$userData['swa_tax']=12;
$authUsrDetails['user_type'] = 'usrDSA';
$userData['servc_tax']=12;
// if($auth['payment_p_mode']==2){
	// $pPrice=$auth['bill_amount'];
// }else{
	// $pPrice=$userData['price'];
	$pPrice=1;
// }

$Tax=$userData['servc_tax'];
$nTax=($pPrice*$Tax)/100;

$swaTax=$userData['swa_tax'];
$nSwaTax=($pPrice*$swaTax)/100;

echo $nTotal=$pPrice+$nTax+$nSwaTax;

// if($authUsrDetails['user_type']!='usrDSA'){
	$generalData = array(
	'Login Id:' => '123456789',
	'Mobile Number:' => '99xxxxxx',
	'Service Payment' => $pPrice.' /-',
	'GST Tax' => $Tax.' %',
	'Swachata Tax:' => $swaTax.' %',
	'Total' => $nTotal.' /-'
	);
// }
// else if($authUsrDetails['user_type']=='usrDSA'){
// 	$authUsrDetails['comission'];
// 	$cCommission= ($nTotal*$authUsrDetails['comission'])/100;
// 	$TotalWithCommission=$nTotal-$cCommission;
// 	$generalData = array(
// 	'Login Id:' => $auth[0]['user_name'],
// 	'Mobile Number:' => $auth[0]['mobile'],
// 	'Service Payment:' => $pPrice.' /-',
// 	'GST Tax:' => $Tax.' %',
// 	'Swachata Tax:' => $swaTax.' %',
// 	'Sub Total:' => $nTotal.' /-',
// 	'Commision' => $authUsrDetails['comission'].' %',
// 	'Total:' => $TotalWithCommission.' /-',
// 	);
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
</head>
<body>
	<form name="form1" method="post" action="post.php">

                        <input type="hidden" name="reference_no" value="<?php echo time();?>">

                        <input type="hidden" name="return_url" value="http://www.antariksh.co.in/response.php">

                        <input type="hidden" name="channel" value="10">

                        <input type="hidden" name="account_id" value="23605">

                        <input type="hidden" name="secretkey" value="11d8b7d0e613f565b7290da4cbd6df3e">

                        <input type="hidden" name="nUname" value="<?php echo $nUname;?>">

                        <input type="hidden" name="nUid" value="<?php echo $nUid;?>">

                        <input type="hidden" name="description" value="Payment of services">

                        <input type="hidden" name="mode" value="LIVE">

                        <input type="hidden" name="user_name" value="<?php echo $auth[0]['user_name'];?>">

                        <input type="hidden" name="name" value="<?php echo $auth[0]['first_name'].' '.$auth[0]['last_name'];?>">

                        <input type="hidden" name="address" value="<?php echo $auth[0]['address'];?>">

                        <input type="hidden" name="city" value="<?php echo $auth[0]['city'];?>">

                        <input type="hidden" name="state" value="<?php echo $auth[0]['state'];?>">

                        <input type="hidden" name="postal_code" value="110018">

                        <input type="hidden" name="country" value="IND">

                        <input type="hidden" name="email" value="<?php echo $auth[0]['email'];?>">

                        <input type="hidden" name="phone" value="<?php echo $auth[0]['mobile'];?>">

                        <input type="hidden" name="ship_name" value="<?php echo $auth[0]['first_name'].' '.$auth[0]['last_name'];?>">

                        <input type="hidden" name="ship_address" value="<?php echo $auth[0]['address'];?>">

                        <input type="hidden" name="ship_city" value="<?php echo $auth[0]['city'];?>">

                        <input type="hidden" name="ship_state" value="<?php echo $auth[0]['state'];?>">

                        <input type="hidden" name="ship_postal_code" value="<?php echo $auth[0]['zip'];?>">

                        <input type="hidden" name="ship_country" value="IND">

                        <input type="hidden" name="ship_phone" value="<?php echo $auth[0]['mobile'];?>">



                        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" id="formfeedback">

                       

                       		<tr><td>&nbsp;</td></tr>

                            <tr><td>&nbsp;</td></tr>

                            

                            <?php 

							//print_r($generalData);

							foreach ($generalData as $key => $val):?>

								<tr><td><?=$key?></td><td><?=$val?></td></tr>

								

							<?php endforeach;?>

							

                            <tr><td>&nbsp;</td></tr>

                            <tr><td>&nbsp;</td></tr>

                            <tr>

                                <td>

                                    <button type="submit" class="btn btn-info" name="Frm_UserLogin" value="USER_LOGIN">Proceed</button>

                                </td>

                            </tr>

                            <tr><td>&nbsp;</td></tr>

                        </table>

                        </form>
</body>
</html>