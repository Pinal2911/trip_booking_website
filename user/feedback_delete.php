<?php 
include "config.php";
if(isset($_GET['id']))
{
	$del=mysqli_query($connect,"delete from tbl_user_feedback where fld_feedback_id='".$_GET['id']."'") or die(mysqli_error($connect));

		$back="javascript:history.back()";
		if($del)
			{
				echo "<script>";
				echo "alert('Feedback Deleted');";
				echo "window.location.href='feedback_view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='feedback_view.php';";
				echo "</script>";
			}
}
?>