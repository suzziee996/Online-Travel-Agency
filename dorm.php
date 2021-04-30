<?php 
     include "config.php";
     include "connect.php";

?>


<?php
     $db = new Database();
     $query = "SELECT * FROM book";
     $read = $db-> select($query);

?>

<?php
     if(isset($_GET['msg'])){
          echo "<span style = 'color:green' > ".$_GET['msg']."</span>";
     }
?>

<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/my.css">


<table class = "table table-striped table-border" style="width:70%;margin-top:20px;margin-left:3in;" >
     <tr>
          <th style="text-align:center" width=20%>Name</th>
          <th style="text-align:center" width=20%>Phone</th>
          <th style="text-align:center" width=20%>NID Number</th>
          <th style="text-align:center" width=20%>Date</th>
          <th style="text-align:center" width=20%>Hotel</th>
        </tr>
    
<?php if($read) {?>
<?php while($row = $read -> fetch_assoc()) { ?>
     <tr>
          <td style="text-align:center"><?php echo $row ['Name'];?></td>
          <td style="text-align:center"><?php echo $row ['Phone'];?></td>
          <td style="text-align:center" ><?php echo $row ['NID'];?></td>
          <td style="text-align:center" ><?php echo $row ['Date'];?></td>
          <td style="text-align:center" ><?php echo $row ['hname'];?></td>
          
</tr>
<?php }?>
<?php } else{?> 
     echo "<script language='javascript' type='text/javascript'>";
          echo "alert('No Data FOUND !! ');";
          echo "</script>";
          
          $URL="dorm.php";
          echo "<script>location.href='$URL'</script>";
<?php } ?>

</table>
<br>
<br>
<button style="margin-left:5in;margin-top:10px;" type="button" class="btn_course" onclick="location.href='home.php'">Go Home</button>







