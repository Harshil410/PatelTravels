<!DOCTYPE html>
	<html lang="en">
<head>
<title>Patel Travels| Admin Panel</title>
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
	padding-bottom:150px;
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

.btnShowSch{
	background-color:white;
	font-size:15px;
	color:blue;	
	border:1px solid black;
	padding:5px 10px 5px 10px;
}
.btnShowSch:hover{
	background-color:#6699ff;
}
</style>
</head>
</head>
<body style="background-image:url('InShot_2018000909_195556932.jpg');fixed center;background-repeat:no-repeat;background-size: 700px 7s00px;background-position: center;padding-top:105px">

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
	<form method="post">
	<table>
		<tr>
		<td>
			<select name="source" style="padding:5px 112px 5px 10px" required>
  				<option value="">From City</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT fromCity FROM `tbl_passenger` order BY `fromCity` ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_array($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>
		<td>
			<select name="depTm" style="padding:5px 100px 5px 10px" id="#cmbToCt" required>
				<option value="">Departure Time</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT depTime FROM `tbl_passenger` order BY `depTime` ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_array($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>
		</td>
		<tr>
		<td>
			<select name="dest" style="padding:5px 100px 5px 10px" id="#cmbToCt" required>
				<option value="">To City</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT toCity FROM `tbl_passenger` order BY `toCity` ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_array($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>
		</td>
		
		
		
		<td>
			<select name="arrTm" style="padding:5px 122px 5px 10px" id="#cmbToCt" required>
				<option value="">Arrival Time</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT arrTime FROM `tbl_passenger` order BY `arrTime` ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_array($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>
		</td>
		<tr>
		<td>
			<select name="payOpt" style="padding:5px 27px 5px 10px" id="#cmbToCt" required>
				<option value="">Payment Option</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT paymentOpt FROM `tbl_passenger` order BY `paymentOpt` ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_array($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>
		</td>
		
			<th>
				
				<input type="submit" name="filter" value="Filter" style="padding:5px 27px 5px 27px">
				</form>
			</th>
		</tr>
	
	</table>
	
	<br><br>
	
	<table border=0 cellspacing="7" style="border:1px solid black;padding:5px 10px 5px 10px;background-color:#dfe3ee">
	<td colspan=15 align=center WIDTH="40%"style="border:1px solid black;background-color:#f7f7f7">PASSENGER INFORMATION</td>
				
	<tr style="border:1px solid red;background-color:silver">
		<th align="center" style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid solid;padding:5px 5px 5px 5px">Seat No
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid silver">Date 
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid silver">From City
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid silver">To City 
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid silver">Dep. Time
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid silver">Arr Time 
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid silver">Passenger Name 
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid silver">Mobile No
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid silver">Email
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid silver">Payment Option
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border-right:2px solid silver">Fare Paid
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px">Remarks
	<tr>
		<td colspan="12" style><hr>
	<?php 
	if(isset($_POST['filter']))
	{
		$frmCt = $_POST['source'];
		$toCt = $_POST['dest'];
		$depTm = $_POST['depTm'];
		$arrTm = $_POST['arrTm'];
		$payOpt = $_POST['payOpt'];
		
		//echo $frmCt." ".$toCt." ".$depTm." ".$arrTm." ".$payOpt;
	
		require('connection.php');
		$qry="SELECT * FROM `tbl_passenger` WHERE `fromCity`='".$frmCt."' AND `toCity`='".$toCt."' order by seatNo";
		
		$row=mysqli_query($con,$qry) or die(mysql_error());
		
		while($data=mysqli_fetch_array($row,MYSQLI_NUM))
		{
	?>
	<tr style="text-align:center;border-right:1px solid black">
	<td><?php echo $data[2]; ?></td>
	<td><?php echo $data[3]; ?></td>
	<td><?php echo $data[4]; ?></td>
	<td><?php echo $data[5]; ?></td>
	<td><?php echo $data[6]; ?></td>
	<td><?php echo $data[7]; ?></td>
	<td><?php echo $data[8]; ?></td>
	<td><?php echo $data[9]; ?></td>
	<td><?php echo $data[10]; ?></td>
	<td><?php echo $data[11]; ?></td>
	<td><?php echo $data[12]; ?></td>
	<td><?php echo $data[13]; ?></td>
	</tr>
	<?php
		}
	}	?>
	
	</table>
</div>

</body>
</html>


<?php

?>