<?php
    require_once 'db_connect.php';
    require_once 'header.php';
    if(isset($_POST['update'])){
        
        $sub = $_POST['sname'];
        
        $qry = "SELECT * FROM subject WHERE name='$sub'";
        $res = mysqli_query($con,$qry);
        $res1 = mysqli_fetch_assoc($res);
       
        $sem= $res1['sem'];
        $link = $res1['link'];
        $time=$res1['time'];
      

    }
    if(isset($_POST['submit'])){
        $sub = $_POST['sname'];
        $sem = $_POST['sem'];
        $link = $_POST['link'];
        $time = $_POST['time'];
        $qry = "UPDATE subject SET link='$link',time=$time WHERE name='$sub'";
        $res = mysqli_query($con,$qry);
        if($res){
            echo "<script> alert('Added'); </script>";
            header('location: showClass.php');
     }
    }
?>

<html>
    <form action="" method="post">
        Semester:<input type="text" name="sem" value="<?php echo $sem?>" readonly><br>
        Subject:<input type="text" name="sname" value="<?php echo $sub?>" readonly><br>
        Link:<input type="text" name="link" value="<?php echo $link?>" ><br>
        Time:<input type="text" name="time" value="<?php echo $time?>" ><br>
        <button type="submit" name="submit">Update</button>
    </form>
</html>