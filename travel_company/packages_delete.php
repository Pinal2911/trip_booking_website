<?php 
include "config.php";
if(isset($_GET['id']))
{
	$del=mysqli_query($connect,"update tbl_package set fld_package_delete=1 where fld_package_id='".$_GET['id']."'") or die(mysqli_error($connect));

		$back="javascript:history.back()";
		if($del)
			{
				echo "<script>";
				echo "alert('package Deleted');";
				echo "window.location.href='packages_view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='packages_view.php';";
				echo "</script>";
			}
}
?>