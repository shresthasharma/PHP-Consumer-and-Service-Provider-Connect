<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>SERVICE PROVIDER REGISTRATION</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('config.php');
    $errors = array();
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['submit'])) {
        // removes backslashes
        //escapes special characters in a string
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $phoneno = stripslashes($_REQUEST['phoneno']);
        $phoneno = mysqli_real_escape_string($con, $phoneno);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con, $address);
        $waddress= stripslashes($_REQUEST['waddress']);
        $waddress = mysqli_real_escape_string($con, $waddress);
        $usertype = "sprovider";
        $create_datetime = date("Y-m-d H:i:s");
        $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($con, $user_check_query);
        $user = mysqli_fetch_assoc($result);
  
        if ($user) { // if user exists
           if ($user['email'] === $email) {
           array_push($errors, "Email already exists");
           echo "<div class='form'>
                  <h3>Email already exists.</h3><br/>
                  <p class='link'>Click here to <a href='spreg.php'>Register</a></p>
                  </div>";
           }
        }
        if (count($errors) == 0) {
        $query    = "INSERT into `users` (name, email, phoneno, password, address, waddress, usertype, create_datetime)
                     VALUES ('$name', '$email', '$phoneno', '" . md5($password) . "', '$address', '$waddress', '$usertype', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
       }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Service Provider Registration</h1>
        <input type="text" class="login-input" name="name" placeholder="Name" required />
        <input type="text" class="login-input" name="email" placeholder="Email Address">
        <input type="text" class="login-input" name="phoneno" placeholder="Phone No.">
        <label for="address">Permanent Address</label><br>
        <textarea class="login-input" name="address" id="address" rows="8" cols="20" required></textarea>
        <label for="address">Work Address</label><br>
        <textarea class="login-input" name="waddress" id="waddress" rows="8" cols="20" required></textarea>
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>