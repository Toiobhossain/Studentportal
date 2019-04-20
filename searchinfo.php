
<!DOCTYPE html>
<html>
<head>
	<title>Show student result information</title>
	<style type="text/css">
		input{
			width: 280px;
			height: 30px;
			margin-bottom: 1px solid #fff;
		}
	</style>
</head>
<body style="background-image: url(ra.jpg);">
	<br>
	<table  width="90%" align="center" style="border-radius: 80px 0px 80px 0px;  background-image: url(green.jpg);color:white;font-size: 35px">
		<tr><th><i>Search to Student ID</i></th></tr>
	</table>
	<br>
	<br>
	<form action="searchinfo.php" method="post">
		<input type="text" name="sid" placeholder="Search ID" required><br><br>
		<input type="submit" name="search" value="search">
	</form>
	<table border="1">
	<?php
include_once("config.php");
if(isset($_POST["search"]))
{
	$sid=$_POST["sid"];
$result=mysqli_query($con,"SELECT * FROM studentdata WHERE SID=$sid");
$row = mysqli_fetch_assoc($result);

if(!empty($row) && is_array($row))
{
	/*$_SESSION['ID']=$row['ID'];
	//var_dump($_session['ID']);
	header('Location:show.php');*/
	echo "successfull";
}
else
{
	echo "not successfull";
}

/*while($res=mysqli_fetch_array($result))
	{
		echo "<tr><td>".$res['Name']."</td>";
		echo "<td>".$res['SID']."</td>";
		echo "<td>".$res['Pname']."</td>";
		echo "<td>".$res['Batch']."</td>";
		echo "<td>".$res['Enrollment']."</td></tr>";
		
		
	}*/
}
?> 
</table>
</body>
</html>
