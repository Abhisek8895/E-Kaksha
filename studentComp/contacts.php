<?php 
    require_once 'db_connect.php';
    include_once 'student_nav.php';
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
    <link rel="stylesheet" href="../css/contacts.css">
    <script src="./js/modal.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha</title>
</head>
<body>
    <div class="container">


        <div class="official">
            <h3>Official mail ID</h3>
            <p class="mail"><a href="mailto:imca@utkal.co.in">imca@utkal.co.in</a></p>
        </div>

        <?php
            $qry = "SELECT * FROM teacher";
            $res = mysqli_query($con,$qry);
            while($row = mysqli_fetch_array($res))
            {
                ?>
                <div class="teacher">
                <h3 class="name">Teacher Name :- <?php echo $row['name'] ?></h3>
                <h4 class="phone">Phone :- <?php echo $row['mobile'] ?></h4>
                <h4 class="mail">Mail ID:<a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a></h4>
                <a href="mailto:"></a>
                </div>
                <?php
            }
            ?>

    </div>

</body>