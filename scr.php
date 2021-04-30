<?php 
     $connection=mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,'cse470');
         
?>

<?php
session_start();
?>


<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/my.css">

<?php
 
if(isset($_POST['search'])){
$type= $_POST['id6'];
$chassis_no= $_POST['id6'];

$query= "SELECT * FROM vehicle where chassis_no LIKE '%$chassis_no%' or type LIKE '%$type%' ";
    
    
$query_run= mysqli_query($connection,$query);
    
    
    while($row = mysqli_fetch_array($query_run))
    {
        ?>
<form action="faculty.php" method="post" style="margin-top:40px;">
    
   <div class="form-group"> 
       
    <input type="text" name="type" value="<?php echo $row['type'] ?>">
    <input type="text" name="chassis_no" value="<?php echo $row['chassis_no'] ?>">
    <input type="text" name="vin" value="<?php echo $row['vin'] ?>">
    <input type="text" name="model" value="<?php echo $row['model'] ?>">
    <td style="text-align:center;"><a class="btn btn-primary" href="faculty.php?chassis_no=<?php echo $row['chassis_no'];?>">Reservation</a></td>


   
    </div>   
</form>



    <?php

    }
    
    

}
?>
<html>
    <button style="margin-left:6in;" type="button" class="btn btn-danger" onclick="location.href='home.php'">Go back</button>
</html>
    