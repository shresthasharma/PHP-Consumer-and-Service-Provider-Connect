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
		<title> Display Assigned Service Requests </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="8"><h2>Service Details</h2></th> 
		</tr> 
			  <th> request id </th>
					<th> Sp Id </th>
					<th> Description </th> 
			  <th> Date </th> 
			  <th> Time </th> 
			  <th> Status </th>
					<th> View Details </th>
     <th> Finished </th>		  
		</tr> 
		<?php 

    require_once("config.php");
    $query = " SELECT * FROM `status` where status='assigned'and cid='$id'";
				// echo $query;
    $result2 = mysqli_query($con,$query);
     while($rows=mysqli_fetch_assoc($result2)) 
		{ 
		?> 
		<tr> 
  <td><?php echo $rows['reqid']; ?></td>
		<td><?php echo $rows['spid']; ?></td>
		<td><?php echo $rows['description']; ?></td> 
		<td><?php echo $rows['date']; ?></td> 
		<td><?php echo $rows['time']; ?></td> 
		<td><?php echo $rows['status']; ?></td> 
		<td><form method = 'post' action="viewspdetails.php" >
		<input type="hidden" name="spid" value="<?php echo $rows['spid'];?>" /><input type="submit"  name="viewdetails" value ="View Details"></td>
		</form>
  <td><form method = 'post' >
		<input type="hidden" name="rid" value="<?php echo $rows['reqid'];?>" /><input type="submit"  name="finished" value ="Finished">
  </form>
		</tr> 
	 <?php 
               } 
          ?> 
	</table> 
	</body> 
	</html>
 <?php
if(isset($_POST['rid']))
{
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
}
?>
