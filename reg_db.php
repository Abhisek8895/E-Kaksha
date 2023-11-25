<?php
if(isset($_POST['login'])){
    require_once 'db_connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $id = $_POST['id'];
    $sem = $_POST['sem'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM user_data WHERE email = '$email' OR mobile = $mobile OR id='$id'";

    $res = mysqli_query($con,$qry);

    if(mysqli_num_rows($res)>0){
        ?>
        <script>
            alert("Mobile or email or id is already used");
            window.location = 'registration_.php';
        </script>
        <?php
        return;
    }

    $qry = "INSERT INTO user_data (name, email, mobile, id, sem, password) VALUES ('$name', '$email', $mobile, '$id', $sem,'$password')";

    if(mysqli_query($con,$qry))
    {
        ?>
        <script>
            alert("Request Sent");
            window.location='login_page.php';
        </script>
        <?php
    }
    else{
        echo 'Error '.mysqli_error($con);
    }

    mysqli_close($con);
}
?>