<!DOCTYPE html>
<html lang="en">
<head>
<title>Patel Travels | Admin Panel</title>
	<link rel="stylesheet" href="css/style.css">
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

<body style="background-image:url('InShot_2018090559_195556932.jpg');fixed center;background-repeat:no-repeat;background-size: 700px 7s00px;background-position: center;padding-top:-100px">

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

<div class="content">
	<center>
	<h1 class="myHead">PATEL TRAVELS</h1>
	<span>Welcome to Patel Travels Admin Panel</span>
	</center>
</div>

</body>
</html>

