<?php

	include "config.php";

	if(isset($_POST["food_type"]))
	{
		$str="select * from tbl_food where fld_food_type='".$_POST['food_type']."'";
		$select1=mysqli_query($connect,$str) or die(mysqli_error($connect));
?>
			<option label="Choose one"></option>
		
<?php 	  
		 while($row=mysqli_fetch_array($select1))
		{
?>
			<option value="<?php echo $row['fld_food_id'];?>"><?php echo $row['fld_food_name'];?> </option>
<?php

		}
	}	 
		
?>