  <?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	$fname=$_POST['firstname'];
	$surname=$_POST['surname'];
	$pass=$_POST['Password'];
	$enpass=md5($pass);
	$email=$_POST['Email'];
	$occu=$_POST['Occupation'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];

	$sql="INSERT INTO reuser(fname,lname,password,email,occupation,gender,dob) values('$fname','$surname','$enpass','$email','$occu','$gender','$dob')";
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