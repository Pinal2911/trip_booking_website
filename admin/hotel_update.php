    <?php include"config.php"; ?>
  <?php
                                    
            if (isset($_POST['update'])) 
            {
                extract($_POST);

                        $query="update tbl_hotel set 
                                fld_hotel_name='$fld_hotel_name', 
                                fld_loc_id='".$fld_loc_id."',
                                fld_hotel_address='".$fld_hotel_address."'
                                where fld_hotel_id ='".$_GET['update_id']."'";
                        // echo $query."<br>";
                        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                      echo "$row";
                        if ($row)
                        {
                            echo "<script>";
                            echo "alert('Updated Successfully');";
                            echo "window.location.href='hotel_view.php';";
                            echo "</script>";                 
                        }
                        else
                        {
                            echo "<script>";
                            echo "alert('Error');";
                            echo "</script>";
                        }
                    }
            
                                ?>

