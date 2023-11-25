<?php
    //error_reporting(~E_WARNING);
 require_once 'semester.php';
 require_once 'db_connect.php';

 $qry = "SELECT * FROM subject WHERE sem = $sem";
 $res = mysqli_query($con,$qry);
?>
<html>
    <table border="1">
    <tr>
                 <th>Subject</th>
                 <th>Link</th>
                 <th>Time</th>
             </tr>
             
             <?php 
             //showing all the subject assigned to the teacher
             while($subs= mysqli_fetch_array($res)){ 
                ?>
               
            <tr>
           
                <td><?php echo $subs['name']?>
                </td>
                <td><?php
                    if($subs['link']==NULL){
                        echo "Not added";
                    }
                    else{
                        
                        echo $subs['link'];
                    }
                ?></td>
                <td><?php  if($subs['time']==0){
                        echo "Not added";
                    }
                    else{
                        
                        echo $subs['time'];
                    }?></td>
                    <!-- Sending the data through form post-->
                
            </tr>
            <?php } ?>

    </table>
</html>
