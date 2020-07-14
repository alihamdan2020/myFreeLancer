<?php
$host="localhost";	 $user = "root";  $pass = "";  
$con = mysqli_connect($host,$user,$pass);
$con = mysqli_connect($host,$user,$pass,"test_database");

$query = "select perId,perName,perFamily,perUserName,perPhoneNumber,x,y,locName,jobName,description from tblperson,tbljob,tbllocation where tblperson.jobId=tbljob.jobId and tblPerson.locationId=tbllocation.locId ";	


$result = mysqli_query($con, $query);

$arr = array();  

while($row = mysqli_fetch_assoc($result))
{$arr[] = $row;}
echo json_encode($arr);



?>