<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Services</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['email']; ?>!</p>
        <p><a href="servreq.php">Service Requests</a></p>
        <p><a href="accreq.php">Accepted Requests</a></p>
        <p><a href="finreq.php">Finished Requests</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>