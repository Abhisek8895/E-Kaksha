<?php
require_once 'db_connect.php';
session_start();
if(!isset($_SESSION['name'])){
    header('location:login_page.php');
}
$nm = strtok($_SESSION['name'], ' ');
?>
<nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
            <h4><a href="../index.php">Home</a></h4>
            <h4><a href="contacts.php">Contacts</a></h4>
            <h4 id="logout"><a href="logout.php">SignOut</a></h4>
        </div>
    </nav>