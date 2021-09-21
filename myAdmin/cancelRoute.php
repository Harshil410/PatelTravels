<?php

$id = $_GET['id'];
echo $id;
require('connection.php');
$qry="DELETE FROM tbl_bus_sch WHERE bus_id=".$id;

mysqli_query($con,$qry);

header('location:manageRoute.php');
?>