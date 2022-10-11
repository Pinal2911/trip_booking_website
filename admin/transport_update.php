    <?php include"config.php"; ?>
  <?php
                                    
            if (isset($_POST['update'])) 
            {
                extract($_POST);

                        

                        $query="update tbl_transport_mode set 
                                fld_loc_id='".$_POST['fld_loc_id']."', 
                                fld_transport_rate='".$fld_transport_rate."'
                                where fld_transport_id ='".$_GET['update_id']."'";
                        // echo $query."<br>";
                        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                      // echo "$row";
                        if ($row)
                        {
                            echo "<script>";
                            echo "alert('Updated Successfully');";
                            echo "window.location.href='transport_mode_view.php';";
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

