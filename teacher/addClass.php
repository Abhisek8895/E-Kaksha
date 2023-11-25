<?php
    require_once 'db_connect.php';
    require_once 'header.php';
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

<html>
    <form action="" method="post">
        Semester:<input type="text" name="sem" value="<?php echo $sem?>" readonly><br>
        Subject:<input type="text" name="sname" value="<?php echo $sub?>" readonly><br>
        Link:<input type="text" name="link"  value="<?php echo $res1['link'];?>"><br>
        Time:<input type="time" name="time"  value="<?php echo $res1['time'];?>"><br>
        <button type="submit" name="submit">Add</button>
    </form>
</html>