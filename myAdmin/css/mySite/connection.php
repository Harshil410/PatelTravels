<?php

$con=mysqli_connect('localhost','root','');
if(!$con)
	mysql_error();

$db=mysqli_select_db($con,"travel");
if(!$db)
	mysql_error();

?>