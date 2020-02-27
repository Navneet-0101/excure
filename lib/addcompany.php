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
<body>
<?php
include "adminheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.php">Home</a> / Add Company</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

<?php
$pass = '';
for ($i = 0; $i < 6; $i++) {
    $randval = rand(0, 9);
    if ($randval < 5) {
        $pass .= rand(0, 9);
    } else {
        $pass .= chr(rand(65, 90));
    }
}
?>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form action="savecompany.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" name="tbcompanyname" id="tbcompanyname" class="form-control"
                       data-rule-required="true" data-msg-required="Company Name is required.">
            </div>
            <div class="form-group">
                <label>Logo</label>
                <input type="file" name="tblogo" id="tblogo"
                       data-rule-required="true" data-msg-required="Logo is required.">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="tbdes" id="tbdes" class="form-control"
                       data-rule-required="true" data-msg-required="Description is required.">
            </div>
            <div class="form-group">
                <label>Proprietor</label>
                <input type="text" name="tbprop" id="tbprop" class="form-control"
                       data-rule-required="true" data-msg-required="Proprietor is required.">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="tbmob" id="tbmob" class="form-control"
                       data-rule-required="true" data-msg-required="Mobile is required."
                       data-rule-number="true" maxlength="10" minlength="10">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="tbemail" id="tbemail" class="form-control"
                       data-rule-required="true" data-msg-required="Email is required.">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="tbpass" id="tbpass" class="form-control" value="<?php echo $pass ?>" readonly
                       data-rule-required="true" data-msg-required="Password is required.">


            </div>
            <div class="form-group">
                <input type="submit" value="Save Company" class="btn btn-primary">
                <?php
                if (isset($_REQUEST["msg"])) {
                    if ($_REQUEST["msg"] == 1)
                        echo "<div class='alert alert-success text-center'><strong>Company saved successfully.</strong></div>";
                    elseif ($_REQUEST["msg"] == 0)
                        echo "<div class='alert alert-danger text-center'><strong>Company Sign Up Failed.</strong></div>";
                    elseif ($_REQUEST["msg"] == 3)
                        echo "<div class='alert alert-danger text-center'><strong>Please select jpg or png file only.</strong></div>";
                    elseif ($_REQUEST["msg"] == 4)
                        echo "<div class='alert alert-danger text-center'><strong>Image size must be less than or equal to 100kb.</strong></div>";
                    else
                        echo "<div class='alert alert-danger text-center'><strong>Company Email already exists.</strong></div>";
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