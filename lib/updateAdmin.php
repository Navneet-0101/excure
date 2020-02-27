<?php
include_once "connection.php";
$email=$_POST["tbemail"];
$name=$_POST["tbname"];
$gender=$_POST["tbgender"];
$usertype=$_POST["tbuser"];
$updateQuery="update admin set name='$name',gender='$gender',usertype='$usertype' where email='$email'";
if(mysqli_query($con,$updateQuery))
{
    header("location:editAdmin.php?msg=1");
}
else
{
    header("location:editAdmin.php?msg=0");
}
?>