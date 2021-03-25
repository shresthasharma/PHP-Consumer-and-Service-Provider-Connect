<!DOCTYPE html>
<html>
<head>
  <title>Browse Services</title>
</head>
<body>

<form method = 'post'>
  
  <select name="service">
    <option>-- Select Service --</option>
    <?php
        include "config.php"; 
        $records = mysqli_query($con, "SELECT * FROM servicelist");

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['service'] ."</option>";
        }	
    ?>  
  </select>
        <input type="date" name="date" placeholder="Date" required />
        <input type="time" name="time" placeholder="Time" required /><br>
        <label for="description">Description</label><br>
        <textarea name="description" id="description" rows="8" cols="20" required></textarea>
  <input type = 'submit' name = 'submit' value = Submit>
</form>
</body>
</html> 
<?php
require('config.php');
include("auth_session.php");
$query = "SELECT id FROM users WHERE email = '".$_SESSION['email']."'";
    $result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$id=$row["id"];
// echo $id;
?>
<?php
if(isset($_POST['submit']))
{
    require('config.php');    
    
    $status="unassigned";
    $date = stripslashes($_REQUEST['date']);
    $time = stripslashes($_REQUEST['time']);
    $description = stripslashes($_REQUEST['description']);
    $service = $_POST["service"]; 
    $query = "INSERT INTO `status`(cid,sid,status,date,time,description) VALUES ('$id','$service','$status','$date','$time','$description')";   
    $result = mysqli_query($con,$query);    
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