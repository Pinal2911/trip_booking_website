  <?php include"config.php";

$delete1 = mysqli_query($connect,"Update tbl_transport_mode set fld_transport_delete='1' where fld_transport_id='".$_GET['delete_id']."'")or die(mysqli_error($connect));        

// $delete2 = mysqli_query($connect,"Update tbl_pdf_file set pdf_file_delete='1' where fld_sample_title_id='".$_GET['delete_id']."'")or die(mysqli_error($connect));        


$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Details Deleted Sucessfully');";
            echo 'window.location.href = "transport_mode_view.php";';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Details Not Delete');";
            echo 'window.location.href = "transport_mode_view.php";';
            echo "</script>";
             
             }

             ?>