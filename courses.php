<?php 
     include "config.php";
     include "connect.php";

?>

<?php

     $db = new Database();
     $query = "SELECT * FROM project";
     $read = $db-> select($query);

?>

<?php 
if(isset($_GET['msg'])){
 echo "<span style='color:green'>".$_GET['msg']."</span>";
}
?>


<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/my.css">

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<table class = "table table-striped table-dark" style="width:70%;margin-top:20px;margin-left:3in;">
     <tr> 
          <th style="text-align:center" width=20% >Restaurant Name</th>
          <th style="text-align:center" width=40% >Location</th>
          <th style="text-align:center" width=40%>Phone</th>
          
         </tr>
    
<?php if($read) {?>
<?php $i=1;
                 while($row = $read -> fetch_assoc()) { ?>
     <tr>
          <td style="text-align:center"><?php echo $row ['rname']; ?></td>
          <td style="text-align:center"><?php echo $row ['ev'];?></td>
          <td style="text-align:center"><?php echo $row ['concept'];?></td>
          
</tr>
<?php }?>
<?php } else {?> 
<p> Data is not available!!> </p>
<?php } ?>

</table>
<br>

<button type="button" class="btn_course" onclick="location.href='home.php'">Go back</button>
<button type="button" class="btn_course" onclick="location.href='res.php'">Add Restaurant</button>





