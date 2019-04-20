<?php
 $server="localhost";
 $dbname="diuportal";
 $dbuser="root";
 $dbpass="";
 $con=mysqli_connect($server,$dbuser,$dbpass,$dbname);
 if($con)
 {
 	echo ' ';
 }
 else
 {
 	echo 'faild to databased with connect';
 }
?>