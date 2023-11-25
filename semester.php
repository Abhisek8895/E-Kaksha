<?php
   session_start();
    require_once 'db_connect.php';
    
    $sem = $_SESSION['sem'];  //fetching and storing the semesters for future use
?>