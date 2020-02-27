<?php
include "connection.php";
session_start();

$doj = $_REQUEST['doj'];
$exdoj = explode(" ", $doj);
$dow = $exdoj[1];
$source = $_REQUEST['source'];
$des = $_REQUEST['des'];

$_SESSION['doj']=$doj;
$_SESSION['source']=$source;
$_SESSION['destination']=$des;
?>
<div class="container">
    <div class="welcome" id="welcome">
        <div class="container">
            <div class="agileits-title">
                <h3>Search Results for the Route from <?php echo $source ?> To <?php echo $des ?> are as Follow:-</h3>
            </div>
            <div class="welcomerow-agileinfo">
                <?php
                $count = 1;
                $s = "SELECT * FROM `buses` WHERE `sourcecity`='$source' and `destinationcity`='$des' and `daysofworking` like '%" . $dow . "%' ";
                $result = mysqli_query($con, $s);
                if (mysqli_num_rows($result) <= 0) {
                    ?>
                    <h5><?php echo "No Buses available for this Route \" From " . $source . " To " . $des . "\""; ?></h5>
                    <?php
                } else {

                    ?>
                    <table class="table table-bordered table-hover">

                        <th class="text-center">Sr. No.</th>
                        <th class="text-center">Reg No</th>
                        <th class="text-center">Bus Name</th>
                        <th class="text-center">Bus Type</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Days of working</th>
                        <th class="text-center">Place Bookings</th>

                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>

                                <td class="text-center"><?php echo $count; ?></td>
                                <td class="text-center"><?php echo $row[2]; ?></td>
                                <td class="text-center"><?php echo $row[1]; ?></td>
                                <td class="text-center"><?php echo $row[11]; ?></td>
                                <td class="text-center"><?php echo $row[3]; ?></td>
                                <td class="text-center"><?php echo $row[9]; ?></td>


                                <td class="text-center"><a href="bookbuses.php?q=<?php echo $row[0]; ?>">Book</a>
                                </td>

                            </tr>


                            <?php
                            $count++;
                        }

                        ?>
                    </table>
                    <?php
                }
                ?>

            </div>

        </div>
    </div>
</div>
