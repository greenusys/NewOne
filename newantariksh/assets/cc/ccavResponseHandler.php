<?php include('Crypto.php');


?>
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
		if($i==3)  	$order_status=$information[1];
		
	}

	if($order_status==="Success")
	{
	    echo $decryptValues[0];
	    
		echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
	

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	     $a[] =$information[1];
	}
print_r($a);
//  $date_s = explode('/',$a[28]);
//  $date_e = $date_s[1];

//  $rm_id = explode('/',$a[27]);
// $u_id = $rm_id[1];

// $adult = explode('/',$a[29]);
// $child = $adult[1];

// $rooms= explode('/',$a[30]);
// $no_of_days = $rooms[1];

//  		$h_id=$a[26];
  
// 		$room_type_id=$rm_id[0];
// 		$billing_name=$a[11];
// 		$billing_email=$a[18];
// 		$billing_tel=$a[17];
// 		$guest_gender=" ";
// 		$no_of_days=$no_of_days;
// 		$no_of_rooms=$rooms[0];
// 		$adult=$adult[0];
// 		$child=$child;
// 		//$h_id=$_POST['h_tprice'];
// 	 	$check_in=$date_s[0];
// 		$check_out=$date_e;
// 		$amount=$a[10];
// 		$order_id=$a[0];
// 		$tracking_id=$a[1];
// 		$bank_ref_no=$a[2];
// 		$payment_mode=$a[5];
		
 //        $billing_address=$a[12];
 //        $billing_city=$a[13];
 //        $billing_state=$a[14];
 //        $billing_zip=$a[15];
    
    
    
	//  $query1="insert into booking_details (h_id, room_type_id,u_id, guest_name, guest_mail, guest_phone, guest_gender, bo_user_address, bo_user_city, bo_user_state, bo_user_zipcode, no_of_days, no_of_rooms, adult, child, check_in, check_out, total_amount, bo_trasaction_id, bo_tracking_id, bo_bank_ref_no, bo_payment_mode) 
	// values('$h_id', '$room_type_id', '$u_id','$billing_name', '$billing_email', '$billing_tel', '$guest_gender', '$billing_address', '$billing_city', '$billing_state', '$billing_zip', '$no_of_days', '$no_of_rooms',' $adult',' $child', '$check_in', '$check_out', '$amount',' $order_id', '$tracking_id', '$bank_ref_no', '$payment_mode')";
		//print_r($query);
		// $booking=mysqli_query($conn,$query1);
		// if($booking){
		// 	$book_id=mysqli_query($conn,"select max(book_id) from booking_details where guest_mail='$billing_name' OR guest_phone='$billing_tel'");
		// 	//print("select max(book_id) from booking_details where guest_mail='$guest_mail' OR guest_phone='$guest_phone'");
		// 	$row=mysqli_fetch_assoc($book_id);
		// 	$booking_id=$row['max(book_id)'];
		// 	// die(json_encode(array('error'=>0,'msg'=>'booking details added successfully','booking_id'=>$booking_id)));
		// header('Location: http://staywala.com/invoice.php?booking_id='.$booking_id."&h_id=".$h_id); 
		// }else{
			
		// 	echo "Some Error Occured! Please Try Later";
		// }
	}
	else if($order_status==="Aborted")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>Thank you for shopping with us.However,the transaction has been declined. You will be Redirected Back";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

// 	echo "<table cellspacing=4 cellpadding=4>";
// 	for($i = 0; $i < $dataSize; $i++) 
// 	{
// 		$information=explode('=',$decryptValues[$i]);
// 	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
// 	}

// 	echo "</table><br>";
	echo "</center>";

//print_r($decryptValues);

//	echo $dataSize;

?>
