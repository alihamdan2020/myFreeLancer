<?php
$host="localhost";	 $user = "root";  $pass = "";  
$con = mysqli_connect($host,$user,$pass);
/*
$db=mysqli_select_db($con,"test_database");

if(empty($db))
{
	echo ("database not found");
	$query = "create database test_database"; 
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));
	
	$con = mysqli_connect($host,$user,$pass,"test_database");
	
	$query ="create table tblJob(jobId int( 4 ) primary key auto_increment, jobName varchar(20))";
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));;
	
	$query ="create table tblPerson(perId int( 4 ) primary key auto_increment, perName varchar(20), perFamily varchar(20), perPhoneNumber varchar(20), perUserName varchar(35), perPwd varchar(20),description varchar(300), jobId int(4), locationId int(4), x double, y double)";
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));;

	$query ="create table tblLocation(locId int( 4 ) primary key auto_increment, locName varchar(20))";
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));;
}
	
else
*/
$con = mysqli_connect($host,$user,$pass,"test_database");

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$user=$_REQUEST['email'];
$pwd=$_REQUEST['pwd'];
$act=$_REQUEST['actn'];

if($act=='login')
$query = "select * from tblperson where perUserName='".$user."' and perPwd='".$pwd."'";
else
$query = "select * from tblperson where perUserName='".$user."'";	


$result = mysqli_query($con, $query);

$count=0;
while($row = mysqli_fetch_assoc($result))
$count=$count+1;

echo $count;


?>