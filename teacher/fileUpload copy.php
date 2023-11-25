<?php
    require_once 'db_connect.php';
    require_once 'header.php';
    //fetching all file info from database
    if(isset($_POST['upload'])){
        
        //fetching data of uploaded file
       $file = $_FILES['fileUp']['name'];
       $topic = $_POST['topic'];
       $sub = $_POST['sname'];

        $des = '../../upload/'.$file;
        $ext = pathinfo($file,PATHINFO_EXTENSION);
        $file1 = $_FILES['fileUp']['tmp_name'];
        $size = $_FILES['fileUp']['size'];
        
        //checking file type and size
       /* if(!in_array($ext,['pdf']))
        {
            echo "File should only be of type .pdf";
        }
        else if($_FILES['fileUp']['size'] > 1000000){
            echo "Too large file";
        }*/
        //moving to destination folder and then storing to database 
       //else{
        if(move_uploaded_file($file1,$des)){
               
                $qry = "INSERT INTO note ( fname,topic, sname,tid) VALUES ('$file','$topic', '$sub',$tid)";
                $res= mysqli_query($con,$qry);    
                if($res)
                    {
                        ?>
                        <script>
                            alert("Note uploaded");
                            seTimeout(function(){
                                window.location.href='showNoteTeacher.php';
                            },3000);
                        </script>
                        <?php
                    }
           }
           header("location: showNoteTeacher.php");
    
 }
?>