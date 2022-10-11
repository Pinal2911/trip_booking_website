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
		<title>Packages</title>

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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="assets/plugins/sumoselect/sumoselect.css">
		<!--- Animations css -->
		<link href="assets/css/animate.css" rel="stylesheet">
		<!--- Switcher css -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="assets/switcher/demo.css" rel="stylesheet">	
		<script type="text/javascript">
			function tot_package_rate()
			{
				var i1=parseInt(document.getElementById('packages_rate').value);
				var i2=parseInt(document.getElementById('profit_amount').value);
				var total2=i1+i2;
				document.getElementById('total_rate').value=total2.toFixed(2);	
			}
			function disc()
			{
				var f1=parseFloat(document.getElementById("total_rate").value);
				var f2=parseFloat(document.getElementById("discount_amount").value);
				var disc2=f2/100;
				var disc3=f1*disc2;
				var disc4=f1-disc3;
				document.getElementById("total_amount").value=disc4;
			}
		</script>

</head>

<body class="main-body  app dark-theme">
		
		<?php include'header.php';?>

		<!-- main-content opened -->
		<div class="main-content horizontal-content">

			<!-- container opened -->
			<div class="container">
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div>
						<h4 class="content-title mb-2">Add Package</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Packages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Packages</li>
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
								<hr>
								<form method="POST" class="form-horizontal form-bordered" onsubmit="return validateForm()" enctype="multipart/form-data">
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Package Name: <span class="tx-danger">*</span></label>
												<input class="form-control" name="package_name"  placeholder="Enter package name" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Travel Company: <span class="tx-danger">*</span></label>
												<div class="parsley-select" id="slWrapper">
													<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" name="company" id="comapny" required="">
														<option label="Choose one">
														</option>
														<?php
												  			$query=mysqli_query($connect,"select * from tbl_travel_company where fld_travel_comp_status='approved' order by fld_travel_comp_id asc ");
												        
															while($row=mysqli_fetch_assoc($query))
												      		{
												       			extract($row);
												     	 ?>
												        	<option value="<?php echo $row['fld_travel_comp_id'];?>"><?php echo $row['fld_travel_comp_name'];?> </option>
												    	<?php 
												    		} 
												    	?>
													</select>
													<div id="slErrorContainer"></div>
												</div>
											</div>
										</div>
									</div><br>

									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">No of Nights: <span class="tx-danger">*</span></label>
												<input type="number" class="form-control required" name="no_nights" placeholder="No of nights">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Location: <span class="tx-danger">*</span></label>
												<div class="parsley-select" id="slWrapper">
													<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" name="location" id="location" required="">
														<option label="Choose one">
														</option>
														<?php
												  			$query=mysqli_query($connect,"select * from tbl_tour_location order by fld_loc_id asc ");
												        
															while($row=mysqli_fetch_assoc($query))
												      		{
												       			extract($row);
												     	 ?>
												        	<option value="<?php echo $row['fld_loc_id'];?>"><?php echo $row['fld_loc_name'];?> </option>
												    	<?php 
												    		} 
												    	?>
													</select>
													<div id="slErrorContainer"></div>
												</div>
											</div>
										</div>
									</div><br>
									<script type="text/javascript">
									  $(document).ready(function(){
									    $("select#location").change(function(){
									          var u = $("#location option:selected").val();
									          // alert(u);      
									          $.ajax({
									              type: "POST",
									              url: "packages_hotel.php", 
									              data: { location : u  } 
									          }).done(function(data){
									              $("#hotel").html(data);
									          });
									      });
									  });
									</script>
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Hotel: <span class="tx-danger">*</span></label>
												<div class="parsley-select" id="slWrapper">
													<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" name="hotel" id="hotel" required="">
														<option label="Choose one" value="">
														</option>
													</select>
													<div id="slErrorContainer"></div>
												</div>
											</div>
										</div>
										<script type="text/javascript">
										  $(document).ready(function(){
										    $("select#hotel").change(function(){
										          var u = $("#hotel option:selected").val();
										          // alert(u);      
										          $.ajax({
										              type: "POST",
										              url: "packages_room.php", 
										              data: { hotel : u  } 
										          }).done(function(data){
										              $("#room").html(data);
										          });
										      });
										  });
										</script>
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Room : <span class="tx-danger">*</span></label>
												<div class="parsley-select" id="slWrapper">
													<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" name="room" id="room" required="">
														<option label="Choose one" value="">
														</option>
													</select>
													<div id="slErrorContainer"></div>
												</div>
											</div>
										</div>
									</div><br>
									<script type="text/javascript">
									  $(document).ready(function(){
									    $("select#hotel").change(function(){
									          var u = $("#hotel option:selected").val();
									          // alert(u);      
									          $.ajax({
									              type: "POST",
									              url: "packages_food_type.php", 
									              data: { hotel : u  } 
									          }).done(function(data){
									              $("#food_type").html(data);
									          });
									      });
									  });
									</script>
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Food Type: <span class="tx-danger">*</span></label>
												<div class="parsley-select" id="slWrapper">
													<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" name="food_type" id="food_type" required="">
														<option label="Choose one">
														</option>
													</select>
													<div id="slErrorContainer"></div>
												</div>
											</div>
										</div>
										<script type="text/javascript">
										  $(document).ready(function(){
										    $("select#location").change(function(){
										          var u = $("#location option:selected").val();
										          // alert(u);      
										          $.ajax({
										              type: "POST",
										              url: "packages_spot.php", 
										              data: { location : u  } 
										          }).done(function(data){
										              $("#spot").html(data);
										          });
										      });
										  });
										</script>
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Spot: <span class="tx-danger">*</span></label>
												<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="form-control select2" data-placeholder="Choose multiple" name="spot" id="spot" >
												</select>
											</div>
										</div>
									</div><br>
									<script type="text/javascript">
										  $(document).ready(function(){
										    $("select#location").change(function(){
										          var u = $("#location option:selected").val();
										          // alert(u);      
										          $.ajax({
										              type: "POST",
										              url: "packages_transport.php", 
										              data: { location : u  } 
										          }).done(function(data){
										              $("#transport").html(data);
										          });
										      });
										  });
										</script>
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Trasport Mode: <span class="tx-danger">*</span></label>
												<div class="parsley-select" id="slWrapper">
													<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" name="transport" id="transport" required="" >
														<option label="Choose one">
														</option>
													</select>
													<div id="slErrorContainer"></div>
												</div>
											</div>
										</div>
										<script type="text/javascript">
										  $(document).ready(function(){
										    $("#location").change(function(){
										    	  var c = $("#location").val();
										          var a = $("#room").val();
										          var b = $("#transport").val();
										          //alert(b);      
										          $.ajax({
										              type: "POST",
										              url: "packages_rate.php", 
										              data: { location : c, room : a, transport : b } 
										          }).done(function(data){
										              $("#packages_rate").html(data);
										          });
										      });
										  });
										</script>

										<script type="text/javascript">
										  $(document).ready(function(){
										    $("#room").change(function(){
										    	  var c = $("#location").val();
										          var a = $("#room").val();
										          var b = $("#transport").val();
										          //alert(b);      
										          $.ajax({
										              type: "POST",
										              url: "packages_rate.php", 
										              data: { location : c, room : a, transport : b } 
										          }).done(function(data){
										              $("#packages_rate").html(data);
										          });
										      });
										  });
										</script>

										<script type="text/javascript">
										  $(document).ready(function(){
										    $("#transport").change(function(){
										    	  var c = $("#location").val();
										          var a = $("#room").val();
										          var b = $("#transport").val();
										          //alert(b);      
										          $.ajax({
										              type: "POST",
										              url: "packages_rate.php", 
										              data: { location : c, room : a, transport : b } 
										          }).done(function(data){
										              $("#packages_rate").html(data);
										          });
										      });
										  });
										</script>
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Package Rate : <span class="tx-danger">*</span></label>
												<textarea class="form-control" id="packages_rate" name="packages_rate" readonly="" type="text" style="max-height: 38px"></textarea>
											</div>
										</div>
									</div><br>
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Profit Amount : <span class="tx-danger">*</span></label>
												<input class="form-control" name="profit_amount" id="profit_amount" placeholder="Enter Profit Amount" onkeyup="tot_package_rate()" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Total Package Rate : <span class="tx-danger">*</span></label>
												<input class="form-control" name="total_rate" id="total_rate" readonly="" type="text">
											</div>
										</div>
									</div><br>
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Discount Amount(%) : <span class="tx-danger">*</span></label>
												<input class="form-control" name="discount_amount" id="discount_amount" placeholder="Enter Profit Amount" type="text"  onkeyup="disc()">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Total Package Amount : <span class="tx-danger">*</span></label>
												<input class="form-control" name="total_amount" id="total_amount" readonly="" type="text">
											</div>
										</div>
									</div><hr>
									<div class="col-md-12 mg-t-10 mg-sm-t-25 ex-center">
										<center><button class="btn btn-main-primary pd-x-20" name="submit" type="submit">Submit</button></center>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
		<?php include'footer.php';?>
		<!--- Select2 js -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		<!--- Internal Parsley.min js -->
		<script src="assets/plugins/parsleyjs/parsley.min.js"></script>
		<!--- Internal Form-validation js -->
		<script src="assets/js/form-validation.js"></script>
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		<!--- Fileuploads js -->
		<script src="assets/plugins/fileuploads/js/fileupload.js"></script>
		<script src="assets/plugins/fileuploads/js/file-upload.js"></script>
		<!--- Fancy uploader js -->
		<script src="assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
		<script src="assets/plugins/fancyuploder/jquery.fileupload.js"></script>
		<script src="assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
		<script src="assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
		<script src="assets/plugins/fancyuploder/fancy-uploader.js"></script>
		<!--- Internal Form-elements js -->
		<script src="assets/js/advanced-form-elements.js"></script>
		<script src="assets/js/select2.js"></script>
		<!--- Internal Sumoselect js -->
		<script src="assets/plugins/sumoselect/jquery.sumoselect.js"></script>
		<!--- Internal TelephoneInput js -->
		<script src="assets/plugins/telephoneinput/telephoneinput.js"></script>
		<script src="assets/plugins/telephoneinput/inttelephoneinput.js"></script>
		<!--- P-scroll js -->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

	<?php 	
		if(isset($_POST['submit']))
		{
			extract($_POST);

			
				$ins="insert into tbl_package(fld_package_name, fld_no_nights, fld_travel_comp_id, fld_loc_id, fld_hotel_id, fld_room_id, fld_food_id, fld_spot_id,fld_transport_id, fld_package_rate,fld_package_profit,fld_total_rate,fld_package_amt,fld_package_discount)values('$package_name','$no_nights','".$_POST['company']."','".$_POST['location']."','".$_POST['hotel']."','".$_POST['room']."','".$_POST['food_type']."','".$_POST['spot']."','".$_POST['transport']."','$packages_rate','$profit_amount','$total_rate','$total_amount','$discount_amount')";
				
				$add=mysqli_query($connect,$ins) or die(mysqli_error($connect));

				if ($add) 
				{
					echo "<script>";
					echo "alert('Record Inserted Successfully');";
					echo "window.location.href='packages_register_view.php';";
					echo "</script>";
				}
				else
				{
					echo "<script>";
					echo "alert('Oops Error Occured');";
					echo "window.location.href='packages_add.php';";
					echo "</script>";
				}					
		}
	?>