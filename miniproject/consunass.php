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
		<title> Display Unassigned Service Requests </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Service Details</h2></th> 
		</tr> 
			  <th> request id </th>
					<th> Description </th> 
			  <th> Date </th> 
			  <th> Time </th> 
			  <th> Status </th>		  
		</tr> 
		<?php 

    require_once("config.php");
    $query = " SELECT * FROM `status` where status='unassigned'and cid='$id'";
				// echo $query;
    $result2 = mysqli_query($con,$query);
     while($rows=mysqli_fetch_assoc($result2)) 
		{ 
		?> 
		<tr> 
  <td><?php echo $rows['reqid']; ?></td>
		<td><?php echo $rows['description']; ?></td> 
		<td><?php echo $rows['date']; ?></td> 
		<td><?php echo $rows['time']; ?></td> 
		<td><?php echo $rows['status']; ?></td> 
		</tr> 
	 <?php 
               } 
          ?> 
	</table> 
	</body> 
	</html>
