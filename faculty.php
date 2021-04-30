<?php 
     include "config.php";
     include "connect.php";

?>
<?php
session_start();
?>


<?php
     $id2=$_GET['chassis_no'];
     $db = new Database();
if(isset($_POST['submit'])){
     $name = mysqli_real_escape_string($db->link,$_POST['name']);
     $phone = mysqli_real_escape_string($db->link,$_POST['phone']);
     $nid01 = mysqli_real_escape_string($db->link,$_POST['nid01']);
     $date01 = mysqli_real_escape_string($db->link,$_POST['date01']);
     $id2 = mysqli_real_escape_string($db->link,$_POST['chassis_no']);
     if($name == '' || $phone=='' || $nid01 == ''|| $date01 == ''){
          
          echo "<script language='javascript' type='text/javascript'>";
          echo "alert('FILL UP ALL THE DATA');";
          echo "</script>";
          
          $URL="faculty.php";
          echo "<script>location.href='$URL'</script>";
     }else{
          $query = "INSERT INTO book(Name,Phone,NID,Date,hname) Values ('$name','$phone','$nid01','$date01','$id2')";
          $create = $db->insert($query);
     }
}
?>
<?php
// Set session variables
$_SESSION["favcolor"] = $id2;

echo "Session variables are set.";
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
<title> Hotel Booking </title>
</head>
    
<body>
    <div class="header">
       <h1> Booking Details </h1>
    </div>
    <div class="form">
    <form action="faculty.php?chassis_no=<?php echo $id2;?>"    method="post">
        <table cellspacing="10" >
           
            <tr>
                <td style="color:#ffffff;"> Full Name </td>
                <td><input type="text " name="name" class="input"></td>
            </tr>
             <tr>
                <td> Phone </td>
                <td><input type="text " name="phone" class="input"></td>
            </tr>
            <tr>
                <td style="color:#ffffff;" > NID </td>
                <td><input type="text " name="nid01" class="input"></td>
                
            </tr>
            <tr>
                <td> Arrival Date </td>
                <td><input type="date" name="date01" class="input"></td>
            </tr>

            <tr>
                <td style="color:#ffffff;"> Hotel Name </td>
                <td><input type="text" name="chassis_no" class="input" value="<?php echo $_SESSION["favcolor"];?>"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit" ></td>
            </tr>
            
            

        </table>
    </form>
        </div>
    </body>
    
    <button style="margin-left:9in;margin-top:10px;" type="button" class="btn_course" onclick="location.href='home.php'">Go HOME</button>
</html>
    
    
   

    