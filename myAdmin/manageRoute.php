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
<body style="background-image:url('dental-emergency-traveelling-825x550.jpg');fixed center;background-repeat:no-repeat;background-size: 700px 7s00px;background-position: center;">
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
<table align="center" cellspacing=0 cellpadding=10>
<tr>
<td valign="center" style="padding-right:120px">
	<p style="font-size:20px;">ADD ROUTE </p>
	<hr>
<td style=";padding-left:80px">
	<p style="font-size:20px">CANCEL ROUTE </p>
	<hr>
<tr>
<td style="border-right:1px solid black;padding-right:80px">
	<form action="" method="post">
	<table>
		<tr>
		<td>
				<input type="text" name="source" placeholder="From City" style="padding:5px 46px 5px 10px" required>
		</td>
		
		<tr>
		<td>
			<input type="text" name="dest" placeholder="To City" style="padding:5px 46px 5px 10px" required>
		</td>
		</tr>

		<tr>
			<td>
			<input type="text" name="fTime"  placeholder="00:00:00"style="padding:5px 46px 5px 10px" required>
			</td>
		</tr>
		<tr>
			<td>
			<input type="text" name="tTime"  placeholder="00:00:00" style="padding:5px 46px 5px 10px" required>
			</td>
		</tr>
		<tr>
			<td>
			<input type="text" name="txtPrc" placeholder="Fare" style="padding:5px 46px 5px 10px" required>
			</td>
		</tr>
		
		<tr>
			<td>
				<input type="submit" name="addRoute" value="Add Route"  style="font-size:15px;color:blue;background-color:white;border:1px solid black;padding:5px 10px 5px 10px">
			</td>
		</tr>
		
		
		<tr>
		<td>
		<?php
			if(isset($_POST['addRoute']))
			{
				$frmCt = $_POST['source'];
				$toCt = $_POST['dest'];
				$frmTm = $_POST['fTime'];
				$toTm = $_POST['tTime'];
				$fare = $_POST['txtPrc'];
				require('connection.php');
				
				$qry="SELECT max(bus_id)+1 FROM `tbl_bus_sch`";
				$row=mysqli_query($con,$qry);
				$data=mysqli_fetch_array($row,MYSQLI_NUM);
				
				$qry="insert into tbl_bus_sch values($data[0],'$frmCt','$toCt','$frmTm','$toTm',$fare)";

				mysqli_query($con,$qry);
				header('location:manageRoute.php');
			}
		?>
		</td></tr>
		</form>
	</table>
<td valign=top style="border-left:1px solid black;padding-left:80px">
	<form action="manageRoute.php" method="post">
	<table>
		<tr>
		<td>
				<select name="source" style="padding:5px 115px 5px 10px" required>
  				<option value="">From City</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT bus_frmCt FROM tbl_bus_sch order BY `bus_frmCt` ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_row($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>
		</td>
		
		<tr>
		<td>
			<select name="dest" style="padding:5px 100px 5px 10px" required>
				<option value="">To City</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT bus_toCt FROM tbl_bus_sch order BY `bus_toCt` ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_row($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>			
		</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="delRoute" value="Search Route" style="font-size:15px;color:blue;background-color:white;border:1px solid black;padding:5px 10px 5px 10px">
			</td>
		</tr>
		
		
		<tr>
		<td colspan=2>
		<?php
			if(isset($_POST['delRoute']))
			{
				$frmCt = $_POST['source'];
				$toCt = $_POST['dest'];
				require('connection.php');
				$qry="SELECT * FROM `tbl_bus_sch` WHERE  `bus_frmCt` = '".$frmCt."' AND `bus_toCt` = '".$toCt."'";
				$row=mysqli_query($con,$qry) or die(mysql_error());
				?>
				<br><br>
				<div style="border:1px solid black">
				<table cellspacing=5 cellpadding=5 style="background-color:#dfe3ee">
				<td colspan=7 align=center style="border:1px solid black;background-color:#f7f7f7">SELECT ROUTE TO CANCEL </td>
				<tr style="background-color:silver">
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Id
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;;border:1px solid;padding:5px 5px 5px 5px">From City
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">To City
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">From Time
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">To Time
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Fare
				<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">CANCEL
				<tr>
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
						<td><?php echo $data[5]; ?>
						<td><A href='cancelRoute.php?id=<?php echo $data[0]; ?>'>Cancel Now!</a>
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
<tr>
<td colspan=2 align="center">
	<a href="viewSchedule.php"><input type="button" value="View Routes" class="btnShowSch" ></a>
</table>
</div>

</body>
</html>
