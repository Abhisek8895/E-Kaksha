<?php
require_once '../db_conn.php';
if(isset($_GET['sname'])){
    $sub = $_GET['sname'];
    // echo $sub;
    $qry1 = "DELETE FROM allocsub WHERE sname = '$sub'";
    echo $qry1;
    $res2 = mysqli_query($con, $qry1);
    if($res2){
       ?>
        <script>
            alert("Deallocated successfully!!!");
            //  window.location="../admin.php";
        </script>
       <?php
    }
}
?>