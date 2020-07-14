<?php
$host="localhost";	 $user = "root";  $pass = "";  
$con = mysqli_connect($host,$user,$pass,"test_database");


$name=$_REQUEST['txtname'];
$family=$_REQUEST['txtfamily'];
$phone=$_REQUEST['txtphone'];
$username=$_REQUEST['email'];
$pwd=$_REQUEST['pwd'];
$job=$_REQUEST['seljob'];
$loc=$_REQUEST['selloc'];
$x=$_REQUEST['x'];
$y=$_REQUEST['y'];
$descr=$_REQUEST['desc'];


$query = "insert into tblperson (perName,perFamily,perPhoneNumber,perUserName,perPwd,description,jobId,locationId,x,y) values ('$name','$family','$phone','$username','$pwd','$descr',$job,$loc,$x,$y)";
$result = mysqli_query($con, $query);

echo "success";
?>