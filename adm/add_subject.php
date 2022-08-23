<?php
include('connect.php');

$subject=$_POST['subject'];

$sql="INSERT INTO subject(subject)VALUES('$subject') ";
$result=mysql_query($sql);

if($result){
	echo "<script>alert('You have Add a Subject Successfully!');</script>";
	echo "<script>window.open('index.php','_self');</script>";
}



?>