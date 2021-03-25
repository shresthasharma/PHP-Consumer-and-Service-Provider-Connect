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
<title>Edit Registration Details</title>
</head>
<body>
<!-- <p><a href="dashboard.php">Dashboard</a>  -->
<!-- | <a href="insert.php">Insert New Record</a>  -->
| <a href="logout.php">Logout</a></p>
<h1>Edit Registration Details</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$name =$_REQUEST['name'];
// $email =$_REQUEST['email'];
$phoneno =$_REQUEST['phoneno'];
$address =$_REQUEST['address'];
$waddress =$_REQUEST['waddress'];
// $submittedby = $_SESSION["username"];
$update="update users set name='".$name."', phoneno='".$phoneno."',address='".$address."',
waddress='".$waddress."' where email = '".$_SESSION['email']."'";
mysqli_query($con, $update);
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>
<!-- <p><input type="text" name="email" placeholder="Enter Email"  -->
<!-- required value="<?php echo $row['email'];?>" /></p> -->
<p><input type="text" name="phoneno" placeholder="Enter Phone Number" 
required value="<?php echo $row['phoneno'];?>" /></p>
<p><input type="text" name="address" placeholder="Enter Permanent Address" 
required value="<?php echo $row['address'];?>" /></p>
<p><input type="text" name="waddress" placeholder="Enter Work Address " 
 value="<?php echo $row['waddress'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>