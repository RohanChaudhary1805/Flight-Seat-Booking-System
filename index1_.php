<html>
<head>
	<link rel="stylesheet" type="text/css" href="ava.css">
	<title>CONFIRMATION FORM</title>
</head>
<nav class="navbar container">
    <div class="navbar__logo">
      <h1>FlyHigh</h1>
    </div>
    <!-- <img src="logowings.png" alt="Error"> -->

    <div class="navbar__nav">
      <ul class="navbar__menu">
        <li class="navbar__item"><a href="Main.html" class="navbar__link">Home</a></li>
        <li class="navbar__item"><a href="about.html" class="navbar__link">About</a></li>
      </ul>
    </div>

  </nav>
<style >
body{
	background-image: linear-gradient(to bottom right, red , blue);
}

</style>
<body>


	<br><br>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="hidden" value="<?php echo $_POST['people']; ?>" name="people" id="people">
		<input type="hidden" value="<?php echo $_POST['email']; ?>" name="email" id="email">
		<input type="hidden" value="<?php echo $_POST['telephone']; ?>" name="telephone" id="telephone">
		<input type="hidden" value="<?php echo $_POST['from']; ?>" name="from" id="from">
		<input type="hidden" value="<?php echo $_POST['to']; ?>" name="to" id="to">
		<input type="hidden" value="<?php echo $_POST['Ddate']; ?>" name="Ddate" id="Ddate">
		<input type="hidden" value="<?php echo $_POST['class']; ?>" name="class" id="class">
		<input type="hidden" value="<?php echo $_POST['airpno']; ?>" name="airpno" id="airpno">
<?php
	$iterations =$_POST['people'];

	$arr=$_POST['person'];
	for($i = 1; $i<=$iterations; $i++)
{
	echo '
		<input type="hidden" value= '.$arr[$i]["first_name"].' name="person['.$i.'][first_name]" >
		<input type="hidden" value= '.$arr[$i]["last_name"].' name="person['.$i.'][last_name]" >
	';
}
	echo'
		<input type="hidden" value='.$iterations.' name="no" >
	';
?>
	</form>


</body>
</html>
<?php
	{

		$arr=$_POST['person'];

		$iterations=$_POST['people'];
		$iterations1=$_POST['iterations1'];
		$iterations2=$_POST['iterations2'];

		$names='';
		for($i = 1; $i<=$iterations; $i++)
		{
			if ($i==$iterations){
				$names.=$arr[$i]["first_name"]." ".$arr[$i]["last_name"]." "."=> Seat Number = ".($i)."."."<br>";
			}
			else{
				$names.=$arr[$i]["first_name"]." ".$arr[$i]["last_name"]." "."=> Seat Number = ".($i).","."<br>";

			}
		}

		$contactno=$_POST['telephone'];
		$from=$_POST['from'];
		$to=$_POST['to'];
		$Ddate=$_POST['Ddate'];
		$class=$_POST['class'];
		$airpno=$_POST['airpno'];

/*email part*/
		$headers = "From: FlyHigh.com\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

		$email_to = $_POST['email'];
		$email_subject = "Ticket Confirmation";


		$body="
		<html>
			<head>

				<h2 style='margin-left:70px'> FlyHigh </h2><br>
				<h3 style='color:red'>Your ticket details are given below:</h3>
			</head>
			<body>
				<div style='color:blue'>
				<p> From : $from</p>
				<p> To : $to</p>
				<p> Date of Departure : $Ddate</p>
				<p> class : $class</p>
				<p> Airplane number : $airpno</p>
				<p> Passenger name(s):<br> $names</p>
				<p> Primary contact number : $contactno</p>
				</div>
				<br>
				<p style='color:green'>We wish you a happy flight!</p>
			</body>
		</html>
		";

		if( mail($email_to, $email_subject, $body, $headers) ) {
			echo "
		<div class='center'>
			<div class='content'>
				<div class='header'>
					<h2>CONGRATULATIONS!</h2>
					<hr>
				</div><br>
				<img src='5.jpg'>
				<p>You have successfully booked your ticket </p>
				<div class='line'></div>
				<hr>
				<p1 style='color:#151B54'>The ticket has been mailed to you at $email_to</p1>
			</div>
		</div>";

		}
		else {
			echo "
		<div class='center'>
			<div class='content'>
				<div class='header'>
					<h2>CONGRATULATIONS!</h2>
					<hr>
				</div>
				<img src='aeroplane.jfif.jpg'>
				<p>You have successfully booked your ticket </p>
				<div class='line'></div>
			</div>
		</div>";

		}


/*Database entry part*/
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "INSERT INTO passengers (names,Airpno,DDate,phone,email,class)
	VALUES ('$names','$airpno','$Ddate','$contactno','$email_to','$class')";

	mysqli_query($conn, $sql);
	/* Flights details database updation part. (Reducing the number of seats in the database when a ticket gets booked)	*/

	/*Changing flight no from form: AI_200 to AI 200  so that it matches with the databse form*/
	$delimiter = '_';
	$words = explode($delimiter, $airpno);
	$airpno_1=$words[0];
	$airpno_2=$words[1];
	$airpno=$airpno_1." ".$airpno_2;
	$rclass='R'.$class;
	$tclass='T'.$class;

	$sql = "UPDATE flights SET $class =$class-$iterations1,	$rclass =$rclass-$iterations2,$tclass =$tclass-$iterations where Dep_Date='$Ddate' and Flight_No='$airpno'";

	mysqli_query($conn, $sql);
	mysqli_close($conn);

	}
?>
