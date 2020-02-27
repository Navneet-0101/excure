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
session_start();
?>
<?php
include_once "companyheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.php">Home</a> / Company Home</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>
<div class="container">
    <h1 align="center">Welcome <strong> <?php echo $_SESSION["companyname"];?></strong> to company panel</h1>
</div>
<?php
include "footer.php";
?>
</body>
</html>