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
include "adminheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.html">Home</a> / Admin Change Password</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form action="updateadminpassword.php" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" value="<?php echo $_SESSION["email"]; ?>" readonly
                       name="tbemail" id="tbemail" class="form-control" data-rule-required="true">
            </div>
            <div class="form-group">
                <label>Old Password</label>
                <input type="password"  name="tboldpass" id="tboldpass" class="form-control"
                       data-rule-required="true" data-msg-required="Old password is required.">
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="tbnewpass" id="tbnewpass" class="form-control"
                       data-rule-required="true" data-msg-required="New password is required.">
            </div>
            <div class="form-group">
                <label>Confirm New Password</label>
                <input type="password" name="tbconnewpass" id="tbconnewpass" class="form-control"
                       data-rule-required="true" data-msg-required="Confirm new password is required."
                       data-rule-equalto="#tbnewpass" data-msg-equalto="Confirm password does not match with new password">
            </div>
            <div class="form-group">
                <input type="submit" value="Change" class="btn btn-primary">
                <?php
                if(isset($_REQUEST["msg"]))
                {
                    if($_REQUEST["msg"]==1)
                        echo"<div class='alert alert-success'><strong class='text-center'>Password Changed</strong></div>";
                    elseif($_REQUEST["msg"]==0)
                        echo"<div class='alert alert-danger'><strong class='text-center'>Password Change Failed</strong></div>";
                    elseif($_REQUEST["msg"]==2)
                        echo"<div class='alert alert-danger'><strong class='text-center'>old password incorrect</strong></div>";
                    elseif($_REQUEST["msg"]==3)
                        echo"<div class='alert alert-danger'><strong class='text-center'>email id incorrect</strong></div>";
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