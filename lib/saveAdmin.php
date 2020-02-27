<?php
include_once "connection.php";
$email=$_POST["tbemail"];
$name=$_POST["tbname"];
$password=$_POST["tbpass"];
$gender=$_POST["tbgender"];
$usertype=$_POST["tbuser"];
$s="select * from admin where email='$email'";
$result=mysqli_query($con,$s);
if(mysqli_num_rows($result)>0)
{
    header("location:addAdminDesign.php?msg=2");
}
else
{   $insertQuery="insert into admin values('$email','$name','$password','$gender','$usertype')";
    if(mysqli_query($con,$insertQuery)){
        header("location:addAdminDesign.php?msg=1");
    }
    else
    {
        header("location:addAdminDesign.php?msg=0");
    }
}
?>