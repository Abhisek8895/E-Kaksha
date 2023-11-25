<?php
    error_reporting(~E_WARNING);
    require_once  'db_connect.php';
    require_once 'header.php';
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
    <link rel="stylesheet" href="../../css/manage_teacher.css">
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

        <!--div class="addTeacher">
            <a href="add_note.php" class="add">+Add</a>
        </div-->
        <?php 
        $qry = "SELECT * FROM allocsub WHERE tid = $tid";
        $res = mysqli_query($con,$qry);
        while($subs= mysqli_fetch_array($res)){ 
                $s = $subs['sname'];
                //getting data from subject table based on the subject name fetched from allocsub table
                $qry1 = "SELECT * FROM subject WHERE name='$s'";
                $res1 = mysqli_query($con,$qry1);
                $res2= mysqli_fetch_assoc($res1);
                
         ?>     
            <div class="card">
                <div class="details">
                    <h4 class="name">
                    <?php 
                        echo $res2['name'];
                    ?>
                    </h4> 
                   
                </div>
                <div class="addTeacher">
                <!--form action="" method="post">
                        <input type="submit" value="add">    
                </form-->
                <a href="add_note.php?sname=<?php echo $res2['name']; ?>" class="add">Add+</a>
                </div>
        </div>
            
            <?php
                 }
            ?>


    </div>
</body>