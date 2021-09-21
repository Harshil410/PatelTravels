<html>
	<head>
		<title>Contact US | PATEL  TRAVELS </title>
		<link rel="stylesheet" href="css/style_header.css">
	</head>	



<!--   Site's Header with Menu   -->
<div class="mySiteHeader">
	<div class="headerShadow"><span class="shadowHeader"><center>PATEL TRAVELS</center></span></div>
<?php
require('header.php');
?>
</div>

<!--   Site's Content   -->
<center>
<div style="background-color:white;margin-top:-55px;background-image:url('Images-1.jpg');fixed;background-position:400% 50%;background-repeat:no-repeat;background-size: 1500px 1000px;">

<br><br><br>
	<form method=POST Action="">
	
	<table border="0" cellspacing=10 cellpadding=5 style="border:1px dotted blue">
	
	<tr>
	<th><span style="font-family:arial;font-size:25px;">Send Us A Message</span></th>
	</tr>
	<tr><td colspan=10>  <input type="text" name="txtNm"  placeholder="NAME" class="indexCal" style="background-color:transparent" required></td></tr>
	<tr><td colspan=10>  <input type="text" name="txtContact"  placeholder="PHONE" class="indexCal" style="background-color:transparent" required></td></tr>
	<tr><td colspan=10>  <input type="email" name="txtEml" placeholder="Email" class="indexCal" style="background-color:transparent" required></td></tr>
	<tr><td colspan=10>  <input type="text" name="txtSub"  placeholder="SUBJECT" class="indexCal" style="background-color:transparent" required></td></tr>
	<tr><td colspan=10>  <textarea rows="4" cols="21" name="txtMsg" placeholder="MESSAGE" class="indexCal" style= "padding-left :5px;background-color:transparent" required></textarea></td></tr>
	</tr><td><input type="submit" value="Submit" name="submit" class=btnCheckBus style="background-color:transparent"></td>
	</table>
	
	</form>

	<br><br>
	</div>
</centeR>

<?php

	require('footer.php');
	if(isset($_POST['submit']))
	{
		$txtNm=$_POST['txtNm'];
		$txtContact=$_POST['txtContact'];
		$txtEml=$_POST['txtEml'];
		$txtSub=$_POST['txtSub'];
		$txtMsg=$_POST['txtMsg'];
		$dt = date('Y-m-d');
		require('connection.php');
		$qry="INSERT INTO `tbl_contact`(`date`, `name`, `contact`, `email`, `subject`, `message`) VALUES 
			('$dt','$txtNm',$txtContact,'$txtEml','$txtSub','$txtMsg')";
			echo $qry;
		mysqli_query($con,$qry);
		
		echo "<script>alert('Thank You for Contact...');</script>";
	}
?>