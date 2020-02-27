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
include_once"adminheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.html">Home</a> / View Admin</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

 <div class="container">
     <table class="table table-bordered table-hover">
         <th class="text-center">Email</th>
         <th class="text-center">Name</th>
         <th class="text-center">Gender</th>
         <th class="text-center">User Type</th>
         <th class="text-center" colspan="2">Controls</th>
         <?php

         $s="select * from admin";
         $result=mysqli_query($con,$s);
         while($row=mysqli_fetch_array($result))
         {
         ?>
             <tr>
                 <td class="text-center"><?php echo $row[0];?></td>
                 <td class="text-center"><?php echo $row[1];?></td>
                 <td class="text-center"><?php echo $row[3];?></td>
                 <td class="text-center"><?php echo $row[4];?></td>
                 <td class="text-center"><a href="editAdmin.php?email=<?php echo $row[0];?>">Edit</a></td>
                 <td class="text-center"><a onclick="return confirm('Are u sure??')"
                                            href="deleteAdmin.php?email=<?php echo $row[0];?>">Delete</a></td>
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