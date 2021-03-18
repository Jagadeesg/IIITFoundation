<?php
$to = "vanitha.coepd@gmail.com";
$subject = "HTML email";

if(isset($_POST['reqdemo_btn'])){

$name=$_POST['name'];
$email=$_POST['email'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message="Msg Sent";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <vanitha.coepd@gmail.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
}
?>
