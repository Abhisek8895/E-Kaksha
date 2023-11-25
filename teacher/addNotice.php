<?php
    require_once 'header.php';
    //checking who is adding notice 
    if(isset($_POST['noticeT']))
        $key = $_POST['key']; //if teacher then id is passed
    else if($_POST['notice'])
        $key = 0; //or if admin then 0
    //echo $key;
?>  
<html>




<head>
    <!-- Costum CSS -->
	<link rel="stylesheet" href="../admin/css/new1.css">
	
    <!-- Latest compiled and minified CSS -->
    
    <title>Notice Add</title>
</head>


<body>

    <nav class="navbar">
        <div class="navbar__title">Hi <?php echo $nm; ?></div>
        <div class="header">
            
            <h4><a href="./teacher.php">Home</a></h4>
            
            <h4 id="logout"><a href="../logout.php">SignOut</a></h4>
        </div>
    </nav>


    <div class="page">
	<div class="registration_form">
		<div class="title">
        Add Notice   
    </div>
		<!-- <form action="reg_db.php" method="post"> -->
		<form action="addNoticeDb.php" method="post">
			<div class="registration_box">
				
                <!-- <div class="box_input">
                    <label for="id">Registration Id <span class="required">*</span></label>
                    <input type="text" id="id"  name = "id" >
                    <label id="id_error" class="form-label text-danger"></label>
                </div> -->

				<div class="box_input">
					<label for="name">Notice <span class="required">*</span></label>
					<input type="text" id="notice" name = "notice">
					
				</div>
                
                <input type="hidden" name="key" value="<?php echo $key;?>">
                <input type="submit" name="add" class="notice-submit">

				
				
			</div>
		</form>
		
	</div>
</div>
</body>
   
    
        
    
</html>
