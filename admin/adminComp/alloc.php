<?php 
    require_once '../db_conn.php';
    // require_once 'reg_db.php'

    session_start();
    if(!isset($_SESSION['mail'])){
        header('location:../index.php');
    }
    $nm = strtok($_SESSION['mail'], '@');
    // echo $_SESSION['tid'];
    // if(isset($_POST['id'])){
    //     $tid = $_POST['id'];
    // }
    if(isset($_POST['approve']))
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
            <h3>Teacher Name: <?php echo $row['name'] ?></h3>
            <h4>Subjects:
            <?php
                $s = "SELECT * FROM allocsub WHERE tid = $tid";
                $w = mysqli_query($con,$s);
                    while ($rows = mysqli_fetch_array($w)) {
                        echo $rows['sname'];
                        echo "<br>";
                    }
                ?> </h4>
        </div>

        <div class="alloc">
            <form action="allocSubDB.php" method=POST>
                    <!-- <label for="sid">Subject ID: <span class="required">*</span></label>
					<input type="text" id="sid"  name = "sid">
					 -->
                    <div class="subject">
                    <label for="sub">Choose a subject:</label>
                    <select name="sub" id="sub">
                    <?php
                        $q = "SELECT * FROM subject";
                        $r = mysqli_query($con,$q); 
                        while($row = mysqli_fetch_array($r))
                        {
                            $sname = $row['name'];
                            echo "<option value='$sname'>$sname</option>";
                            ?>
                            <!-- <option value="NT">Numerical Techniques</option>
                            <option value="PY">Python</option>
                            <option value="OS">Operating System</option> -->
                            <?php
                        }
                        ?>
                        </select>


                    </div>
                    <input type="hidden" name="id" value = "<?php echo $tid ?>">
                    <input type="submit" value="Submit" id="submit" class="submit" name = 'allocate'></input>

            </form>
        </div>
    </div>
</body>


<?php
    // $qry = "SELECT * FROM allocsub "
    
?>