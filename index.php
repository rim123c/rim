
<?php 
mysqli_connect("Localhost","root","","Design")


if(isset($_POST['Design'])) 
{
    $Fname=$_POST['first-name'];
    $Lname=$_POST['Lastname'];
    $Subject=$_POST['Subject'];
    $Message=$_POST['Message'];

$query ="insert into contact_values('','$Fname','$Lname','$Subject','$Message')";

    $result=mysql_query($conn,$query);
if ($result) {

    header("Location:echo.php");

    }
    else{
        echo'error';

    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

<form action="echo.php" method="post">
  Fname : <input type="text" name="fname"><br><br>
  Lname : <input type="text" name="Lname"><br><br>
   Subject : <input type="text" name="Subject"><br><br>
  Message: <input type="text" name="Message"><br><br>
  <input type="submit" name="save">
</form>

</body> 
</html>





