<?php
include_once "companyheader.php";
$busname=$_POST["tbbusname"];
$regno=$_POST["tbregno"];
$mobile=$_POST["tbmob"];
$price=$_POST["tbprice"];
$sourcecity=$_POST["SourceCity"];
$destinationcity=$_POST["DestinationCity"];
$departuretime=$_POST["tbtime"];
$bustype=$_POST["tbtype"];
$drivername=$_POST["tbdrivername"];
$drivermobile=$_POST["tbdrivermob"];
$emergencyno=$_POST["tbemerno"];
$mticket=$_POST["tbticket"];
$cctv=$_POST["tbcctv"];
$heater=$_POST["tbheater"];
$hammer=$_POST["tbhammer"];
$blanket=$_POST["tbblanket"];
$water=$_POST["tbwaterbottle"];
$reading=$_POST["tbreading"];
$emergencyexit=$_POST["tbexit"];
$charge=$_POST["tbcharging"];
$fire=$_POST["tbfire"];
$tbdays=$_REQUEST['tbdays'];
$days='';
for ($i=0;$i<count($tbdays);$i++)
{
    $days.=$tbdays[$i].',';
}
print_r($tbdays);
echo $days;
$s="select * from buses where regno='$regno'";
$result=mysqli_query($con,$s);
if(mysqli_num_rows($result)>0)
{
    header("location:addbuses.php?msg=2");
}
else {
    $insertQuery = "INSERT INTO `buses`(`id`, `busname`, `regno`, `price`, `mobile`, `drivername`,
 `drivermobileno`, `sourcecity`, `destinationcity`, `daysofworking`, `departuretime`, `bustype`, 
 `m_ticket_supported`, `waterbottle`, `blanket`, `chargingpoint`, `readinglight`, `heater`, `emergencyexit`,
  `fireextinguisher`, `hammer`, `cctv`, `emergencycontactno`, `companyid`) VALUES 
  (null,'$busname','$regno','$price','$mobile','$drivername','$drivermobile',
  '$sourcecity','$destinationcity','$days','$departuretime','$bustype',
  '$mticket','$water','$blanket','$charge','$reading','$heater','$emergencyexit',
  '$fire','$hammer','$cctv','$emergencyno','$com_row[0]')";
    if (mysqli_query($con, $insertQuery)) {
        header("location:addbuses.php?msg=1");
    } else {
        header("location:addbuses.php?msg=0");
}
}
?>
