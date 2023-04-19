<form method="get">
 <label for="email">Email id:
  <label/>
  <input type="email" name="emailId";
 <input type="submit" value="submit" name="submit" /> 
</form>
<?php 
 $host = 'localhost';
$username = 'root';
$password = '';
$database = 'admission';

// Create a new mysqli object
$con =mysqli_connect($host, $username, $password, $database);
$email=$_GET['emailId'];
$query="select * from `student` where email= '$email'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0){
 $result=mysqli_fetch_assoc($result);
 echo "id= ".$result['ID']."<br/> Name= ".$result['name']."<br/>Email id=".$result['email'];
}

?>
