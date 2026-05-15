<?php
include('database.inc.php');

if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
	$fname=mysqli_real_escape_string($con,$_POST['first_name']);
	$lname=mysqli_real_escape_string($con,$_POST['last_name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['phone']);
	$comment=mysqli_real_escape_string($con,$_POST['message']);
	

	
	if (!mysqli_query($con,"INSERT INTO contact_us_custom(fname,lname,email,mobile,msgs1) VALUES('$fname','$lname','$email','$mobile','$comment')")) {
  echo("Error description: " . mysqli_error($con));
}
	mysqli_close($con);
	$html="<table><tr><td>First Name</td><td>$fname</td></tr><tr><td>Last Name</td><td>$lname</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Comment</td><td>$comment</td></tr></table>";
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP(true);
	$mail->Host="smtp.hostinger.com";
	$mail->Port=465;
	$mail->SMTPSecure="ssl";
	$mail->SMTPAuth=true;
	$mail->Username="info@ypsss.in";
	$mail->Password="Aayush@9";
	$mail->SetFrom("info@ypsss.in");
	$mail->addAddress("info@ypsss.in");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;


}
?>



<?php include('head.php');?>
<?php include('header.php');?>
    
    <h1 style="text-align: center;"><strong><br /><br />Thank you! for contacting us.</strong><br /><br /></h1>
<p style="text-align: center;"><strong>We will contact you soon!</strong></p>
    
    <?php include('footer.php');?>




    <?php include('footer.php');?>