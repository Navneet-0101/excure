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
        <h2><a href="adminhome.php">Home</a> / View Company</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

 <div class="container">
     <table class="table table-bordered table-hover">
         <th class="text-center">Id</th>
         <th class="text-center">Comapny Name</th>
         <th class="text-center">Logo</th>
         <th class="text-center">Description</th>
         <th class="text-center">Proprietor</th>
         <th class="text-center">Mobile</th>
         <th class="text-center">Email</th>
         <th class="text-center" colspan="2">Controls</th>
         <?php

         $s="select * from companies";
         $result=mysqli_query($con,$s);
         while($row=mysqli_fetch_array($result))
         {
         ?>
             <tr>
                 <td class="text-center" valign="bottom"><?php echo $row[0];?></td>
                 <td class="text-center"><?php echo $row[1];?></td>
                 <td class="text-center"><img src="<?php echo $row[2];?>" height="100" width="100"></td>
                 <td class="text-center"><?php echo $row[3];?></td>
                 <td class="text-center"><?php echo $row[4];?></td>
                 <td class="text-center"><?php echo $row[5];?></td>
                 <td class="text-center"><?php echo $row[6];?></td>
                 <td class="text-center"><a href="editcompany.php?id=<?php echo $row[0];?>">Edit</a></td>
                 <td class="text-center"><a onclick="return confirm('Are u sure??')"
                                            href="deletecompany.php?id=<?php echo $row[0];?>">Delete</a></td>
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