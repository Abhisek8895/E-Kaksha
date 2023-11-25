
 <?php 
        require_once 'db_connect.php';
        require_once 'header.php';
        if(!isset($_SESSION['name'])){
            header('location:../login_page.php');
        }
        // if(isset($_POST['manage']))
        // {
            $qry = "SELECT * FROM notice";
            $res = mysqli_query($con,$qry);
        ?> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- Latest compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
    
        <link rel="stylesheet" href="../css/notice.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Kaksha</title>
    
    </head>
    <body>
    
        <nav class="navbar">
            <div class="navbar__title">Hello <?php echo $nm; ?></div>
            
            <div class="header">   
            <h4><a href="teacher.php">Home</a></h4>
            <h4 id="logout"><a href="../logout.php">SignOut</a></h4>
            </div>
        </nav>
        
        
            
                <div class="container">
                    <h2 class="notice_header">Notice Board
                    <div class="row">
                        <div class="col-md-12 bg-light text-right">
                            <form action="addNotice.php" method="post">

                                <input type="hidden" name="key" value="<?php  echo $tid?>">
                            
                                <input type="submit" class="btn btn-warning" name="noticeT" value="Add">
                            
                            </form>
                        </div>
                        </h2>
                        <?php
                                while($res1=mysqli_fetch_assoc($res)){
                        ?>
                        <div class="board">
                            <!--marquee direction="up" scrollamount="1" behavior="scrolling">
                                    <?php //echo $res1['notice']; ?>
                                </marquee-->
                                <div class="notice-info">
                                    🎯
                                    <?php echo $res1['notice'];?><br>
                                    <?php if($res1['tname']!=NULL){
                                        echo "added by ".$res1['tname'];
                                    }
                                    
                                    ?>
                                </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
    
                </body>
        <?php //} ?>
   