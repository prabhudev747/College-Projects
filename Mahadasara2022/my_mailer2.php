
<?php
require 'PHPMailer/class.phpmailer.php';
        require 'PHPMailer/PHPMailerAutoload.php';
function send_mail($to,$subject,$body)
{
    // To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '."\r\n".
    'Reply-To: '."\r\n" .
    'X-Mailer: PHP/' . phpversion();

$mail = new PHPMailer(true); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->Host = "mail.mahadasara2022.in";
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
//$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail->Username = "contactus@mahadasara2022.in";
$mail->Password = "8b21*KIZl#ol";
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
//$mail->Host = "smtp.gmail.com";

//$mail->Host = "ssl://smtp.gmail.com"; // specify main and backup server
//$mail->Port = 465; // or 587
$mail->Port = 587; // or 587
$mail->IsHTML(true);
//$mail->Username = "testmailra201@gmail.com";
//$mail->Username = "mitmyscet2022@gmail.com";
//$mail->Username = "sysadmin@mitmysore.in";
//$mail->Username = "sysadmin@mitmysore.in";

//$mail->Password = "8861011680";
//$mail->Password = "mit@2022";

//$mail->SetFrom("sysadmin@mitmysore.in");
$mail->SetFrom("contactus@mahadasara2022.in",'Ftech');
$mail->AddAddress("subbu.hkt@gmail.com");



//$mail->Subject = "Test";
$mail->Subject = $subject;
//$mail->Body = "hello";
$mail->Body = $body;
//
//$mail->AddAddress($to);
//$mail->addAttachment($savepath);
 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    echo "<script>alert('Mail not sent')</script>";
 } else {
    //echo "<script>alert('Mail sent')</script>";
     
    //echo "Message has been sent";
 }
 //echo "<script>window.location.replace('test_mail.php')</script>";
}//end function send_mail()




?>
<?php

$to="subbu.hkt@gmail.com";
$subject="mahadasara-2022";
$body="welcome to Mahadasara-2022";
//$savepath="College_logo/1.png";
send_mail($to,$subject,$body);

?>