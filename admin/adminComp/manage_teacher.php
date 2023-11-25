<?php 
    require_once '../db_conn.php';
    // require_once 'reg_db.php'

    session_start();
    if(!isset($_SESSION['mail'])){
        header('location:../index.php');
    }
    $nm = strtok($_SESSION['mail'], '@');
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
    <link rel="stylesheet" href="../css/manage_teacher.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
        <h3 id = "acp"><a href="../admin.php">Admin Control Panel</a></h3>
            <h4 id="logout"><a href="logout.php">SignOut</a></h4>
        </div>
    </nav>

    <div class="container">

        <div class="addTeacher">
            <a href="../add_teacher.php" class="add">+Add Teacher</a>
        </div>
        <?php
                 $qry = "SELECT * FROM teacher";
                 $res = mysqli_query($con,$qry);
                 while ($row = mysqli_fetch_array($res)) {
                     ?>
                <div class="card">
                <div class="details">
                <h4 class="name"><?php echo $row['name'] ?></h4>
                
                
                
                </div>
                <div class="actions">
                
                <!-- <input type="button" value="Remove" class = "delete button" name = "remove"> -->
                <!-- <a href="#" class="delete button">Remove</a> -->
                <form action="" method="post">
                <input type="hidden" name="id" value = "<?php echo $row['id']; ?>">
                <input type="submit" value="Remove" class = "delete button" name = "remove">
                </form>
                </div>
                <br>
                </div>
                <?php
                 }
            ?>


    </div>
</body>
<?php

    if(isset($_POST['remove'])){
        $id = $_POST['id'];

        $qry1 = "DELETE FROM teacher WHERE id = '$id'";
        $res = mysqli_query($con, $qry1);
        ?>
        <script>
            alert("Teacher removed.");
            window.location = "manage_teacher.php";
        </script>
        <?php

    }

?>