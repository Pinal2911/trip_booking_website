    <?php include"config.php"; ?>
  <?php
                                    
            if (isset($_POST['update'])) 
            {
                extract($_POST);

                $loc_name=$_POST['fld_spot_name'];
                $coulmn=array();
            $query1=mysqli_query($connect,"select * from tbl_spot where fld_spot_id!='".$_GET['update_id']."' and fld_spot_name='".$_POST['fld_spot_name']."' ");
            $total=mysqli_num_rows($query1);
           if ($total==1) 
          {
            echo '<script type="text/javascript">'; 
              echo "alert('AllReady Exist');";
            echo "window.location.href='spot_view.php';";
            echo '</script>'; 
          }    
            else{           

                        $query="update tbl_spot set 
                                fld_spot_name='".$_POST['fld_spot_name']."', 
                                fld_loc_id='".$fld_loc_id."',
                                fld_spot_distance='".$fld_spot_distance."',
                                fld_spot_description='".$fld_spot_description."'
                               
                                where fld_spot_id ='".$_GET['update_id']."'";
                        // echo $query."<br>";
                        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                      echo "$row";
                        if ($row)
                        {
                            echo "<script>";
                            echo "alert('Updated Successfully');";
                            echo "window.location.href='spot_view.php';";
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

