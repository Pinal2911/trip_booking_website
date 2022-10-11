  <?php include"config.php";

$delete1 = mysqli_query($connect,"delete from tbl_spot where fld_spot_id='".$_GET['delete_id']."'")or die(mysqli_error($connect));        

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Details Deleted Sucessfully');";
            echo 'window.location.href = "spot_view.php";';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Details Not Delete');";
            echo 'window.location.href = "spot_view.php";';
            echo "</script>";
             
             }

             ?>