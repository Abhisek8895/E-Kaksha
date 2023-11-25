<?php 
    require_once 'db_connect.php';
    include_once 'student_nav.php';

    $qry1 = "SELECT * FROM subject WHERE sem = $_SESSION[sem]";
    $res1 = mysqli_query($con,$qry1);
    $row1 = mysqli_fetch_assoc($res1);
    $time = $row1['time'];
    $tm = date ("g:i A", strtotime ($row1['time']));
    
    
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
    <link rel="stylesheet" href="../css/class.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha-Class</title>
</head>
<body>
    <div class="container">
        <?php 
        // echo $_SESSION['sem'];
        
        $qry = "SELECT * FROM subject WHERE sem = $_SESSION[sem]";
        $res = mysqli_query($con, $qry);
        while($row = mysqli_fetch_array($res))
        {
            ?>
              <div class="sub sub1">
                <a href="<?php echo $row['link']; ?>"><?php echo $row['name']; ?></a>
                <div class="time"><?php echo $tm ?></div>
            </div>
            <div class="join"><a id="join-btn" href="<?php echo $row['link']; ?>">Join Meeting</a></div>
            <?php
        }
        ?>
    </div>
</body>
</html>

<?php 
?>