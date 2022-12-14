<?php
include "connect.php";


?>
<!DOCTYPE html>
<html lang="en">

<!-- doccure/profile-settings.html  30 Nov 2019 04:12:18 GMT -->

<head>
	<meta charset="utf-8">
	<title>Doccure</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<?php include "header.php" ?>
		<!-- /Header -->

		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-12 col-12">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Profile Settings</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">

					<!-- Profile Sidebar -->
					<?php include "pstientside.php" ?>
					<!-- /Profile Sidebar -->

					<div class="col-md-7 col-lg-8 col-xl-9">

						<div class="card">
							<div class="card-body">

								<!-- Profile Settings Form -->
								<form action="profilesetinsert.php" method="post" enctype="multipart/form-data">
									<div class="row form-row"> 
			
										<div class="col-12 col-md-12">
<?php 
if(isset($_SESSION['serror'])){ ?>
<div class="alert alert-danger text-center" role="alert" id="serror">
	<?=$_SESSION['serror'] ?>
</div>
<?php } ?>
								<div class="form-group">
												<div class="change-avatar">
													<div class="profile-img">
														<?php
														$userid = $_SESSION['userid'];
														$qimage = "SELECT `image` FROM `users` WHERE `id`=$userid";
														$image = $connect->query($qimage);
														foreach ($image as $img) {
														?>
															<img src="<?= $img['image'] ?>" alt="User Image">
														<?php } ?>
													</div>

													<div class="upload-img">
														<div class="change-photo-btn">
															<span><i class="fa fa-upload"></i> Upload Photo</span>
															<input type="file" class="upload" name="image">
														</div>
														<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" class="form-control" value=" " name="fname">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" class="form-control" value=" " name="lname">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Date of Birth</label>
												<div class="cal-icon">
													<input type="text" class="form-control datetimepicker" value="" name="bod">
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Blood Group</label>
												<select class="form-control select" name="blood">
													<option>A-</option>
													<option>A+</option>
													<option>B-</option>
													<option>B+</option>
													<option>AB-</option>
													<option>AB+</option>
													<option>O-</option>
													<option>O+</option>
												</select>
											</div>
										</div>

										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Mobile</label>
												<input type="text" class="form-control" name="phone">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" name="address">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>City</label>
												<input type="text" class="form-control" name="city">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>State</label>
												<input type="text" class="form-control" name="state">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Zip Code</label>
												<input type="text" class="form-control" name="zipcode">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Country</label>
												<input type="text" class="form-control" name="country">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
									</div>
								</form>
								<!-- /Profile Settings Form -->

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Page Content -->



	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	<script>
			var serror=document.getElementById("serror");
			setTimeout(()=>serror.style.display="none",3000)
		</script>

</body>

<!-- doccure/profile-settings.html  30 Nov 2019 04:12:18 GMT -->

</html>