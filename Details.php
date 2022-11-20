<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detail Page</title>
    <link rel="stylesheet" href="styleL.css">
    <link rel="stylesheet" href="stylePC.css">
    <link rel="stylesheet" href="style_.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
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
  <body>
    <div class="center">
      <h1 style="color: #151B54;">Passenger Details</h1>
      <?php

  
  $iterations1 = $_POST['Passenger1'];
  $iterations2 = $_POST['Passenger2'];
  
  $from=$_POST['from'];
  $to=$_POST['to'];
  $Ddate=$_POST['Ddate'];
  $class=$_POST['Class'];
  
  
  $airpno=$_POST['Flight_No'];  /*if airpno= AI 233 ,, making it AI_233*/
  $delimiter = ' ';
  $words = explode($delimiter, $airpno);
  $airpno_1=$words[0];
  $airpno_2=$words[1];
  $airpno=$airpno_1."_".$airpno_2;
  
  
  echo '
  <form action = "index1_.php"  method="post">
    <br>
    <input placeholder="Email for correspondence..." type="text" name="email" id="email" required>
    <input placeholder="telephone..." type="text" name="telephone" id="telephone" required>
    <input type="hidden" value='.($iterations1+$iterations2).' name="people" id="people">
    <input type="hidden" value='.$iterations1.' name="iterations1" id="iterations1">
    <input type="hidden" value='.$iterations2.' name="iterations2" id="iterations2">
    <input type="hidden" value='.$from.' name="from" id="from">
    <input type="hidden" value='.$to.' name="to" id="to">
    <input type="hidden" value='.$Ddate.' name="Ddate" id="Ddate"><br>
    <input type="hidden" value='.$class.' name="class" id="class"><br>    
    <input type="hidden" value='.$airpno.' name="airpno" id="airpno"><br>
    
  ';

  for($i = 1; $i<=$iterations1; $i++)
{   
  echo '
  <div class="tab">Adult Passenger '.$i.' :<br>
    <input placeholder="First name..." name="person['.$i.'][first_name]" >
    <input placeholder="Last name..." name="person['.$i.'][last_name]">
  </div><br>';  
      
}
for($i = $iterations1+1; $i<=$iterations2+$iterations1; $i++)
{   
  echo '
  <div class="tab">Senior/Women Passenger '.($i-$iterations1).' :<br>
    <input placeholder="First name..." name="person['.$i.'][first_name]" >
    <input placeholder="Last name..." name="person['.$i.'][last_name]">
  </div><br>';  
      
}
  echo '
    <input type="submit" value="Confirm Ticket" name="submitbutton">
  </form>
  ';


?>
<br>
</div>
    <script src="script1.js"></script>
  </body>
</html>