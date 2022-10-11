<?php 
include "config.php";
if(isset($_GET['id']))
{
	
	$del=mysqli_query($connect,"delete from tbl_booking where fld_booking_id='".$_GET['id']."'") or die(mysqli_error($connect));

	$back="javascript:history.back()";
	if($del)
		{
				echo "<script>";
				echo "alert('Record Deleted');";
				echo "window.location.href='booking_view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='booking_view.php';";
				echo "</script>";
			}
}
?>