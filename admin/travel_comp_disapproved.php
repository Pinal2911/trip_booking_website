<?php 
include "config.php";



	$fghjg=mysqli_query($connect,"Update tbl_travel_company set fld_travel_comp_status='disapproved' where fld_travel_comp_id='".$_GET['a_id']."'") or die(mysqli_error($connect));


	if($fghjg)
		{
				echo "<script>";
				echo "alert('Disapproved By Admin');";
				echo "window.location.href='Travel_comp_disapprove.php'";
				// echo "window.location.href='view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='Travel_comp_disapprove.php;";
				echo "</script>";
			}
?>