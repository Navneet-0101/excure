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
@session_start();
$email=$_SESSION["companyemail"];
$oldpass=$_POST["tboldpass"];
$newpass=$_POST["tbnewpass"];
$select="select * from companies where email='$email' and password='$oldpass'";
$result=mysqli_query($con,$select);
if(mysqli_num_rows($result)>0)
{
    $update="update companies set password='$newpass' where email='$email'";
    if(mysqli_query($con,$update))
    {
        header("location:companychangepassword.php?msg=1");
    }
    else
    {
        header("location:companychangepassword.php?msg=0");
    }
}
else
{
    header("location:companychangepassword.php?msg=2");
}
?>

</body>
</html>