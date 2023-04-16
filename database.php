<?php

// Replace these values with your own database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'admission';

// Create a new mysqli object
$con =mysqli_connect($host, $username, $password, $database);

if(!$con)
{
die("error detected" .mysqli_error($con));

}
else{

echo("connection");
}



// insert of data in database 


// $name = $_POST['name'];
// $email=$_POST['email'];
if(isset($_POST['submit'])) {
    echo "hello";

    // $phone=$_POST['phone'];
    // $gender=$_POST['gender'];
    // $course=$_POST['course'];
    // $sql="insert into student(name) values( '$email')";
    //     if(mysqli_query($con,$sql)){
    
    // }
}
?>