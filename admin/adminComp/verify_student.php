<?php 
    require_once '../db_conn.php';
    // require_once 'reg_db.php'

    session_start();
    if(!isset($_SESSION['mail'])){
        header('location:index.php');
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
    <link rel="stylesheet" href="../css/verify_student.css">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
        <h3 id = acp><a href="../admin.php">Admin Control Panel</a></h3>
            <h4 id="logout"><a href="logout.php">SignOut</a></h4>
        </div>
    </nav>


    <div class="container">


        
        <?php
            $qry = "SELECT * FROM user_data WHERE STATUS = 'pending'";
            $res = mysqli_query($con,$qry);
            while($row = mysqli_fetch_array($res))
            {
                ?>
            <div class="card">
                <div class="details">
                    <h4 class="name"><?php echo $row['name'] ?></h4>
                    <h5 class="sem"><?php echo $row['sem'] ?></h5>
                    <h5 class="reg"><?php echo $row['id'] ?></h5>
                </div>
                <div class="actions">
                    <form action="" method="post">
                            <input type="hidden" name = 'id' value = "<?php echo $row['id']?>" >
                            <input type="submit" value="Approve" name = "approve" class = "accept button">
                            <input type="submit" value="Deny" name = "deny" class = "reject button">
                    </form>
                </div>
            </div>
                <?php
            }
            
            ?>
        


    </div>
</body>
<?php
        if(isset($_POST['approve']))
        {
            $id = $_POST['id'];

            $qry1 = "UPDATE user_data SET status = 'approved' WHERE id = '$id'";
            $result = mysqli_query($con,$qry1);
            ?>
            <script>
                alert("User Approved.");
                window.location = 'verify_student.php';
            </script>
            <?php

        }
        if(isset($_POST['deny']))
        {
            $id = $_POST['id'];

            $qry1 = "DELETE FROM user_data WHERE id = '$id'";
            $result = mysqli_query($con,$qry1);
            ?>
            <script>
                alert("User Denied.");
                window.location = 'verify_student.php';
            </script>
            <?php

        }
    ?>