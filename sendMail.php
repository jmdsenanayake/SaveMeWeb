<?php
$toMail=$_GET["email"];
$toName=$_GET["name"];
$pass=substr($toName,0,3);
require_once "PHPMailer/PHPMailerAutoload.php";
$message="Dear ".$toName."<br><br>You have successfully registered in the system.<br>User name:SaveMeUser".$toName."<br>Password:SaveMePass".$pass."<br>Please change your default password once you logged in.<br><br>Regards<br>
System Administrator<br>
SaveMe";

$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "system.saveme@gmail.com";                 
$mail->Password = "SaveMe@2017";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "system.saveme@gmail.com";
$mail->FromName = "SaveMe";

$mail->addAddress($toMail, $toName);

$mail->isHTML(true);

$mail->Subject = "Registration in SaveMe";
$mail->Body =$message;
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
?>