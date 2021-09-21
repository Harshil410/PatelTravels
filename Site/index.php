<html>
	<head>
		<title>HOME | PATEL TRAVELS</title>
		<link rel="stylesheet" href="css/style_header.css">
		<link rel="shortcut icon" href="bus/LOGO.jpg">

	</head>	



<!--   Site's Header with Menu   -->
	<div class="mySiteHeader">
		<div class="headerShadow"><span class="shadowHeader"><center>PATEL TRAVELS</center></span></div>

		<?php
		require('header.php');
		?>
		</div>
	</div>
<!DOCTYPE html>
<html>


          
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<body >


<div class="w3-content w3-display-container">
  <img class="mySlides" src="bus/01.png" style="width:100%">
  <img class="mySlides" src="bus/02.png" style="width:100%">
  <img class="mySlides" src="bus/03.png" style="width:100%">
  <img class="mySlides" src="bus/slide01.png" style="width:100%">
 <img class="mySlides" src="bus/04.png" style="width:100%">
 <img class="mySlides" src="bus/bannerightshap.png" style="width:50%">
 <img class="mySlides" src="bus/slide03.png" style="width:100%">
 <img class="mySlides" src="bus/slide1.png" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>

<!--   Site's Content   -->

<center>
	<br><br>
	<table cellspacing=5 cellpadding=10>
	<tr>
		<td style="font-family:verdana;font-size:13px;background-color:silver;border-radius:20;color:white">Select Cities
		<td style="font-size:3px;font-family:arial"> <hr width=170>
		<td style="border:3px solid silver;border-radius:20">Find Bus
		<td style="font-size:3px;font-family:arial"><hr width=170>
		<td style="border:3px solid silver;border-radius:20">Basic Information

	</tr>
	</table>
	<IMG SRC="BUS/searchbus.PNG">
	<form action="eBooking.php" method="post">
	<table>
		
		<tr><td>
			<select name="source" required>
				<option value="">From City</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT bus_frmCt FROM tbl_bus_sch order by bus_frmCt ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_row($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>
		<tr>
		<td>
			<select name="dest" id="#cmbToCt" required>
				<option value="">To City</option>
				<?php
					require('connection.php');
					$qry="SELECT DISTINCT bus_toCt FROM tbl_bus_sch order by bus_toCt ASC";
					$row=mysqli_query($con,$qry);
					while($data=mysqli_fetch_array($row))
					{
						?><option><?php echo $data[0]; ?></option>
					<?php
					}
				?>
			</select>
		</td>
		<tr>
			<th>
			<input type="date" id="#txtDt" name="date" min="<?php echo date("Y-m-d", strtotime("+ 0 day")); ?>" placeholder="DD/MM/YYYY" class="indexCal" required>
			</th>
		</tr>
		<tr>
			<th>
				
				<input type="submit" name="checkBs" value="Check Bus" class="btnCheckBus">
				</form>
			</th>
		</tr>

		<tr></tr>

		</div>
	</table>
	
	<IMG SRC="BUS/paymant.PNG">
	
	
	
	<h2>HOW IT WORKS</h2>
<img src="bus/howitworkimages.png" border="0">
<br><br><br><style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

  <tr>
    <th><h2><center>OUR FACILITIES</center></h2></th>
    
  </table>
	</center>
</div><center>


<img src="bus/FACILTY1.png">
<?php
require('footer.php');
?>