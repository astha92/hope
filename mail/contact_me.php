<?php
require '../PHPMailer/PHPMailerAutoload.php';
// Check for empty fields
//if(empty($_POST['name'])      ||
  // empty($_POST['email'])     ||
//   empty($_POST['phone'])     ||
//   empty($_POST['message'])   ||
//   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//   {
//   echo "No arguments Provided!";
//   return false;
//   }

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "";
$mail->Password = "";
$mail->SetFrom("asthagupta92@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("asthagupta92@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
//$name = strip_tags(htmlspecialchars($_POST['name']));
//$email_address = strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));
//$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
//$to = 'asthagupta92@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
//$email_subject = "Website Contact Form:  $name";
//$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
//$headers = "From: noreply@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email_address";   
//mail($to,$email_subject,$email_body,$headers);
return true;         
?>
