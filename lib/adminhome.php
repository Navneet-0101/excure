<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerFiles.html";
    ?>
</head>
<body>
<?php
include_once "adminheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.php">Home</a> /Admin Home</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

  <h1 class="text-center">Welcome&nbsp;<strong><?php echo $_SESSION["name"];?></strong>&nbsp;to admin panel</h1>
<?php
include "footer.php";
?>
</body>
</html>