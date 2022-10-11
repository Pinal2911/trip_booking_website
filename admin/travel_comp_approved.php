<?php 
include "config.php";



	$fghjg=mysqli_query($connect,"Update tbl_travel_company set fld_travel_comp_status='approved' where fld_travel_comp_id='".$_GET['a_id']."'") or die(mysqli_error($connect));


	if($fghjg)
		{
				echo "<script>";
				echo "alert('approved By admin');";
				echo "window.location.href='travel_comp_approve.php'";
				// echo "window.location.href='view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='travel_comp_approve.php;";
				echo "</script>";
			}
?>