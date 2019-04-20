
<!DOCTYPE html>
<html>
<head>
	<title>Show student result</title>
</head>
<body style="background:url(be.jpg);padding:30px" >
   <table align="center" width="100%" style=" border-radius: 20px 20px 20px 20px;  margin-bottom: 1px solid #fff;font-size: 30px; background:url(ra.jpg);">
   	<tr><th>Academic result</th></tr>
   </table>
   <table>
   	<br>
   <form action="Showresult.php" method="post">
   	<input type="text" placeholder="Student ID " name="studentid" required style="background-color: powderblue;color:black; width: 270px;font-size: 20px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	<select name="Selectsemester" style="background-color: powderblue;color:black;width: 270px;font-size: 20px; margin-bottom: 1px solid #fff;">
   		<option value="a">Select semester---</option>
   		<option value="Spring-2017">Spring-2017</option>
   		<option value="Summer-2017">Summer-2017</option>
   		<option value="Fall-2017">Fall-2017</option>
   		<option value="Spring-2018">Spring-2018</option>
   		<option value="Summer-2018">Summer-2018</option>
   		<option value="Fall-2018-2017">Fall-2018-2017</option>
   		<option value="Spring-2016">Spring-2016</option>

   	</select>
   	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	<input type="submit" name="showresult" value="Show Result" style="border-radius: 20px 20px 20px 20px; font-size: 24px;background-color: orange; color:black; margin-bottom: 1px solid">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="image">
	<img src="logo.jpg" alt="diu logo" width="50" height="50" style="border-radius: 50%">
   </form>
</table>
<hr>
<h1>Student Info</h1>
   <hr>
<?php
include_once("config.php");
if(isset($_POST["showresult"]))
{
   $id=$_POST['studentid'];
   $re=mysqli_query($con,"SELECT * FROM studentdata WHERE SID='$id'");
while($res = mysqli_fetch_array($re))
               {
                  $all[] = $res;}
                  foreach ($all as $res ) {
                     ?> 
<table align="left" style="font-size: 28px;color: white;">
   <div style="float: left;">
<tr><td>Program: <?php echo $res['Pname'];?> </td></tr><br>
<tr></tr>
<tr><td>Name of Student: <?php echo $res['Name']; ?></td></tr><br>
<tr></tr>
<tr><td>Student Id: <?php echo $res['SID']; ?></td></tr><br>
<tr></tr>
<tr><td>Enrollment: <?php echo $res['Enrollment']; ?></td></tr>
<tr></tr>
<tr><td>Batch: <?php echo $res['Batch']; ?></td></tr>
</div>
                   <?php
                  }
}
?>
<div style="float: right;">
   <img src="grade.png" alt="grade image" width="350" height="360">
</div>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
</body>
</html>
<center>
<table border="1" width="80%" style="font-size: 24px;background-color: white;"> <tr style="background-color: red;"><th>Course code</th><th>Course title</th><th>Credit</th><th>Grade</th><th>Gradepoint</th>
<?php
include_once("config.php");
If(isset($_POST["showresult"]))
{
$sid=$_POST['studentid'];
$semester=$_POST['Selectsemester'];
   $result=mysqli_query($con,"SELECT * FROM resultinfo WHERE student_id='$sid' and semester='$semester'");
   while($res = mysqli_fetch_array($result))
               {
      
     echo "<tr><td>".$res['course_code']."</td>";
     echo "<td>".$res['course_title']."</td>";
     echo "<td>".$res['credit']."</td>";
     echo "<td>".$res['grade']."</td>";
     echo "<td>".$res['gradepoint']."</td></tr>";
   }
   
}

?>
</table>
</center>