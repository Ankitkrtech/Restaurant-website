<?php include 'sendemail.php'; ?>
<?php include 'details_entry.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="Order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <!--contact section start-->

    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Secundrabad, Hyderabad, India</div>
        <div><i class="fas fa-envelope"></i>Namasterestaurantinfo@gmail.com</div>
        <div><i class="fas fa-phone"></i>+91 8106 232 069</div>
        <div><i class="fas fa-clock"></i>Mon - Sun 10:00 AM to 9:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Order From Us</h2>
        <form class="contact" action=" " method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <input type="number" name="number" class="text-box" placeholder="Your Number"required> 
          <input type="text" name="myorder" class="text-box" placeholder=" Your Order"required> 
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
      
  </body>
</html>
      