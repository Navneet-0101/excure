<?php

$companyname=$_POST["tbcompanyname"];
//$logo=$_FILES["tblogo"];
$description=$_POST["tbdes"];
$proprietor=$_POST["tbprop"];
$mobileno=$_POST["tbmob"];
$email=$_POST["tbemail"];
$id=$_POST["tbid"];
$actualname=$_FILES["tblogo"]["name"];
$photosize=round($_FILES["tblogo"]["size"]/1024,2);
$temppath=$_FILES["tblogo"]["tmp_name"];
$path="userphotos/$actualname";
$ext=strtolower(pathinfo($actualname,PATHINFO_EXTENSION));
$selectQ="select * from companies where id='$id'";
$result=mysqli_query($con,$selectQ);
//if(mysqli_num_rows($result)>0)
//{
//    header("location:editcompany.php?msg=2");
//}
//else {
    if ($ext != "jpg" and $ext != "png") {
        header("location:editcompany.php?msg=3");
    } elseif ($photosize > 1000) {
        header("location:editcompany.php?msg=4");
    } else {
        move_uploaded_file($temppath, $path);
        include_once "connection.php";
        $updateQuery = "update companies set companyname='$companyname',logo='$path',
description='$description',proprietor='$proprietor', mobileno='$mobileno',email='$email' where id='$id'";
        if (mysqli_query($con, $updateQuery)) {
            header("location:editcompany.php?msg=1");
        } else {
            header("location:editcompany.php?msg=0");
        }
   // }
}
?>