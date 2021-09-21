<html>
	<head>
		<title>Cancel Ticket | PATEL  TRAVELS</title>
		<link rel="stylesheet" href="css/style_header.css">
	</head>	



<!--   Site's Header with Menu   -->
	<div class="mySiteHeader">
		<div class="headerShadow"><span class="shadowHeader"><center>PATEL TRAVELS</center></span></div>

		<?php
		require('header.php');
		?>
		</div>
	</div>
<!--   Site's Content   -->
<center>
<div style="background-color:white;margin-top:-55px;background-image:url('InShot_20180909_195556932.jpg');fixed;background-position:540% 50%;background-repeat:no-repeat;background-size: 1500px 1000px;">
	<BR><BR><BR><BR>
	<table border="0" cellspacing=10 cellpadding=5 style="border:1px dotted blue">
	<form method = "post">
	<tr>
	<th><span style="font-family:arial;font-size:25px;">Ticket Cancel</span></th>
	</tr>
		<tr><td colspan=10>  <input type="text" name="txtContact"  placeholder="Contact No." class="indexCal" id="#t1" style="background-color:transparent" required></td></tr>
		<tr><td colspan=10>  <input type="email" name="txtMail"  placeholder="Email" class="indexCal" id="#t2" style="background-color:transparent" required></td></tr>
		<tr></tr><td><input type="submit" name="cancelTicket" value="Cancel" class="btnCheckBus" style="background-color:transparent"></td>
	</table>
	</form>
	<BR><BR> 

		<?php 
		
		if(isset($_POST['cancelTicket']))
		{
			$no=$_POST['txtContact'];
			$eml=$_POST['txtMail'];
			require('connection.php');
			$qry="SELECT * FROM tbl_passenger WHERE mobileNo=".$no." AND email='".$eml."'";
			$row=mysqli_query($con,$qry);
			if(mysqli_affected_rows($con))
			{
				$count=0;
				$tblCount=0;
				$nameCount=0;
				while($data=mysqli_fetch_array($row))
				{
					$count=1;
					$tblCount++;
					$nameCount=0; 
					if($count == 1)
					{
						
						if($tblCount == 1)
						{
		?>
							<table border=0 cellspacing=8 cellpadding=5 style="border:1px solid black">
							<tr>
								<td colspan=7 align=center style="font-family:verdana;font-size:18px;border:1px solid black;background-color:cyan"> -: Passenger Information :-</td>
							</tr>
							<tr>
							<td></td>
							</tr>
							<tr style="font-family:verdana;font-size:15px;color:blue">
							<td colspan=4><b>Passenger Name</b></b>
							<td><b>Contact No</ub></b>
							<td colspan=2><b>Email</b>
				
								<tr>
								<td colspan=4><?php if($nameCount == 0) echo $data[8]; ?></td>
								<td><?php if($nameCount == 0) echo $data[9]; ?></td>
								<td colspan=2><?php if($nameCount == 0) { echo $data[10]; $nameCount++; } ?></td>
								</tr>
						<?php 
						if($tblCount == 1)
						{ ?>
					
						<tr><td colspan=7><hr> </td></tr>
						<tr style="font-family:verdana;font-size:15px;color:blue">
							<td><b>Selection</td>
							<td><b>SeatNo</b></b>
							<td><b>From City</b></b>
							<td><b>To City</b></b>
							<td><b>Payment Option</b></b>
							<td><b>Fare Paid</b></b>
							<td><b>Cancel</b></b> 
					
						</tr>
						<?php  } ?>
					<?php } ?>
		<tr>
			<td align="center" >
			<form action=tickCancel.php method=post>
				<input type="checkbox" name="myCheck[]" id="checkItem" title="<?php echo $data[2]; ?>" VALUE="<?php echo $data[2]; ?>"></td>
			<td><?php echo $data[2]; ?></td>
			<td><?php echo $data[4]; ?></td>
			<td><?php echo $data[5]; ?></td>
			<td><?php echo $data[11]; ?></td>
			<td><?php echo $data[12]; ?></td>
			<td><a href="ticketCancel.php?seatNo=<?php echo $data[2]; ?>" style="text-decoration:none;color:red"><u><a href="login.php">Cancel!</a></u></a></td>
		<?php		
					}
				} //While Loop End
		?>
		
			<tr>
			<td colspan=7 align="center">
				<br>
				
				<input type="submit" name="cancelAll" value="Cancel Checked Seats" style="font-family:verdana;font-size:15px;color:red;padding:5px 10px 5px 10px;border:1px solid blue">
				</form>
				
				
			</td>
		</tr>
		</table>
		<?php	
			}
			else
				echo "<script>alert('Ticket Not Found for Given Information...');</script>";
		}
		?>

	<br><br>
</div>
</center>

<?php require('footer.php'); ?>
</div>
</body>
</html>




