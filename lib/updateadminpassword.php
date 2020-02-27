<?php
@session_start();
include "connection.php";
$email=$_SESSION["email"];
$oldpassword=$_POST["tboldpass"];
//echo $oldpassword;
$newpassword=$_POST["tbnewpass"];
$select="select * from admin where email='$email'";
$result=mysqli_query($con,$select);
if(mysqli_num_rows($result)>0)
{
    $row=mysqli_fetch_array($result);
    if($row['password']==$oldpassword) {
        $update = "update admin set password='$newpassword' where email='$email'";
        //echo $update;
        if (mysqli_query($con, $update)) {
            //echo "hii";
            header("location:adminchangepassword.php?msg=1");
        }
        else {
            //echo "byee";
            header("location:adminchangepassword.php?msg=0");
        }
    }
    else
    {
        //echo "password incorrect";
        header("location:adminchangepassword.php?msg=2");
    }
}
else
{
    //echo 'email id does not Exist';
    header("location:adminchangepassword.php?msg=3");
}
?>