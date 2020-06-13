<?php
$con = mysqli_connect('localhost:8889','root','root');
if(!$con){
    echo 'Not Connected To Server';
}
if(!mysqli_select_db($con,'Hotel_Booking_Database'))
{
    echo' Not Connected To db';
}

$NAME = $_POST['name'];
$EMAIL = $_POST['email'];
$FROM_DATE = $_POST['From_Date'];
$TO_DATE = $_POST['To_Date'];
$ROOM_NUMBER = 763;
$ROOM_SERVICE = $_POST['Room_Service'];

$sql = "INSERT INTO Hotel_Reservations(Name, Email, From_Date, To_Date, Room_Number, Room_Service) Values('$NAME', '$EMAIL','$FROM_DATE', '$TO_DATE', $ROOM_NUMBER, '$ROOM_SERVICE')";

if(!mysqli_query($con,$sql))
{
    $msg = "Room Not Confirmed";
}
else{
    $msg = "Room Confirmed. Please Come To 1420 South Rug St For Your Room";

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
$mail->Body = 'You Confirmed A Stay At Rohan Hotel At <a href="https://rohan-sudagar.github.io">https://rohan-sudagar.github.io</a> Please Come To 1420 South Rug St For Your Room ';

$mail->AddAddress($_POST['email']);
$mail->Send();
    
}
?>
