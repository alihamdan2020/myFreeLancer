<?php
$host="localhost";	 $user = "root";  $pass = "";  
$con = mysqli_connect($host,$user,$pass,"test_database");

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$query = "select * from tbllocation";
$result = mysqli_query($con, $query);

$count=0;
$arr = array();  
while($row = mysqli_fetch_assoc($result))
{$arr[] = $row;}
echo json_encode($arr);

?>