<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form For Teacher</title>
	
	<!-- Costum CSS -->
	<link rel="stylesheet" href="../css/new.css">
	
	<!-- Bootstrap 5 CSS-->
	<link rel="stylesheet" href="bs/bootstrap.min.css">

	<!-- Bootstarp 5 JS-->
	<script src="bs/bootstrap.bundle.min.js"></script>
</head>

<body>
	
<div class="page">
	<div class="registration_form">
		<div class="title">
			Teacher Registration Form
		</div>
		<!-- <form action="reg_db.php" method="post"> -->
		<form action="" method="post" onsubmit="return validate();">
			<div class="registration_box">
				
				<div class="box_input">
					<label for="name">Name <span class="required">*</span></label>
					<input type="text" id="name" name = "name">
					<label id="name_error" class="form-label text-danger"></label>
				</div>

				
				<div class="box_input">
					<label for="email">Email Address <span class="required">*</span></label>
					<input type="text" id="email" name = "email" >
					<label id="email_error" class="form-label text-danger"></label>
				</div>
				
				<div class="box_input">
					<label for="mobile">Mobile <span class="required">*</span></label>
					<input type="text" id="mobile" name = "mobile" >
					<label id="mobile_error" class="form-label text-danger"></label>
				</div>
				
				
				<div class="box_input">
					<label for="password">Password <span class="required">*</span></label>
					<input type="password" id="password" name = "password">
					<label id="password_error" class="form-label text-danger"></label>
				</div>
				<div class="box_input">
					<label for="cpassword">Confirm Password <span class="required">*</span></label>
					<input type="password" id="cpassword" name = "cpasword">
					<label id="password2_error" class="form-label text-danger"></label>
				</div>
				<div class="box_input">
					<input type="submit" value="Register Now" class="submit_btn" name='login'>
					<!-- <button type="submit" class="submit_btn" name = 'login' onclick='validate()'>Register Now</button> -->
				</div>
				
				<div>
			
		
		</form>
		
	</div>
</div>
<script src="../js/validation.js"></script>