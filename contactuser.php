<?php
error_reporting(~E_ALL);
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';
if(isset($_POST['contact'])){
$name=$_POST['myName'];
$country=$_POST['country'];
$contactnumber=$_POST['myNumber'];
 $email=$_POST['email'];
$subject=$_POST['subject'];

if($email!=''){
    $mail = new PHPMailer(true);                                // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                   // Enable verbose debug output
        $mail->isSMTP();                                        // Set mailer to use SMTP
        //$mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
       $mail->Host = 'relay-hosting.secureserver.net';               // Specify main and backup SMTP servers
        $mail->SMTPAuth = false;                                 // Enable SMTP authentication
        $mail->Username = 'webhelp@coepd.com';          // SMTP username
        $mail->Password = 'nSy8u_48';                           // SMTP password
        $mail->Port = 8025;                                       // TCP port to connect to
        $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
            );

        //Recipients
       $mail->setFrom('webhelp@coepd.com', 'WebHelp');
        $mail->addAddress('rajeshn.coepd@gmail.com', 'Rajesh');                        // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                    // Set email format to HTML
        $mail->Subject = 'Contacted User Details';
        //$mail->Body    = '<html><body>

       $body=  "<html><body><b>Name: </b>".$name."<br><b>Country code: </b> ".$country.
      "<br><b>Contact Number: </b> ".$contactnumber.
      
       "<br><b>Email: </b> ".$email."<br><b>Subject:
       </b> ".$subject."<br></body></html>";
        
       $mail->MsgHTML($body);
        $mail->send();
        //echo 'Message has been sent';
        //header("Location:index.php?status=Message has been sent");
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
}


?>
 