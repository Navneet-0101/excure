<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerFiles.html";
    include_once "connection.php";
    ?>
</head>
<body>
<?php
include_once"companyheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.php">Home</a> / View buses</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

<div class="container">
    <table class="table table-bordered table-hover">

        <th class="text-center">Id</th>
        <th class="text-center">Bus Name</th>
        <th class="text-center">Registration No.</th>
        <th class="text-center">Driver Name</th>
        <th class="text-center">Driver Mobile</th>
        <th class="text-center">Bus Type</th>

        <th class="text-center" colspan="2">Controls</th>
        <?php
         @ session_start();
         $ce=$_SESSION["companyemail"];
         $first="select * from companies where email='$ce'";
         $result=mysqli_query($con,$first);
         $row1=mysqli_fetch_array($result);
        $s="select * from buses where companyid=$row1[0]";
        $result=mysqli_query($con,$s);
        while($row=mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td class="text-center"><?php echo $row[0];?></td>
                <td class="text-center"><?php echo $row[1];?></td>
                <td class="text-center"><?php echo $row[2];?></td>
                <td class="text-center"><?php echo $row[5];?></td>
                <td class="text-center"><?php echo $row[6];?></td>
                <td class="text-center"><?php echo $row[11];?></td>

                <td class="text-center"><a href="editbuses.php?regno=<?php echo $row[2];?>">Edit</a></td>
                <td class="text-center"><a onclick="return confirm('Are u sure??')"
                                           href="deletebuses.php?regno=<?php echo $row[2];?>">Delete</a></td>
            </tr>


            <?php
        }
        ?>
    </table>
</div>
<?php
include "footer.php";
?>
</body>
</html>