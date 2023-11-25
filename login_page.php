	<?php
	session_start();
	require_once 'db_connect.php';
    if(isset($_POST['login']))
    {
		if(isset($_POST['role'])){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$query = "SELECT * FROM teacher WHERE binary email = '$email' AND binary password = '$password'";
			$res = mysqli_query($con,$query);
			$row = mysqli_fetch_array($res);

			$_SESSION['name'] = $row['name'];
			
			$_SESSION['email'] = $row['email'];


			if (mysqli_num_rows($res)>0) {
				?>
					<script>
						
						window.location = './teacher/teacher.php';
					</script>
				<?php
			}
			else{
				?>
					<script>
						alert("Invalid Email or password !!!");
						window.location = 'login_page.php';
					</script>
				<?php
			}
		}
		else
		{
			$email = $_POST['email'];
			$password = $_POST['password'];

			$qry = "SELECT * FROM user_data WHERE  email='$email' AND  password='$password'";
			$res = mysqli_query($con, $qry);
			$row = mysqli_fetch_array($res);
			
			$status = $row['status'];
			

			$qry1 = "SELECT * FROM user_data WHERE binary email='$email' AND  binary password='$password'";
			$res1 = mysqli_query($con, $qry1);
			$result = mysqli_num_rows($res1);

			if($result == 1)
			{
				$_SESSION['name'] = $row['name'];
				$_SESSION['status'] = $row['status'];	
				// $_SESSION['email'] = $row['email'];
				// $_SESSION['password'] = $row['password'];
				$_SESSION['sem'] = $row['sem'];

				if($status == 'approved')
				{
					?>
					<script>
						
						window.location = 'index.php';
					</script>
					<?php
				}
				elseif($status == 'pending')
				{
					?>
					<script>
						alert('Account is not approved.');
						window.location = 'login_page.php';
					</script>
					<?php
				}
			}
			else
				{
					?>
					<script>
						alert('Invalid email or password!!!');
						window.location = 'login_page.php';
					</script>
					<?php
				}
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type ="text/css" href = "css/new.css">

<!-- Bootstrap 5 CSS-->
<link rel="stylesheet" href="bs/bootstrap.min.css">

<!-- Bootstarp 5 JS-->
<script src="bs/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="page">
	<div class="registration_form">
		<div class="title">
			<em>Log In</em>
		</div>

		<form action="" method="post" onsubmit="return login_validate();">
			<div class="registration_box">

					<div class="box_input">
						<label for="email">Email Address</label>
						<input type="text" id="email" name = "email">
						<label id="email_error" class="form-label text-danger"></label>
					</div>
				<div class="box_input">
					<label for="password">Password</label>
					<input type="password" id="password" name = "password">
					<label id="password_error" class="form-label text-danger"></label>
				</div>
				<div class="box_input">
				<span>Log-in as teacher &nbsp;</span>
					<input type="checkbox" id="role" name = "role">
					<label id="role_error" class="form-label text-danger"></label>
				</div>
				<div class="box_input">
					<input type="submit" value="Log In" class="submit_btn" name='login'>
				</div>
                <div class="box_input">
                    Don't have an account? 
                    <a href="registration_.php">Click Here</a>
                </div>

                <div class="box_input"> 
                    <a href="./admin/index.php">Log-in as Admin</a>
                </div>
			</div>
		</form>
	</div>
</div>
</body>
</html>

<script src="js/validation.js"></script>