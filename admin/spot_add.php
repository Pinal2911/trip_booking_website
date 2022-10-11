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
		<title> Add Spot -  Travel Cocktail</title>

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
						<h4 class="content-title mb-2">Spot</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Location</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Add Spot</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<a href="spot_view.php"><button class="btn btn-light pd-x-20 mg-t-10" type="submit">View Spot</button></a>
						
					</div>
				</div>
				<!-- /breadcrumb -->
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Add Spot
								</div>
								<hr>
								<form method="post" enctype="multipart/form-data">
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Spot name: <span class="tx-danger">*</span></label>
												<input class="form-control" name="fld_spot_name" placeholder="Enter Spot Name" required="" type="text">
											</div>
										</div>
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
											<div class="form-group mg-b-0">
												<label class="form-label">Spot Distance (Km) : <span class="tx-danger">*</span></label>
												<input class="form-control" name="fld_spot_distance" placeholder="Enter the Distance" required="" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">Spot Images : <span class="tx-danger">*</span></label>
                								<input type="file" name="fld_spot_images" accept=" .jpg , .jpeg , .png " class="form-control" id="image" onchange="return fileValidation()">
											<div class="row">
                									<img src="image/No-image-full.jpg" id="preview_img" height="100" width="100">
				                                
				                            </div>
				                            <script>
								                  function fileValidation() {
								                      var fileInput = document.getElementById('image');

								                      var filePath = fileInput.value;

								                      var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

								                      if(!allowedExtensions.exec(filePath)) {
								                          alert('Invalid Image Type'); 
								                          fileInput.value='';
								                          return false;
								                      }
								                  }    
								            </script>
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">Spot Description : <span class="tx-danger">*</span></label>
												<textarea class="form-control" name="fld_spot_description" placeholder="Enter Spot Description" required=""></textarea>
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">Spot NearBy Visit : <span class="tx-danger">*</span></label>
												<textarea class="form-control" name="fld_spot_nearby_visit" placeholder="Enter Spot Description" required=""></textarea>
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
<?php include "footer.php"; ?>

 <script type="text/javascript">
  	$(document).ready(function(){
      $('#image').change(function(){
          readImageData(this);
      });
    });
    function readImageData(imgData){
        if(imgData.files && imgData.files[0]){
          var readerObj = new FileReader();
          readerObj.onload = function(element) {
              $('#preview_img').attr('src',element.target.result);
              }
              readerObj.readAsDataURL(imgData.files[0]);
        }
    }
  </script>	
				

<?php
	if(isset($_POST['submit']))
      {
          extract($_POST);


                $name1=$_FILES['fld_spot_images']['name'];
				$type=$_FILES['fld_spot_images']['type'];
				$size=$_FILES['fld_spot_images']['size'];
				$temp=$_FILES['fld_spot_images']['tmp_name'];
				if($name1)
				{  
				    $upload= "../images/location/";
				    $imgExt=strtolower(pathinfo($name1, PATHINFO_EXTENSION));
				    $valid_ext= array('jpg','png','jpeg' );
				    $photo= rand(1000,1000000).".".$imgExt;
				    move_uploaded_file($temp,$upload.$photo);

				}

                $query="insert into tbl_spot(fld_spot_name,fld_loc_id,fld_spot_distance,fld_spot_images,fld_spot_description,fld_spot_nearby_visit) values('$fld_spot_name','$fld_loc_id','$fld_spot_distance','$photo','$fld_spot_description','$fld_spot_nearby_visit')";

                $add=mysqli_query($connect,$query)or die(mysqli_error($query));

                if ($add) {
                    echo "<script>";
                    echo "alert('Record Inserted');";
                    echo "window.location.href='spot_view.php';";
                    echo "</script>";
                }
                else
                {
                  echo "<script>";
                  echo "alert('Record Having Error To Insert Please Check!')";
                  echo "window.location.href='spot_add.php';";
                  echo "</script>";
                }
      }
 ?>