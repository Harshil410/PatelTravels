<!DOCTYPE html>
<html lang="en">
<head>
<title>Patel Travels | Admin Panel</title>
	<link rel="shortcut icon" href="LOGO.jpg">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #1a75ff;
    overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
    color: white;
    padding: 16px;
    text-decoration: none;
    display: block;
}

/* Change color on hover */
.sidenav a:hover {
    background-color: white;
    color: black;
}

/* Style the content */
.content {
    margin-left: 200px;
    padding-left: 20px;
}

.myHead{
	font-family:verdana;
	font-size:50px;
	color:white;
	text-shadow:1px 1px 10px blue;
}

span{
	font-family:verdana;
	font-size:15px;
	color:red;
	border:1px solid blue;
	padding:5px 10px 5px 10px;
}
</style>
</head>
<body style="background-image:url('InShot_2010080909_195556932.jpg');fixed center;background-repeat:no-repeat;background-size: 700px 7s00px;background-position: center;">
<?php
	session_start();
	if(isset($_SESSION['txtUser']))
	{
		echo "<br> <a href='logout.php'>Logout</a>";
	}
	else
	{
		echo "<script>location.href='login.php'</script>";
	}
?>

		<?php
		require('header.php');
		?>
<br>
<div class="content">

<h1><CENTER>SCHEDULES </h1><hr>
	<form action="" method="post">
	<table>
	<tr>
		<td>
		<select name="source" style="padding:8px 109px 8px 10px" required>
  				<option value="">From City</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT bus_frmCt FROM tbl_bus_sch order BY `bus_frmCt` ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_array($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>
		<tr>
		<td>
			<select name="dest" style="padding:8px 93px 8px 10px">
				<option value="">To City</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT bus_toCt FROM tbl_bus_sch order BY `bus_toCt` ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_array($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>
		<tr>
			<td>
			<input type="date" name="date" min="<?php echo date("Y-m-d", strtotime("+ 0 day")); ?>" placeholder="DD/MM/YYYY" style="padding:5px 46px 5px 10px">
			</td>
		</tr>
		<tr>
			<td>
				<br>
				<input type="submit" name="checkBs" value="Check Bus" style="font-size:15px;color:blue;background-color:white;border:1px solid black;padding:6px 10px 6px 10px">
				<a href="manageRoute.php"><input type="button" value="Add or Cancel Route"  style="font-size:15px;color:blue;background-color:white;border:1px solid black;padding:6px 10px 6px 10px"></a>
				</form>
			</td> 
		</tr>

		<tr></tr>

		</div>
	</table>
	
	<br><br>
	
	<div>
	<?php
		if(isset($_POST['checkBs']))
		{
			$frm=$_POST['source'];
			$to=$_POST['dest'];
			$dt=$_POST['date'];
			require('connection.php');
			$qry="select * from tbl_bus_sch where `bus_frmCt`='".$frm."' AND `bus_toCt`='".$to."' order BY `bus_frmCt` ASC";
			$row=mysqli_query($con,$qry)or die(mysql_error());
			?>
			<table cellspacing=5 cellpadding=5 style="border:1px solid;background-color:#dfe3ee">
				
			<td colspan=7 align=center style="border:1px solid black;background-color:#f7f7f7"">CHECK BUS HEAR</td>
			<tr style="background-color:silver">
				<td align="center" valign="center" style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Date
				<td align="center" valign="center" style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">From City
				<td align="center" valign="center" style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">To city
				<td align="center" valign="center" style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Departure
				<td align="center" valign="center" style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Arrival
				<td align="center" valign="center" style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Available Seats
				<td align="center" valign="center" style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Fare
			</tr>

			<?php
				while($data=mysqli_fetch_array($row)){
				
			?>
				<tr class="showBus">
				<td align="center" valign="center" ><?php echo $dt; ?>
				<td align="center" valign="center"><?php echo $data[1]; ?>
				<td align="center" valign="center"><?php echo $data[2]; ?>
				<td align="center" valign="center"><?php echo $data[3]; ?>
				<td align="center" valign="center"><?php echo $data[4]; ?>
				<td align="center" valign="center"><?php 
						//$qry1="SELECT * FROM `tbl_passenger` WHERE `fromCity`='".$frm."' AND `toCity`='".$to."' AND `depTime`='".$data[3]."' AND `arrTime`='".$data[4]."'";
						
						$qry1="SELECT * FROM `tbl_passenger` WHERE `fromCity`='".$frm."' AND `toCity`='".$to."' AND `depTime`='".$data[3]."' AND `arrTime`='".$data[4]."' AND `tickDate`='".$dt."'";
						$row1=mysqli_query($con,$qry1)or die(mysql_error());
						$count=0;
						while(mysqli_fetch_array($row1))
							$count++;
						echo 52-$count;
					?>
				<td align="center" valign="center"><?php echo $data[5]; ?>
				</tr>	
			<?php		
				}
				// close connection; 
				mysqli_close($con);
			}
			?>
	</div>
	
	</div>

</body>
</html>
