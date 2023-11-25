<?php

    if(isset($_POST['login']))
    {
        require_once 'db_conn.php';

        // $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $qry = "SELECT * FROM teacher WHERE email = '$email' OR mobile='$mobile'";

        $res = mysqli_query($con,$qry);

        if(mysqli_num_rows($res)>0)
        {
            ?>
        <script>
            alert("Mobile or email already exists.");
            window.location = 'add_teacher.php';
        </script>
        <?php
        return;
        }

        $qry = "INSERT INTO teacher (name, email,mobile,password) VALUES ('$name', '$email', $mobile, '$password')";

        if(mysqli_query($con,$qry))
        {
            ?>
            <script>
                alert("Teacher Added Successfully");
                window.location='admin.php';
            </script>
            <?php
        }
        else{
            echo 'Error '.mysqli_error($con);
        }

        mysqli_close($con);

    }
?>