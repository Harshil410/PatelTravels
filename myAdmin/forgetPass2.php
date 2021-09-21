<html>
	<head>
		<title>HOME | Patel Travels</title>
		<link rel="stylesheet" href="css/style_header.css">
	</head>	


<!--   Site's Header with Menu   -->
	<div class="mySiteHeader">
		<div class="headerShadow"><span class="shadowHeader"><center>PATEL TRAVELS</center></span></div>

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
			<th  colspan=2><span style="font-family:arial;font-size:25px;">Forget Password</span></th>
			</tr>
				<tr><td colspan=2>  <input type="text" name="txtCon"  placeholder="Contact" class="indexCal" id="#t1" required></td></tr>
				<tr><td colspan=2>  <input type="password" name="txtPass"  placeholder="New Password" class="indexCal" id="#t1" required></td></tr>
				<tr><td colspan=2>  <input type="password" name="txtPass2"  placeholder="Confirm Password" class="indexCal" id="#t1" required></td></tr>
				<tr></tr>
				<td colspan=2><input type="submit" name="btnLogin" value="Change Password" class="btnCheckBus"></td>
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
	$userName = $_GET['username'];
	$txtCon=$_POST['txtCon'];
	$txtPass=$_POST['txtPass'];
	$txtPass2=$_POST['txtPass2'];
	
	if($txtPass == $txtPass2)
	{
		$qry2="update tbl_register set `pass_no`='".$txtPass."' , `Cm_pass`='".$txtPass2."' where Con_no=".$txtCon;
	$row2=mysqli_query($con,$qry2);
	
	$qry3="update tbl_login set `pass`='".$txtPass2."' where `user`='".$userName."'";
	$row3=mysqli_query($con,$qry3);
	}
	else
	{
		echo "<script>alert('Password Must Be Equal...');</script>";
		exit;
	}
	
	
	if(mysqli_num_rows($row3)==0)
		header('location:forgetPass2.php');
	else
	{
		echo "<script>alert('Incorrect Contact');</script>";
		echo "<script>location.href='forgetPass2.php'</script>";
	}
	// close connection; 
	mysqli_close($con);
	
	header('location:login.php');
}
?>
