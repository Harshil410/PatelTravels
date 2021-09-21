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
	<br><br>
	<table>
		<tr><th align="left">
		<form action="" method="post">
		<input type="submit" name="delFeed" value="Clear all FeedBacks" style="padding:5px 20px 5px 20px;font-family:verdana;font-size:15px;background-color:white;border:1px solid blue;border-radius:6px;text-shadow:1px 1px 1px silver"> 
		</form>
		<br>
		
	<table border=0 cellspacing="7" style="border:1px solid black;padding:5px 10px 5px 10px;background-color:#dfe3ee">
		<tr style="border:1px solid red">
		
		<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px  solid silver">Date
			<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Full Name
			<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Contact No.
			<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">E-Mail
			<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Subject
			<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Message
			<th style="text-shadow:2px 2px 1px silver;color:blue;font-size:19px;border:1px solid;padding:5px 5px 5px 5px">Delete
		<tr>
			<td colspan="11" style><hr>
		<?php 
			require('connection.php');
			$qry="SELECT * FROM `tbl_contact`";
			
			$row=mysqli_query($con,$qry);
			while($data=mysqli_fetch_array($row))
			{
		?>
		<tr style="border-right:1px solid black">
		<td><?php echo $data[1]; ?></td>
		<td><?php echo $data[2]; ?></td>
		<td><?php echo $data[3]; ?></td>
		<td><?php echo $data[4]; ?></td>
		<td><?php echo $data[5]; ?></td>
		<td><?php echo $data[6]; ?></td>
		<td><a href="delCancel.php?id='<?php echo $data[0]; ?>'" style="color:red;text-decoration:none">Delete</a></td>
		</tr>
		<?php
		}	?>
		
		</table>
	</table>
</div>

</body>
</html>


<?php
if(isset($_POST['delFeed']))
{
	$qry="DELETE FROM `tbl_contact`";
	$row=mysqli_query($con,$qry);
	header('localhost:feedbacks.php');
}
?>