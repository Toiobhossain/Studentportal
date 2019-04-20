<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$enpass=md5($pass);
	$res=mysqli_query($con,"SELECT * FROM reuser WHERE email='$email' and password='$enpass'");
	$row=mysqli_fetch_assoc($res);
	if(!empty($row) && is_array($row))
	{
		header("Location:homepage.html");
	}
	else
	{
		echo 'invalid username and password!please try again';
	}
}
?>