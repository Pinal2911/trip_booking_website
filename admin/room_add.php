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
		<title> Add Hotel -  Travel Company</title>

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
						<h4 class="content-title mb-2">Hi, welcome back!</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Hotel</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Form-Layouts</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
                    	<a href="hotel_view.php"><button class="btn btn-light pd-x-20 mg-t-10" type="submit">View Hotel</button></a>
						
					</div>
				</div>
				<!-- /breadcrumb -->
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Add Hotel
								</div>
								<!-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website application.</p> -->
								<form method="post" enctype="multipart/form-data">
								<div class="pd-30 pd-sm-40 bg-gray-200">
									
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Hotel Name :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" name="fld_hotel_id" required="">
														<option label="Choose one">
														</option>
														<?php
												  			$query=mysqli_query($connect,"select * from tbl_hotel order by fld_hotel_name asc ");
												        
															while($row=mysqli_fetch_assoc($query))
												      		{
												       			extract($row);
												     	 ?>
												        	<option value="<?php echo $row['fld_hotel_id'];?>"><?php echo $row['fld_hotel_name'];?> </option>
												    	<?php 
												    		} 
												    	?>
													</select>	
										</div>
									</div>
									
									<div class="row row-xs align-items-center mg-b-20">
										<div class="table-responsive">
										                <table  class="table table-hover small-text" id="tb">
															<tr class="tr-header">
																<th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Sub Stream"><span class="fa fa-plus text-success"></span></a></th></th>
																<th>Room type <span class="text-danger">*</span> : </th>
																<th>Bed Type <span class="text-danger">*</span> : </th>
																<th>Rate <span class="text-danger">*</span> : </th>
																
															</tr>
															<tr>
																<td><a href='javascript:void(0);'  class='remove'><span class='fa fa-times text-danger'style="font-size:18px;"></span></a></td>
																<td>
																	<select class="SlectBox form-control" name="fld_room_type[]">
										            						<option value="AC">AC</option>
										            						<option value="NON-AC">NON-AC</option>
																	</select>
																</td>
																<td>
																	<select class="SlectBox form-control" name="fld_room_bed_type[]">
										            						<option value="Single Bed">Single Bed</option>
										            						<option value="Double Bed">Double Bed</option>
										            						<option value="Triple Bed">Triple Bed</option>
										            						<option value="Quad Bed">Quad Bed</option>
										            				</select>
																</td>
																<td>
																	<input type="text" name="fld_room_rate[]" class="form-control" placeholder="Enter the Accommandating Rate" required="" >
																</td>
																  
															</tr>                   
										                </table>
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
                                    
                if (isset($_POST['submit'])) 
                {                    
                    extract($_POST);
                    $status=array();
                    $total_room = count($_POST['fld_room_type'] && $_POST['fld_room_bed_type'] && $_POST['fld_room_rate']);

                    for($i=0;$i<$total_room;$i++)
                    {
                     	$sub_stream1=(($_POST['fld_room_type'][$i]) && ($_POST['fld_room_bed_type'][$i]) && ($_POST['fld_room_rate'][$i]));
                        $sub_stream=ucwords(strtolower($sub_stream1));
                        

                          echo $query = "INSERT INTO tbl_room(fld_hotel_id,fld_room_type,fld_room_bed_type,fld_room_rate) VALUES ('".$_POST['fld_hotel_id']."','".$sub_stream."','".$sub_stream."','".$sub_stream."')" ;
                          $result = mysqli_query($connect,$query)or die(mysqli_error($connect));

                          if(!empty($result)) 
                              {
                                 $status[]=1;
                                                   
                              }
                              else
                              {
                                  echo "<script>";
                                   echo "alert('Room Not Added Successfully');";
                                  // echo "window.location.href='hotel_view.php';";
                                  echo "</script>";
                              }
                        
                      
                    } 


                    if((isset($status)) &&(in_array('1',$status)))  
                    {
                      echo "<script>";
                      echo "alert('Room Added Successfully');";
                      // echo "window.location.href='hotel_view.php';";
                      echo "</script>";
                    }                 
                }
    ?>						