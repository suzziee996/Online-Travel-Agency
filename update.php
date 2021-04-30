<?php 
     include "config.php";
     include "connect.php";

?>

<?php
     $id1=$_GET['chassis_no'];
     $db = new Database();
     $query = "SELECT * FROM vehicle WHERE chassis_no='$id1'";
     $getData = $db-> select($query) -> fetch_assoc();
     
     
     if(isset($_POST['submit'])){
     $id1 = mysqli_real_escape_string($db->link,$_POST['chassis_no']);
     $type = mysqli_real_escape_string($db->link,$_POST['type']);
     $vin = mysqli_real_escape_string($db->link,$_POST['vin']);
     $mobile = mysqli_real_escape_string($db->link,$_POST['model']);
  
          $query="UPDATE vehicle
          SET 
          type='$type',
          vin='$vin',
         
          model='$mobile'
          WHERE chassis_no= '$id1'";
          
          $update = $db -> update($query);
          
}

?>
<?php
if(isset($_POST['delete'])){
   $query= "DELETE FROM vehicle WHERE chassis_no='$id1'";
   $deleteData = $db->delete($query);
}
?>

<?php
     if(isset($error)){
          echo "<span style = 'color:red' > ".$error."</span>";
     }
?>

<form action="update.php?chassis_no=<?php echo $id1;?>"    method="post">
        <table cellspacing="10" >
            <tr>
                <td>Location </td>
                <td><input type="text " name="type" class="input" value="<?php echo $getData['type'] ?>" ></td>
            </tr>
            <tr>
                <td>Name </td>
                <td><input type="text " name="chassis_no" class="input" value="<?php echo $getData['chassis_no'] ?>" ></td>
            </tr>
            <tr>
                <td>Phone </td>
                <td><input type="text " name="vin" class="input" value="<?php echo $getData['vin'] ?>" ></td>
               
            </tr>
            <tr>
                <td>Ratings </td>
                <td><input type="text " name="model" class="input"  value="<?php echo $getData['model'] ?>" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update" ></td>
                <td><input type="submit" name="delete" value="Delete" ></td>
            </tr>
            
            <tr>
                <td></td>
                <td><button type="button" onclick="location.href='view.php'">View Hotel Info</button></td>
            </tr>
</table>
    </form>





