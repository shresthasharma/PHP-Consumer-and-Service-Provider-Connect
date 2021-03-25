<?php 

    require_once("config.php");
    include("auth_session.php");
    $query = "SELECT * FROM users WHERE email = '".$_SESSION['email']."'";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Registration Details </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Registration Details</h2></th> 
		</tr> 
			  <th> Name </th> 
			  <th> Email </th> 
			  <th> Phone No. </th>  
			  <th> Permanent Address </th> 
			  <th> Work Address </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
		<td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['phoneno']; ?></td> 
		<td><?php echo $rows['address']; ?></td> 
		<td><?php echo $rows['waddress']; ?></td> 
        <a href="editregdetails.php">Edit</a>
		</tr> 
	<?php 
               } 
          ?> 
	</table> 
	</body> 
	</html>
