<?php
    require_once 'db_connect.php';
    include_once 'student_nav.php';
    $nm = strtok($_SESSION['name'], ' ');
    $sem = $_SESSION['sem'];
    $qry = "SELECT * FROM subject WHERE sem = $sem";
    $res = mysqli_query($con,$qry);
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
    <div class="container">
        <?php while($res1 = mysqli_fetch_array($res))
        {
        ?>
        <div class="sub sub1">
        <!-- <form action="showNoteStudent.php" method="get"> -->
                 <!-- <input type="hidden" name = "sub"/> -->
                 <!-- <input type="submit" name = "sub" value = ""/> -->
                 <a href="NoteShow.php?sname=<?php echo $res1['name']?>">
                 <?php echo $res1['name'];?></a>
            
            
        </div>
        <?php
        }?>

    </div>

    
    
</body>
</html>