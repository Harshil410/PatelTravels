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
<body style="background-image:url('InShot_20180909_1955056932.jpg');fixed center;background-repeat:no-repeat;background-size: 700px 7s00px;background-position: center;padding-top:105px">

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

<br><br><br>
<table align="center"  cellspacing=0 cellpadding=10>
<tr>
<td valign="center" style="padding-right:80px">
	<p style="font-size:20px;">Add Bus</p>
	<hr>
<td style=";padding-left:80px">
	<p style="font-size:20px">Cancel Bus </p>
	<hr>
<tr>
<td style="border-right:1px solid black;padding-right:80px">
	<form action="" method="post">
	<table>
		<tr>
		<td>
			<input type="text" name="busName" placeholder="BUS NAME" style="padding:5px 46px 5px 10px" required>
		</td>
		
		<tr>
		<td>
			<select name="busType" style="padding:5px 73px 5px 10px" required>
				<option>-- Select Bus Type</option>
				<option>AC</option>
				<option>NON AC</option>
				<option>SLEEPER</option>
		</td>
		
		<tr>
		<td>
			<input type="text" name="busNo" placeholder="BUS No" style="padding:5px 46px 5px 10px" required>
		</td>
		
		<tr>
		<td>
			<input type="text" name="busSeat" placeholder="BUS SEAT CAPACITY" style="padding:5px 46px 5px 10px" required>	
		</td>
		</tr>
		<tr>
			<td>
			<input type="submit" name="addBus" value="Add Bus" style="font-size:15px;color:blue;background-color:white;border:1px solid black;padding:5px 10px 5px 10px">
			</td>
		</tr>
		
		<tr>
		<td>
		<?php
			if(isset($_POST['addBus']))
			{
				$busName = $_POST['busName'];
				$busType = $_POST['busType'];
				$busNo = $_POST['busNo'];
				$busSeat = $_POST['busSeat'];
				require('connection.php');
				$qry="SELECT max(bus_id)+1 FROM `tbl_bus_sch`";
				$row=mysqli_query($con,$qry);
				$data=mysqli_fetch_array($row,MYSQL_NUM);
				$qry="insert into `tbl_buses` values($data[0],'$busName','$busType','$busNo',$busSeat)";
				
				mysqli_query($con,$qry);
				//header('location:manageBus.php');
			}
		?>
		</td></tr>
		</form>
	</table>
<td valign=top style="border-left:1px solid black;padding-left:80px">
	<form action="" method="post">
	<table>
		<tr>
		<td>
				<input type="text" name="busNo" placeholder="BUS NO" style="padding:5px 46px 5px 10px" required>	
		</td>
		<tr>
			<td>
				<input type="submit" name="delRoute" value="Search Bus" style="font-size:15px;color:blue;background-color:white;border:1px solid black;padding:5px 10px 5px 10px">
			</td>
		</tr>
		
		
		<tr>
		<td colspan=2>
		<?php
			if(isset($_POST['delRoute']))
			{
				$busNo = $_POST['busNo'];
				require('connection.php');
				$qry="SELECT * FROM `tbl_buses` WHERE `bus_no` = '".$busNo."'";
				$row=mysqli_query($con,$qry);
				?>
				<br><br>
				<div style="border:1px solid black">
				<table cellspacing=5 cellpadding=5 style=background-color:#dfe3ee>
				<td colspan=7 align=center style="border:1px solid black;background-color:#f7f7f7"">Select Route to Cancel </td>
				<tr style="background-color:silver"><th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px">Id
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px">Bus Name
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px">Type
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px">Reg. No.
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px">Seat Capacity
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px">CANCEL<tr>
				<?php
				while($data=mysqli_fetch_array($row,MYSQLI_NUM))
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
</table>
</div>

</body>
</html>
