<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('config.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['submit'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $user1= "consumer";
        $user2= "sprovider";
        $user3= "admin";
        // Check user is exist in the database
    
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            $qry = mysqli_fetch_array($result);
            $_SESSION['usertype'] = $qry['usertype'];
            // Redirect to user dashboard page
            if($qry['usertype']=="admin")
            {
            header("location:home_admin.php");
            }
            else if($qry['usertype']=="consumer")
            {
            header("location:home_cons.php");
            }
            else if($qry['usertype']=="sprovider"){
            header("location:home_sprov.php");
            //header("Location: dashboard.php");
        } 
    }else {
            echo "<div class='form'>
                  <h3>Incorrect Email/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="email" placeholder="Email" autofocus="true" required/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>