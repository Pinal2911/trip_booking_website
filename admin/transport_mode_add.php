<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<!-- Title -->
		<title> Admin - Add Transport Mode</title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!--- Select2 css-->
<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!--- Right-sidemenu css -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--- Custom Scroll bar -->
		<link href="assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- Style css -->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/skin-modes.css" rel="stylesheet">
		<link href="assets/css/style-dark.css" rel="stylesheet">

		<!--- Animations css -->
		<link href="assets/css/animate.css" rel="stylesheet">
		
		
		<!--- Switcher css -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="assets/switcher/demo.css" rel="stylesheet">	</head>

	<body class="main-body  app dark-theme">
		
		<!-- Switcher -->
		<?php include "header.php"; ?>

		<!-- main-content opened -->
		<div class="main-content horizontal-content">

			<!-- container opened -->
			<div class="container">
									<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div>
						<h4 class="content-title mb-2">Transport Mode</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Transport Mode</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Add Transport Mode</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<a href="transport_mode_view.php"><button class="btn btn-light pd-x-20 mg-t-10" type="submit">View Transport Mode</button></a>
					</div>
				</div>
				<!-- /breadcrumb -->
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Add Transport
								</div>
								<hr>
								<form method="post" enctype="multipart/form-data" >
									<div class="row row-sm">
										
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">Location : <span class="tx-danger">*</span></label>
												<select class="form-control" name="fld_loc_id" required="" >
													<option value=""></option>
													<?php 
                                						$query1 = mysqli_query($connect,"select * from tbl_tour_location where fld_location_delete=0 order by fld_loc_name asc");
							                                while ($row=mysqli_fetch_assoc($query1)) {
							                                  extract($row);  
							                        ?>
							                        <option value="<?php echo $row['fld_loc_id'];?>"><?php echo $row['fld_loc_name']; ?></option>
                                                    <?php } ?>
                                                </select>    
											</div>
										</div>
										
										<div class="col-6">
											<div class="form-group">
												<table class="table align-items-center table-flush dataTable" role="grid" id="tb">
										            		<thead>
										            			<tr>
										            				<th><a href="javascript:void(0);" id="addMore" title="Add Location Near by Places"><i class="fas fa-plus-circle text-success"></i></a></th>
										            				<td>Transport Type :</td>
										            			</tr>
										            		</thead>
										
											<tbody>
										            			<tr>
										            				<td><a href="javascript:void(0);" class="remove" title="Remove it!"><i class="fas fa-minus-circle"></i></a></td>
										            				<td>
										            					<select class="SlectBox form-control" name="fld_transport_type[]">
										            						<option value=""></option>
										            						<option value="Air">Air</option>
										            						<option value="Railway">Railway</option>
										            						<option value="Bus">Bus</option>
																		</select>
										            				</td>
										            				
										            				<td><input type="text" name="fld_transport_rate[]" class="form-control" placeholder="Enter the Accommandating Transport Rate" required="" ></td>
										            			</tr>
										            		</tbody>
										            	</table>
											</div>
										</div>
										<div class="col-12"><hr>
											<center><button class="btn btn-main-primary pd-x-20 mg-t-10" name="submit" type="submit">Submit</button></center>
										</div>
									</div>
								</form>	
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
					<!--Sidebar-right-->
		
		<!--/Sidebar-right-->            		
<?php include "footer.php"; ?>

					<script>
						$(function() {
							$('#addMore').on('click', function() {
								var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
								data.find("input").val('');
							});
							$(document).on('click', '.remove', function() {
								var trIndex = $(this).closest("tr").index();
								if (trIndex > 0) {
									$(this).closest("tr").remove();
								} else {
									alert("Sorry!! Can't remove first row!");
								}
							});
						});

					</script>

<?php
	if(isset($_POST['submit']))
      {
          extract($_POST);
		// 	 $query="insert into tbl_transport_mode(fld_loc_id) values('$fld_loc_id')";
		// 	 $add=mysqli_query($connect,$query)or die(mysqli_error($query));

		// 	 $sel=mysqli_query($connect,"select * from tbl_transport_mode where fld_loc_id='".$fld_loc_id."' order by fld_transport_id desc limit 1");
		// $fetch=mysqli_fetch_array($sel);
		// $loc_id=$fetch['fld_loc_id'];

		$status=array();
        $total_question = count($_POST['fld_transport_type']);

        for($i=0;$i<$total_question;$i++)
        {
          if(($_POST['fld_transport_type'][$i]!="") && ($_POST['fld_transport_rate'][$i]!=""))
          {
           

             $abc="select * from tbl_transport_mode where fld_loc_id='$fld_loc_id' and fld_transport_type='".$_POST['fld_transport_type'][$i]."' and fld_transport_rate='".$_POST['fld_transport_rate'][$i]."' ";
            $nm=mysqli_query($connect,$abc);
            if(mysqli_num_rows($nm)>0)
            {
                echo "<script>";
                // echo "alert('Question Is Already Exists');";
                echo "window.location.href='question_view.php';";
                echo "</script>";
            }
         
            else
            {

              $query = "INSERT INTO tbl_transport_mode(fld_loc_id, fld_transport_type, fld_transport_rate) VALUES ( '$fld_loc_id' ,'".$_POST['fld_transport_type'][$i]."', '".$_POST['fld_transport_rate'][$i]."')" ;
              $result = mysqli_query($connect,$query)or die(mysqli_error($connect));

              if(!empty($result)) 
                  {
                     $status[]=1;
                                       
                  }
                  else
                  {
                      echo "<script>";
                       echo "alert('Room Details Not Added Successfully');";
                      // echo "window.location.href='question_view.php';";
                      echo "</script>";
                  }
            }
          }
        } 
                if ((isset($status)) &&(in_array('1', $status))) {
                    echo "<script>";
                    echo "alert('Record Inserted Successfully!');";
                    echo "window.location.href='transport_mode_view.php';";
                    echo "</script>";
                }
                else
                {
                  echo "<script>";
                  echo "alert('Record Having Error To Insert Please Check!')";
                  // echo "window.location.href='transport_mode_add.php';";
                  echo "</script>";
                }
      }
 ?>