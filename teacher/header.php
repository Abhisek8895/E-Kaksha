<?php
    session_start();
    require_once 'db_connect.php';
    //getting the email set on session variable in the time of login
    //from index.php where session is set
        $email = $_SESSION['email'];
        $qry = "SELECT * FROM teacher WHERE email = '$email' ";
        $res = mysqli_query($con,$qry);
        $res1 = mysqli_fetch_assoc($res);
        $tid = $res1['id']; //fetching and storing the teacher id for future use
        $name = $res1['name'];
        $nm = strtok($_SESSION['name'], ' '); 
?>