<?php
require_once '../db_conn.php';
     
     if(isset($_POST['allocate']))
     {
          $sub  = $_POST['sub'];
          $tid  = $_POST['id'];
          
          $qry1 = "SELECT * FROM allocsub WHERE sname = '$sub' ";
          $res1= mysqli_query($con,$qry1);
          if(mysqli_num_rows($res1)==0){
               $qry = "INSERT INTO allocsub (tid,sname) VALUES ($tid,'$sub')";
               $res = mysqli_query($con,$qry);
                    if($res){
                    ?>
                    <script>
                         alert('Subject Allocated');
                         window.location = '../admin.php';
                    </script>
                    <?php
                    }
               }
               else{
                    ?>
          <script>
               alert('Subject is already allocated to the teacher ');
               window.location = '../admin.php';
               exit();
          </script>
          <?php
               }
     }
     
     
     
     
       
     //   echo $tid."<br>".$oldSub."<br>".$sub."<br>".$sem;
    /*   $qry1 = "UPDATE allocsub SET sname='$sub',sem=$sem WHERE sname='$oldSub'";
       if(mysqli_query($con,$qry1)){
            $qry2 = "UPDATE subject SET name ='$sub', sem=$sem  WHERE name='$oldSub'";
               echo $qry1."<br>".$qry2;
             $res2 = mysqli_query($con,$qry2);
            if($res2){
               echo $qry1."<br>".$qry2;
            ?>
            <!-- <script> -->
                 <!-- alert('Subject Reallocated'); -->
               <!-- //   window.location = 'admin.php'; -->
            <!-- </script> -->
            <?php
           }
  
         }
       */   
     //   }
     //   <?php
    if(isset($_POST['dealloc'])){
        $sub = $_POST['sname'];
        // echo $sub;
        $qry1 = "DELETE FROM allocsub WHERE sname = '$sub'";
        $res2 = mysqli_query($con, $qry1);
        if($res2){
           ?>
            <script>
                alert("Deallocated successfully!!!");
                window.location="../admin.php";
            </script>
           <?php
        }
    }

?>