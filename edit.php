<?php
include_once("config.php");
$id=$_GET['id'];
$result=mysqli_query($con,"SELECT * FROM resultinfo WHERE id=$id");
while($res =mysqli_fetch_array($result))
{
	$sid=$res['student_id'];
	$ccode=$res['course_code'];
	$ctitle=$res['course_title'];
	$credit=$res['credit'];
	$grade=$res['grade'];
	$gradepoint=$res['gradepoint'];
	$semester=$res['semester'];
}

?>
<form ation="edit.php" method="post">
<input type="text" name="student_id" value="<?php echo $sid;?>"/>
<input type="text" name="course_code" value="<?php echo $ccode;?>"/>
<input type="text" name="course_title" value="<?php echo $ctitle;?>"/>
<input type="text" name="credit" value="<?php echo $credit;?>"/>
<input type="text" name="grade" value="<?php echo $grade;?>"/>
<input type="text" name="gradepoint" value="<?php echo $gradepoint;?>"/>
<input type="text" name="semester" value="<?php echo $semester;?>"/>
<input type="text" name="id" value="<?php echo $id;?>"hidden/>
<input type="submit" name="update" value="update"/>
</form>
<?php
if(isset($_POST["update"]))
{
	$sid=$_POST['student_id'];
	$ccode=$_POST['course_code'];
	$ctitle=$_POST['course_title'];
	$credit=$_POST['credit'];
	$grade=$_POST['grade'];
	$gradepoint=$_POST['gradepoint'];
	$semester=$_POST['semester'];
	$sql=mysqli_query($con,"update resultinfo SET student_id='$sid',course_code='$ccode',course_title='$ctitle',credit='$credit',grade='$grade',gradepoint='$gradepoint',semester='$semester' WHERE id=$id");
	header("Location:showupdate.php");
}
?>