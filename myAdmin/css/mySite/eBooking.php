<html>
	<head>
		<title>HOME | PATEL TRAVELS</title>
		<link rel="stylesheet" href="css/style_header.css">
	</head>	


<!--   Site's Header with Menu   -->
<div class="mySiteHeader">
	<div class="headerShadow"><span class="shadowHeader"><CENTER>PATEL TRAVELS</CENTER></span></div>
<?php
require('header.php');
?>
</div>

<!--   Site's Content   -->

<div style="background-color:white;margin-top:-55px;background-image:url('02.jpg');fixed;background-position:400% 50%;background-repeat:no-repeat;background-size: 1500px 1000px;">
<center>
	<br><br>
	<br>
	<br>
<?php
if(isset($_POST['checkBs']))
{
	if($_POST['source'] != $_POST['dest'])
	{
		$dt=$_POST['date'];
		$frm=$_POST['source'];
		$to=$_POST['dest'];
?>

<form action="eBooking.php" method="post">
<table>
<tr>
<td>
		<select name="source" style="background-color:transparent" required>
  				<?php
					require('connection.php');
					$qry="SELECT DISTINCT bus_frmCt FROM tbl_bus_sch order by bus_frmCt ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_row($row))
					{
						?><option <?php if($frm==$data[0]) { ?> selected="selected" <?php } ?>><?= $data[0]; ?></option>
					<?php
					}
				?>
		</select>
		<td>	
		<select name="dest" style="background-color:transparent" id="#cmbToCt" required>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT bus_toCt FROM tbl_bus_sch order by bus_toCt ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_array($row))
					{
						?><option <?php if($to==$data[0]) { ?> selected="selected" <?php } ?>><?= $data[0]; ?></option>
					<?php
					}
				?>
		<th>
			<input type="date" id="#txtDt" value="<?php echo $dt; ?>" name="date" min="<?php echo date("Y-m-d", strtotime("+ 0 day")); ?>" placeholder="DD/MM/YYYY" class="indexCal" style="background-color:transparent" required>
		</th>
		<tr>
			<th colspan=3>
				<input type="submit" name="checkBs" value="Check Bus" class="btnCheckBus" style="background-color:transparent">
				</form>
			</th>
		</tr>
	
	</table>
</form>
<br><br><br>
<?php
			require('connection.php');
			$qry="select * from tbl_bus_sch where bus_frmCt='".$frm."' AND bus_toCt='".$to."' AND bus_depTime > '".date("h:i:s")."'";
			$row=mysqli_query($con,$qry)or die(mysql_error());
?>
<?php
			require('connection.php');
			$qry="select * from tbl_bus_sch where bus_frmCt='".$frm."' AND bus_toCt='".$to."'";
			$row=mysqli_query($con,$qry)or die(mysql_error());
?>

<table cellspacing=20 class="tblBusSchedule" style="background-color:cyan">
 <td colspan=8 align=center style="border:4px solid black;background-color:yellow">PLEASE SELECT BUS ROUTE</td>

<tr style="text-align:center;font-size:23px;background-color:silver ">
	<td style="border:1px solid;padding:5px 15px 5px 15px">Date
	<td style="border:1px solid;padding:5px 15px 5px 15px">From City
	<td style="border:1px solid;padding:5px 15px 5px 15px">To city
	<td style="border:1px solid;padding:5px 15px 5px 15px">Departure
	<td style="border:1px solid;padding:5px 15px 5px 15px">Arrival
	<td style="border:1px solid;padding:5px 15px 5px 15px">Available Seats
	<td style="border:1px solid;padding:5px 15px 5px 15px">Fare
	<td style="border:1px solid;padding:5px 15px 5px 15px">Booking
	
</tr>

<?php
	while($data=mysqli_fetch_array($row)){
	
?>
	<tr class="tblSchHover">
	<td><?php echo $dt; ?>
	<td><?= $data[1]; ?>
	<td><?= $data[2]; ?>
	<td><?= $data[3]; ?>
	<td><?= $data[4]; ?>
	<td><?php 
			$qry1="SELECT * FROM `tbl_passenger` WHERE `tickDate` = '".$dt."' AND `fromCity`='".$frm."' AND `toCity`='".$to."' AND `depTime`='".$data[3]."' AND `arrTime`='".$data[4]."'";
			//SELECT * FROM `tbl_passenger` WHERE `tickDate` = '2018-10-04' AND `fromCity`='Jamnagar' AND `toCity`='Rajkot' AND `depTime`='10:00:00' AND `arrTime`='11:30:00'
			//$qry1="SELECT * FROM `tbl_passenger` WHERE `fromCity`='".$frm."' AND `toCity`='".$to."' AND `depTime`='".$data[3]."' AND `arrTime`='".$data[4]."' AND `tickDate`='".$dt."'";
			$row1=mysqli_query($con,$qry1)or die(mysql_error());
			$count=0;
			while(mysqli_fetch_array($row1))
				$count++;
			echo 52-$count;
		?>
	<td><?= $data[5]; ?>
	<th><A href='booking.php?id=<?= $data['bus_id']; ?> & dt=<?= $dt; ?> ' class="bookNw">Book Now!</a>

	</tr>
<?php		
		}
		// close connection; 
		mysqli_close($con);
	}
	else
		header('location:index.php');
}

?>
</table>
<br><br><br>

<?php
require('footer.php');
?>
</div>