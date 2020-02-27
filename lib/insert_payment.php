<?php
include "connection.php";
include "userheader.php";
$doj = $_SESSION['doj'];
$source = $_SESSION['source'];
$des = $_SESSION['destination'];
$busid=$_REQUEST['id'];
$seats=$_REQUEST['seats'];
$price=$_REQUEST['price'];
$gt=$_REQUEST['gt'];
date_default_timezone_set("Asia/Kolkata");
$datetym = date("Y-m-d H:i:s");
$insert="INSERT INTO `booking`(`id`, `grandtotal`, `datetime`, `doj`, `source`,
`destination`, `seatno`, `price`, `usereamil`, `busid`)
 VALUES (null,'$gt','$datetym','$doj',
 '$source','$des','$seats','$price','$email',
 '$busid')";
//echo $insert;
mysqli_query($con,$insert);
//echo "done";
$ch = curl_init();

$msg="Thank you for Booking with us: You have booked a Ticket from  ".$source." To ".$des.". Your seat Nos are ".$seats.". Your Date of Journey is ".$doj." Your Grand Total is ".$gt;
$message=urlencode($msg);
curl_setopt($ch, CURLOPT_URL,"http://server1.vmm.education/VMMCloudMessaging/AWS_SMS_Sender?");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "username=phpmay2018&password=YD411F1R&message=".$message."&phone_numbers=".$user_row['mobileno']);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);

curl_close ($ch);

header("Location:bookbuses.php?q=".$busid."&er=1");
?>