<?php 
     include "config.php";
     include "connect.php";

?>

<?php
     $db = new Database();
if(isset($_POST['submit'])){
     $type = mysqli_real_escape_string($db->link,$_POST['type']);
     $chassis_no = mysqli_real_escape_string($db->link,$_POST['chassis_no']);
     $vin = mysqli_real_escape_string($db->link,$_POST['vin']);
    
     $model = mysqli_real_escape_string($db->link,$_POST['model']);
     if($type == '' || $chassis_no=='' || $vin == ''|| $model == ''){
          $error ="field must not be empty!!";
     }else{
          $query = "INSERT INTO vehicle(type,chassis_no,vin,model) Values ('$type','$chassis_no','$vin','$model')";
          $create = $db->insert($query);
     }
}
?>

<?php
     if(isset($error)){
          echo "<span style = 'color:red' > ".$error."</span>";
     }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/my.css">
<title> DATABASE </title>
</head>
    
<body>
    <div class="header">
       <h1> Hotel Details </h1>
    </div>
    <div class="form">
    <form method="post" action="register.php">
        <table cellspacing="10" >
            <tr>
                <td style="color:#ffffff;"> Hotel Location </td>
                <td><input type="text " name="type" class="input"></td>
            </tr>
             <tr>
                <td> Name </td>
                <td><input type="text " name="chassis_no" class="input"></td>
            </tr>
            <tr>
                <td style="color:#ffffff;" > Phone </td>
                <td><input type="text " name="vin" class="input"></td>
                
            </tr>
            <tr>
                <td> Ratings </td>
                <td>
  <select id="cars" name="model">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit" ></td>
            </tr>
            
            

        </table>
    </form>
        </div>
    </body>
    
    <button type="button" class="btn_course" onclick="location.href='home.php'">Go back</button>
</html>
    
    
   

    