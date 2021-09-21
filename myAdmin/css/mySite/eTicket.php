<html>
	<head>
		<title>Ticket DownLoad |  PATEL  TRAVELS</title>
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
	<form action = "" method = "post">
	<tr>
	<th><span style="font-family:arial;font-size:25px;">Ticket DownLoad</span></th>
	</tr>
		<tr><td colspan=10>  <input type="text" name="txtContact"  placeholder="Contact No." class="indexCal" id="#t1" style="background-color:transparent" required></td></tr>
		<tr><td colspan=10>  <input type="email" name="txtMail"  placeholder="Email" class="indexCal" id="#t2" style="background-color:transparent" required></td></tr>
		<tr></tr><td><input type="submit" name="downloadTick" value="DownLoad" class="btnCheckBus" style="background-color:transparent"></td>
	</table>
	</form>
	<br><br><br><br>
</div>
</center>
<?php require('footer.php'); ?>
</div>
</body>
</html>
<?php  
	if(isset($_POST['downloadTick']))
	{
		require('connection.php');
		$qry="SELECT * FROM tbl_passenger WHERE mobileNo=".$_POST['txtContact']." AND email='".$_POST['txtMail']."'";
		$row=mysqli_query($con,$qry);
		if(mysqli_num_rows($row) != 0)
		{
			header('location:downloadTicket.php?cont='.$_POST['txtContact'].'& eml='.$_POST['txtMail']);
		}
		else
			echo "<script>alert('No Record Found...');</script>";
	}
?>