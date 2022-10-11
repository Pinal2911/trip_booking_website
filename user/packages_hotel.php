<?php

	include "config.php";

	if(isset($_POST["location"]))
	{
		$str="select * from tbl_hotel where fld_loc_id='".$_POST['location']."' ";
		$select1=mysqli_query($connect,$str) or die(mysqli_error($connect));
?>
			<option label="Choose one"></option>
		
<?php 	  
		 while($row=mysqli_fetch_array($select1))
		{
?>
			<option value="<?php echo $row['fld_hotel_id'];?>"><?php echo $row['fld_hotel_name'];?> </option>
<?php

		}
	}	 
		
?>