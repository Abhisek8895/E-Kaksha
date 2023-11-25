<?php 
    // require_once 'db_connect.php'
    // require_once 'reg_db.php'

    session_start();
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
    <link rel="stylesheet" href="./css/index.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
            <h4><a href="index.php">Home</a></h4>
            <h4><a href="./studentComp/contacts.php">Contacts</a></h4>
            <h4 id="logout"><a href="logout.php">SignOut</a></h4>
        </div>
    </nav>

    <div class="container">
        <div class="card class">
            <div class="content">
                <h2>Class</h2>
                <!-- <h3>Card One</h3> -->
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae. Veritatis</p> -->
                <a id= "myBtn" href="./studentComp/class.php">Click here!</a>
                
            </div>
        </div>
        <div class="card notes">
            <div class="content">
                <h2>Notes</h2>
                <!-- <h3>Card Two</h3> -->
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae. Veritatis</p> -->
                
                <a href="./studentComp/notes.php">Click here!</a>
            </div>
        </div>
        <div class="card notice">
            <div class="content">
                <h2>Notice</h2>
                <!-- <h3>Card Three</h3> -->
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae. Veritatis</p> -->
                <a href="./studentComp/showNoticeStudent.php">Click here!</a>
            </div>
        </div>
    </div>
    
</body>
</html>