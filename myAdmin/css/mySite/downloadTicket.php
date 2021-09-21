<html>
	<head>
		<title>Ticket DownLoad </title>
		<link rel="stylesheet" href="css/style_header.css">
		
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
		<table border=0 cellspacing=25 cellpadding=1 style="border:1px solid black;background-image:url('InShot_201800909_195556932-2.jpg');background-position:82px 0px;background-size:850px 700px;background-repeat:no-repeat">
		<tr>
			<td colspan=7 align=center style="font-family:verdana;font-size:18px;border:1px solid black"> -: Passenger Information :-</td>
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
			<td><b><u>Journey Date :-</u></b>
			<td style="font-family:verdana;font-size:15px;color:black">
			<?php  echo $data[3]; ?></td></tr> 
		
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
			<td><b><u>CGST :-</u></b>
			<td style="font-family:verdana;font-size:15px;color:black">
			<?php  echo ($taxable*9)/100; ?></tr>
			
			<tr style="font-family:verdana;font-size:15px;color:blue">
			<td><b><u>SGST :-</u></b>
			<td style="font-family:verdana;font-size:15px;color:black">
			<?php  echo ($taxable*9)/100; ?></tr>
			
			<tr style="font-family:verdana;font-size:15px;color:blue">
			<td><b><u>Total Amount :-</u></b>
			<td style="font-family:verdana;font-size:15px;color:black">
			<?php  echo "<b>".$taxableAmt."</b>"; ?>
			</tr>

			
			<tr style="font-family:verdana;font-size:15px;color:black">
			<td><hr><b><center>THANK YOU <br>FOR TICKET DOWNLOAD <BR>HAPPY JOURNEY</center>
			</b>
			</tr>
			
	<td align="center" style="color:#9900CC">Bording Point		&nbsp;&nbsp;
			<select name="location" id="location" class="input-type" required style="color:#9900CC" onchange="changeCity(this.value);">
					<option value="dwarka">Dwarka</option>
					<option value="jam">Jamnagar</option>
					<option value="raj">Rajkot</option>
					<option value="ahm">Ahemdabad</option>
					<option value="vad">Vadodara</option>
					<option value="surat">Surat</option>
					<option value="bhuj">Bhuj</option>	
				</select>
				</td>

	<td align="center" style="color:#9900CC">Droping Point			&nbsp;&nbsp;
				<select name="Venue" id="Venue" class="input-type" required style="color:#9900CC"></select>
				</td>
			
			
			</table>
			
		<tr><td colspan=7 align = "center">
			<br>
			
			
			
		<tr><td colspan=7 align = "center">
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
<script language="javascript">
	function changeCity(val)
	{
		document.getElementById('Venue').innerHTML="";
		var str="";
		if(val=="dwarka")
		{
				str+='<option value="Club Mahindra,National Highway 8.">Club Mahindra,National Highway 8.</option>';
		}
		else if(val=="jam")
		{
				str+='<option value="Aram Hotel,Near DKV Circle">Aram Hotel,Near DKV Circle</option>';
				str+='<option value="inox cenamex,cristal mall,khodiyar colony">inox cenamex,cristal mall,khodiyar colony</option>';
				str+='<option value="Ashirwad Resort,Naghedi D P Road">Ashirwad Resort,Naghedi D P Road</option>';
		}
		else if(val=="raj")
		{
				str+='<option value="Khirasara Palace,Kalawad Road">Khirasara Palace,Kalawad Road</option>';
				str+='<option value="Parijat Party Plot,150 Feet Ring Road">Parijat Party Plot,150 Feet Ring Road</option>';
		}
		else if(val=="ahm")
		{
				str+='<option value="Manavmandir Party Plot,Manav Mandir">Manavmandir Party Plot,Manav Mandir</option>';
				str+='<option value="Shree Umiya Farm,Sardar Patel Ring Road">Shree Umiya Farm,Sardar Patel Ring Road</option>';
				str+='<option value="Swagat Marriage Hall,Airport Road">Swagat Marriage Hall,Airport Road</option>';
		}
		else if(val=="vad")
		{
				str+='<option value="Comfort Inn Donil,Opposite New RTO">Comfort Inn Donil,Opposite New RTO</option>';
				str+='<option value="Lakshmi Villas Palace ,Ajwa Road">Lakshmi Villas Palace ,Ajwa Road</option>';
				str+='<option value="Sevasi Party Plot,Near Bhimpyra Chokdi">Sevasi Party Plot,Near Bhimpyra Chokdi</option>';
		}
		else if(val=="surat")
		{
				str+='<option value="Uma Bhavan Hall,Opposite Silver Point">Uma Bhavan Hall,Opposite Silver Point</option>';
				str+='<option value="AXN Resort,Near Kinnery Cinema">AXN Resort,Near Kinnery Cinema</option>';
				str+='<option value="Rajadhiraj Farm,Pramukh Darshan Society">Rajadhiraj Farm,Pramukh Darshan Society</option>';
		}
		else if(val=="bhuj")
		{
				str+='<option value="Viram Hotel & Party Plot,Near Jublee Ground">Viram Hotel & Party Plot,Near Jublee Ground</option>';
				str+='<option value="Regenta Resort,Mirjapar Highway">Regenta Resort,Mirjapar Highway</option>';
		}

		document.getElementById('Venue').innerHTML=str;
	}
</script>	

<CENTER>
</CENTER>