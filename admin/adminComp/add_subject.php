<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form In HTML and CSS</title>
	
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
			Add Subject
		</div>
		<!-- <form action="reg_db.php" method="post"> -->
		<form action="" method="post">
			<div class="registration_box">
				
				<div class="box_input">
					<label for="name">Subject Name <span class="required">*</span></label>
					<input type="text" id="name" name = "sub">
					<label id="name_error" class="form-label text-danger"></label>
				</div>

				
				<div class="box_input">
					<label for="sem">Semester<span class="required">*</span></label>
					<input type="text" id="sem" name = "sem" >
					<label id="email_error" class="form-label text-danger"></label>
				</div>
				
				<div class="box_input">
					<form action="" method="post">
					<input type="submit" value="Create" class="submit_btn" name='create'>
					<!-- <button type="submit" class="submit_btn" name = 'login' onclick='validate()'>Register Now</button> -->
					</form>
				</div>
		</div>
	</div>
	</form>
		
	</div>
</div>
<?php
	require_once "../db_conn.php";
	if(isset($_POST['create']))
	{
		$sub = $_POST['sub'];
		$sem = $_POST['sem'];

        $qry = "INSERT INTO subject (name, sem) VALUES ('$sub', $sem)";
		if(mysqli_query($con,$qry))
        {
            ?>
            <script>
                alert("Subject Added Successfully");
                window.location='./manage_subject.php';
            </script>
            <?php
        }
        else{
            echo 'Error '.mysqli_error($con);
        }

        mysqli_close($con);

	}
?>