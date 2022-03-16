<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/auto.css">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" type="text/css" href="css/all.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <title>Autowriting</title>
</head>
<body>
<div class="wrapper">
          <div class="static-text">WELCOME TO</div>
          <ul class="dynamic-content">
            <li><span>LEARN</span></li>
            <li><span>IMPLEMENT</span></li>
            <li><span>GAIN YOUR SKILL'S</span></li>
          </ul>
        
        </div>
        <div class="btun">
        <?php    
          if(!isset($_SESSION['is_login'])){
            echo '<a class="btn btn-danger mt-3" href="#" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
          } else {
            echo '<a class="btn btn-primary mt-3" href="student/studentProfile.php">My Profile</a>';
          }
      ?> 
      </div>  


</body>
</html>