    <?php include"config.php"; ?>
  <?php
                                    
            if (isset($_POST['update'])) 
            {
                extract($_POST);

                $loc_name=$_POST['fld_loc_name'];
                $coulmn=array();
                $query1=mysqli_query($connect,"select * from tbl_tour_location where fld_loc_id!='".$_GET['update_id']."' and fld_loc_name='".$_POST['fld_loc_name']."'");
                $total=mysqli_num_rows($query1);
               if ($total==1) 
                  {
                    echo '<script type="text/javascript">'; 
                      echo "alert('All Ready Exist');";
                    echo "window.location.href='department_view.php';";
                    echo '</script>'; 
                  }    
                else{           

                        $query="update tbl_tour_location set 
                                fld_loc_name='".$_POST['fld_loc_name']."', 
                                fld_loc_country='".$fld_loc_country."',
                                fld_loc_state='".$fld_loc_state."',
                                fld_loc_description='".$fld_loc_description."',
                                fld_loc_rate_from_mumbai='".$fld_loc_rate_from_mumbai."'
                                where fld_loc_id ='".$_GET['update_id']."'";
                        // echo $query."<br>";
                        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                      echo "$row";
                        if ($row)
                        {
                            echo "<script>";
                            echo "alert('Updated Successfully');";
                            echo "window.location.href='tour_location_view.php';";
                            echo "</script>";                 
                        }
                        else
                        {
                            echo "<script>";
                            echo "alert('Error');";
                            echo "</script>";
                        }
                    }
            }
                                ?>

