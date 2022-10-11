<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<!-- Title -->
		<title> Admin - Add Tour Location </title>

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
						<h4 class="content-title mb-2">Tour Location</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Location</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Add Tour Location</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<a href="tour_location_view.php"><button class="btn btn-light pd-x-20 mg-t-10" type="submit">View Locations</button></a>
					</div>
				</div>
				<!-- /breadcrumb -->
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Add Tour Location
								</div>
								<hr>
								<form method="post" enctype="multipart/form-data">
								<div class="pd-30 pd-sm-40 bg-gray-200">
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Location Name :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input type="text" class="form-control" name="fld_loc_name" placeholder="Enter full name of Location" />

										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Country :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input type="text" class="form-control" name="fld_loc_country" placeholder="Enter location Country" />
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">State :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input type="text" name="fld_loc_state" class="form-control" placeholder="Enter location State" />
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Location Images :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input class="form-control" name="files[]" id="fileupload" type="file" multiple required="" accept=" .jpg , .jpeg , .png ">
											<br>
				                            <div class="row">
				                                <div id="dvPreview"></div>
				                            </div>
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Location Description :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<textarea class="form-control" name="fld_loc_description"  required="" placeholder="Enter Location Description" ></textarea>
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Location Nearby Places :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<textarea class="form-control" name="fld_loc_nearbyplace"  required="" placeholder="Enter Location Description" ></textarea>
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Location Rate :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input type="text" class="form-control" name="fld_loc_rate_from_mumbai" placeholder="Enter Rate of Location from Mumbai" />
										</div>
									</div>
									<button type="submit" name="submit" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">Register</button>
									<button type="reset" class="btn btn-dark pd-x-30 mg-t-5">Cancel</button>
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
		<div class="sidebar sidebar-right sidebar-animate">
			
		</div>
		<!--/Sidebar-right-->            		
<?php include "footer.php"; ?>
<script language="javascript" type="text/javascript">
						$(function () {
							$("#fileupload").change(function () {
								if (typeof (FileReader) != "undefined") {
									var dvPreview = $("#dvPreview");
									dvPreview.html("");
									var regex = /^([a-zA-Z0-9()\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
									$($(this)[0].files).each(function () {
										var file = $(this);
										if (regex.test(file[0].name.toLowerCase())) {
											var reader = new FileReader();
											reader.onload = function (e) {
												var img = $("<img />");
												img.attr("style", "height:100px;width: 100px");
												img.attr("src", e.target.result);
												dvPreview.append(img);
											}
											reader.readAsDataURL(file[0]);
										} else {
											alert(file[0].name + " is not a valid image file.");
											dvPreview.html("");
											return false;
										}
									});
								} else {
									alert("This browser does not support HTML5 FileReader.");
								}
							});
						}
						);
					</script>	
					

					<?php
					if(isset($_POST['submit']))
					{
						extract($_POST);	

						 	

						$ins = "insert into tbl_tour_location( fld_loc_name , fld_loc_country, fld_loc_state,fld_loc_description,fld_loc_nearbyplace,fld_loc_rate_from_mumbai) values('$fld_loc_name','$fld_loc_country','$fld_loc_state','$fld_loc_description','$fld_loc_nearbyplace','$fld_loc_rate_from_mumbai')";

						$add=mysqli_query($connect, $ins) or die(mysqli_error($connect));


	                    $sel=mysqli_query($connect,"select * from tbl_tour_location where fld_loc_name='".$fld_loc_name."' and fld_loc_country='".$fld_loc_country."' and fld_loc_state='".$fld_loc_state."' order by fld_loc_id desc limit 1");
						$fetch=mysqli_fetch_array($sel);
						$loc_id=$fetch['fld_loc_id'];

						if(isset($_FILES['files']))
						{

							foreach($_FILES['files']['tmp_name'] as $key => $tmp_name )
							{
								$file_name = $key.$_FILES['files']['name'][$key];
								$file_size =$_FILES['files']['size'][$key];
								$file_tmp =$_FILES['files']['tmp_name'][$key];
								$file_type=$_FILES['files']['type'][$key];  

								$fld_loc_images=uniqid().$file_name;

								$extension = strtolower(pathinfo($fld_loc_images,PATHINFO_EXTENSION));

								if($extension=="jpg" || $extension=="jpeg" || $extension=="png")
								{  

									$query="INSERT into tbl_loc_images (fld_loc_id, fld_loc_images) VALUES('$loc_id','$fld_loc_images') ";

									$desired_dir="../images/location/";
									move_uploaded_file($file_tmp,"$desired_dir/".$fld_loc_images);

									$add2=mysqli_query($connect,$query); 

		                    $save = "$desired_dir" . $fld_loc_images; //This is the new file you saving
		                    $file = "$desired_dir" . $fld_loc_images; //This is the original file

		                    list($width, $height) = getimagesize($file) ;

		                    $modwidth = 500;                  
		                    $modheight = 500;
		                    $tn = imagecreatetruecolor($modwidth, $modheight) ;

		                    if($extension=="jpg" || $extension=="jpeg" )
		                    {

		                    	$image = imagecreatefromjpeg($file);

		                    }
		                    else if($extension=="png")
		                    {

		                    	$image = imagecreatefrompng($file);

		                    }

		                    // $image = imagecreatefromjpeg($file) ;
		                    imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

		                    imagejpeg($tn, $save, 100) ;

		                    
		                }

		            }
		        }


		        if($add && $add2)
		        {
		        	echo "<script>";
		        	echo "alert('Record Inserted Successfully');";
		        	echo "window.location.href='tour_location_view.php';";
		        	echo "</script>";
		        }
		        else
		        {
		        	echo "<script>";
		        	echo "alert('Oops Error Occured');";
		        	echo "window.location.href='tour_location_add.php';";
		        	echo "</script>";
		        }	

		    }

		    ?>