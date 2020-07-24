<?php


$NAME = $_GET['name'];
$EMAIL = $_GET['email'];
$FROM_DATE = $_GET['From_Date'];
$TO_DATE = $_GET['To_Date'];
$ROOM_NUMBER = 763;
$ROOM_SERVICE = $_GET['Room_Service'];
$time = $_GET['time'];




$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->IsHTML(true);
$mail->Username = 'rohansudagar@gmail.com';
$mail->Password = 'tuesday2012';
$mail->SetFrom('rohansudagar@gmail.com');
$mail->Subject = 'Your Hotel Stay';
$mail->Body = 'You Confirmed A Stay At Rohan Hotel At <a href="https://rohan-sudagar.github.io">https://rohan-sudagar.github.io</a> Please Come To 1420 South Rug St For Your Room 
<br>
The date you chose was '. $FROM_DATE .'.
<br>
The time you chose was '. $time .'. 
<br>
Your room number is ' .$ROOM_NUMBER. '.
<br>
The choice you chose was ' .$ROOM_SERVICE. '.';

$mail->AddAddress($EMAIL);
$mail->Send();
    
}
?>

<?php
 require_once 'PHPMailerAutoload.php';


$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->IsHTML(true);
$mail->Username = 'rohansudagar@gmail.com';
$mail->Password = 'tuesday2012';
$mail->SetFrom('rohansudagar@gmail.com');
$mail->Subject = 'Your Hotel Stay';
$mail->Body = 'A customer wants to come to your hotel. Your customers name is ' .$NAME. '.
<br>
The time your customer wants to come is '. $time .'
<br>
The date your customer wants to come in is '. $FROM_DATE .'.
    <br>
    The date your customer wants to leave is '. $TO_DATE .'
;
$mail->AddAddress('rohansudagar@gmail.com');
$mail->Send();
?>
