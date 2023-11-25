<?php
    require_once 'db_connect.php';
    
    //get the id from url and downloadc
    if(isset($_GET['file_id'])){
        $id = $_GET['file_id'];
      
        $qry1 = "SELECT * FROM note WHERE id=$id";
        $res1 = mysqli_query($con,$qry1);
        $file1 = mysqli_fetch_assoc($res1);      
        $filepath = '../upload/'.$file1['fname'];
      
        if(file_exists($filepath)){
             header('Content-Type: application/octet-stream');
             header('Content-Description: File Transfer');
             header('Content-Disposition: attachment; filename='. basename($filepath));
             header('Expires: 0');
             header('Cache-Control: must-revalidate');
             header('Pragma:public');
             header('Content-Length: '.filesize('../upload/'.$file1['fname']));
             readfile('../upload/'.$file1['fname']); //function that downloads the file
            }
     }
?>