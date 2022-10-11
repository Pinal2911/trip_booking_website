<?php 
	
	$connect = mysqli_connect("localhost","root","","travel_mgt")or die(mysqli_error($connect));

	if ($connect)
	 {
		//echo "Datebase connected";

	 }
	else
		{
			echo "Error Please Check The Connectivity!";
	 		
		 } 


 ?>
