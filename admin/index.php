<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
<link rel = "stylesheet" type ="text/css" href = "css/new.css">

</head>
<body>
<div class="page">
	<div class="registration_form">
		<div class="title">
			<em>Administrative Log-in</em>
		</div>

		<form action="" method="post" onsubmit="return login_validate();">
			<div class="registration_box">

					<div class="box_input">
						<label for="email">Email Address</label>
						<input type="text" id="email" name = "email" placeholder ="abc@abc.com">
						<label id="email_error" class="form-label text-danger"></label>
					</div>
				<div class="box_input">
					<label for="password">Password</label>
					<input type="password" id="password" name = "password" placeholder = "**********">
					<label id="password_error" class="form-label text-danger"></label>
				</div>
				<div class="box_input">
					<input type="submit" value="Log In" class="submit_btn" name='login'>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>

<script src="js/validation.js"></script>
<?php
	session_start();
	require_once 'db_conn.php';

	if (isset($_POST['login'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
			$query = "SELECT * FROM admin WHERE binary mail = '$email' AND binary password = '$password'";
			$res = mysqli_query($con,$query);
			$row = mysqli_fetch_array($res);

			// $query1 = "SELECT * FROM admin WHERE mail = '$mail' AND password = '$password'";
			// $res1 = mysqli_query($con,$query1);
			// $row1 = mysqli_fetch_array($res1);

			$_SESSION['mail'] = $row['mail'];
			echo $row1['mail'];
			echo $row1['password'];
			

			if (mysqli_num_rows($res)>0) {
				?>
					<script>
						window.location = 'admin.php';
					</script>
				<?php
			}
			else{
				?>
					<script>
						alert("Invalid Email or password !!!");
						window.location = 'index.php';
					</script>
				<?php
			}
	}
?>
