<?php 
    require_once '../db_conn.php';
    // require_once 'reg_db.php'

    session_start();
    if(!isset($_SESSION['mail'])){
        header('location:.//index.php');
    }
    $nm = strtok($_SESSION['mail'], '@');
/*
    $q = "SELECT * FROM teacher";
    $r = mysqli_query($con,$q);
    $f = mysqli_fetch_array($r);
    $_SESSION['id'] = $f['id'];    
    */
    
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
    <link rel="stylesheet" href="../css/assign_subject.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
        <h3 id="acp"><a href="../admin.php">Admin Control Panel</a></h3>
            <h4 id="logout"><a href="logout.php">SignOut</a></h4>
        </div>
    </nav>

    <div class="container">

        
        <?php 
                    $qry = "SELECT * FROM teacher";//fetching teacher data
                    $res = mysqli_query($con,$qry);
                    
                    $res = mysqli_query($con,$qry);
                    while($row = mysqli_fetch_array($res))
                    {
                        $tid = $row['id'];//fetching teacher id
                        $_SESSION['tid'] = $tid;
                        $qry1 = "SELECT * FROM allocsub WHERE tid = $tid";//getting the allocated subject info based on tid
                        $res1 = mysqli_query($con,$qry1);
                        
                        ?>
                        <div class="card">
                            <div class="details">
                            <h4 class="name"><?php echo $row['name']; ?></h4>
                                
                <!--  -->
                
            </div>
            <div class="actions">
            <form action="alloc.php" method="post">
                    <input type="hidden" name = 'id' value = "<?php echo $tid ?>" >
                    <input type="submit" value="Allocate" name = "approve" class = " alloc  button">
            </form>
            <form action="dealloc.php" method="post">
                <input type="hidden" name="id" value = "<?php echo $tid ?>">
                <input type="submit" value="Deallocate" name = "deallocate" class = "realloc  button">
            </form>

                <!-- <div class="alloc">
                    <a href="./alloc.php" class="alloc">Alloc</a>
                </div>


                <a href="./realloc.php" class="realloc button">Realloc</a>-->
            </div> 
            </div>
            <?php
                    }
                ?>


    </div>

</body>

<?php
    
?>
