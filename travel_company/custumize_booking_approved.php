<?php  
		include "config.php";
			$update=mysqli_query($connect,"update tbl_custumize_booking set fld_booking_status='Approved' where fld_booking_id='".$_GET['id']."' ;") or die(mysqli_error($connect));

			if($update)
			{
				echo "<script>";
				echo "alert('Booking Approved Sucessfully');";
				echo "window.location.href='custumize_booking_approved_view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='custumize_booking_approved_view.php';";
				echo "</script>";
			}
?>