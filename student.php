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
     
    <link rel="stylesheet" href="./css/index.css">
    <script src="./js/modal.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
            <h4>Home</h4>
            <h4>Contacts</h4>
            <h4 id="logout"><a href="logout.php">SignOut</a></h4>
        </div>
    </nav>

    <div class="container">
        <div class="card class">
            <div class="content">
                <h2>Class</h2>
                <!-- <form action="" method="post"> -->
                    <button type="submit" id ="myBtn">Click Here!</button>
                <!-- </form> -->
                
            </div>
        </div>
        <div class="card notes">
            <div class="content">
                <h2>Notes</h2>
                <!-- <h3>Card Two</h3> -->
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae. Veritatis</p> -->
                <?php //echo $_SESSION['docs']; ?>
                <a href="#">Click here!</a>
            </div>
        </div>
        <div class="card notice">
            <div class="content">
                <h2>Notice</h2>
                <!-- <h3>Card Three</h3> -->
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae. Veritatis</p> -->
                <a href="#">Click here!</a>
            </div>
        </div>
    </div>



    <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content" id="modal-class">
                    <span class="close  text-end">&times;</span>
                    <p>Classes</p>
                    <div class="class-content">
                        <a class="sub sub1" href="">Python</a>
                        <a class="sub sub2" href="">Computer Graphics</a>
                        <a class="sub sub3" href="">Web Developement</a>
                        <a class="sub sub4" href="">Data Science</a>
                    </div>
                </div>

    </div>
    
</body>
</html>