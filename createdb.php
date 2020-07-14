<?php
$host="localhost";	 $user = "root";  $pass = "";  
$con = mysqli_connect($host,$user,$pass);
$db=mysqli_select_db($con,"test_database1");

if(empty($db))
{
	echo ("database not found");
	$query = "create database test_database1"; 
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));
	
	$con = mysqli_connect($host,$user,$pass,"test_database1");
	
	$query ="create table tblJob(jobId int( 4 ) primary key auto_increment, jobName varchar(20))";
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));;
	
	$query = "insert into  tblJob (jobName) values 	('electronics'),  ('furniture'), ('informatics')";
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));
	
	$query ="create table tblPerson(perId int( 4 ) primary key auto_increment, perName varchar(20), perFamily varchar(20), perPhoneNumber varchar(20), perUserName varchar(35), perPwd varchar(20),description varchar(300), jobId int(4), locationId int(4), x double, y double)";
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));

	$query = "insert into  tblPerson (perName,perFamily,perPhoneNumber,perUserName,perPwd,description,jobId,locationId,x,y) values 	('ali','hamdan','03-503066','ali_hamdane@hotmail.com','112233','nothing to dipsplay',1,1,35.56987,39.666666)";
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));			
	
	$query ="create table tblLocation(locId int( 4 ) primary key auto_increment, locName varchar(20))";
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));
	
	$query = "insert into  tblLocation (locName) values 	('beirut'),  ('tyr'), ('saida')";
	$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));
}
	
else
$con = mysqli_connect($host,$user,$pass,"test_database1");

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>