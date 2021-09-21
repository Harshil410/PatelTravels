<?php
	if(isset($_POST['payment']))
	{
		
		require('connection.php');
		$name = $_POST['txtName'];
		$mobile = $_POST['txtNo'];
		$eml = $_POST['txtEml'];
		$rmrk = $_POST['txtRmrk'];
		$seats = $_POST['seatlst'];
		$payOpt = $_POST['pay_opt'];
		
		$id = $_GET['id'];
		$dt = $_GET['dt'];
		$frm = $_GET['frm'];
		$to = $_GET['to'];
		$dep = $_GET['dep'];
		$arr = $_GET['arr'];
		
		$qry1="select bus_fare from tbl_bus_sch where bus_frmCt='".$frm."' AND bus_toCt='".$to."'";
		$row1 = mysqli_query($con,$qry1);
		$data1=mysqli_fetch_array($row1);
		
		$qry2="SELECT max(passId)+1 FROM `tbl_passenger`";
		$row2=mysqli_query($con,$qry2);
		$data2=mysqli_fetch_array($row2);
				echo $data2[0];
		echo $name." ".$mobile." ".$eml." ".$rmrk." ".$seats." ".$payOpt." ".$data1[0]." ".$dt." ".$frm." ".$to." ".$dep." ".$arr."<br><br>";
			
		$seatList = explode(",",$seats);
		
		
		foreach($seatList as $i)
		{
			$qry = "INSERT INTO `tbl_passenger`(`passId`, `seatNo`, `tickDate`, `fromCity`, `toCity`, `depTime`, `arrTime`, `passName`, `mobileNo`, `email`, `paymentOpt`, `farePaid`, `remark`) VALUES 
			($data2[0],$i,'$dt', '$frm','$to','$dep','$arr','$name',$mobile,'$eml','$payOpt',$data1[0],'$rmrk')";
			echo $qry."<br>";
			$row = mysqli_query($con,$qry);
		}
		header('location:booking.php?id='.$id.' & dt='.$dt);
	}
?>