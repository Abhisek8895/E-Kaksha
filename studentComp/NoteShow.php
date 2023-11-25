<?php 
    require_once 'db_connect.php';
    include_once 'student_nav.php';
    if(isset($_GET['sname'])){
        $sub = $_GET['sname'];
        // echo $sub;
    }
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
    <div class="container">
    <?php
             $qry = "SELECT * FROM note WHERE sname='$sub'";
             $res = mysqli_query($con,$qry);
              while($file = mysqli_fetch_assoc($res))
              { 
                ?>
                <div class="card">
                <h3><?php echo $file['fname']?></h3>
                <div id="download-btn" ><a href="fileDownload.php?file_id=<?php echo $file['id']?>">Download</a></div>
                </div>
                <?php
              }
              ?>

    </div>
</body>
</html>