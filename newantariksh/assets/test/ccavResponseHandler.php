<?php include('Crypto.php');?>
<?php include('../conn.php');
require '../../phpmailer/class.smtp.php';
require '../../phpmailer/class.phpmailer.php';
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
	
//print_r($decryptValues);	
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==0)	$order_id=$order_status=$information[1];
		if($i==1)	$tracking_id=$order_status=$information[1];
		if($i==10)  $amount=$order_status=$information[1];
		if($i==26)  $hotel_id=$order_status=$information[1];
		if($i==27)	$mobile=$order_status=$information[1];
		if($i==28)	$gst=$order_status=$information[1];
	}
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}
	$dateformat=date_default_timezone_set('Asia/Kolkata');
	$date=date('d-m-Y');
    if($order_status==="Success")
	{
	        
	    $sql="INSERT INTO plan_transaction(hotel_id,mobile,gst,order_id,tracking_id,amount,trans_date,status) VALUES('$hotel_id','$mobile','$gst','$order_id','$tracking_id','$amount','$date','1')";
	    $query=mysqli_query($conn,$sql);
	    $inst="update hotel set h_plan_type=1 where h_id='$hotel_id'";
		$sql= mysqli_query($conn,$inst);
	    $login=mysqli_query($conn,"select * from hotel where h_id='$hotel_id'");
		$login_num=mysqli_num_rows($login);
		if($login_num>0)
		{
			$hotel_details = mysqli_fetch_assoc($login);
			$email=$hotel_details['h_email'];
			
			require_once('TCPDF/tcpdf.php');

				// create new PDF document
				$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

				// set document information
				$pdf->SetCreator(PDF_CREATOR);
				$pdf->SetTitle('Invoice');
				$pdf->SetSubject('TCPDF Tutorial');
				$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

				// set default header data
				$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

				// set header and footer fonts
				$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
				$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

				// set default monospaced font
				$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

				// set margins
				$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
				$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
				$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

				// set auto page breaks
				$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

				// set image scale factor
				$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

				// set some language-dependent strings (optional)
				if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
				    require_once(dirname(__FILE__).'/lang/eng.php');
				    $pdf->setLanguageArray($l);
				}

				// ---------------------------------------------------------

				// set font
				$pdf->SetFont('dejavusans', '', 10);

				// add a page
				$pdf->AddPage();

				// create some HTML content

				$html = '<header >
				            <h1 style="text-align:center">STAYWALA.com</h1>
				            <hr>
				        </header>
				        <h3>STAYWALA GST NO-27ADUFS9189H1ZY</h3>
				<table border="1" cellspacing="1" cellpadding="4">
				    <tr>
				        <td align="center">HOTEL ID</td>
				        <td align="center">'.$hotel_id.'</td>
				    </tr>
				    <tr>
				        <td align="center">Amount</td>
				        <td align="center">'.$amount.'</td>
				    </tr>
				    <tr>
				       
				        <td align="center">Tracking ID</td>
				        <td align="center">'.$tracking_id.'</td>
				    </tr>
				    <tr>
				        <td align="center">Transaction Date</td>
				        <td align="center">'.$date.'</td>
				    </tr>

				</table>';

				// output the HTML content
				$pdf->writeHTML($html, true, false, true, false, '');

				// Print some HTML Cells



				$pdf->SetFillColor(255,255,0);



				// reset pointer to the last page
				$pdf->lastPage();
				// ---------------------------------------------------------

				//Close and output PDF document
				$pdfmaker=$pdf->Output('invoice.pdf', 'S');
	     	$mail = new PHPMailer();
	     	//$mail->IsSMTP();
	     	$mail->CharSet="UTF-8";
	     	$mail->Host = 'smtp.gmail.com';
	     	$mail->Port = 465;
	     	$mail->Username = 'staywala@gmail.com';
	     	$mail->Password = 'jolzbjazmoletxvb';
	     	$mail->SMTPSecure = 'ssl';
	     	$mail->SMTPAuth = true;
	     	$mail->SMTPDebug = 2;
	     	$mail->From = "staywala@gmail.com";
	     	$mail->FromName = "STAYWALA";
            $mail->AddAddress($email);
            $mail->AddStringAttachment($pdfmaker, 'Filename.pdf');
	     	$mail->AddReplyTo($email,'Information');
	     	$mail->IsHTML(true);
	     	$mail->Subject = "User Verification";
		    
	     	$mail->Body = "Your transaction is successful and the tracking id is'.$tracking_id";			     
		     if(!$mail->Send())
		    {
		    	$mail->ErrorInfo;
		       	echo 'Error occured';
		    }
		    else
		    {
		    	echo 'Success';
		       
		    }
			
// 			$email='staywala@gmail.com';
// 			$name='staywala';
// 			$subject='Staywala';
// 			$message='Your transaction is successful and the tracking id is'.$tracking_id;
//             $mail = mail($h_email, $subject, $message,
//                         "From: ".$name." <".$email.">\r\n"
//                         ."Reply-To: ".$email."\r\n"
//                         ."X-Mailer: PHP/" . phpversion());
//             if($mail)
//             {
//                 echo 'OK';
//             }
//             else
//             {
//                 echo 'Error occured';
//             }
			$_SESSION['hotel_loggin']=$hotel_details;
			$message='Your transaction is successful and the tracking id is'.$tracking_id;
           // echo "<script type='text/javascript'>alert('".$message."');window.location.href ='".$urlHre."';</script>";
           echo '<script>';
           ?>
           alert('<?=$message?>');
            window.location.href ="https://www.staywala.com/admin/addrooms.php";
           <?php
           echo '</script>';
		}
	}
else if($order_status==="Aborted")
	{
	     $login=mysqli_query($conn,"select * from hotel where h_id='$hotel_id'");
		$login_num=mysqli_num_rows($login);
		$hotel_details = mysqli_fetch_assoc($login);
		$h_email=$hotel_details['h_email'];
	    $sql="INSERT INTO plan_transaction(hotel_id,mobile,gst,order_id,tracking_id,amount,trans_date,status) VALUES('$hotel_id','$mobile','$gst','$order_id','$tracking_id','$amount','$date','0')";
	    $query=mysqli_query($conn,$sql);
	    $inst="update hotel set h_plan_type=2 where h_id='$hotel_id'";
		$sql= mysqli_query($conn,$inst);
		$message='Your transaction is Aborted';
           // echo "<script type='text/javascript'>alert('".$message."');window.location.href ='".$urlHre."';</script>";
           echo '<script>';
           echo "";
           ?>
           alert('<?=$message?>');
            window.location.href ="https://staywala.com/plans.php?email='<?=$h_email?>'";
           <?php
           echo '</script>';
     
	    //header("Location: https://www.staywala.com/admin/plans.php?email='$h_email'");
		//echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
    }
	else if($order_status==="Failure")
	{
	    $login1=mysqli_query($conn,"select * from hotel where h_id='$hotel_id'");
		$login_num=mysqli_num_rows($login1);
		$hotel_details = mysqli_fetch_assoc($login);
		$h_email=$hotel_details['h_email'];
		$h_email='$h_email';
	    $inst="update hotel set h_plan_type=2 where h_id='$hotel_id'";
		$sql= mysqli_query($conn,$inst);
	    $sql="INSERT INTO plan_transaction(hotel_id,mobile,gst,order_id,tracking_id,amount,trans_date,status) VALUES('$hotel_id','$mobile','$gst','$order_id','$tracking_id','$amount','$date','0')";
	    $query=mysqli_query($conn,$sql);
	   $message='Oops, Your transaction is Failed';
           // echo "<script type='text/javascript'>alert('".$message."');window.location.href ='".$urlHre."';</script>";
           echo '<script>';
           ?>
           alert('<?=$message?>');
            window.location.href ="https://staywala.com/plans.php?email='<?=$h_email?>'";
           <?php
           echo '</script>';
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
