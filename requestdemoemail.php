
<?php


error_reporting(~E_ALL);
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader

require 'vendor/autoload.php';
require_once 'dbconnect.php'; 
if(isset($_POST['reqdemo_btn'])){

$name=$_POST['name'];
$email=$_POST['email'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];



if($email!=''){
    $mail = new PHPMailer(true);                                // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                   // Enable verbose debug output
        $mail->isSMTP();                                        // Set mailer to use SMTP
       // $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
         $mail->Host = 'smtp.gmail.com';               // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                 // Enable SMTP authentication
        $mail->Username = 'monali.coepd@gmail.com';          // SMTP username
        $mail->Password = '7058787653';                           // SMTP password
        $mail->Port = 8025;                                        // TCP port to connect to
        $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
            );

        //Recipients
        $mail->setFrom('monali.coepd@gmail.com', 'WebHelp');
        $mail->addAddress('monali.coepd@gmail.com', 'Vanitha');                       // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                    // Set email format to HTML
        $mail->Subject = 'Demo Registraion Details';
        //$mail->Body    = '<html><body>

       $body=  "<html><body>
	   <b>Name: </b> ".$name."<br><b>Email: </b> ".$email."<br><b>Country: </b> ".$country."
       <br><b>Phone: </b>".$phone."<br><b>Query: </b> ".$subject."<br></body></html>";
        
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
 