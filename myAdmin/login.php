<html>
	<head>
		<title>HOME | Patel Travels</title>
		<link rel="stylesheet" href="css/style_header.css">
			<link rel="shortcut icon" href="LOGO.jpg">
	</head>	



<!--   Site's Header with Menu   -->
	<div class="mySiteHeader">
		<div class="headerShadow"><span class="shadowHeader"><center>PATEL TRAVELS</center></span></div>

		<?php
		require('header1.php');
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
			<th  colspan=2><span style="font-family:arial;font-size:25px;">Login</span></th>
			</tr>
				<tr><td colspan=2>  <input type="text" name="txtUser"  placeholder="Username" class="indexCal" id="#t1" required></td></tr>
				<tr><td colspan=2>  <input type="password" name="txtPass"  placeholder="Passwords" class="indexCal" id="#t2" required></td></tr>
				<tr></tr> <tr><td colspan=2><div class="form-group">
				
				<input type="text"  name="vercode" class="indexCal" maxlength="5"  placeholder="Verification Code"autocomplete="off" required style="width: 150px; height: 25px;" />&nbsp;<img src="captcha.php">
				</div><tr></td>  </div>

				<td colspan=2><input type="submit" name="btnLogin" value="Login" class="btnCheckBus"></td>
				<tr>
				<td><a href="register.php" style="text-decoration:none;color:blue"><b>Don't Have Account?</b></a></td>
				<td><a href="forgetPass.php" style="text-decoration:none;color:blue"><b>Forget Password?<b></a>
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
	session_start();
	require('connection.php');
	if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
        echo "<script>alert('Incorrect verification code');</script>" ;
    } 
        else
 {
	
	$user=$_POST['txtUser'];
	$pass=$_POST['txtPass'];
	$qry="select * from tbl_login where user='".$user."' AND pass='".$pass."'";
	$row=mysqli_query($con,$qry);
	echo mysqli_num_rows($row);
	if(mysqli_num_rows($row)==1)
	{
		$_SESSION['txtUser']=$user;
		echo "<script>location.href='index.php'</script>";
	}
	else
	{
		echo "<script>alert('Incorrect UserName or Password');</script>";
		echo "<script>location.href='login.php'</script>";
	}
	// close connection; 
	mysqli_close($con);
	}	
}
?>
