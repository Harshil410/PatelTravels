<html>
	<head>
		<title>HOME | Eagle Corporation Pvt Ltd</title>
		<link rel="stylesheet" href="css/style_header.css">
		<link rel="stylesheet" href="css/styleBus.css">
		<script src="js/busJs.js"></script>
	</head>	

<body style="background-color:silver">

<!--   Site's Header with Menu   -->
<div class="mySiteHeader">
	<div class="headerShadow"><span class="shadowHeader">Eagle Travels</span></div>
<?php
require('header.php');
?>
</div>

<!--   Site's Content   -->

<div style="background-color:white;margin-top:-55px;"> <!-- Main Content Div -->


<br><br><br>

<centeR>

<div> <!-- Bus -> Passenger Information -> Route Information Table Div -->
	<table style="border:0px solid white">
		<tr>
		<td>
			<table width="170px" border="0" cellpadding="10" style="margin-top:5px;padding:5px 100px 5px 100px;">
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
												<td style="width:42px;">&nbsp;	
												</td>
										<?php }} ?>
									</tr>

									<tr>
									<td>
									<input type="button" name="s1" value="C" id="s1" class="seatconfirmed" cursor="arrow" readonly style="background-image:url('img/seat.png')">
									</td>
									<td class="seating" >
									<input type="button" name="s2" value="D" id="s2" class="seatconfirmed" cursor="arrow" readonly style="background-image:url('img/seat.png')">
									</td>
									<td style="width:42px;">&nbsp;	
									</td>
									<td class="seating" >
									<input type="button" name="s3" value="A" id="s3" class="seatconfirmed" cursor="arrow" readonly style="background-image:url('img/seat.png')">
									</td>
									<td class="seating">
									<input type="button" name="s4" value="B" id="s4" class="seatconfirmed" cursor="arrow" readonly style="background-image:url('img/seat.png')">
									</td>
									</tr>

									<?php
									$idseat=5;
									$seatno=1; 
									$st=1;
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
											cursor="arrow" style="background-image:url('img/seat.png')">
										
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
											cursor="arrow" style="background-image:url('img/seat.png')">
										
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
											cursor="arrow" style="background-image:url('img/seat.png')">
										
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
											cursor="arrow" style="background-image:url('img/seat.png')">
										
									</td>
									</tr>
									<?php $idseat++; $seatno++; $st++;	

									}
									?>
								</table> <!-- TBLBUS --> 
						</div>

			</table>
		</td>
		<td style="border-left:1px solid blue">
				<div style="padding-left:10px;opacity:0.8;color:white;font-family:verdana;font-size:10px">
					<table cellspacing=12.5 style="padding:">
					<form action="" method=POST>
						<caption>Passenger Information</caption>
						<tr><td colspan=2><input type=text name=txtName placeholder="NAME" class="indexCal"></td></tr>
						
						<tr><td colspan=2><input type=text name=txtNo placeholder="MOBILE NO." class="indexCal"></td></tr>
						
						<tr><td colspan=2><input type=text name=txtEml placeholder="EMAIL" class="indexCal"></td></tr>
						
						<tr><td colspan=2><input type=text name=txtRmrk placeholder="REMARK" class="indexCal"></td></tr>
						
						<tr><td>
							<span style="font-size:12px">*List of Selected Seats : </span><br>
							<select id="seatlist" name="seatlist" style="padding:5px 120px 5px 5px" readonly>
								</select>
						<tr><td style="font-size:10px">
						<select name="brd_point" style="width:102%;">
							<option>- Boarding point -</option>
							<option>Paldi office : 05:30AM</option>
							<option>Satellite Office : 05:45AM</option>
							<option>SG Highway : 06:00AM</option>
						</select>
						
						<tr><td style="font-size:10px">
						<select name="pay_opt" style="width:102%;">
							<option>- Payment Option -</option>
							<option>Payment Via credit Card</option>
							<option>Payment Via Debit Card</option>
						</select>
					</th>
					</tr>
					</table>
					
				</div>
		</td>
		<td style="padding-bottom:20px;border-left:1px solid blue">
			<table cellspacing=20>
			<caption>Route Information</caption>
			<tr>
				<td style="border:1px solid;padding:5px 5px 5px 5px">From City
				<td style="border:1px solid;padding:5px 5px 5px 5px">To city
				<td style="border:1px solid;padding:5px 5px 5px 5px">Departure
				<td style="border:1px solid;padding:5px 5px 5px 5px">Arrival
				
			</tr>

			<?php
				$id=$_GET['id'];
				require('connection.php');
				$qry="select * from tbl_bus_sch where bus_id='$id'";
				$result=mysqli_query($con,$qry);
				while($data=mysqli_fetch_array($result)){
				
			?>
				<tr class="showBus">
				<td><?php $frm=$data[1]; echo $frm;?>
				<td><?php $to=$data[2]; echo $to;?>
				<td><?php echo $data[3]; ?>
				<td><?php echo $data[4]; ?>
				</tr>
			<?php		
				}
			?>
			
		<tr>
		<td colspan=4>
			<table>
			<tr>
			<td style="margin-top:-1px; padding-bottom:0px;" >
						 <table style="color:#5e5e5e;" cellpadding="0" cellspacing="0">
						
							<tr>
									<td>
									Seats&nbsp;:&nbsp;
									<span id="TxtSeats" style="display:inline-block;height:21px;width:200px;border-bottom:solid 1px #CFCFCF; padding:0!important; overflow:hidden; ">
									</span>		    
									</td>
									</tr>
									<tr>
									<td>
									 Amount&nbsp;:&nbsp;
									<span id="TxtAmt" class="TxtAmt" style="display:inline-block;height:21px;width:200px;border-bottom:solid 1px #CFCFCF; padding:0!important; text-align:left; ">
									
									</span>
									</td>		    		   		    
									</tr>
									<tr>
									<td>
									Discount&nbsp;:&nbsp;
									
									<span id="lblDiscount" style="display:inline-block;height:21px;width:45px;border-bottom:solid 1px #CFCFCF;text-align:center;padding:0!important; ">
									
									</span>
									</td>		    		   		    
									</tr>
									
									 </tr>
									<td height="27px" align="left">&nbsp;
									<input type="hidden" name="noSeats" placeholder="No of Selected Seats" id="noSeats" value="" class="indexCal" readonly ><br>
									<input type="hidden" name="seatAmt" placeholder="Amount" id="seatAmt" value="" class="indexCal" readonly><br>
									<tr><td>
										<input type="text" name="txtCardNo" placeholder="Credit/Debit Card No" class="indexCal">
									<tr><td>
										<input type="text" name="txtExpDt" placeholder="Expiry Date" class="indexCal">
									<tr><td>
										<input type="text" name="txtCardCod" placeholder="Card Digit Code" class="indexCal">
									<tr><td><br></td></tr>
									<td><input type="submit" value="Make Payment" name="payment" class="btnCheckBus"></td>
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
	<br><br><bR>

	</div> <!-- Bus -> Passenger Information -> Route Information Table Div -->

</div><!-- Main Content Div -->
<?php
	require('footer.php');
	if(isset($_POST['payment']))
	{
		$name = $_POST['txtName'];
		$mobile = $_POST['txtNo'];
		$eml = $_POST['txtEml'];
		$rmrk = $_POST['txtRmrk'];
		$seats = $_POST['seatlist'];
		$brdPoint = $_POST['brd_point'];
		$payOpt = $_POST['pay_opt'];
		$cardNo = $_POST['txtCardNo'];
		$expDt = $_POST['txtExpDt'];
		$cardCode = $_POST['txtCardCod'];
		$amount = $_POST['seatAmt'];
		
		require('connection.php');
		
		$qry = "INSERT INTO `tbl_passenger`(`id`, `passId`, `seatNo`, `fromCity`, `toCity`, `passName`, `mobileNo`, `email`, `paymentOpt`, `farePaid`, `boardingPnt`, `remark`) VALUES";
		$qry += "(3,2,$seats,`$frm`,`$to`,`$name`,$mobile,`$eml`,`$payOpt`,$amount,`$brdPoint`,`$rmrk`)";
		
		$row = mysqli_query($con,$qry);
		echo "Booked Ticket...";
	}

?>