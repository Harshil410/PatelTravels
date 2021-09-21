<?php

$id = $_GET['id'];
echo $id;
require('connection.php');
$qry="DELETE FROM `tbl_buses` WHERE id=".$id;

mysqli_query($con,$qry);

header('location:manageBus.php');
?>