<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'Exception2.php';
require_once 'PHPMailer2.php';
require_once 'SMTP2.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Date = $_POST['Date'];
    $descr = $_POST['descr'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'NamasteRestaurantInfo@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'NamasteRestaurant@5'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('namasterestaurantinfo@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress($Email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
     $mail->Body = "The Table of $Name has been placed for booking at Zayka on $Date with email id : $Email . We will contact you soon with your reserve Table." ; //"<h3>Name :  $name <br>Email: $email <br>Message : $message</h3>";

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
      