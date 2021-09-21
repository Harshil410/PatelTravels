<html>
	<head>
		<title>Ticket DownLoad </title>
		<link rel="stylesheet" href="css/style_header.css">
			 	<link rel="shortcut icon" href="bus/LOGO.jpg">
		
		<style type="text/css" media="print">
		@page{
			size:auto;
			margin:0mm;
		}
		</style>
	</head>	

<body>
<center>
<IMG SRC="BUS/Images-1.JPG">
<BR><BR>
<?php
			$no=$_GET['cont'];
			$eml=$_GET['eml'];
			require('connection.php');
			$qry="SELECT * FROM tbl_passenger WHERE mobileNo=".$no." AND email='".$eml."'";
			$row=mysqli_query($con,$qry);
			if(mysqli_affected_rows($con))
			{
				$count=0;
				while($data=mysqli_fetch_array($row))
				{
					$count++;
					if($count == 1)
					{
		?>
		<table border=0 cellspacing=25 cellpadding=1 style="border:1px solid black;background-image:url('bus/LOGO0.jpg');background-position:82px 0px;background-size:850px 700px;background-repeat:no-repeat;background-color:#f7f7f7">
		<tr>
			<td colspan=7 align=center style="font-family:verdana;font-size:18px;border:1px solid black;background-color:#dfe3ee"> -: Passenger Information :-</td>
		<tr style="font-family:verdana;font-size:15px;color:blue">
		<td colspan=0><b><u><u>Passenger Name :-</u></u></b> 
		<td style="font-family:verdana;font-size:15px;color:black">
		<?php echo $data[8]; ?>
		<tr style="font-family:verdana;font-size:15px;color:blue">
		<td colspan=0><b><u>Contact No :-</u></b>
		<td style="font-family:verdana;font-size:15px;color:black">
		<?php echo $data[9]; ?></tr>
		<tr style="font-family:verdana;font-size:15px;color:blue">
		<td colspan=0><b><u>Email :-</u></b> 
		<td style="font-family:verdana;font-size:15px;color:black">	 
		<?php echo $data[10]; ?></td>	
		</tr>
		<tr style="font-family:verdana;font-size:15px;color:blue">
		<td colspan=0><b><u>Journey Date :-</u></b> 
		<td style="font-family:verdana;font-size:15px;color:black">	 
		<?php echo $data[3]; ?></td>	
		</tr>
		
		
		<tr><td colspan=7><hr></td></tr>
		<tr style="font-family:verdana;font-size:15px;color:blue">
			<td><b><u>From City</ub></b>
			<td><b><u>To City</ub></b>
		</tr>
	
		<tr style="font-family:verdana;font-size:15px;color:black">
			<td><?php  echo $data[4]; ?>
			<td><?php  echo $data[5]; ?></td></tr>	
			
			<tr style="font-family:verdana;font-size:15px;color:blue">
			<td><b><u>Payment Option :-</u></b>
			<td style="font-family:verdana;font-size:15px;color:black">
			<?php  echo $data[11]; ?></td></tr> 

		<tr style="font-family:verdana;font-size:15px;color:blue">
		<td colspan=0><b><u>Departure Time :-</u></b> 
		<td style="font-family:verdana;font-size:15px;color:black">	 
		<?php echo $data[6]; ?></td>	
		</tr>
		
		<tr style="font-family:verdana;font-size:15px;color:blue">
		<td colspan=0><b><u>Arrival Time :-</u></b> 
		<td style="font-family:verdana;font-size:15px;color:black">	 
		<?php echo $data[7]; ?></td>	
		</tr>
				
			<tr style="font-family:verdana;font-size:15px;color:blue">
			<td><b><u>Seat No. :-</u></b>
				<td><?php  
						$qry="SELECT * FROM tbl_passenger WHERE mobileNo=".$no." AND email='".$eml."'";
						$row=mysqli_query($con,$qry);
						if(mysqli_affected_rows($con))
						{
							$count=0;
								while($data1=mysqli_fetch_array($row))
								{
									$count++;
									echo "<span style='color:red'>".$data1[2]."</span>  ";
								}
						}
						else
							header('location:eTicket.php');
				?></td></tr> 	
			<tr style="font-family:verdana;font-size:15px;color:blue">
			<td><b><u>Total No of Seats :- </u></b>
			<td style="font-family:verdana;font-size:15px;color:black">
				<?php echo $count; ?>
			
			<tr style="font-family:verdana;font-size:15px;color:blue">
			<td><b><u>Taxable Amount :-</u></b>
			<td style="font-family:verdana;font-size:15px;color:black">   
			<?php 
				$taxableAmt = $data[12]*$count;
				$taxable=($taxableAmt*100)/118; 
				echo $taxable; ?></tr>		
			
			<tr style="font-family:verdana;font-size:15px;color:blue">
			<td><b><u>GST :-</u></b>
			<td style="font-family:verdana;font-size:15px;color:black">
			<?php  echo ($taxable*18)/200; ?></tr>
			
			
			<tr style="font-family:verdana;font-size:15px;color:blue">
			<td><b><u>Total Amount :-</u></b>
			<td style="font-family:verdana;font-size:15px;color:black">
			<?php  echo "<b>".$taxableAmt."</b>"; ?></tr>
			
			<tr style="font-family:verdana;font-size:15px;color:red">
			<td 
			<b><H4> IMPORTANT NOTE:--- </H4><B><BR><b><u>Reporting Time :- 15 Min Early as per your bus timming</u></b>
			</tr>
		</table>
		<tr><td colspan=7 align = "center">
			<br>
			<button id="getPrint" onclick = "getTicket()" class="btnCheckBus">Download</button>
			<br><br>
		<?php		
					}
				} //While Loop End
		?>
		<?php	
			}
			else
				header('e-Ticket.php');
?>

<script>
function getTicket()
{
	var id = document.getElementById('getPrint');
	id.style.visibility = 'hidden';
	window.print();
	alert("Your Ticket Downloaded Successfully... \n Thank You For Bookinf Your Ticket Online...\n Enjoy Journey...")
	id.style.visibility = 'visible';
	document.location.href = "eTicket.php";
}
</script>

<CENTER>

</CENTER>