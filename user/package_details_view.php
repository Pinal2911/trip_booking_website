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
		<title> Packages Details </title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!--- Internal Owl Carousel css-->
		<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<!--- Internal Multislider css -->
		<link href="assets/plugins/multislider/multislider.css" rel="stylesheet">
		<!-- Internal Data table css -->
		<link href="assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
		<link href="assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
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
		
		<!--- Internal Sumoselect css -->
		<link rel="stylesheet" href="assets/plugins/sumoselect/sumoselect.css">
		<!--- Internal TelephoneInput css -->
		<link rel="stylesheet" href="assets/plugins/telephoneinput/telephoneinput.css">
		<!--- Switcher css -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="assets/switcher/demo.css" rel="stylesheet">	
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
						<h4 class="content-title mb-2">Package</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Packages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Package Details</li>
							</ol>
						</nav>
					</div>
				</div>
				
				<?php
					$count=1; 
                   if(isset($_GET['id']))
					{
						$query="select p.*,l.*,h.*,t.*,ft.*,s.*,tc.* from tbl_package p,tbl_tour_location l, tbl_hotel h,tbl_transport_mode t,tbl_food_type ft,tbl_spot s,tbl_travel_company tc
                                 		where
                              			p.fld_loc_id=l.fld_loc_id and
                              	 		l.fld_loc_id=h.fld_loc_id and
                              	 		l.fld_loc_id=t.fld_loc_id and
                              	 		p.fld_loc_id=s.fld_loc_id and
                              	 		p.fld_transport_id=t.fld_transport_id and
                              	 		h.fld_hotel_id=ft.fld_hotel_id and ft.fld_food_type_id=p.fld_food_type_id and
                              	 		p.fld_travel_comp_id=tc.fld_travel_comp_id and p.fld_package_id='".$_GET['id']."' and
                              			p.fld_package_delete=0 group by p.fld_package_id order by p.fld_package_id desc";

                         $row=mysqli_query($connect,$query) or die(mysqli_error($connect));  
                        $fetch=mysqli_fetch_array($row);
                        extract($fetch);

                        $photo_view=mysqli_query($connect,"select * from tbl_loc_images where fld_loc_id='".$fetch['fld_loc_id']."'  order by fld_image_id desc ");
                ?>
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body h-100">
								<div class="row row-sm ">
									<div class=" col-xl-5 col-lg-12 col-md-12">
										<div>
											<?php $fetch_photo=mysqli_fetch_array($photo_view); ?>
															<img alt="img" class="d-block w-100" src="../images/location/<?php echo $fetch_photo['fld_loc_images'];?>">
													<?php ?>
								</div>
									</div>
									<div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
										<h4 class="product-title"><?php echo $fld_package_name;?></h4>
										<div class="rating">
											<div class="stars">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												&nbsp;&nbsp;&nbsp;&nbsp;Sellar : <span style="color: skyblue;"><?php echo $fld_travel_comp_name; ?></span>
											</div>
											<span class="review-no"><span class="badge badge-danger" ><?php echo $fld_no_nights; ?> Nights</span></span>
										</div>
										<p class="product-description"><?php echo $fld_loc_description; ?></p>
										<h6 class="price">Package price: <span class="h3 ml-2">	&#8377;<?php echo $fld_package_amt; ?></span> &nbsp;<del><?php echo $fld_total_rate; ?></del></h6>
										<h6>FOOD-TYPE : <?php echo $fld_food_type_name; ?></h6>
										
										<h6>TRANSPORT-MODE : <?php echo $fld_transport_type; ?></h6>
										<h6 class="card-title mb-1">Customizable Tour</h6>
										<p class="product-description">
											Customizable itineraries where you may choose transport, stay & sightseeing as per your taste & comfort</p>
										<div class="action">
											<a href="booking_add.php?id=<?php echo $fetch['fld_package_id']; ?>" class="add-to-cart btn btn-success">Book Now</a>
											<a href="user_enquiry.php?id=<?php echo $fetch['fld_package_id']; ?>" class="add-to-cart btn btn-warning">Submit Query</a>
										</div>
									</div>
								</div>
								<hr>
								<div class="row row-sm ">
									<div class="col-md-10">
										<h6 class="card-title mb-1">Overview</h6>
										<p class="text-muted card-sub-title"><?php echo $fld_loc_description; ?></p>
										<p class="text-muted card-sub-title"><?php echo $fld_spot_description; ?></p>
									</div>
									<div class="col-md-2 right">
										<a href="custumize_packages.php?id=<?php echo $fetch['fld_package_id']; ?>" class="add-to-cart btn btn-danger">Custumize Package</a>
									</div>
								</div>

							</div>
							<hr>
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body ht-100p">
										<div>
											<h6 class="card-title mb-1">Location View</h6>
											<br>
										</div>
										
										<div id="basicSlider">
											<div class="MS-content">
												<?php while($fetch_photo=mysqli_fetch_array($photo_view)){ ?>
													<div class="item">
														<img src="../images/location/<?php echo $fetch_photo['fld_loc_images'];?>" >
													</div>	
												<?php } ?>

											</div>
										</div>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			<?php }?>
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
		<?php include'footer.php';?>
		<!-- Internal Data tables -->
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="assets/plugins/datatable/js/pdfmake.min.js"></script>
		<script src="assets/plugins/datatable/js/vfs_fonts.js"></script>
		<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>
		<!-- datatable js -->
		<script src="assets/js/table-data.js"></script>
		<!--- Internal jquery.maskedinput js -->
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
		
		<!--- Internal Form-elements js -->
		<script src="assets/js/advanced-form-elements.js"></script>
		<script src="assets/js/select2.js"></script>
		<!--- Internal Sumoselect js -->
		<script src="assets/plugins/sumoselect/jquery.sumoselect.js"></script>
				<!--- Select2 js -->
<script src="assets/plugins/select2/js/select2.min.js"></script>
<!--- Owl Carousel js -->
<script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
<!--- Internal Multislider js -->
<script src="assets/plugins/multislider/multislider.js"></script>
<script src="assets/js/carousel.js"></script>
