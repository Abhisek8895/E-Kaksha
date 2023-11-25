<?php
    error_reporting(~E_WARNING);
    require_once  'db_connect.php';
    require_once 'header.php';

    $qry = "SELECT * FROM allocsub WHERE tid = $tid";
    $res = mysqli_query($con,$qry);
    
?>
<html>
    <table border="1">
        <tr>
            <th>SUbject name</th>
            <th>Action</th>
        </tr>
            <?php while($subs= mysqli_fetch_array($res)){ 
                $s = $subs['name'];
                //getting data from subject table based on the subject name fetched from allocsub table
                $qry1 = "SELECT * FROM subject WHERE name='$s'";
                $res1 = mysqli_query($con,$qry1);
                $res2= mysqli_fetch_assoc($res1);
                
                ?>
               
            <tr>
           
                <td><?php 
                    if(mysqli_num_rows($res)==0){
                        echo "Not assigned any subject";
                    }
                    else{
                    echo $subs['sname'];
                    }
                    ?>
                </td>
                <td>
                    <!-- Sending the data through form post-->
                <form action="addNote.php" method="post">
                            <input type="hidden" name="sname" value = "<?php echo $subs['sname']; ?>">
                            <input type="submit" value = 'manage' name = "manage"/>
                        </form>
                </td>
                
            </tr>
            <?php 
            
                }
                ?>
            </table>
</html>
