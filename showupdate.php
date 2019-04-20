<?php
include_once("config.php");
$result=mysqli_query($con,"SELECT * FROM resultinfo order by id asc");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Show student result information</title>
</head>
<body style="background-image: url(ra.jpg);">
	<br>
	<table  width="90%" align="center" style="border-radius: 80px 0px 80px 0px;  background-image: url(green.jpg);color:white;font-size: 35px">
		<tr><th><i>Show all student result information</i></th></tr>
	</table>
	<br>
	<br>
	<center>
<table border="1" style="font-size: 20px;background-image: url(grass.jpg);color:white;">
	<?php
	while($res=mysqli_fetch_array($result))
	{
		echo "<tr><td>".$res['student_id']."</td>";
		echo "<td>".$res['course_code']."</td>";
		echo "<td>".$res['course_title']."</td>";
		echo "<td>".$res['credit']."</td>";
		echo "<td>".$res['grade']."</td>";
		echo "<td>".$res['gradepoint']."</td>";
		echo "<td>".$res['semester']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td></tr>";
	}
	echo "<font size='18'><a href='homepage.html'>Go to Homepage</a>";
	?>
</table>
</center>
</body>
</html>