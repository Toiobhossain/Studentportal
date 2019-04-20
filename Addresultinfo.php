<?php
include_once("config.php");

if(isset($_POST["submit"]))
{
	$sid=$_POST['SID'];
	$code=$_POST['Code'];
	$title=$_POST['Title'];
	$credit=$_POST['Credit'];
	$grade=$_POST['Grade'];
	$gradepoint=$_POST['Gradepoint'];
	$semester=$_POST['semester'];

	$sql="INSERT INTO resultinfo(student_id,course_code,course_title,credit,grade,gradepoint,semester) values('$sid','$code','$title','$credit','$grade','$gradepoint','$semester')";
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