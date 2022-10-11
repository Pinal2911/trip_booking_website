<?php  
		include "config.php";
			$update=mysqli_query($connect,"update tbl_package set fld_package_status=1 where fld_package_id='".$_GET['id']."' ;") or die(mysqli_error($connect));

			if($update)
			{
				echo "<script>";
				echo "alert('Package Approved Sucessfully');";
				echo "window.location.href='packages_approved_view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='packages_approved_view.php';";
				echo "</script>";
			}
?>