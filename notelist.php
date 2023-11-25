<?php 
    // require_once 'db_connect.php'
    // require_once 'reg_db.php'

    session_start();
    if(!isset($_SESSION['name'])){
        header('location:index.php');
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
    <link rel="stylesheet" href="./css/notelist.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha-Class</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
            <h4><a href="./index.php">Home</a></h4>
            <h4>Contacts</h4>
            <h4 id="logout"><a href="logout.php">SignOut</a></h4>
        </div>
    </nav>

    <div class="container">
        <div class="subname">
            <h2>Subject Name goes here</h2>
        </div>

        <div class="notelist">
            <div class="title">
                <a href="">Title of note</a>
            </div>
            
        </div>
    </div>
</body>