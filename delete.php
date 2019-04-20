<?php
include_once("config.php");
$id=$_GET['id'];
$result=mysqli_query($con,"DELETE from resultinfo WHERE id=$id");
header("Location:showdelete.php");

?>