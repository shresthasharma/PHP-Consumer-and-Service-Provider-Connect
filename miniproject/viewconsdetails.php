<!DOCTYPE html> 
<html> 
	<head> 
		<title> View cons details </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="8"><h2>Service Details</h2></th> 
		</tr> 
			  <th> ID </th>
     <th> Name </th>
					<th> Email </th>
					<th> Phone Number </th> 
			  <th> Address </th> 	  
		</tr> 
		<?php 
    if(isset($_POST['cid']))
    { 
    require_once("config.php");
    $query = " SELECT * FROM `users` where id='".$_POST['cid']."'";
				// secho $query;
    $result2 = mysqli_query($con,$query);
     while($rows=mysqli_fetch_assoc($result2)) 
		{ 
		?> 
		<tr> 
  <td><?php echo $rows['id']; ?></td>
  <td><?php echo $rows['name']; ?></td>
		<td><?php echo $rows['email']; ?></td>
		<td><?php echo $rows['phoneno']; ?></td> 
		<td><?php echo $rows['address']; ?></td> 
		</tr> 
	 <?php 
  } 
             } 
          ?> 
	</table> 
	</body> 
	</html>
 <?php
/*if(isset($_POST['rid']))
// {
    require('config.php');    
    $status='finished'; 
				// echo $status;
				// $rid=$_GET['rid'];
				// $rid=$_REQUEST['rid'];
		  // echo $rid;
				//$reqid= $rows['reqid'];				
				$query = "UPDATE `status` SET status = '$status' where reqid='".$_POST['rid']."'";
    $result = mysqli_query($con,$query); 
				// echo $query;
				// echo $result;   
    if($result)
    {
        echo 'Data Inserted';
    }    
    else{
        echo 'Data Not Inserted';
    }   
    // mysqli_free_result($result);
    // mysqli_close($connect);
// }
?> */
