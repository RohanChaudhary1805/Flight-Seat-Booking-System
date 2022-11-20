<html>

<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "project";

$conn = new mysqli($server,$username,$password,$db);

session_start();
$_SESSION['username'] = $_POST['username'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM signup";
$results=mysqli_query($conn,$query);
$row_count=mysqli_num_rows($results);
$row_users = mysqli_fetch_array($results);

$sql = "SELECT username,password FROM signup";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $a=0;
  while($row = $result->fetch_assoc()) {
    if( $row["username"] == $username && $row["password"] == $password ){
      $a=1;
      header("Location: Main.html");
    }
  }
  if($a==0){
    header("Location: LoginAlert.html");
  }
} else {
  header("Location: LoginAlert.html");
}
$conn->close();
// $result = mysqli_query($connect,$sql);

?>
</body>
</html>