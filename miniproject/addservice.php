<?php
require('config.php');
include("auth_session.php");
$query = "SELECT id FROM users WHERE email = '".$_SESSION['email']."'";
    $result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$id=$row["id"];
?>
<?php
if(isset($_POST['submit']))
{
    require('config.php');    
    // get values form input text and number
    $service = $_POST["service"]; 
    // mysql query to insert data
    $query = "INSERT INTO `spserv`(spid,sid) VALUES ('$id','$service')";   
    $result = mysqli_query($con,$query);    
    // check if mysql query successful
    if($result)
    {
        echo 'Data Inserted';
    }    
    else{
        echo 'Data Not Inserted';
    }   
    // mysqli_free_result($result);
    // mysqli_close($connect);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Retrieve Data from MySQL using Drop Down Menu</title>
</head>
<body>

<form method = 'post'>
  Service:
  <select name="service">
    <option>-- Select Service --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($con, "SELECT * FROM servicelist");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['service'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
  <input type = 'submit' name = 'submit' value = Submit>
</form>

</body>
</html> 
