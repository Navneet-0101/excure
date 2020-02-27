<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerfiles.html";
    ?>
</head>
<body>
<?php
include_once "companyheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.html">Home</a> /Company Change Password</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

<div class="container">
    <form action="updatecompanypassword.php" method="post">
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" value="<?php echo $_SESSION["companyemail"]?>" readonly data-rule-required="true"
                   name="tbemail" id="tbemail" class="form-control">
        </div>
        <div class="form-group">
            <label>Current Password</label>
            <input type="password" data-rule-required="true" data-msg-required="Enter Current Password" name="tboldpass" id="tboldpass" class="form-control">
        </div>
        <div class="form-group">
            <label>New Password</label>
            <input type="password" data-rule-required="true" data-msg-required="Enter New Password" name="tbnewpass" id="tbnewpass" class="form-control">
        </div>
        <div class="form-group">
            <label>Confirm New Password</label>
            <input type="password" name="tbconfirmpass" class="form-control"
                   data-rule-required="true"
                   data-rule-equalto="#tbnewpass"
                   data-msg-equalto="Password & confirm password not match"
                   data-msg-required="Confirm New Password is required">
        </div>
        <div class="form-group">
            <input type="submit" value="Change" class="btn btn-primary">
            <?php
            if(isset($_REQUEST["msg"]))
            {
                if($_REQUEST["msg"]==2)
                {
                    echo "<div class='alert alert-danger'<strong> Incorrect Password </strong></div>";
                }
                elseif ($_REQUEST["msg"]==1)
                {
                    echo "<div class='alert alert-success'> <strong>Password changed successfully</strong></div>";
                }
                else
                {
                    echo "<div class='alert alert-danger'> <strong>Query failed</strong></div>";
                }

            }
            ?>
        </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>