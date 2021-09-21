<?php

					if(isset($_POST['cancelAll']))
					{
						require('connection.php');
						if(!empty($_POST['myCheck']))
						{
							foreach($_POST['myCheck'] as $ticket)
							{
								
								$qry="DELETE FROM `tbl_passenger` WHERE `seatNo`=".$ticket;
								echo $qry;
								mysqli_query($con,$qry);
							}
							echo "<script>alert('Ticket Cancelled...');</script>";
							header('location:cancelTicket.php');
						}

					}
					else
						echo "<script>alert('Ticket Not Checked...');</script>";
?>