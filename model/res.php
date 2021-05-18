<?php 
     include "config.php";
     include "connect.php";

?>

<?php
     $db = new Database();
if(isset($_POST['submit'])){
     
     $rname = mysqli_real_escape_string($db->link,$_POST['rname']);
     $ev= mysqli_real_escape_string($db->link,$_POST['ev']);
    
     $concept = mysqli_real_escape_string($db->link,$_POST['concept']);
     if($rname == '' || $ev=='' || $concept == ''){
          $error ="field must not be empty!!";
     }else{
          $query = "INSERT INTO project(rname,ev,concept) Values ('$rname','$ev','$concept')";
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
<title> Restuarant Details </title>
</head>
    
<body>
    <div class="header">
       <h1> Restuarants </h1>
    </div>
    <div class="form">
    <form method="post" action="res.php">
        <table cellspacing="10" >
            <tr>
                <td style="color:#ffffff;"> Name </td>
                <td><input type="text " name="rname" class="input"></td>
            </tr>
             <tr>
                <td> Location </td>
                <td><input type="text " name="ev" class="input"></td>
            </tr>
            <tr>
                <td style="color:#ffffff;" > Phone </td>
                <td><input type="text " name="concept" class="input"></td>
                
            </tr>
             
                <td></td>
                <td><input type="submit" name="submit" value="Submit" ></td>
            </tr>
            
            

        </table>
    </form>
        </div>
    </body>
    
    <button type="button" class="btn_course" onclick="location.href='home.php'">Go back</button>
</html>
    
    
   

    