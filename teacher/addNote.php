<?php
     require_once 'db_connect.php';
   // error_reporting(~E_WARNING);
    if(isset($_POST['manage'])){
       
        $sub = $_POST['sname'];
        
    }
?>
<html>
    <table border="1">
        <tr>
            <th><?php echo $sub?></th>
            <td> <form action="fileUpForm.php" method="post">
                            <input type="hidden" name="sname" value = "<?php echo $sub; ?>">
                            <input type="submit" value = 'add' name = "add"/>
            </form></td>
        </tr>
        <tr>
            <th>Files</th>
            <th>Action</th>
        </tr>
        <?php
                $qry = "SELECT * FROM note WHERE sname='$sub'";
                $res = mysqli_query($con,$qry);
                while($f = mysqli_fetch_array($res)){
            ?>
        <tr>
            
            <td><?php 
                if(mysqli_num_rows($res)==0){
                    echo "Not added";
                }else{
                    echo $f['fname'];
                } ?>   
                </td>
            <td>
            <form action="" method="post">
                            <input type="hidden" name="fname" value = "<?php echo $f['id']; ?>">
                            <input type="submit" value = 'delete' name = "delete"/>
            </form>
            <?php
                };
            ?>
        </tr>
    </table>
</html>
<?php
    if(isset($_POST['delete'])){
        $fname = $_POST['fname'];
        $qry1 = "DELETE  FROM note WHERE id=$fname";
        $res1 = mysqli_query($con,$qry1);
        if($res1){
            ?>
            <script>
                alert ("File Deleted successfully!!!");
                window.location="showNote.php";
            </script>
            <?php
        }
    }
?>