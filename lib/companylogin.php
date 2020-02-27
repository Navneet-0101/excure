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
    ?>
</head>
</head>
<body>
<?php
include "publicheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.php">Home</a> /Company Login</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form action="checkcompanylogin.php" method="post">
            <div class="form-group">
                <label>Email Id</label>
                <input type="email" name="tbemail" id="tbemail" class="form-control"
                       data-rule-required="true" data-msg-required="email is required">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="tbpass" id="tbpass" class="form-control"
                       data-rule-required="true" data-msg-required="password is required">
            </div>
            <div class="form-group">
                <input type="submit" value="Login In" class="btn btn-primary">
                <?php
                if(isset($_REQUEST["msg"]))
                {
                    echo "<div class='alert alert-danger'><strong class='text-center'>".$_REQUEST["msg"]."</strong></strong></div>";
                }
                ?>
            </div>
        </form>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>