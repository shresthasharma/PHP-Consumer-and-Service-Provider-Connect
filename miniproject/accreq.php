<?php
require('config.php');
include("auth_session.php");
$query = "SELECT id FROM users WHERE email = '".$_SESSION['email']."'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$id=$row["id"];
?>
<?php
require('config.php');
$query = "SELECT sid FROM spserv WHERE spid = '$id'";
// echo $query;
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$sid=$row["sid"];
// echo $sid;
?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Display Accepted Requests </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Service Details</h2></th> 
		</tr> 
			  <th> request id </th>
					<th> cons Id </th>
					<th> Description </th> 
			  <th> Date </th> 
			  <th> Time </th> 
			  <th> Status </th>
					<th> View Details </th>
			  <th> Decline </th> 			  
		</tr> 
		<?php 

    require_once("config.php");
				$query = " SELECT * FROM `status` where status='assigned'and sid='$sid'";
    // $query = " select * from status where status='assigned'";
    $result = mysqli_query($con,$query);
    while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
		<td><?php echo $rows['reqid']; ?></td>
		<td><?php echo $rows['cid']; ?></td>
  <td><?php echo $rows['description']; ?></td> 
		<td><?php echo $rows['date']; ?></td> 
		<td><?php echo $rows['time']; ?></td> 
		<td><?php echo $rows['status']; ?></td>
		<td><form method = 'post' action="viewconsdetails.php" >
		<input type="hidden" name="cid" value="<?php echo $rows['cid'];?>" /><input type="submit"  name="viewdetails" value ="View Details"></td>
		</form>
		<td><form method = 'post' >
		<input type="hidden" name="rid" value="<?php echo $rows['reqid'];?>" /><input type="submit"  name="decline" value ="Decline">
                <!-- <input type="submit" name="decline" value="Decline"> -->
               </form> 
		</tr> 
	<?php 
               } 
          ?> 
	</table> 
	</body> 
	</html>
	<?php
if(isset($_POST['decline']))
{
    require('config.php');    
    $status="declined"; 
				$query = "UPDATE `status` SET status = '$status', spid='0' where reqid='".$_POST['rid']."'";
				// echo $query;
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