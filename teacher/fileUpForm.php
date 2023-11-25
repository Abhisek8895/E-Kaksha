<?php
    if(isset($_POST['add'])){
        $sub = $_POST['sname'];
    }
?>
<html>
    <head>
        <title>project-x</title>
    </head>
    <body>
            
            <!--Form tag to input the file -->
                <form action="fileUpload.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="sub" value="<?php echo $sub;?>" readonly><br>
                    <input type="file" name="fileUp">Choose a file<br>
                    Topic:<input type="text" name="topic"  /><br>
                    <input type="hidden" name="sname" value = "<?php echo $sub; ?>">
                    <button type="submit" name="upload">Upload</button>
                </form>
    </body>
</html>