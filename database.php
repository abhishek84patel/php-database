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


if(isset($_POST['submit'])) {
    // echo "hello";
    $name = $_POST['name'];
    $email=$_POST['email'];

    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    $message=$_POST['message']

    $sql="insert into student(name,email,gender,course,message) values( '$name' ,'$email','$phone','$gender', '$course','$message' )";


        if(mysqli_query($con,$sql)){
         echo "<script> alert('sucessfully saved')</script>";
    }
   
}

?>
