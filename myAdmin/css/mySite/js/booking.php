<html>
	<head>
		<title>HOME | PATEL TRAVELS</title>
		<link rel="stylesheet" href="css/style_header.css">
		<link rel="stylesheet" href="css/stylebus.css">
		<script type="text/javascript" src="js/busJs.js"></script>
	</head>	

<body onload="seatImg()" >

<!--   Site's Header with Menu   -->
<div class="mySiteHeader">
	<div class="headerShadow"><span class="shadowHeader"><CENTER>PATEL TRAVELS</CENTER></span></div>
<?php
require('header.php');				
?>
</div>

<!--   Site's Content   -->

<div style="background-color:white;margin-top:-55px;background-image:url('32.jpg');fixed;background-position:420% 50%;background-repeat:no-repeat;background-size: 1500px 1000px;">
<center>
	<br><br>
	<table cellspacing=10 cellpadding=10>
	<tr>
		<td style="border:3px solid silver;border-radius:20">Select Cities
		<td> <hr width=170>
		<td style="border:3px solid silver;border-radius:20">Select Bus
		<td><hr width=170>
		<td style="font-family:verdana;font-size:13px;background-color:silver;border-radius:20;color:white;">Basic Information
	</tr>
	</table>

	<div> <!-- Bus -> Passenger Information -> Route Information Table Div -->
	
	
	<table style="border:0px solid white">
		
		<tr>
		<td align="center" valign="center">
		
		<img src="img/seatreserved.png">
		<span style="font-family:TIMES NEW ROMAN;font-size:18px">Reserved Seats</span>
		<span style="font-family:TIMES NEW ROMAN;font-size:38px;color:blue">|</span>
		<img src="img/seat.png">
		<span style="font-family:TIMES NEW ROMAN;font-size:18px">Empty Seats</span>
		<span style="font-family:TIMES NEW ROMAN;font-size:38px;color:blue">|</span>
		<img src="img/seatselected.png">
		<span style="font-family:TIMES NEW ROMAN;font-size:18px">Selected Seats</span>
		
			<table width="170px" border="0" cellpadding="20" style="margin-top:5px;padding:5px 100px 5px 100px;">
			<tr>
			<td style="width:145px;">

						<div id="Lower" class="charttable" style="width:170px;">
										
									<table id="Tblbus" cellpadding="1" style="margin-left:5px;" cellspacing="0" width="100%">

									<tr>
									<td style="height:10px;">
									</td>
									</tr>

									<tr>
									<?php 
									for($lb=1;$lb<=5;$lb++)
									{
										if($lb!=3)
											{
									?>
										
									<td class="seating" >
									<input type="button" value="LB" class="seatconfirmed" readonly/>
									</td>
										<?php } 
											else
											{?>
												<td style="width:12px;">&nbsp;	
												</td>
										<?php }} ?>
									</tr>

									<tr>
									<td>
										
									</td>
									<td>
										
									</td>
									<td style="width:42px;">&nbsp;	
									</td>
									<td>
										
									</td>
									<td>
											
									</td>
									</tr>

									<?php
									$idseat=1;
									$seatno=1; 
									$st=1;
									require('connection.php');
									while($st<=52)
									{
									?>
									<tr>
									<td class="seating" >
									<input type="button" 
											name="s<?php echo $idseat; ?>"
											value="<?php echo $seatno; ?>" 
											onclick="book(s<?php echo $idseat; ?>)" 
											
											id="s<?php echo $idseat; ?>" 
											title="Seat-<?php echo $seatno; ?>" 
											class="seatconfirmed" 
											cursor="arrow">
										
									</td>
									<?php $idseat++; $seatno++; $st++;	?>
									<td class="seating" >
									<input type="button" 
											name="s<?php echo $idseat; ?>"
											value="<?php echo $seatno; ?>" 
											onclick="book(s<?php echo $idseat; ?>)" 
											id="s<?php echo $idseat; ?>" 
											title="Seat-<?php echo $st; ?>" 
											class="seatconfirmed" 
											cursor="arrow">
										
									</td>
									<td class="seating" >&nbsp;</td>
									<?php $idseat++; $seatno++; $st++;	?>
									<td class="seating" >
									<input type="button" 
											name="s<?php echo $idseat; ?>"
											value="<?php echo $seatno; ?>" 
											onclick="book(s<?php echo $idseat; ?>)" 
											id="s<?php echo $idseat; ?>" 
											title="Seat-<?php echo $st; ?>" 
											class="seatconfirmed" 
											cursor="arrow">
										
									</td>
									<?php $idseat++; $seatno++; $st++;	?>
									<td class="seating" >
									<input type="button" 
											name="s<?php echo $idseat; ?>"
											value="<?php echo $seatno; ?>" 
											onclick="book(s<?php echo $idseat; ?>)" 
											id="s<?php echo $idseat; ?>" 
											title="Seat-<?php echo $idseat; ?>" 
											class="seatconfirmed" 
											cursor="arrow">
										
									</td>
									</tr>
									<?php $idseat++; $seatno++; $st++;	

									}
									?>
								</table> <!-- TBLBUS --> 
						</div>

			</table>
		</td>
		<?php 
			$id=$_GET['id'];
			require('connection.php');
			$qry="select * from tbl_bus_sch where bus_id='$id'";
			$result=mysqli_query($con,$qry);
			while($data=mysqli_fetch_array($result)){
				$frm=$data[1];
				$to=$data[2];
				$dep=$data[3];
				$arr=$data[4];
			}
			?>
		<td style="border-left:1px solid blue">
				<div style="padding-left:10px;padding-right:10px;padding-bottom:40px;opacity:0.8;color:white;font-family:verdana;font-size:15px">
					<table cellspacing=12.5>
					<form action="finalBook.php?dt=<?php echo $_GET['dt']; ?> & frm=<?php echo $frm; ?> & to=<?php echo $to; ?> & dep=<?php echo $dep; ?> & arr=<?php echo $arr; ?> & id=<?php echo $id?>" method=POST>
						<caption><hr>Passenger Information<hr></caption>
						<tr><td colspan=2><input type=text name=txtName placeholder="NAME" tabindex=1 class="indexCal" style="background-color:transparent" required></td></tr>
						
						<tr><td colspan=2><input type=text name=txtNo placeholder="MOBILE NO." tabindex=2 class="indexCal" style="background-color:transparent" required></td></tr>
						
						<tr><td colspan=2><input type=text name=txtEml placeholder="EMAIL" tabindex=3 class="indexCal" style="background-color:transparent" required></td></tr>
						
						<tr><td colspan=2><input type=text name=txtRmrk placeholder="REMARK" tabindex=4 class="indexCal" style="background-color:transparent" required></td></tr>
						
						<tr><td colspan=2><input type=text name=seatlst id=seatlst placeholder="Selected Seats" class="indexCal" style="background-color:transparent" readonly required></td></tr>
						
						<tr><td style="font-size:10px">
						<select name="pay_opt" tabindex=5 style="width:100%; background-color:transparent" required>
							<option value="">- Payment Option -</option>
							<option>Payment Via credit Card</option>
							<option>Payment Via Debit Card</option>
						</select>
					</th>
					<tr>
					<td><input type="submit" onclick="finalBook()" value="Make Payment" name="payment" tabindex=8 class="btnCheckBus" style="background-color:transparent"></td>	
					</tr>
					</tr>
					<tr><td>
					</table>
					
				</div>
		</td>
		<td style="padding-bottom:20px;border-left:1px solid blue;opacity:0.8;color:white;font-family:verdana;font-size:10px">
			<table cellspacing=20 style="font-family:verdana;font-size:18px;margin-left:10px">
			<td colspan="4" align="center"><hr>Route Information<hr></caption>
			<tr><td colspan=4 align=center><span style="color:red;text-shadow:3px 1.5px 1px silver">Date : </span><u><?php $dt = $_GET['dt']; 
							echo $dt;
					?></u>
			<tr>
				<td><span style="color:darkblue;text-shadow:3px 1.5px 1px silver">From City</span>
				<td><span style="color:darkblue;text-shadow:3px 1.5px 1px silver">To city</span>
				<td><span style="color:darkblue;text-shadow:3px 1.5px 1px silver">Departure</span>
				<td><span style="color:darkblue;text-shadow:3px 1.5px 1px silver">Arrival</span>
				
			</tr>

			<?php
				$qry="select * from tbl_bus_sch where bus_id='$id'";
				$result=mysqli_query($con,$qry);
				while($data=mysqli_fetch_array($result)){
				
			?>
				<tr class="showBus">
				<td><?php $frm=$data[1]; echo $frm; ?>
				<td><?php $to=$data[2]; echo $to; ?>
				<td><?php $dep=$data[3]; echo $dep; ?>
				<td><?php $arr=$data[4]; echo $arr; ?>
				</tr>
			<?php		
				}
			?>
			
		<tr>
		<td colspan=4>
			<table>
			<tr>
			<td style="margin-top:-1px; padding-bottom:0px;" >
						 <table style="color:#5e5e5e;" cellpadding="5" cellspacing="0">
						
							<tr>
									<td>
									Seats&nbsp;:&nbsp;   &nbsp;   &nbsp;   
									<span id="TxtSeats" style="display:inline-block;height:21px;width:200px;border-bottom:solid 1px #CFCFCF; padding:0!important; overflow:hidden; ">
									</span>		    
									</td>
									</tr>
									<tr>
									<td>
									 Amount&nbsp;:&nbsp;&nbsp;   
									<span id="TxtAmt" class="TxtAmt" style="display:inline-block;height:21px;width:200px;border-bottom:solid 1px #CFCFCF; padding:0!important; text-align:left; ">
									</span>
									</td>		    		   		    
									</tr>
									
									<td height="27px" align="left">&nbsp;
									<input type="hidden" name="noSeats" placeholder="No of Selected Seats" id="noSeats" value="" class="indexCal" readonly ><br>
									<input type="hidden" name="seatAmt" placeholder="Amount" id="seatAmt" value="" class="indexCal" readonly><br>
									<table>
									<caption><hr>Payment Details<hr></caption>
									<tr><td>
										<input type="text" name="txtCardNo" placeholder="Credit/Debit Card No" tabindex=5 class="indexCal" style="background-color:transparent" required>
									<tr><td>
										<input type="text" name="txtExpDt" placeholder="MM/YYYY" tabindex=6 class="indexCal" style="background-color:transparent" required>
									<tr><td>
										<input type="password" name="txtCardCod" placeholder="CVV" tabindex=7 class="indexCal" style="background-color:transparent" required>
									<tr><td><br></td></tr>
									</table>
									</td>		    		   		    
									</tr>
						</table> 
			</td>
			</tr>
			</table>
		</div>
		</table>
		</td>
		
		</table>
	<br>
	<select id="sel">
			<?php
				require('connection.php');
				$qry="select seatNo from `tbl_passenger` where `tickDate` = '".$dt."' AND fromCity='".$frm."' AND toCity='".$to."' AND depTime='".$dep."' AND arrTime='".$arr."'";
				$row = mysqli_query($con,$qry);
				while($data=mysqli_fetch_array($row))
				{
					?>
					<option name="opt<?php echo $data[0]; ?>" value="<?php echo $data[0]; ?>"><?php echo $data[0]; ?></option>
					<?php
				}
				
				
			?>
	</select>
	</div> <!-- Bus -> Passenger Information -> Route Information Table Div -->

	</div>

</div><!-- Main Content Div -->
<?php
	if(isset($_POST['payment']))
	{
		header('location:finalBook.php?dt='.$dt.'? frm='.$frm.'? to='.to);
	}
	require('footer.php');
?>