<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
// $strSQL = "SELECT * FROM users WHERE email = '".$_SESSION['email']."'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="UTF-8">
<meta name="viewpoirt" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--Bootstrap CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!--Font Awesome  CSS-->
<link rel="stylesheet" href="css/all.min.css">

<!--Google FONT-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

<!--CUSTOM  CSS-->
<link rel="stylesheet" href="css/custom.css">





<title>SERVICE PROVIDER HOME PAGE</title>
</head>
<body>



<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top"><!--STart navigation-->
<a href="index.php" class="navbar-brand">CASPC</a>
<span class="navbar-text">Customer Happiness and Satisfaction is Our Only Aim</span>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="registration.php" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="#AboutUs" class="nav-link">About Us</a></li>
        </ul>
        </div>
</nav><!--end of navigation bar-->

<!--Start header Jumbotron-->
<header class="jumbotron back-image" style="background-image:url(images/sphomepage.JPG); margin-top:30px">
<div class="myClass mainHeading">
    <!--<h1 style="color:black">WELCOME TO CASPC</h1>
    <p class="font-italic text-dark">We Repair What your Husband Fixed!</p>
    <a href="login.php" class="btn btn-success mr-4">Login</a>
    <a href="registration.php" class="btn btn-danger mr-4 ">Sign Up</a>-->
</div>
</header><!--end header jumbotron-->




<!--sidebar-->
<div class="container-fluid" style="margin-top:50px">
    <div class="row ">
        <div class="col-sm-4 bg-light sidebar py-5 ">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">

                    <li class="nav-item"><a class="nav-link"
                href="profile.php"><i class="fas fa-user fa-8x"></i>Profile</a></li>

                <li class="nav-item"><a class="nav-link"
                href="addservice.php"><i class="fab fa-accessible-icon fa-8x"></i>Add Service</a></li>

                <li class="nav-item"><a class="nav-link"
                href="spservhist.php"><i class="fas fa-history fa-8x"></i>Service</a></li>

                <!-- <li class="nav-item"><a class="nav-link" -->
                <!-- href="logout.php"><i class="fas fa-user fa-8x"></i>Logout</a></li> -->



</div><!--end side bar-->











  


<div class="form">
        <p>Hey, <?php echo $_SESSION['email']; ?>!</p>
        <p>You are in Service Provider dashboard page.</p>
</div>


<!--Contact us form-->
<div class="container" id="Contact">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
        <div class="col-md-8"><!--Start of first column-->
        <form action="" method="POST">
            <input type="text" class="form-control"name="name" placeholder="Name"><br>
            <input type="text" class="form-control"name="subject" placeholder="Subject"><br>
            <input type="text" class="form-control"name="email" placeholder="Email"><br>
            <textarea class="form-control" name="message" placeholder="How can We Help You...?" style="height:150px;"></textarea><br>
            <input type="submit" class="btn btn-danger" name="submit"value="Send"<br>
</form>
</div><!--End First Column-->

<!--Start of second column-->
<div class="col-md-4 text-center">
    <strong>Headquarter:</strong><br>
    CASPC pvt Ltd,<br>
    New Panvel,Navi Mumbai<br>
    Maharashtra-410206<br>
    Phone:9653415547<br>
    <a href="#" target="_blank">www.CASPC.com</a>
    <br><br>
    <strong>Headquarter:</strong><br>
    CASPC pvt Ltd,<br>
   Vashi,Navi Mumbai<br>
    Maharashtra-410203<br>
    Phone:9653415547<br>
    <a href="#" target="_blank">www.CASPC.com</a><!--end-->
            
</div>
</div>
</div>

<!--start footer-->
<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">
                <span class="pr-2">Follow Us:</span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
</div>


<div class="col-md-6">
    <small>Designed by CASPC Designers &copy;2021</small>
    <small class="ml-2"><a href="login.php">Admin Login</a></small> 
    </div>
</div>
</div>
</footer>



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

</body>
</html>