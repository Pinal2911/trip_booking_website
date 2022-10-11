<?php 
include "config.php";



	$fghjg=mysqli_query($connect,"Update tbl_package set fld_package_status='Approved' where fld_package_id='".$_GET['id']."'") or die(mysqli_error($connect));


	if($fghjg)
		{
				echo "<script>";
				echo "alert('Approved By Admin');";
				echo "window.location.href='packages_approved_view.php'";
				// echo "window.location.href='view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='packages_approved_view.php;";
				echo "</script>";
			}
?>