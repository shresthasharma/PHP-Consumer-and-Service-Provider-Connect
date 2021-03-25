<?php
require('config.php');
include("auth_session.php");
$query = "SELECT id FROM users WHERE email = '".$_SESSION['email']."'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$id=$row["id"];
// echo $id;
?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Display Finished Services </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="7"><h2>Service Details</h2></th> 
		</tr> 
			  <th> request id </th>
					<th> Description </th> 
			  <th> Date </th> 
			  <th> Time </th> 
			  <th> Status </th>
					<th> Feedback </th>
					<th> View Details </th>
			  <!-- <th> Feedback </th> 			   -->
		</tr> 
		<?php 

    require_once("config.php");
    $query = " SELECT * FROM `status` where status='finished'and spid='$id'";
    $result = mysqli_query($con,$query);
    while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
  <td><?php echo $rows['reqid']; ?></td>
		<td><?php echo $rows['description']; ?></td> 
		<td><?php echo $rows['date']; ?></td> 
		<td><?php echo $rows['time']; ?></td> 
		<td><?php echo $rows['status']; ?></td>
		<td><?php echo $rows['feedback']; ?></td>
		<td><form method = 'post' action="viewconsdetails.php" >
		<input type="hidden" name="cid" value="<?php echo $rows['cid'];?>" /><input type="submit"  name="viewdetails" value ="View Details"></td>
		</form>
		</tr> 
	<?php 
               } 
          ?> 
	</table> 
	</body> 
	</html>
	
	