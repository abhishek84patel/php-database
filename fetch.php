
<?php


require_once('config/database.php');
 $query="SELECT * FROM `student`;
$result=mysqli_query($con,$query);




?>


    <?php 
    while($row=mysqli_fetch_assoc())
    {

        ?>
 <h1> <?php echo $row['ID'] ?></h1> 
    
    <?php
    
          }
    ?>
    
    
    

  
