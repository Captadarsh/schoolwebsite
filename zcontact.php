<?php
include_once 'zdatabase.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['name'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	 $message = $_POST['message'];
	 $sql = "INSERT INTO tetting (name,email,subject,message)
	 VALUES ('$first_name','$email','$subject','$message')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>