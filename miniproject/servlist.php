
<?php 

    require_once("config.php");
    $query = " select * from servicelist ";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
    <head>
        <title> SERVICE LIST </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Service List</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> Service </th> 
		</tr> 
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
  <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['service']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 
	</table> 
        <form action="upservicelist.php" method="post">
            <input type="text" name="service" required placeholder="Enter Service"><br><br>
            <!-- <input type="text" name="lname" required placeholder="Last Name"><br><br> -->
            <!-- <input type="number" name="age" required placeholder="Age" min="10" max="100"><br><br> -->
            <input type="submit" name="submit" value="Update List">
        </form>
    </body>
</html>