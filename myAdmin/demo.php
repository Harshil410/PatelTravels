<html>
<body onload=show()>
<form>
<select id="sel">
<?php
	require('connection.php');
	$qry="select seatNo from `tbl_passenger`";
	$row = mysqli_query($con,$qry);
	while($data=mysqli_fetch_array($row))
	{
		?>
		<option name="opt<?php echo $data[0]; ?>" value="<?php echo $data[0]; ?>"><?php echo $data[0]; ?></option>
		<?php
	}
?>
</select>
</form>
</body>
</html>