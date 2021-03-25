<?php 

    require_once("config.php");
    $query = " select * from users ";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>User Details</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> Name </th> 
			  <th> Email </th> 
			  <th> Phone No. </th> 
			  <th> Password </th> 
			  <th> Permanent Address </th> 
			  <th> Work Address </th> 
			  <th> User Type </th> 
			  <th> Date Time </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
  <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['phoneno']; ?></td> 
		<td><?php echo $rows['password']; ?></td> 
		<td><?php echo $rows['address']; ?></td> 
		<td><?php echo $rows['waddress']; ?></td> 
		<td><?php echo $rows['usertype']; ?></td> 
		<td><?php echo $rows['create_datetime']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>