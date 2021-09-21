<?php 
	$seatNo = $_GET['seatNo'];
	
	require('connection.php');
	
	$qry="DELETE FROM `tbl_passenger` WHERE seatNo = ".$seatNo;
	$row=mysqli_query($con,$qry);
	
	header('location:cancelTicket.php');
	
?>