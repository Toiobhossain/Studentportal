<?php
include_once("config.php");

if(isset($_POST["submit"]))
{
	
	$name=$_POST['Name'];
	$sid=$_POST['SID'];
	$pname=$_POST['Pname'];
	$batch=$_POST['Batch'];
	$enrollment=$_POST['Enrollment'];

	$sql="INSERT INTO studentdata(Name,SID,Pname,Batch,Enrollment) values('$name','$sid','$pname','$batch','$enrollment')";
	if(mysqli_query($con,$sql))
	{
		echo 'data is successfully added';
	}
	else
	{
		echo 'data is not added';
	}
}
?>