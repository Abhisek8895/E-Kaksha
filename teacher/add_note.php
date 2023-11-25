<?php
    error_reporting(~E_WARNING);
    require_once  'db_connect.php';
    require_once 'header.php';
    if(isset($_GET['sname'])){
        $sub = $_GET['sname'];
        $qry = "SELECT * FROM note WHERE sname='$sub'";
        $res = mysqli_query($con,$qry);
    }
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
    <link rel="stylesheet" href="../css/add_note.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha</title>
</head>
<body>


    <nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
        <h3 id = "acp"><a href="./teacher.php">Home</a></h3>
            <h4 id="logout"><a href="../logout.php">SignOut</a></h4>
        </div>
    </nav>
    <div class="container">
        <div class="action"> 
            <form action="fileUpload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileUp" class="file-btn">
                    Topic:<input type="text" name="topic"  />
                    <input type="hidden" name="sname" value = "<?php echo $sub; ?>">
                    <input type="submit" name="upload" class="upload-btn" value="Upload">
            </form>
        </div>
        <?php 
        //echo $sub;
        
        while($f = mysqli_fetch_array($res)){              
         ?>     
         <div class="card">
                <div class="details">
                    <h4 class="name">
                    <?php 
                         echo $f['fname'];
                    ?>
                    </h4> 
                   
                </div>
                <div class="action">
                    <form action="" method="post">
                    <input type="hidden" name="fname" value = "<?php echo $f['id']; ?>">
                    <input type="submit" value = 'Delete' name = "delete" class="delete button"/>
                    </form>
                </div>
        </div>
            
            <?php
                 }
            ?>


    </div>
</body>
<?php
    if(isset($_POST['delete'])){
        $fname = $_POST['fname'];
        $qry1 = "DELETE  FROM note WHERE id=$fname";
        $res1 = mysqli_query($con,$qry1);
        if($res1){
            ?>
            <script>
                alert ("File Deleted successfully!!!");
                window.location="showNoteTeacher.php";
            </script>
            <?php
        }
    }
?>