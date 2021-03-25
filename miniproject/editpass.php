<?php
require('config.php');
include("auth_session.php");
$query = "SELECT * FROM users WHERE email = '".$_SESSION['email']."'";
    $result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Password</title>
</head>
<body>
<!-- <p><a href="dashboard.php">Dashboard</a>  -->
<!-- | <a href="insert.php">Insert New Record</a>  -->
| <a href="logout.php">Logout</a></p>
<h1>Edit Password</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$password =$_REQUEST['password'];
$update="update users set password='" . md5($password) . "' where email = '".$_SESSION['email']."'";
mysqli_query($con, $update);
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input type="password" class="login-input" name="password" placeholder="Password">
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>