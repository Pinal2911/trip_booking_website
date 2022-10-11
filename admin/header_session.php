<?php 
	session_start();

	if (!isset($_SESSION['id']))
			{
				echo "<script>";
				echo "window.location.href='index.php';";
				echo "</script>";
			}
 ?>