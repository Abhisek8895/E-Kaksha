<?php
    require_once 'db_connect.php';
    include_once 'teacher_nav.php';
    if(isset($_POST['add'])){
        //getting the data about subject from subject table based on the sub name
        $sub = $_POST['sname'];
        
        $qry = "SELECT * FROM subject WHERE name='$sub'";
        $res = mysqli_query($con,$qry);
        $res1 = mysqli_fetch_assoc($res);
       //fetching all the information display on the form
        $sem= $res1['sem'];
      
    }
    if(isset($_POST['submit'])){
       //for updating the link and time added in the subject table based on the subject name 
        $sub = $_POST['sname'];
       // $sem = $_POST['sem'];
        $link = $_POST['link'];
        $time = $_POST['time'];
        $qry2 = "UPDATE subject SET link='$link',time='$time' WHERE name='$sub'";
        $res2 = mysqli_query($con,$qry2);
        if($res2){
            echo "<script> alert('Added'); </script>";
            header('location: class.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- Latest compiled and minified CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  -->
    <link rel="stylesheet" href="../css/add_class.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha</title>
</head>
<body>
    <div class="container">

        <div class="name">
            <h2>Enter Meeting Details for <?php echo $sub; ?></h2>
        </div>
        <form action="" method="post" id="classschedule">

                <!--input type="text" name="sem" value="<?php //echo $sem?>" readonly><br-->
                <input type="hidden" name="sname" value="<?php echo $sub?>" readonly><br>

                <div class="box_input">
					<label for="url">Meeting Link</label>
					<input type="URL" name="link" id="class_link" value="<?php //echo $res1['link'];?>" >
				</div>

                

				
				<div class="box_input">
					<label for="time">Meeting Time</label>
					<input type="time" id="time" name = "time" >
				</div>
                <div class="submit-btn">
                    <input type="submit" name="submit" id="add" value="Add">
                </div>

        </form>
    </div>

</body>