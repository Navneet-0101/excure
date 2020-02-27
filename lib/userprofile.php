-<!doctype html>
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
include "userheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.php">Home</a> / User Profile</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <form action="saveuserprofile.php " method="post" enctype="multipart/form-data">
            <form>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="tbemail" id="tbemail" data-rule-required="true" readonly value="<?php echo $_SESSION["user_email"];?>"
                           data-msg-required="Email is required" class="form-control">
                </div>
                </div>
<!--                <div class="form-group">-->
<!--                    <label>Password</label>-->
<!--                    <input type="password" name="tbpass" id="tbpass" data-rule-required="true"-->
<!--                           data-msg-required="Password is required" class="form-control">-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label>Confirm Password</label>-->
<!--                    <input type="password" name="tbconpass" id="tbconpass" data-rule-required="true"-->
<!--                           data-msg-required="Confirm Password is required" data-rule-equalto="#tbpass"-->
<!--                           data-msg-equalto="Password and Confirm Password don't match" class="form-control">-->
<!--                </div>-->
                <div class="col-md-6">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="tbfullname" id="tbfullname" data-rule-required="true"
                           data-msg-required="Fullname is required" class="form-control">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Mobile No</label>
                    <input type="text" name="tbmobile" id="tbmobile" data-rule-required="true"
                           data-msg-required="Mobile Number is required" data-rule-number="true"
                           minlength="10" maxlength="10" class="form-control">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>D.O.B</label>
                        <input type="text" class="form-control dtp111" name="tbdob" id="tbdob"
                               data-rule-required="true" data-msg-required="D.O.B is required">
                    </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label>Gender</label>
                    <input data-rule-required="true" checked type="radio" name="tbgender" id="tbmale" value="male">Male
                    <input type="radio" name="tbgender" id="tbfemale" value="female">FeMale
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="tbphoto" id="tbphoto"
                           data-rule-required="true" data-msg-required="Photo is required">
                </div>
                </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="tbaddress" id="tbaddress"
                                  data-rule-required="true" data-msg-required="Address is required"></textarea>
                    </div>

                <div class="form-group">
                    <input type="submit" value="Save Profile" class="btn btn-primary btn-block">
                </div>
                <?php
                if(isset($_REQUEST["profile"]))
                {
                    if($_REQUEST["profile"]==1)
                        echo "<div class='alert alert-success text-center'><strong>Profile updated successfully.</strong></div>";
                    elseif($_REQUEST["profile"]==0)
                        echo "<div class='alert alert-danger text-center'><strong>Profile update failed.</strong></div>";
                    elseif($_REQUEST["profile"]==3)
                        echo "<div class='alert alert-danger text-center'><strong>Please select jpg or png file only.</strong></div>";
                    elseif($_REQUEST["profile"]==4)
                        echo "<div class='alert alert-danger text-center'><strong>Image size must be less than or equal to 100kb.</strong></div>";
//                    else
//                        echo "<div class='alert alert-danger text-center'><strong>Email already exists.</strong></div>";
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