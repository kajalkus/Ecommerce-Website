<?php
error_reporting();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="mk";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_POST['password1'];
 
$sql="INSERT INTO register1(name,email,password,password1) VALUES('$a','$b','$c','$d')";

if ($conn->query($sql)===true) {
	


}
else{
	echo "error". $conn->error;
}

$conn->close();

?> 
