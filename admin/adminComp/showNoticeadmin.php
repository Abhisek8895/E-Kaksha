<?php 

     require_once '../db_conn.php';
    session_start();
    // require_once "db_conn.php";
    if(!isset($_SESSION['mail'])){
        header('location:index.php');
    }

    $nm = strtok($_SESSION['mail'], '@');
    
    $qry = "SELECT * FROM notice";
     $res = mysqli_query($con,$qry);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!-- Latest compiled and minified CSS -->


<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  -->
<link rel="stylesheet" href="../css/notice.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-Kaksha</title>

</head>
<body>

<nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?> </div>
        <div class="header">
            
            <h3 id = "acp"><a href="../admin.php">Admin Control Panel</a></h3>
            <h4 id="logout"><a href="logout.php">SignOut</a></h4>
        </div>
    </nav>


    
        <div class="container">
            <h2 class="notice_header">Notice Board
            <div class="row">
                <div class="button">
                 <form action="addNotice.php" method="post">
                    
                    <input type="submit" class="add-button" name="notice" value="+Add">
                 </form>
                </div>
                </h2>
                <?php
                     while($res1=mysqli_fetch_assoc($res)){
                ?>
                <div class="board">
                            <!--marquee direction="up" scrollamount="1" behavior="scrolling">
                                    <?php //echo $res1['notice']; ?>
                                </marquee-->
                                <div class="notice-info">
                                    🎯
                                    <?php echo $res1['notice'];?><br>
                                    <?php if($res1['tname']!=NULL){
                                        echo "added by ".$res1['tname'];
                                    }
                                    
                                    ?>
                                </div>
                        </div>
                <?php } ?>
            </div>
        </div>

</body>
