<?php
include('database.inc.php');

if(isset($_POST['fname']) && isset($_POST['dob']) && isset($_POST['gender']) && isset($_POST['class']) && isset($_POST['lastclass'])&& isset($_POST['faname'])&& isset($_POST['moname'])&& isset($_POST['FaOcc'])&& isset($_POST['Mno'])&& isset($_POST['email'])){
	$fname=mysqli_real_escape_string($con,$_POST['fname']);
	$dob=mysqli_real_escape_string($con,$_POST['dob']);
	$gender=mysqli_real_escape_string($con,$_POST['gender']);
	$class=mysqli_real_escape_string($con,$_POST['class']);
	$lastclass=mysqli_real_escape_string($con,$_POST['lastclass']);
	$faname=mysqli_real_escape_string($con,$_POST['faname']);
    $moname=mysqli_real_escape_string($con,$_POST['moname']);
    $FaOcc=mysqli_real_escape_string($con,$_POST['FaOcc']);
    $Mno=mysqli_real_escape_string($con,$_POST['Mno']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
	

	
	if (!mysqli_query($con,"INSERT INTO contact_us_custom(fname,dob,gender,class,lastclass,faname,moname,FaOcc,Mno,email) VALUES('$fname','$dob','$gender','$class','$lastclass','$faname','$moname','$FaOcc','$Mno','$email')")) {
  echo("Error description: " . mysqli_error($con));
}
	mysqli_close($con);
	$html="<table><tr><td>First Name</td>
	<td>$fname</td></tr><tr>
	<td>DOB</td>
	<td>$dob</td></tr><tr>
	<td>Gender</td>
	<td>$gender</td></tr><tr>
	<td>Class</td><td>$class</td></tr>
	
	<tr>
	<td>Last Class</td>
	<td>$lastclass</td></tr>
	
	
	<tr>
	<td>Father Name</td>
	<td>$faname</td></tr>
	<tr>
	<td>Mother Name</td>
	<td>$moname</td></tr>
	<tr>
	<td>Father Occ. </td>
	<td>$FaOcc</td></tr>
	<tr>
	<td>Mobile No. </td>
	<td>$Mno</td></tr>
	<tr>
	<td>Email</td>
	<td>$email</td></tr>
	</table>";
	
	
	
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
