
                
<?php
	if(isset($_POST['submit'])){
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$to='munnakthr@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
	
		$message="First Name :".$first_name."\n"."Last Name :".$last_name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h2>Sent Successfully! Thank you"." ".$first_name." ".$last_name.", We will contact you shortly!</h2>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
                	
			  
            </div>
            
        </div>
    </div>
</div>

?>











