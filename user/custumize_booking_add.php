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
		<title> Booking</title>

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
		<script type="text/javascript">
			function tot_package_rate()
			{
			
				var i1=parseInt(document.getElementById('packages_rate').value);
				var i2=parseInt(document.getElementById('adult').value);
				var i3=parseInt(document.getElementById('child').value);
				var t1=i1*i2;
				var t2=(0.5)*i1*i3;
				var total2=t1+t2;
				if(isNaN(total2)) total2=0;
				document.getElementById('total_packages_rate').value=total2.toFixed(2);	
			}
			
		</script>


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
						<h4 class="content-title mb-2">Booking</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Booking</a></li>
								<li class="breadcrumb-item active" aria-current="page">Booking Add</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						
					</div>
				</div>
				<!-- /breadcrumb -->
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<form method="POST" class="form-horizontal form-bordered" onsubmit="return validateForm()" enctype="multipart/form-data">
									<?php 
										$count=1; 
									    if(isset($_GET['id']))
										{
										 $query="select * from tbl_custumize_package where fld_custumize_id='".$_GET['id']."' order by fld_custumize_id desc";
			                         
			                             $row=mysqli_query($connect,$query) or die(mysqli_error($connect));  
		                                 $fetch=mysqli_fetch_array($row);
		                                 extract($fetch);
	                                   
									 ?>	
									<div class="pd-30 pd-sm-40 bg-gray-200">
										<h3>Billing Information</h3>
										<hr>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-12">
												<label class="form-label">Date Of Departure: <span class="tx-danger">*</span></label>
												<input class="form-control fc-datepicker" name="dep_date" placeholder="MM/DD/YYYY" type="text" required="">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-12 col-lg-12">
												<table  class="table table-hover small-text" id="tb">
														<tr class="tr-header">
															<th></th>
															<th><center>Adult :<span class="text-danger"> *</span> </center></th>
															<th><center>Child :<span class="text-danger"> *</span> </center></th>
															<th></th>
														</tr>
														<tr>
															<td></td>
															<td>
																<input type="text" class="form-control" name="adult" id="adult" placeholder="Adult" value="0" minlength="2" maxlength="2"  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" onkeyup="tot_package_rate()" required="">
																<center>12 +yrs</center>
															</td> 															
															<td>
																<input type="text" class="form-control" name="child" id="child" placeholder="Child" value="0" minlength="2" maxlength="2"  onkeyup="tot_package_rate()" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" required="">
																<center>Below 12 yrs</center>
															</td>  
															<td></td>
														</tr>                   
									            </table>
											</div>
										</div>
										<div class="table-responsive mg-t-20">
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td>Package Rate</td>
														<td class="text-right"><input type="text" name="packages_rate" id="packages_rate" class="form-control text-right" readonly="" value="<?php echo $fetch['fld_package_amt']; ?>"></td>
													</tr>
													<tr>
														<td>Total Amount</td>
														<td class="text-right mb-0"><input type="text" name="total_packages_rate" id="total_packages_rate" class="form-control text-right" readonly=""></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="row row-sm">
											<div class="col-md-6 col-lg-6">
												<div class="control-group form-group">
													<label class="form-label">Phone Number: <span class="tx-danger"> *</span></label>
													<input type="text" class="form-control required" name="phone_no" placeholder="Phone Number"  pattern="[7-9]{1}[0-9]{9}"  maxlength="10" minlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="control-group form-group">
													<label class="form-label">Email: <span class="tx-danger"> *</span></label>
													<input type="email" class="form-control required" name="user_semail" placeholder="Email Address" value="<?php echo $_SESSION['email']; ?>" readonly="">
												</div>
											</div>
										</div>
										<hr>
										<center>
											<button type="submit" name="submit" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">Book</button>
											<button type="reset" class="btn btn-dark pd-x-30 mg-t-5">Cancel</button>
										</center>
									</div>
								<?php }?>
								</form>	
								</div>
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
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		<!--- Internal Jquery.steps js -->
		<script src="assets/plugins/jquery-steps/jquery.steps.min.js"></script>
		<script src="assets/plugins/parsleyjs/parsley.min.js"></script>
		
		<script src="assets/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>
		<!--- Internal Spectrum-colorpicker js -->
		<script src="assets/plugins/spectrum-colorpicker/spectrum.js"></script>
		<!--- Select2.min js -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		<!--- Internal ion.rangeSlider.min js -->
		<script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
		<!--- Internal jquery-simple-datetimepicker js -->
		<script src="assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
		<!--- Ionicons js -->
		<script src="assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
		<!--- Internal Pickerjs js -->
		<script src="assets/plugins/pickerjs/picker.min.js"></script>
		<!-- form-elements js -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			$(function(){
			    $('#addMore').on('click', function() {
			              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
			              data.find("textarea").val('');
			              data.find("select").val('');
			     });
			     $(document).on('click', '.remove', function() {
			         var trIndex = $(this).closest("tr").index();
			            if(trIndex>1) {
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

				
					 $ins="insert into tbl_custumize_booking(fld_booking_date, fld_user_id, fld_user_mobileno, fld_no_of_adult, fld_no_of_child, fld_total_booking_amount, fld_travel_comp_id, fld_loc_id, fld_hotel_id, fld_food_type_id, fld_spot_id, fld_transport_id, fld_custumize_id)values('$dep_date','".$_SESSION['id']."','$phone_no','$adult','$child','$total_packages_rate','$fld_travel_comp_id','$fld_loc_id','$fld_hotel_id','$fld_food_type_id','$fld_spot_id','$fld_transport_id','$fld_custumize_id')";
					
					$add=mysqli_query($connect,$ins) or die(mysqli_error($connect));
					if ($add) 
					{
						echo "<script>";
						echo "alert('Booking Send To Admin Successfully');";
						echo "window.location.href='custumize_booking_view.php';";
						echo "</script>";
					}
					else
					{
						echo "<script>";
						echo "alert('Oops Error Occured');";
						// echo "window.location.href='packages_add.php';";
						echo "</script>";
					}					
			}
		?>

		                