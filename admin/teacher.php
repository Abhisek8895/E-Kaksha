<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- Latest compiled and minified CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- font-awsome -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  -->
    <link rel="stylesheet" href="./css/index.css">
    <script src="./js/modal.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kaksha</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__title">Hello teacher</div>
        <div class="header">
            
            <h4>Home</h4>
            <h4>Contacts</h4>
            <h4 id="logout"><a href="#">SignOut</a></h4>
        </div>
    </nav>

    <div class="container">
        <div class="card class">
            <div class="content">
                <h2>Class</h2>
                <!-- <h3>Card One</h3> -->
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae. Veritatis</p> -->
                <!-- <a id= "myBtn" href="#">Click here!</a> -->
                <form action="" method="post">
                    <button type="submit" id ="myBtn">Add +</button>
                </form>
                
                <form action="" method="post">
                    <button type="submit" id ="myBtn">Update +</button>
                </form>
                
            </div>
        </div>
        <div class="card notes">
            <div class="content">
                <h2>Notes</h2>
                <!-- <h3>Card Two</h3> -->
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae. Veritatis</p> -->
                <form action="" method="post">
                    <button type="submit" id ="myBtn">Add +</button>
                </form>
                
            </div>
        </div>
        <div class="card notice">
            <div class="content">
                <h2>Notice</h2>
                <!-- <h3>Card Three</h3> -->
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae. Veritatis</p> -->
                <form action="" method="post">
                    <button type="submit" id ="myBtn">Add +</button>
                </form>
                
                <form action="" method="post">
                    <button type="submit" id ="myBtn">Update +</button>
                </form>
                
            </div>
        </div>
    </div>

</body>
</html>