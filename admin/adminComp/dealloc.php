<?php 
    require_once '../db_conn.php';
    // require_once 'reg_db.php'

    session_start();
    if(!isset($_SESSION['mail'])){
        header('location:../index.php');
    }
    $nm = strtok($_SESSION['mail'], '@');

    if(isset($_POST['deallocate']))
    {
        $_SESSION['tid'] = $_POST['id'];
        $tid = $_SESSION['tid'];
        $qry = "SELECT * FROM teacher WHERE id = $tid";
        $res = mysqli_query($con,$qry);
        $row = mysqli_fetch_array($res);
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
    <link rel="stylesheet" href="../css/alloc.css">
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
        <div class="teacher-details">
            <h3>Teacher Name :<?php echo $row['name'] ?></h3>
            <h4>Subjects: <br> </h4>
            <div class="board">
                <?php
                    $s = "SELECT * FROM allocsub WHERE tid = $tid";
                    $w = mysqli_query($con,$s);
                        while ($rows = mysqli_fetch_array($w)) {
                            // echo $rows['sname'];
                            ?>
                            <div class="card">
                            <h3 class="subname"><?php echo $rows['sname'];?></h3>
                            <a class="delete-btn" href="deallocDB.php?sname=<?php echo $rows['sname'];?>">Delete</a>
                            </div>
                            <?php
                            echo "<br>";
                            
                        }

                ?>
            </div>
        </div>

        <!-- <div class="alloc">
            <form action="deallocDB.php" method=POST>
                    <div class="subject"> -->
                    <!-- <label for="sub">Choose a subject:</label> -->

                    <!-- <select name="sub" id="sub"> -->
                    <?php 
                        // $q = "SELECT * FROM allocsub WHERE tid = $tid";
                        // $r = mysqli_query($con,$q); 
                        // while($row = mysqli_fetch_array($r))
                        // {
                        //     $sname = $row['sname'];
                        //     echo "<option value='$sname'>$sname</option>";
                        // }

                    ?>
                        <!-- <option value="CG">Computer Graphics</option>
                        <option value="NT">Numerical Techniques</option>
                        <option value="PY">Python</option>
                        <option value="OS">Operating System</option> -->
                    <!-- </select> -->


                    <!-- </div> -->
                    <!-- <input type="hidden" name="sname" value = "<?php// echo $sname ?>">
                    <input type="submit" value="Submit" id="submit" name = "dealloc" class="submit"></input> -->

            <!-- </form>
        </div> -->
    </div>
</body>

