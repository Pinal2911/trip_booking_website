<?php

	include "config.php";

	if(isset($_POST["hotel"]))
	{
		$str="select f.*,t.* from tbl_food f,tbl_food_type t where
			 f.fld_food_type=t.fld_food_type and f.fld_hotel_id='".$_POST['hotel']."' group by t.fld_food_type order by t.fld_food_type asc";
		$select1=mysqli_query($connect,$str) or die(mysqli_error($connect));
?>
			<option label="Choose one"></option>
		
<?php 	  
		 while($row=mysqli_fetch_array($select1))
		{
?>
			<option value="<?php echo $row['fld_food_type'];?>"><?php echo $row['fld_food_type_name'];?> </option>
<?php

		}
	}	 
		
?>