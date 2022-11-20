<?php
include('connection.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//dasdsa
$sql = "insert into signup (Username,Email,Password) values ('".$username."','".$email."','".$password."')";


	$mailto = $email;
	 $fromemail = $email;
	 $comment = "Welcome to FlyHigh";
	$subject = "Login details by FlyHigh";

	$message = "Login Credentials"."\n\n"
		 . "Username:".$username."\n"
		
		."Email:".$fromemail."\n"
		."Password:".$password."\n";


	$headers = "From: " . $fromemail;

	 

$result = mysqli_query($connect,$sql);


header("Location: Login.html");
if(@mail($mailto,$subject, $message, $headers)){
	echo "successfully send";
}
else{
	echo "Unsuccessful";
}
?>