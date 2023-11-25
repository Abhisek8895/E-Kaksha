<?php 

     require_once 'db_connect.php';
     include_once 'student_nav.php';
     $qry = "SELECT * FROM notice ORDER BY id desc";
     $res = mysqli_query($con,$qry);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!-- Latest compiled and minified CSS -->
<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  -->
<link rel="stylesheet" href="../css/notice.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-Kaksha</title>

</head>
<body>    
    <div class="container">
                    <h2 class="notice_header">Notice Board
                    <div class="row">
                        <div class="col-md-12 bg-light text-right">
                            <form action="addNotice.php" method="post">

                                
                            
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
                                        echo "Added by ".$res1['tname'];
                                    }
                                    
                                    ?>
                                </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
    
                </body>
        <?php //} ?>
   

</body>
