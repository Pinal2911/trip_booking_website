<?php

	include "config.php";

	
	    $view_l=mysqli_query($connect,"select * from tbl_tour_location where fld_loc_id='".$_POST['location']."'");
	    $fetch_l=mysqli_fetch_array($view_l);

	    $view_h=mysqli_query($connect,"select * from tbl_room where fld_room_id='".$_POST['room']."'");
	    $fetch_h=mysqli_fetch_array($view_h);

	    $view_t=mysqli_query($connect,"select * from tbl_transport_mode where fld_transport_id='".$_POST['transport']."'");
	    $fetch_t=mysqli_fetch_array($view_t);

	   echo $amount=$fetch_l['fld_loc_rate_from_mumbai']+$fetch_h['fld_room_rate']+$fetch_t['fld_transport_rate'];
	            	
?>
		
