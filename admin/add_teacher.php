<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form In HTML and CSS</title>
	
	<!-- Costum CSS -->
	<link rel="stylesheet" href="css/new1.css">
	
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 

</head>

<body>
	
<div class="page">
	<div class="registration_form">
		<div class="title">
        Teacher Registration    
    </div>
		<!-- <form action="reg_db.php" method="post"> -->
		<form action="teacher_db.php" method="post" onsubmit="return validate();">
			<div class="registration_box">
				
                <!-- <div class="box_input">
                    <label for="id">Registration Id <span class="required">*</span></label>
                    <input type="text" id="id"  name = "id" >
                    <label id="id_error" class="form-label text-danger"></label>
                </div> -->

				<div class="box_input">
					<label for="name">Name <span class="required">*</span></label>
					<input type="text" id="name" name = "name">
					<label id="name_error" class="form-label text-danger"></label>
				</div>

				<div class="box_input">
					<label for="email">Email <span class="required">*</span></label>
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
				</div>
				
			</div>
		</form>
		
	</div>
</div>
</body>
<script src="js/validate_teacher.js"></script>