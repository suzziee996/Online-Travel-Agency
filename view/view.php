<?php 
     include "config.php";
     include "connect.php";

?>
<?php
// Start the session
session_start();
?>
<?php

     $db = new Database();
     $query = "SELECT * FROM vehicle";
    
     $read = $db-> select($query);
    
?>

<?php
     if(isset($_GET['msg'])){
          echo "<span style = 'color:green' > ".$_GET['msg']."</span>";
     }
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/my.css">

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<div class="custom"> 

<table class = "table table-striped table-bordered" style="width:70%;margin-top:20px;margin-left:3in;" >
    
     <tr>
          <th style="text-align:center" width=15%>Location</th>
          <th style="text-align:center" width=20%>Name</th>
          <th style="text-align:center" width=20%>Phone</th>
          <th style="text-align:center" width=20%>Ratings</th> 
          <th style="text-align:center" width=20%>Booking</th> 
          <th style="text-align:center" width=10%>Update</th>
        
          </tr>

    
    <?php if($read) {?>
<?php while($row =$read -> fetch_assoc()) { ?>
     <tr>
          <td style="text-align:center"><?php echo $row ['type'];?></td>
          <td style="text-align:center"><?php echo $row ['chassis_no'];?></td>
          <td style="text-align:center"><?php echo $row ['vin'];?></td>
          <td style="text-align:center"><?php echo $row ['model'];?></td>
         
         <td style="text-align:center;"><a class="btn btn-primary" href="faculty.php?chassis_no=<?php echo $row['chassis_no'];?>">Reservation</a></td>
          
         <td style="text-align:center;"><a class="btn btn-primary" href="update.php?chassis_no=<?php echo $row['chassis_no'];?>">Edit</a></td>
          
</tr>
<?php }?>
<?php } else{?> 
<p> Data is not available!!> </p>
<?php } ?>

</table>
    </div>
<br>
<br>
<button style="margin-left:3in;margin-top:10px;" type="button" class="btn_course" onclick="location.href='dorm.php'">View Reservation</button>





