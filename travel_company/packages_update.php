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
						<h4 class="content-title mb-2">Update Package</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Package</a></li>
								<li class="breadcrumb-item active" aria-current="page">Update Package</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<a href="packages_view.php"><button class="btn btn-light pd-x-20 mg-t-10" type="submit">View Packages</button></a>
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
									<?php 
										 $count=1; 
										  if(isset($_GET['id']))
										{
										 $query="select p.*,l.*,h.*,t.*,ft.*,s.* from tbl_package p,tbl_tour_location l, tbl_hotel h,tbl_transport_mode t,tbl_food_type ft,tbl_spot s
			                                     		where
		                                      			p.fld_loc_id=l.fld_loc_id and
		                                      	 		l.fld_loc_id=h.fld_loc_id and
		                                      	 		l.fld_loc_id=t.fld_loc_id and
		                                      	 		p.fld_loc_id=s.fld_loc_id and
		                                      	 		p.fld_transport_id=t.fld_transport_id and
		                                      	 		h.fld_hotel_id=ft.fld_hotel_id and
		                                      	 		p.fld_food_type_id=ft.fld_food_type_id and
		                                      			p.fld_package_delete=0 and p.fld_package_id='".$_GET['id']."' group by p.fld_package_id order by p.fld_package_id desc";
			                             $row=mysqli_query($connect,$query) or die(mysqli_error($connect));

		                                 $fetch=mysqli_fetch_array($row);

	                                    extract($fetch);
									 ?>	
									 <div class="row row-sm">
										<div class="col-12">
											<div class="form-group mg-b-0">
												<label class="form-label">Package Name: <span class="tx-danger">*</span></label>
												<input class="form-control" name="package_name"  placeholder="Enter package name" type="text" value="<?php echo $fetch['fld_package_name'];?>">
											</div>
										</div>
									</div><br>
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">No of Nights: <span class="tx-danger">*</span></label>
												<input type="number" class="form-control required" name="no_nights" placeholder="No of nights" value="<?php echo $fetch['fld_no_nights'];?>">
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
												        	<option value="<?php echo $row['fld_loc_id'];?>" <?php if($row['fld_loc_id']==$fetch['fld_loc_id']) {echo "selected";} ?>><?php echo $row['fld_loc_name'];?> </option>
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
														<?php
														                      
														        $query1=mysqli_query($connect,"select * from tbl_hotel WHERE fld_loc_id='".$fetch['fld_loc_id']."' order by fld_hotel_name asc");
														       	while($row1=mysqli_fetch_assoc($query1)){
														                        extract($row1);

														    ?>
														    	<option value="<?php echo $row1['fld_hotel_id'];?>" <?php if($row1['fld_hotel_id']==$fetch['fld_hotel_id']) {echo "selected";} ?>><?php echo $row1['fld_hotel_name'];?></option>
														     <?php  }?>
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
														<?php
														                      
													        $query1=mysqli_query($connect,"select * from tbl_room WHERE fld_hotel_id='".$fetch['fld_hotel_id']."' order by fld_room_id asc");
													       	while($row1=mysqli_fetch_assoc($query1)){
													                        extract($row1);

													    ?>
													    	<option value="<?php echo $row1['fld_room_id'];?>" <?php if($row1['fld_room_id']==$fetch['fld_room_id']) {echo "selected";} ?>><?php echo $row1['fld_room_bed_type'];?></option>
													     <?php  }?>
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
														<option label="Choose one"></option>
														<?php
														                      
														        $query1=mysqli_query($connect,"select * from tbl_food_type WHERE fld_hotel_id='".$fetch['fld_hotel_id']."' order by fld_food_type_id asc");
														       	while($row1=mysqli_fetch_assoc($query1)){
														                        extract($row1);

														    ?>
														    	<option value="<?php echo $row1['fld_food_type_id'];?>" <?php if($row1['fld_food_type_id']==$fetch['fld_food_type_id']) {echo "selected";} ?>><?php echo $row1['fld_food_type_name'];?></option>
														     <?php  }?>	
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
													<option label="Choose one"></option>
													<?php
														                      
												        $query1=mysqli_query($connect,"select * from tbl_spot WHERE fld_loc_id='".$fetch['fld_loc_id']."' order by fld_spot_name asc");
												       	while($row1=mysqli_fetch_assoc($query1)){
												                        extract($row1);

												    ?>
												    	<option value="<?php echo $row1['fld_spot_id'];?>" <?php if($row1['fld_spot_id']==$fetch['fld_spot_id']) {echo "selected";} ?>><?php echo $row1['fld_spot_name'];?></option>
												     <?php  }?>
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
														<?php
														                      
													        $query1=mysqli_query($connect,"select * from tbl_transport_mode WHERE fld_loc_id='".$fetch['fld_loc_id']."' order by fld_transport_type asc");
													       	while($row1=mysqli_fetch_assoc($query1)){
													                        extract($row1);

													    ?>
													    	<option value="<?php echo $row1['fld_transport_id'];?>" <?php if($row1['fld_transport_id']==$fetch['fld_transport_id']) {echo "selected";} ?>><?php echo $row1['fld_transport_type'];?></option>
													     <?php  }?>
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
												<textarea class="form-control" id="packages_rate" name="packages_rate" readonly="" type="text" style="max-height: 60px"><?php echo $fetch['fld_package_rate'];?></textarea>
											</div>
										</div>
									</div><br>
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Profit Amount : <span class="tx-danger">*</span></label>
												<input class="form-control" name="profit_amount" id="profit_amount" placeholder="Enter Profit Amount" onkeyup="tot_package_rate()" type="text" value="<?php echo $fetch['fld_package_profit'];?>">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Total Package Rate : <span class="tx-danger">*</span></label>
												<input class="form-control" name="total_rate" id="total_rate" readonly="" type="text"  value="<?php echo $fetch['fld_total_rate'];?>">
											</div>
										</div>
									</div><br>
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Discount Amount(%) : <span class="tx-danger">*</span></label>
												<input class="form-control" name="discount_amount" id="discount_amount" placeholder="Enter Profit Amount" type="text"  onkeyup="disc()" value="<?php echo $fetch['fld_package_discount'];?>">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Total Package Amount : <span class="tx-danger">*</span></label>
												<input class="form-control" name="total_amount" id="total_amount" readonly="" type="text"  value="<?php echo $fetch['fld_package_amt'];?>">
											</div>
										</div>
									</div><hr>
									<div class="col-md-12 mg-t-10 mg-sm-t-25 ex-center">
										<center><button class="btn btn-main-primary pd-x-20" name="update" type="submit">Update</button></center>
									</div>
								</form>
							<?php }?>
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
		if(isset($_POST['update']))
		{
			extract($_POST);

			
		
				 $up="update tbl_package set 
				 		fld_package_name='".$package_name."',
				 		fld_no_nights='".$no_nights."',
			        	fld_loc_id='".$_POST['location']."',
			        	fld_hotel_id='".$_POST['hotel']."', 
			        	fld_room_id='".$_POST['room']."',      
			          	fld_food_type_id='".$_POST['food_type']."',
			          	fld_spot_id='".$_POST['spot']."',
			          	fld_transport_id='".$_POST['transport']."',
			          	fld_package_rate='".$packages_rate."',
			          	fld_package_profit='".$profit_amount."',
			          	fld_total_rate='".$total_rate."',
			          	fld_package_amt='".$total_amount."',
			          	fld_package_discount='".$discount_amount."'
			            where fld_package_id='".$_GET['id']."'";
				
				$add=mysqli_query($connect,$up) or die(mysqli_error($connect));

				$fetch=mysqli_fetch_array($add);

				if ($add) 
				{
					echo "<script>";
					echo "alert('Record Updated Successfully');";
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