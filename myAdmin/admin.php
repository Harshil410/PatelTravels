<!DOCTYPE html>
<html lang="en">
<head>
<title>Patel Travels | Admin Panel</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style_header.css">
		<link rel="shortcut icon" href="LOGO.jpg">
	<style type="text/css">
	/* Style the content */
	.content {
		margin-left: 200px;
		padding-left: 20px;
		padding-bottom:450px;
	}
	</style>
</head>

<body style="background-image:url('InShot_201800909_195.jpg');fixed center;background-repeat:no-repeat;background-size: 700px 7s00px;background-position: center;padding-top:-100px">

<?php
	session_start();
	if(isset($_SESSION['txtUser']))
	{
		echo "<br> <a href='logout.php'>Lo	gout</a>";
	}
	else
	{
		echo "<script>location.href='login.php'</script>";
	}
?>
<?php
	require('header.php');
?>

<div class="content" style="padding-left:100px;padding-top:100px">
	<table border=0>
	<tr>
		<td>
		<?php
			require('connection.php');
			$qry="SELECT * FROM `tbl_register` WHERE `us_nam`='".$_SESSION['txtUser']."'";

			$row=mysqli_query($con,$qry);
			while($data=mysqli_fetch_array($row,MYSQLI_NUM))
			{
				?>

				<table border=0 cellspacing=8 cellpadding=9 style="border:1px solid black ;background-color:#dfe3ee">
				<tr>
					<th colspan=2 style="font-size:23px;font-family:verdana;color:cyan;text-shadow:2px 2px 1px navy;background-color:#f7f7f7">Admin Information
				<tr>
					<th align="right" style="font-size:18px;font-family:verdana;color:blue">First Name : <td><?php echo $data[0]."<br>"; ?>
				<tr>	
					<th align="right" style="font-size:18px;font-family:verdana;color:blue">Last Name : <td><?php echo $data[1]."<br>"; ?>
				<tr>
					<th align="right" style="font-size:18px;font-family:verdana;color:blue">Username : <td><?php echo $data[2]."<br>"; ?>
				<tr>
					<th align="right" style="font-size:18px;font-family:verdana;color:blue">Email : <td><?php echo $data[3]."<br>"; ?>
				<tr>
					<th align="right" style="font-size:18px;font-family:verdana;color:blue">Contact No : <td><?php echo $data[4]."<br>"; ?>
				</table>
				<?php
			}
		?>
	<td valign="top">
		<table border=0 cellspacing=7 cellpadding=9 style="border:1px solid black;background-color:#dfe3ee">
		
		<tr>
			<th colspan=2 style="font-size:23px;font-family:verdana;color:cyan;text-shadow:2px 2px 1px navy;background-color:#f7f7f7"">Change Username
	
		<tr>
			<th>
				<form action="" method="post">
					<input type="text" name="txtNewUsrNm"  placeholder="New Username" class="indexCal" id="#t1" required></td></tr>
		<tr>
			<th>
					<input type="text" name="txtConUsr"  placeholder="Confirm Username" class="indexCal" id="#t1" required></td></tr>
				
		<tr>
			<td>
		<tr>
			<td>
			<input type="submit" name="btnChgUsr" value="Change Username" class="btnCheckBus">
			</form>
			</td>
		<tr>
			<td>
		</table>
	<td valign="top">
		<table border=0 cellspacing=7 cellpadding=9 style="border:1px solid black ;background-color:#dfe3ee">
		
		<tr>
			<th colspan=2 style="font-size:23px;font-family:verdana;color:cyan;text-shadow:2px 2px 1px navy;background-color:#f7f7f7">Change Password
	
		<tr>
			<th>
				<form action="" method="post">
					<input type="password" name="txtNewPass"  placeholder="New Password" class="indexCal" id="#t1" required></td></tr>
		<tr>
			<th>
					<input type="password" name="txtConPass"  placeholder="Confirm Password" class="indexCal" id="#t1" required></td></tr>
				
		<tr>
			<td>
		<tr>
			<td>
			<input type="submit" name="btnChgPas" value="Change Password" class="btnCheckBus">
			</form>
			</td>
		<tr>
			<td>
		</table>
	</center>
</div>

</body>
</html>

<?php
if(isset($_POST['btnChgUsr']))
{
	require('connection.php');
	
	$txtUsr=$_POST['txtNewUsrNm'];
	$txtConUsr=$_POST['txtConUsr'];
	
	if($txtUsr == $txtConUsr)
	{
		$qry2="update tbl_register set `us_nam`='".$txtUsr."' where `us_nam`='".$_SESSION['txtUser']."'";
		$row2=mysqli_query($con,$qry2);
		
		$qry3="update tbl_login set `user`='".$txtUsr."' where `user`='".$_SESSION['txtUser']."'";
		$row3=mysqli_query($con,$qry3);
	}
	else
	{
		echo "<script>alert('Username Must Be Equal...');</script>";
		exit;
	}
	
	header('location:login.php');
}
?>


<?php
if(isset($_POST['btnChgPas']))
{
	
	$txtNewPass=$_POST['txtNewPass'];
	$txtConPass=$_POST['txtConPass'];
	echo $txtNewPass."<br>";
	if($txtNewPass == $txtConPass)
	{
		$qry2="UPDATE `tbl_register` SET `pass_no`='".$txtNewPass."',`Cm_pass`='".$txtNewPass."' where `us_nam`='".$_SESSION['txtUser']."'";
		$row2=mysqli_query($con,$qry2);
		
		$qry3="update tbl_login set `pass`='".$txtNewPass."' where `user`='".$_SESSION['txtUser']."'";
		$row3=mysqli_query($con,$qry3);
	}
	else
	{
		echo "<script>alert('Password Must Be Equal...');</script>";
		exit;
	}
	
	mysqli_close($con);
	
	header('location:login.php');
}
?>
<? php
	requred("footer.php");
?>