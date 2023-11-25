<?php
    require_once '../db_conn.php';
    if(isset($_POST['add'])){
       
        $key = $_POST['key'];
        $qry = "SELECT * FROM teacher  WHERE id=$key";
        $res = mysqli_query($con,$qry);
        //wheather techer or admin added the notice
        if(mysqli_num_rows($res)==0){
            $tname = "admin"; //accordingly assigning name in notice table
        }else{
            $res1 = mysqli_fetch_array($res);
            $tname=$res1['name'];
        }
        
        
        $name = $_POST['notice'];
        $qry = "INSERT INTO notice  (notice,tname) VALUES ('$name','$tname')";
        $res = mysqli_query($con,$qry);
        if($res){
            ?>
            <script>
                alert("Notice added");
                window.location="showNoticeadmin.php";
            </script>
            <?php
        } 
    }
?>