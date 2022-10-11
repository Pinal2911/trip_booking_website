<?php

	include "config.php";

	if(isset($_POST["hotel"]))
	{
		$str="select * from tbl_food_type where fld_hotel_id='".$_POST['hotel']."' group by fld_food_type_name order by fld_food_type_name asc";
		$select1=mysqli_query($connect,$str) or die(mysqli_error($connect));
?>
			<option label="Choose one"></option>
		
<?php 	  
		 while($row=mysqli_fetch_array($select1))
		{
?>
			<option value="<?php echo $row['fld_food_type_id'];?>"><?php echo $row['fld_food_type_name'];?> </option>
<?php

		}
	}	 
		
?>