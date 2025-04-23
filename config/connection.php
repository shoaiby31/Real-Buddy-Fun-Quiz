<?php
ob_start();
session_start();
$connect=mysqli_connect("localhost","root","");
$dbname=mysqli_select_db($connect,"fbquiz");
if(isset($connect) && isset($dbname))
{
	
}
else
{
	echo"Database is not connected sucessfully";
}
?>
