<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $myorder=$_POST['myorder'];
  $message=$_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'NamasteRestaurantInfo@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'NamasteRestaurant@5'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('namasterestaurantinfo@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
     $mail->Body = "The $myorder of $name has been placed at Zayka with email id : $email"; //"<h3>Name :  $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
      