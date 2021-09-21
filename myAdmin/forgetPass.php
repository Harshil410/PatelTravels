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
		require('header3.php');
		?>
	</div>
<!--   Site's Content   -->

<div style="background-color:white;margin-top:-55px">

	<br><br><br>
	<center>
	<div class="welcomeSite">WELCOME TO PATEL TRAVELS</div>
		<br><br><br>
		<form action="" method="post">
			<table border="0" cellspacing=10 cellpadding=5 style="border:1px dotted blue">
			<form method = "post">
			<tr>
			<th colspan=2><span style="font-family:arial;font-size:25px;">Forget Password</span></th>
			</tr>
				<tr><td colspan=2>  <input type="text" name="txtUser"  placeholder="Username or Email" class="indexCal" id="#t1" required></td></tr>
				<tr></tr>
				<tr><td colspan=2><input type="submit" name="btnLogin" value="Next" class="btnCheckBus"></td>
				<tr><td><a href="login.php" style="text-decoration:none;color:blue"><b>You Remember Password?</b></a></td>
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
if(isset($_POST['btnLogin']))
{
	require('connection.php');
	$info=$_POST['txtUser'];
	$qry="select * from tbl_register where us_nam='".$info."' OR eml='".$info."'";
	$row=mysqli_query($con,$qry);
	if(mysqli_num_rows($row)!=0)
		echo "<script>location.href='forgetPass2.php?username=".$_POST['txtUser']."'</script>";
	else
	{
		echo "<script>alert('Incorrect UserName');</script>";
		echo "<script>location.href='forgetPass.php'</script>";
	}
	// close connection; 
	mysqli_close($con);
		
}
?>
