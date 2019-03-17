<?php 
include("connection.php");
$del="";
if(isset($_GET['del']))
{
	$id=$_GET['del'];
// if(isset($_POST['delete']);
$sql=mysql_query("DELETE FROM rohitp WHERE id = '$id' ");
if($sql)
{
	
	header("location: display.php");
	echo "delete successfully";
}
else
{
	echo "not delete";
}
}
