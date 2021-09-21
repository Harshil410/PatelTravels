<!DOCTYPE html>
<html lang="en">
<head>
<title>Eagle Corporation | Admin Panel</title>
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
<body style="background-image:url('InShot_20180909_195556932.jpg');fixed center;background-repeat:no-repeat;background-size: 700px 700px;background-position: center">

		<?php
		require('header.php');
		?>

<br>
<div class="content">
<br><br><br>
<table align="center" cellspacing=0 cellpadding=10>
<tr>
<td valign="center" style="padding-right:200px">
	<p style="font-size:20px;">Add Bus </p>
	<hr>
<td style=";padding-left:80px">
	<p style="font-size:20px">Cancel Bus</p>
	<hr>
<tr>
<td style="border-right:1px solid black;">
	<form action="" method="post">
	<table>
		<caption>Add Buses</caption>
		<tr>
		<td style="padding:5px 100px 5px 10px">
			<input type="text" name="busName" placeholder="BUS NAME" style="padding:5px 0px 5px 10px">
		</td>
		</tr>

		<tr>
			<td style="padding:5px 100px 5px 10px">
			<input type="text" name="busType" placeholder="BUS TYPE" style="padding:5px 0px 5px 10px">
			</td>
		</tr>
		<tr>
			<td style="padding:5px 100px 5px 10px">
			<input type="text" name="busNo" placeholder="BUS NO" style="padding:5px 0px 5px 10px">
			</td>
		</tr>
		<tr>
			<td style="padding:5px 100px 5px 10px">
			<input type="text" name="busCapacity" placeholder="SEAT CAPACITY" style="padding:5px 0px 5px 10px">
			</td>
		</tr>
		<tr>
			<td style="padding:5px 100px 5px 10px">
				<input type="submit" name="addBus" value="Add Bus" style="font-size:15px;color:blue;background-color:white;border:1px solid black;padding:5px 10px 5px 10px">
			</td>
		</tr>
		
		
		<tr>
		<td>
		<?php
			if(isset($_POST['addBus']))
			{
				echo "fesfsef";
				$busName = $_POST['busName'];
				$busType = $_POST['busType'];
				$busNo = $_POST['busNo'];
				$busCapacity = $_POST['busCapacity'];
				echo $busName.$busType.$busNo.$busCapacity;
				require('connection.php');
				$qry="SELECT max(id)+1 FROM `tbl_buses`";
				$row=mysqli_query($con,$qry);
				$data=mysqli_fetch_array($row,MYSQL_NUM);
				$qry="INSERT INTO `tbl_buses` (`id`, `bus_name`, `bus_type`, `bus_no`, `seat_capacity`) VALUES ('$data[0]','$busName','$busType','$busNo','$busCapacity')";
				mysqli_query($con,$qry);
				header('location:manageBus.php');
			}
		?>
		</td></tr>
		</form>
	</table>
	
	
	<td valign=top style="border-left:1px solid black;padding-left:80px">
	<form action="manageBus.php" method="post">
	<table>
		<caption>Cancel Buses</caption>
		<tr>
			<td>
			<input type="text" name="busNo" placeholder="BUS NO" style="padding:5px 80px 5px 10px">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="delBus" value="Cancel Bus" style="font-size:15px;color:blue;background-color:white;border:1px solid black;padding:5px 10px 5px 10px">
			</td>
		</tr>
		<tr>
		<td colspan=2>
		<?php
			if(isset($_POST['delBus']))
			{
				$busNo = $_POST['busNo'];
				require('connection.php');
				$qry="SELECT * FROM `tbl_buses` WHERE `bus_no` = '".$busNo."'";
				$row=mysqli_query($con,$qry) or die(mysql_error());
				?>
				<br><br>
				<div style="border:1px solid black">
				<table cellspacing=5 cellpadding=5>
				<td colspan=7 align=center style="border:1px solid black">Select Route to Cancel </td>
				<tr><td>Id<td>Bus Name<td>Bus Type<td>Bus No<td>Bus Seat Capacity<td>CANCEL<tr>
				<?php
				while($data=mysqli_fetch_array($row,MYSQL_NUM))
				{
					?>
					<tr>
						<td><?php echo $data[0]; ?>
						<td><?php echo $data[1]; ?>
						<td><?php echo $data[2]; ?>
						<td><?php echo $data[3]; ?>
						<td><?php echo $data[4]; ?>
						<td><A href='cancelBus.php?id=<?php echo $data[0]; ?>'>Cancel Now!</a>
					</tr>
					<?php
				}
				?>
				</table>
				</div>
				<?php
			}
		?>
		</td></tr>
		</form>
		
	</table>
	
</div>

</body>
</html>
