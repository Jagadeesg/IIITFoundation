<?php require_once("include/class.phpmailer.php");

if ( isset($_SERVER["OS"]) && $_SERVER["OS"] == "Windows_NT" ) {
  $hostname = strtolower($_SERVER["COMPUTERNAME"]);
} else {
  $hostname = `hostname`;
  $hostnamearray = explode('.', $hostname);
  $hostname = $hostnamearray[0];
}

if ( isset( $_REQUEST['reqdemo_btn']) ) {
  header("Content-Type: text/plain");
  header("X-Node: $hostname");
  $name=$_REQUEST['name'];
        
  $country = $_REQUEST['country'];
$phone = $_REQUEST['phone'];
  
  $from = $_REQUEST['email'];
  $toemail = 'helpdesk@coepd.us'; 
  $subject = $_REQUEST['subject'];
  $message = "<html><body><b>Name: </b>".$name."<br><b>Country code: </b> ".$country.
      "<br><b>Contact Number: </b> ".$phone.      
       "<br><b>Email: </b> ".$from."<br><b>Subject:
       </b> ".$subject."<br></body></html>";
  if ( $from == "" || $toemail == "" ) {
    header("HTTP/1.1 500 WhatAreYouDoing");
    header("Content-Type: text/plain");
    echo 'FAIL: You must fill in From: and To: fields.';
    exit;
  }
  if ( $_REQUEST['sendmethod'] == "mail" ) {
    $result = mail($toemail, $subject, $message, "From: $from" );
    if ( $result ) {
      echo 'OK';
    } else {
      echo 'FAIL';
    }
  } elseif (  $_REQUEST['sendmethod'] == "smtp" ) {
    ob_start(); //start capturing output buffer because we want to change output to html

    $mail = new PHPMailer;

    $mail->SMTPDebug = 0;
    $mail->IsSMTP();
    if ( strpos($hostname, 'cpnl') === FALSE ) //if not cPanel
      $mail->Host = 'smtp.gmail.com';
    else
      $mail->Host = 'localhost';
    $mail->SMTPAuth = false;

    $mail->From = $from;
    $mail->FromName = 'Mailer';
    $mail->AddAddress($toemail);

    $mail->Subject = "RequestDemo user details";
    //$mail->Body = $message;
                               $mail->MsgHTML($message);

    $mailresult = $mail->Send();
    $mailconversation = nl2br(htmlspecialchars(ob_get_clean())); //captures the output of PHPMailer and htmlizes it
    if ( !$mailresult ) {
      echo 'FAIL: ' . $mail->ErrorInfo . '<br />' . $mailconversation;
    } else {
      echo $mailconversation;
    }
  } elseif (  $_REQUEST['sendmethod'] == "sendmail" ) {
    $cmd = "cat - << EOF | /usr/sbin/sendmail -t 2>&1\nto:$toemail\nfrom:$from\nsubject:$subject\n\n$message\n\nEOF\n";
    $mailresult = shell_exec($cmd);
    if ( $mailresult == '' ) { //A blank result is usually successful
      echo 'OK';
    } else {
      echo "The sendmail command returned what appears to be an error: " . $mailresult . "<br />\n<br />";
    }
  } else {
    echo 'FAIL (Invalid sendmethod variable in POST data)';
  }
  exit;
}
?>