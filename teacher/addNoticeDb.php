<?php
    if(isset($_POST['add'])){
        require_once 'db_connect.php';
       
        $key = $_POST['key'];
        $qry = "SELECT * FROM teacher  WHERE id=$key";
        $res = mysqli_query($con,$qry);
        //wheather techer or admin added the notice
        if(mysqli_num_rows($res)==0){
            $tname = "NULL"; //accordingly assigning name in notice table
        }else{
            $res1 = mysqli_fetch_array($res);
            $tname=$res1['name'];
        }
        
        
        $notice = $_POST['notice'];
        $qry = "INSERT INTO notice  (notice,tname) VALUES ('$notice','$tname')";
        $res = mysqli_query($con,$qry);
        if($res){
            ?>
            <script>
                alert("Notice added");
                window.location="showNotice.php";
            </script>
            <?php
        } 
    }
?>