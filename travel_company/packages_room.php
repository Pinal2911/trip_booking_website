<?php

	include "config.php";

	if(isset($_POST["hotel"]))
	{
		$str="select * from tbl_room where
			 fld_hotel_id='".$_POST['hotel']."'";
		$select1=mysqli_query($connect,$str) or die(mysqli_error($connect));
?>
			<option label="Choose one"></option>
		
<?php 	  
		 while($row=mysqli_fetch_array($select1))
		{
?>
			<option value="<?php echo $row['fld_room_id'];?>"><?php echo $row['fld_room_bed_type'];?> </option>
<?php

		}
	}	 
		
?>