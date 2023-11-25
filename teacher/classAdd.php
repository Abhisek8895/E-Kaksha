<?php
    require_once 'db_connect.php';
    require_once 'header.php';
    if(!isset($_SESSION['name'])){
        header('location:../login_page.php');
    }
    $nm = strtok($_SESSION['name'], ' ');
    
    if(isset($_POST['add'])){
        //getting the data about subject from subject table based on the sub name
        $sub = $_POST['sname'];
        
        $qry = "SELECT * FROM subject WHERE name='$sub'";
        $res = mysqli_query($con,$qry);
        $res1 = mysqli_fetch_assoc($res);
       //fetching all the information display on the form
        $sem= $res1['sem'];
      
    }
    if(isset($_POST['submit'])){
       //for updating the link and time added in the subject table based on the subject name 
        $sub = $_POST['sname'];
        $sem = $_POST['sem'];
        $link = $_POST['link'];
        $time = $_POST['time'];
        $qry2 = "UPDATE subject SET link='$link',time='$time' WHERE name='$sub'";
        $res2 = mysqli_query($con,$qry2);
        if($res2){
            echo "<script> alert('Added'); </script>";
            header('location: class.php');
     }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Class</title>
    <link rel = "stylesheet" type ="text/css" href = "../css/style1.css">
    <link rel="stylesheet" href="../css/class.css">

</head>
<body>
<nav class="navbar">
        <div class="navbar__title">Hello <?php echo $nm; ?></div>
        
        <div class="header">   
        <h4><a href="teacher.php">Home</a></h4>
        <h4 id="logout"><a href="../logout.php">SignOut</a></h4>
        </div>
    </nav>
    <h1>Class Details</h1>
    <div class="class">
        <form action = '' id="classschedule">
            <label>Claas Link</label>
            <br>
            <input type="URL" name="link" id="class_link" value="<?php //echo $res1['link'];?>" >
            <br><br>
            
            <label> Class Time</label>
            <br>
            <input type="time" name="time" id="timming" value="<?php echo $res1['time'];?>"/>
            
            <br><br>
            <input type="submit" name="submit" id="add" value="add">
            <br><br>
        </form>
    </div>
</body>
</html>
