<?php 
    require_once 'db_connect.php';
    require_once 'header.php';

    // session_start();
    if(!isset($_SESSION['name'])){
        header('location:login_page.php');
    }
    $nm = strtok($_SESSION['name'], ' ');
    // $q = "SELECT * FROM teacher WHERE name = $_SESSION['name']";
    // $w = mysqli_query($con,$q);
    // $r = mysqli_fetch_array($w);
    // $tid = $r[id];
    $qry2 = "SELECT * FROM allocsub WHERE tid = $tid";
        $res2 = mysqli_query($con, $qry2);
        $row2 = mysqli_fetch_array($res2);
        $sname = $row2['sname'];
    $qry3 = "SELECT * FROM subject WHERE name = '$sname'";
    $res3 = mysqli_query($con, $qry3);
        $row3 = mysqli_fetch_array($res3);
        $sid = $row3['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/class.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
            <h4><a href="./teacher.php">Home</a></h4>
            <h4 id="logout"><a href="../logout.php">SignOut</a></h4>
        </div>
    </nav>
    <div class="container">
    <?php 
        // echo $_SESSION['sem'];
        $qry = "SELECT * FROM allocsub WHERE tid = $tid";
        $res = mysqli_query($con, $qry);
        // $row = mysqli_fetch_array($res);
        
        $qry1 = "SELECT * FROM subject WHERE id = $sid";
        $res1 = mysqli_query($con, $qry1);
        $row1 = mysqli_fetch_array($res1);
        while($row = mysqli_fetch_array($res))
        {
            ?>
              <div class="sub sub1">
                <a href="<?php echo $row1['link']; ?>"><?php echo $row['sname']; ?></a>
                <div class="time"><?php echo $row1['time']; ?></div>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>