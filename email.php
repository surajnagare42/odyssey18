<?php

$emailID = $email1;

$subject = "Dear. $name1 . Here is your Odyssey ID";

$body = <<<EOD

        

        <table cellspacing="0" cellpadding="1" border="1">

            <tbody>

                <tr>

                    <td style="padding: 5px 10px;" width="150">Name: </td>

                    <td style="padding: 5px 10px;">$name1</td>

                </tr>

                <tr>

                    <td style="padding: 5px 10px;" width="150">Mobile: </td>

                    <td style="padding: 5px 10px;">$mobile1</td>

                </tr>

                <tr>

                    <td style="padding: 5px 10px;" width="150">Email: </td>

                    <td style="padding: 5px 10px;">$email1</td>

                </tr>

                <tr>

                    <td style="padding: 5px 10px;" width="150">Odyssey ID: </td>

                    <td style="padding: 5px 10px;">$event_id</td>

                </tr>
                  <tr>

                    <td style="padding: 5px 10px;" width="150">Note: </td>

                    <td style="padding: 5px 10px;">Registration will be confirmed after successfull payment.</td>

                </tr>

<tr>

                    <td style="padding: 5px 10px;" width="150">Like us on Facebook: </td>

                    <td style="padding: 5px 10px;"><a href="https://www.facebook.com/pages/Odyssey/938996026119430">Like Us Now and stay updated</a></td>

                </tr>

            </tbody>

        </table>

        

EOD;


$headers = "From: odyssey@jainbgm.in\r\n";

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";

$headers .= "X-Priority: 1\r\n";

$headers .= "X-MSMail-Priority: High\n";

$headers .= "X-Mailer: PHP" . phpversion() . "\r\n";


mail($emailID, $subject, $body, $headers);


?>