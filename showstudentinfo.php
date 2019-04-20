<?php
include_once("config.php");
$result=mysqli_query($con,"SELECT * FROM studentdata order by id asc");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Show student information</title>
</head>
<body style="background-image: url(ra.jpg);">
	<table  width="90%" align="center" style="border-radius: 80px 0px 80px 0px;  background-image: url(green.jpg);color:white;font-size: 35px">
		<tr><th><i>Show all student information</i></th></tr>
	</table>
	<br>
	<br>
	<center>
<table border="1" style="font-size: 20px;background-image: url(grass.jpg);color:white;">
	<?php
	while($res=mysqli_fetch_array($result))
	{
		echo "<tr><td>".$res['Name']."</td>";
		echo "<td>".$res['SID']."</td>";
		echo "<td>".$res['Pname']."</td>";
		echo "<td>".$res['Batch']."</td>";
		echo "<td>".$res['Enrollment']."</td></tr>";
	}
	?>
</table>
</center>
</body>
</html>