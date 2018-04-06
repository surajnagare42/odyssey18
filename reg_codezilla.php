<?php
/**
 * Created by PhpStorm.
 * User: Vivek
 * Date: 23-03-2018
 * Time: 06:00 PM
 */

$name1 = $email1 = $mobile1 = $name2 = $email2 = $mobile2 =  $college = "";
$event_id = "ODCS01-";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (!empty($_POST['name1'])) {
        $name1 = $_POST['name1'];
    }

    if (!empty($_POST['email1'])) {
        $email1 = $_POST['email1'];
    }

    if (!empty($_POST['mobile1'])) {
        $mobile1 = $_POST['mobile1'];
    }

    if (!empty($_POST['name2'])) {
        $name2 = $_POST['name2'];
    }

    if (!empty($_POST['email2'])) {
        $email2 = $_POST['email2'];
    }

    if (!empty($_POST['mobile2'])) {
        $mobile2 = $_POST['mobile2'];
    }

    if (!empty($_POST['college'])) {
        $college = $_POST['college'];
    }


    include 'connection.php';

    if ($conn) {

        $sql = "SELECT max(part_id) FROM codezilla";
        $retval = mysqli_query($conn, $sql);
        if(!$retval)
        {
            die('could not get data:'.mysqli_error());
        }

        while($row=mysqli_fetch_array($retval,MYSQLI_ASSOC))
        {
            $id=$row['max(part_id)'];
            $id=$id+1;

        }
        $event_id=$event_id.$id;
        $sql = "insert into codezilla values('$name1','$mobile1','$email1','$name2','$mobile2','$email2','$college','$id')";
        if (mysqli_query($conn, $sql) == 1) {

            //sending email
            $email_body = "Thank you for registering in Codezilla.\nYour Participation ID is ".$event_id;
            include 'email.php';

            //sending sms
            include('way2sms-api.php');
            sendWay2SMS ( "8197508688","R3694K",$mobile1,$email_body);
            sendWay2SMS ( "8197508688","R3694K",$mobile2,$email_body);

            ?>
            <script language="javascript" type="text/javascript">
                alert('Registered successfully.Your ID is <?php echo $event_id;?>');
                window.location = "http://jainbgm.in/odyssey18";
            </script>
            <?php
        } else {
            ?>
            <script language="javascript" type="text/javascript">
                alert('You have already registered to this event.');
                window.location = "http://jainbgm.in/odyssey18";
            </script>
            <?php
        }
    } else {
        echo "Connection Time Out, please try again.";
    }

    $conn->close();

}
?>