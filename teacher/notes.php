<?php 
     require_once 'db_connect.php';
    require_once 'header.php';

     //session_start();
    if(!isset($_SESSION['name'])){
        header('location:login_page.php');
    }
    $nm = strtok($_SESSION['name'], ' ');
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
    <link rel="stylesheet" href="../css/notes.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha-Notes</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
            <h4><a href="../teacher.php">Home</a></h4>
            
            <h4 id="logout"><a href="../logout.php">SignOut</a></h4>
        </div>
    </nav>
    <div class="container">
    <?php 
         $qry = "SELECT * FROM allocsub WHERE tid = $tid";
         $res = mysqli_query($con,$qry);
         while($subs= mysqli_fetch_array($res)){ 
    ?>
        <div class="sub sub1">
            <a href="add_note.php?sname=<?php echo $subs['sname'];?>"><?php echo $subs['sname'] ?></a>
        </div>
        <?php } ?>
    </div>
        <!-- <div class="sub sub2">
            <a href="#">Web Developement</a>
        </div>
        <div class="sub sub3">
            <a href="#">Computer Graphics</a>
        </div>
        <div class="sub sub4">
            <a href="#">Data Science</a>
        </div> -->

    
    
</body>
</html>