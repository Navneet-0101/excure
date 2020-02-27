<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerFiles.html"
    ?>
</head>
<body>
<?php
include "publicheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.php">Home</a> /Admin Login</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

<div class="container">
    <div class="col-md-6 col-md-offset-3">
    <form action="checklogin.php" method="post">
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="tbemail" id="tbemail" class="form-control"
               data-rule-required="true" data-msg-required="Email is required.">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="tbpass" id="tbpass" class="form-control"
               data-rule-required="true" data-msg-required="Password is required.">
    </div>
    <div class="form-group">
        <input type="submit" value="login" class="btn btn-primary">
        <?php
        if(isset($_REQUEST["msg"]))
        {
            echo "<div class='alert alert-danger'><strong>".$_REQUEST["msg"]."</strong></div>";
        }
        ?>
    </div>
    </div>
    </form>
</div>
<?php
include "footer.php";
?>
</body>
</html>