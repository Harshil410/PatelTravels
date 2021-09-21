<html>
	<head>
		<title>HOME | Eagle Corporation Pvt Ltd</title>
		<link rel="stylesheet" href="css/styleBus.css">
		<script src="js/busJs.js"></script>
	</head>	

<body>

<div style="border:5px dotted red">

<table width="170px" border="0" cellpadding="10" style="margin-top:5px;" >
<tr>
<td style="width:145px;">

		<div id="Lower" class="charttable" style="width:170px;">
						
					<table id="Tblbus" cellpadding="0" style="margin-left:5px;border:2px dotted red" cellspacing="0" width="100%">

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
					<td class="seating" >
					<input type="button" name="s1" value="C" id="s1" class="seatconfirmed" cursor="arrow" readonly/>
					</td>
					<td class="seating" >
					<input type="button" name="s2" value="D" id="s2" class="seatconfirmed" cursor="arrow" readonly />
					</td>
					<td style="width:42px;">&nbsp;	
					</td>
					<td class="seating" >
					<input type="button" name="s3" value="A"" id="s3" class="seatconfirmed" cursor="arrow" readonly />
					</td>
					<td class="seating">
					<input type="button" name="s4" value="B" id="s4" class="seatconfirmed" cursor="arrow" readonly />
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
							cursor="arrow" />
						
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
							cursor="arrow" />
						
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
							cursor="arrow" />
						
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
							cursor="arrow" />
						
					</td>
					</tr>
					<?php $idseat++; $seatno++; $st++;	

					}
					?>
				</table> <!-- TBLBUS --> 
		</div>


		<table style="margin-left:370px">

		<tr><td>
		<hr style="border-bottom:dashed 1px #ccc; color:#fff; width:250px;margin-top:10px; " />
		</td>
		</tr>
		<tr>

		<td style="margin-top:-1px; padding-bottom:0px; width:250px" >
					 <table style="color:#5e5e5e;" cellpadding="0" cellspacing="0">
								<tr">
								<td align="right">
								Seats&nbsp;:&nbsp;
								</td>
								<td height="27px" align="left">&nbsp;
								<span id="TxtSeats" class="TxtSeats" style="display:inline-block;height:21px;width:200px;border-bottom:solid 1px #CFCFCF; padding:0!important; overflow:hidden; ">
								</span>		    
								</td>
								</tr>
								<tr>
								<td align="right">
								 Amount&nbsp;:&nbsp;
								</td>		    
								<td height="27px" align="left" >&nbsp;
								<span id="TxtAmt" class="TxtAmt" style="display:inline-block;height:21px;width:200px;border-bottom:solid 1px #CFCFCF; padding:0!important; text-align:left; ">
								
								</span>
								</td>		    		   		    
								</tr>
								<tr>
								<td>
								Discount&nbsp;:&nbsp;
								</td>		    
								<td height="27px" align="left">&nbsp;
								<span id="lblDiscount" style="display:inline-block;height:21px;width:45px;border-bottom:solid 1px #CFCFCF;text-align:center;padding:0!important; ">
								
								</span>
								</td>		    		   		    
								</tr>
								
								 </tr>
								<td height="27px" align="left">&nbsp;
								<form method="post">
								<input type="text" name="noSeats" id="noSeats" value=""><br>
								<input type="text" name="seatAmt" id="seatAmt" value=""><br>
								
								<select id="seatlist" style="padding:5px 120px 5px 5px">
								</select>
								<br>
								<input type="submit" name="btnInsert" value="INSERT">
								</form>
								</span>
								</td>		    		   		    
								</tr>
					</table> 
		</td>
		</tr>
		</table>
</div>
