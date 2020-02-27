<!doctype HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Booking History</title>
    <?php
    include "headerFiles.html";
    ?>
</head>
<body>
<?php
include "companyheader.php";
include "connection.php";
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
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th colspan="12"><h1 class="text-center">View Booking History</h1></th>
            </tr>
            <tr>
                <th>Sr No.</th>
                <th>Booking Datetime</th>
                <th>Bus Name</th>
                <th>Bus Type</th>
                <th>Source City</th>
                <th>Destination</th>
                <th>Date of Journey</th>
                <th>Departure Time</th>
                <th>Price</th>
                <th>Booked Seats</th>
                <th>Mobile</th>
                <th>Grand Total</th>
            </tr>
            <?php
            $k = 0;
            $grandtotal=0;
            $s = "SELECT * FROM `booking` INNER JOIN buses ON buses.id=booking.busid INNER JOIN user_signup ON user_signup.email=booking.usereamil WHERE buses.companyid='$com_row[0]' order by booking.id DESC";
           // echo $s;
            $result = mysqli_query($con, $s);
            while ($row = mysqli_fetch_array($result)) {
                $grandtotal=$row['grandtotal'];
                ?>
                <tr>
                    <td><?php echo ++$k; ?></td>
                    <td><?php echo $row['datetime'] ?></td>
                    <td><?php echo $row['busname'] ?></td>
                    <td><?php echo $row['bustype'] ?></td>
                    <td><?php echo $row['sourcecity'] ?></td>
                    <td><?php echo $row['destinationcity'] ?></td>
                    <td><?php echo $row['doj'] ?></td>
                    <td><?php echo $row['departuretime'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['seatno'] ?></td>
                    <td><?php echo $row['mobileno'] ?></td>
                    <td><?php echo $grandtotal ?></td>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>