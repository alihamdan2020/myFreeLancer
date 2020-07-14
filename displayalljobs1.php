<?php
$host="localhost";	 $user = "root";  $pass = "";  
$con = mysqli_connect($host,$user,$pass);
$con = mysqli_connect($host,$user,$pass,"test_database");
//$xx=$_REQUEST['x'];
//$yy=$_REQUEST['y'];
$x1=33.8686715;
$y1=35.496377;

$query = "select perId,perName,perFamily,perUserName,perPhoneNumber,x,y,locName,jobName,description from tblperson,tbljob,tbllocation where tblperson.jobId=tbljob.jobId and tblPerson.locationId=tbllocation.locId and (x>=".($x1-0.001)." and x<=".($x1+0.001).") and (y>=".($y1-0.001)." and y<=".($y1+0.001).")" ;	


$result = mysqli_query($con, $query);

$arr = array();  

while($row = mysqli_fetch_assoc($result))
{$arr[] = $row;}
echo json_encode($arr);



?>