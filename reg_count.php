<?php
/**
 * Created by PhpStorm.
 * User: Vivek
 * Date: 02-04-2018
 * Time: 09:32 AM
 */
include 'connection.php';
if ($conn) {

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration counts for Odyssey2018</title>
    <link rel="stylesheet" href="css/bootstrap_reg.css">
</head>
<body>
<!--    codezilla-->
<h1 class="text-center">CodeZilla</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Name2</th>
        <th>Mobile2</th>
        <th>Email2</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM codezilla";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['name2']; ?></td>
            <td><?php echo $row['mobile2']; ?></td>
            <td><?php echo $row['email2']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }

    }
    ?>

</table>
<br><br><br>

<!--    fashionshow-->
<h1 class="text-center">Fashion Show</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Team Members</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM fashionshow";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['teammembers']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    groupdance-->
<h1 class="text-center">Group Dance</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Team Members</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM groupdance";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['teammembers']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    langamingcs-->
<h1 class="text-center">LAN Gaming (CS)</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Name2</th>
        <th>Mobile2</th>
        <th>Email2</th>
        <th>Name3</th>
        <th>Mobile3</th>
        <th>Email3</th>
        <th>Name4</th>
        <th>Mobile4</th>
        <th>Email4</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM langamingcs";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['name2']; ?></td>
            <td><?php echo $row['mobile2']; ?></td>
            <td><?php echo $row['email2']; ?></td>
            <td><?php echo $row['name3']; ?></td>
            <td><?php echo $row['mobile3']; ?></td>
            <td><?php echo $row['email3']; ?></td>
            <td><?php echo $row['name4']; ?></td>
            <td><?php echo $row['mobile4']; ?></td>
            <td><?php echo $row['email4']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>
<!--    langamingnfs-->
<h1 class="text-center">LAN Gaming (NFS)</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM langamingnfs";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    madrace-->
<h1 class="text-center">Mad Race</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Name2</th>
        <th>Mobile2</th>
        <th>Email2</th>
        <th>Name3</th>
        <th>Mobile3</th>
        <th>Email3</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM madrace";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['name2']; ?></td>
            <td><?php echo $row['mobile2']; ?></td>
            <td><?php echo $row['email2']; ?></td>
            <td><?php echo $row['name3']; ?></td>
            <td><?php echo $row['mobile3']; ?></td>
            <td><?php echo $row['email3']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    mintowinit-->
<h1 class="text-center">Minute To Win It</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Name2</th>
        <th>Mobile2</th>
        <th>Email2</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM mintowinit";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['name2']; ?></td>
            <td><?php echo $row['mobile2']; ?></td>
            <td><?php echo $row['email2']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    mixedcircket-->
<h1 class="text-center">Mixed Cricket</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Team Players</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM mixedcricket";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['teamplayers']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    robosoccer-->
<h1 class="text-center">Robo Soccer</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Name2</th>
        <th>Mobile2</th>
        <th>Email2</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM robosoccer";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['name2']; ?></td>
            <td><?php echo $row['mobile2']; ?></td>
            <td><?php echo $row['email2']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    royalcrossfit-->
<h1 class="text-center">Royal Crossfit</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM royalcrossfit";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    royalfiesta-->
<h1 class="text-center">Royal Fiesta</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Name2</th>
        <th>Mobile2</th>
        <th>Email2</th>
        <th>Name3</th>
        <th>Mobile3</th>
        <th>Email3</th>
        <th>Name4</th>
        <th>Mobile4</th>
        <th>Email4</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM royalfiesta";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['name2']; ?></td>
            <td><?php echo $row['mobile2']; ?></td>
            <td><?php echo $row['email2']; ?></td>
            <td><?php echo $row['name3']; ?></td>
            <td><?php echo $row['mobile3']; ?></td>
            <td><?php echo $row['email3']; ?></td>
            <td><?php echo $row['name4']; ?></td>
            <td><?php echo $row['mobile4']; ?></td>
            <td><?php echo $row['email4']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    slidefootball-->
<h1 class="text-center">5 a side Football</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Name2</th>
        <th>Mobile2</th>
        <th>Email2</th>
        <th>Name3</th>
        <th>Mobile3</th>
        <th>Email3</th>
        <th>Name4</th>
        <th>Mobile4</th>
        <th>Email4</th>
        <th>Name5</th>
        <th>Mobile5</th>
        <th>Email5</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM slidefootball";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['name2']; ?></td>
            <td><?php echo $row['mobile2']; ?></td>
            <td><?php echo $row['email2']; ?></td>
            <td><?php echo $row['name3']; ?></td>
            <td><?php echo $row['mobile3']; ?></td>
            <td><?php echo $row['email3']; ?></td>
            <td><?php echo $row['name4']; ?></td>
            <td><?php echo $row['mobile4']; ?></td>
            <td><?php echo $row['email4']; ?></td>
            <td><?php echo $row['name5']; ?></td>
            <td><?php echo $row['mobile5']; ?></td>
            <td><?php echo $row['email5']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    solosinging-->
<h1 class="text-center">Solo Singing</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM solosinging";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    takeshiscastle-->
<h1 class="text-center">Takeshi's CastLe</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Name2</th>
        <th>Mobile2</th>
        <th>Email2</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM takeshiscastle";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['name2']; ?></td>
            <td><?php echo $row['mobile2']; ?></td>
            <td><?php echo $row['email2']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>
<!--    treasurehunt-->
<h1 class="text-center">Treasure Hunt</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Name2</th>
        <th>Mobile2</th>
        <th>Email2</th>
        <th>Name3</th>
        <th>Mobile3</th>
        <th>Email3</th>
        <th>Name4</th>
        <th>Mobile4</th>
        <th>Email4</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM treasurehunt";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['name2']; ?></td>
            <td><?php echo $row['mobile2']; ?></td>
            <td><?php echo $row['email2']; ?></td>
            <td><?php echo $row['name3']; ?></td>
            <td><?php echo $row['mobile3']; ?></td>
            <td><?php echo $row['email3']; ?></td>
            <td><?php echo $row['name4']; ?></td>
            <td><?php echo $row['mobile4']; ?></td>
            <td><?php echo $row['email4']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    ultimoingenerio-->
<h1 class="text-center">Ultimo Ingenerio</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Name2</th>
        <th>Mobile2</th>
        <th>Email2</th>
        <th>Name3</th>
        <th>Mobile3</th>
        <th>Email3</th>
        <th>Name4</th>
        <th>Mobile4</th>
        <th>Email4</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM ultimoingenerio";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['name2']; ?></td>
            <td><?php echo $row['mobile2']; ?></td>
            <td><?php echo $row['email2']; ?></td>
            <td><?php echo $row['name3']; ?></td>
            <td><?php echo $row['mobile3']; ?></td>
            <td><?php echo $row['email3']; ?></td>
            <td><?php echo $row['name4']; ?></td>
            <td><?php echo $row['mobile4']; ?></td>
            <td><?php echo $row['email4']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

<!--    unplugedband-->
<h1 class="text-center">Unpluged Band</h1>
<table class="table table-hover">
    <tr>
        <th>Name1</th>
        <th>Mobile1</th>
        <th>Email1</th>
        <th>Team Members</th>
        <th>College</th>
        <th>Odyssey ID</th>
    </tr>
    <?php
    $sql = "SELECT * FROM unplugedband";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['mobile1']; ?></td>
            <td><?php echo $row['email1']; ?></td>
            <td><?php echo $row['teammembers']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['part_id']; ?></td>
        </tr>
        <?php

    }


    ?>

</table>
<br><br><br>

</body>
</html>
