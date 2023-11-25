<?php
    require_once 'db_connect.php';
    $qry = "SELECT * FROM teacher";
    $res = mysqli_query($con,$qry);
?>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact no.</th>
    </tr>
    <?php
        while($cn = mysqli_fetch_assoc($res)){
    ?>
    <tr>
            <td><?php echo $cn['name'];?></td>
            <td><?php echo $cn['email'];?></td>
            <td><?php echo $cn['mobile'];?></td>

    </tr>
    <?php  }?>

</table>