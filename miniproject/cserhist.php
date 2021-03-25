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
        <p><a href="consunass.php">Unassigned Requests</a></p>
        <p><a href="consass.php">Assigned Requests</a></p>
        <p><a href="consdecl.php">Declined Requests</a></p>
        <p><a href="consfinish.php">Finished Requests</a></p>
        <p><a href="consgvfbck.php">Give Feedback</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>