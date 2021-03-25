<?php
// php code to Insert data into mysql database from input text
if(isset($_POST['submit']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "useraccounts";    
    // get values form input text and number
    $service = $_POST['service'];
    // $lname = $_POST['lname'];
    // $age = $_POST['age'];
    // connect to mysql database using mysqli
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);  
    // mysql query to insert data
    $query = "INSERT INTO `servicelist`(`service`) VALUES ('$service')";   
    $result = mysqli_query($connect,$query);    
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