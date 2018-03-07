<?php

$con = mysqli_connect("localhost","root","","bookstore");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$First = $_POST['firstname'];
$Last = $_POST['lastname'];
$Userid = $_POST['Userid'];
$Password = $_POST['password'];
$Cpassword = $_POST['Cpassword'];

$sql="INSERT INTO customer (Firstname, Lastname, Username, Password) VALUES ( '$First' , '$Last' , '$Userid' ,'$Password')";

$result=mysqli_query($con,$sql);
if($result)
	echo "New record";
else
	echo "Failed";
	

?>