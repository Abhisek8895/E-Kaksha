<?php 
    // require_once 'db_connect.php'
    // require_once 'reg_db.php'

    session_start();
    require_once "db_conn.php";
    if(!isset($_SESSION['mail'])){
        header('location:index.php');
    }
    $nm = strtok($_SESSION['mail'], '@');
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
    <link rel="stylesheet" href="./css/admin.css">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?> </div>
        <div class="header">
            
            <h3 id = "acp"><a href="admin.php">Admin Control Panel</a></h3>
            <h4 id="logout"><a href="logout.php">SignOut</a></h4>
        </div>
    </nav>



    <!-- Functionalities

    1. Admin would verify the students
    2. Admin can create/delete teacher credentials
    3. Assign subjects to teachers
    4. Create/modify subjects -->

    <div class="container">
        <div class="card card1">
            <a href="./adminComp/verify_student.php" >Verify Students</a>
        </div>


        <div class="card card2">
            <a href="./adminComp/manage_teacher.php" >Manage Teacher Profile</a>
        </div>


        <div class="card card3">
            <a href="./adminComp/manage_subject.php" >Create/Modify Subjects</a>
        </div>


        <div class="card card4">
            <a href="./adminComp/assign_subject.php" >Assign Subject</a>
        </div>

        <div class="card card5">
            <a href="./adminComp/showNoticeadmin.php" >Notice</a>
        </div>


    </div>

</body>
    



