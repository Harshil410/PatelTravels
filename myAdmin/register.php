<html>
	<head>
		<title>HOME | Patel Travels</title>
		<link rel="stylesheet" href="css/style_header.css">
			<link rel="shortcut icon" href="LOGO.jpg">
	</head>	


<!--   Site's Header with Menu   -->
	<div class="mySiteHeader">
		<div class="headerShadow"><span class="shadowHeader"><CENTER>PATEL TRAVELS</CENTER></span></div>

		<?php
		require('header2.php');
		?>
	</div>
<!--   Site's Content   -->

<div style="background-color:white;margin-top:-55px">

	<br><br><br>
	<center>
		<form action="" method="post">
			<table border="0" cellspacing=10 cellpadding=5 style="border:1px dotted blue">
			<form method = "post">
			<tr>
			<th><span style="font-family:arial;font-size:25px;">Register Admin</span></th>
			</tr>
				<tr><td colspan=10>  <input type="text" name="txtFnm"  placeholder="FirstName" class="indexCal" id="#t1" required></td></tr>
				<tr><td colspan=10>  <input type="text" name="txtLnm"  placeholder="LastName" class="indexCal" id="#t1" required></td></tr>
				<tr><td colspan=10>  <input type="text" name="txtUser"  placeholder="Username" class="indexCal" id="#t1" required></td></tr>
				<tr><td colspan=10>  <input type="text" name="txtEml"  placeholder="E-Mail" class="indexCal" id="#t1" required></td></tr>
				<tr><td colspan=10>  <input type="text" name="txtCon"  placeholder="Contact" class="indexCal" id="#t1" required></td></tr>
				<tr><td colspan=10>  <input type="password" name="txtPass"  placeholder="Passwords" class="indexCal" id="#t2" required></td></tr>
				<tr><td colspan=10>  <input type="password" name="txtPass2"  placeholder="Confirm Password" class="indexCal" id="#t1" required></td></tr>
				
				<tr><td colspan=10>
				<input type="text"  name="vercode" class="indexCal" maxlength="5" placeholder="Verification Code"autocomplete="off" required style="width: 150px; height: 25px;" />&nbsp;<img src="captcha.php">
				</td></tr>
				<tr></tr><td><input type="submit" name="btnReg" value="Register" class="btnCheckBus"></td>
				<tr>
				<td><a href="login.php" style="text-decoration:none;color:blue">Sign In?</a></td>
			</table>
		</form>
	</center>
	<br><br><br>
</div>
<?php
require('footer.php');	
?>
<br><br><br>
<!-------------------------------- Footer ------------------------------------->

</div>
</center>
</body>
</html>



<?php
if(isset($_POST['btnReg']))
{
	require_once 'connection.php';
	$fnm = $_POST['txtFnm'];
	$lnm = $_POST['txtLnm'];
	$user = $_POST['txtUser'];
	$eml = $_POST['txtEml'];
	$cont = $_POST['txtCon'];
	$pass = $_POST['txtPass'];
	$pass2 = $_POST['txtPass2'];
	
	/*$qry="SELECT * FORM `tbl_register`";
	$row = mysqli_query($con,$qry);
	
	$data=mysqli_fetch_array($row);
	echo $data[0];
	echo $data[1]." ";
	echo $data[2]." ";
	echo $data[3]." ";
	echo $data[4]." ";
	echo $data[5]." ";
	exit;
	
	if($data[3] != $eml)
	{*/
		$qry="INSERT INTO `tbl_register`( `f_name`, `s_name`, `us_nam`, `eml`, `Con_no`, `pass_no`, `Cm_pass` ) VALUES ('$fnm','$lnm','$user','$eml',$cont,'$pass','$pass2')";
		mysqli_query($con,$qry);
	
		$qry1="INSERT INTO `tbl_login`(`user`, `pass`) VALUES ('$user','$pass2')";
		mysqli_query($con,$qry1);
	/*}
	else
	{
		header('location:register.php');
	}
	*/
	header('location:login.php');
}
?>
