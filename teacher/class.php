<?php 
    require_once 'db_connect.php';
    include_once 'header.php';

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
    <link rel="stylesheet" href="../css/class.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha-Class</title>
</head>
<body>
<nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">   
        <h4><a href="teacher.php">Home</a></h4>
        <h4 id="logout"><a href="../logout.php">SignOut</a></h4>
        </div>
    </nav>
    
    <div class="container">
        <?php 
        // echo $_SESSION['sem'];
        // $qry = "SELECT * FROM subject WHERE sem = $_SESSION[sem]";
        // $res = mysqli_query($con, $qry);
        // while($row = mysqli_fetch_array($res))
        // {
            ?>
              <!-- <div class="sub sub1"> -->
                <!-- <a href="<?php echo $row['link']; ?>"><?php echo $row['name']; ?></a> -->
                <!-- <div class="time"><?php echo $row['time']; ?></div> -->
    
           
        <?php
            error_reporting(~E_WARNING);
             //get tid
            //get the subject name according to tid
            $qry = "SELECT * FROM allocsub WHERE tid = $tid";
            $res = mysqli_query($con,$qry);
            while($subs= mysqli_fetch_array($res)){ 
                $s = $subs['sname'];
                //getting data from subject table based on the subject name fetched from allocsub table
                $qry1 = "SELECT * FROM subject WHERE name='$s'";
                $res1 = mysqli_query($con,$qry1);
                $res2= mysqli_fetch_assoc($res1);
                $time = $res2['time'];
                $tm = date ("g:i A", strtotime ($res2['time']));
                
               
        ?>
        <div class="sub"><a href="<?php echo $res2['link']; ?>"><?php echo $subs['sname']?></a>
            
            <div class="time">
            <?php
                    if($res2['time']==0){
                        echo "Not added";
                    }
                    else{
                        
                        echo $tm;
                    }
            ?>
            </div>
            </div>
            <div class="actions">
            <div class="add">
            <form action="add_class.php" method="post">
                            <input type="hidden" name="sname" value = "<?php echo $subs['sname']; ?>">
                            <input id="add-btn" type="submit" value = 'Add' name = "add"/>
                        </form>
            <!--a href="addClass.php?sname=<?php //echo $subs['sname']; ?>">Add</!--a-->
            </div>
            <div class="join">
            <!-- <form action="updateClass.php" method="post">
                            <input type="hidden" name="sname" value = "<?php //echo $subs['sname']; ?>">
                            <input type="submit" value = 'Join' name = "update"/>
                        </form> -->
                        <a id="join-btn" href="<?php echo $res2['link']; ?>">Join</a>
            <!--a href="addClass.php?sname=<?php //echo $subs['sname']; ?>">Add</!--a-->
            </div>
            </div>
             <?php   } ?>
            
    </div>
                    

             
    
</body>
</html>