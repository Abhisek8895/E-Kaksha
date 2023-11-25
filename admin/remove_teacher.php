<?php
    require_once "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Teacher</title>
</head>
<body>
    <div>
    <h1>Teacher Data</h1>

    <table border = 1>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>

        <?php
            $qry = "SELECT * FROM teacher";
            $res = mysqli_query($con,$qry);
            while ($row = mysqli_fetch_array($res)) 
            {
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value = "<?php echo $row['id']; ?>">
                            <input type="submit" value = 'Remove' name = "remove"/>
                        </form>
                    </td>
                </tr>
            <?php    
            }
        ?>
    </table>
    </div>
</body>
</html>

<?php

    if(isset($_POST['remove'])){
        $id = $_POST['id'];

        $qry1 = "DELETE FROM teacher WHERE id = '$id'";
        $res = mysqli_query($con, $qry1);
        ?>
        <script>
            alert("Teacher removed.");
            window.location = "remove_teacher.php";
        </script>
        <?php

    }

?>