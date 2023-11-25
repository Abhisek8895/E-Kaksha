<?php
    error_reporting(~E_WARNING);
    require_once 'header.php'; //get tid
    //get the subject name according to tid
    $qry = "SELECT * FROM allocsub WHERE tid = $tid";
    $res = mysqli_query($con,$qry);
    
?>
<html>
    <table border="1">
    <tr>
                 <th>Subject</th>
                 <th>Link</th>
                 <th>Time</th>
                 <th>Action</th>
             </tr>
             
             <?php 
             //showing all the subject assigned to the teacher
             while($subs= mysqli_fetch_array($res)){ 
                $s = $subs['sname'];
                //getting data from subject table based on the subject name fetched from allocsub table
                $qry1 = "SELECT * FROM subject WHERE name='$s'";
                $res1 = mysqli_query($con,$qry1);
                $res2= mysqli_fetch_assoc($res1);
                
                ?>
               
            <tr>
           
                <td><?php echo $subs['sname']?>
                </td>
                <td><?php
                    if($res2['link']==NULL){
                        echo "Not added";
                    }
                    else{
                        
                        echo $res2['link'];
                    }
                ?></td>
                <td><?php  if($res2['time']==0){
                        echo "Not added";
                    }
                    else{
                        
                        echo $res2['time'];
                    }?></td>
                <td>
                    <!-- Sending the data through form post-->
                <form action="addClass.php" method="post">
                            <input type="hidden" name="sname" value = "<?php echo $subs['sname']; ?>">
                            <input type="submit" value = 'add' name = "add"/>
                        </form>
                </td>
                <td> <form action="updateClass.php" method="post">
                            <input type="hidden" name="sname" value = "<?php echo $subs['sname']; ?>">
                            <input type="submit" value = 'update' name = "update"/>
                        </form></td>
                
            </tr>
            <?php } ?>

    </table>
</html>
