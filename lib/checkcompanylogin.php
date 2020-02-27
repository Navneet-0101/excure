<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerfiles.html";
    ?>
</head>
<body>
<?php
include_once "connection.php";
session_start();
$email=$_POST["tbemail"];
$password=$_POST["tbpass"];
$select="select * from companies where email='$email' and password='$password'";
$result=mysqli_query($con,$select);
$rows=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
    $_SESSION["companyemail"] = $email;
    $_SESSION["companyname"] = $rows[1];
    header("location:companyhome.php");
}
else
{
    header("location:companylogin.php?msg=Incorrect email or password");
}

?>

</body>
</html>