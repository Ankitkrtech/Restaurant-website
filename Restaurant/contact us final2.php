  
  <?php include 'sendemail2.php'; ?>
<?php include 'contactus2.php'; ?>
 
 
    <!DOCTYPE html>
    
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table Reservation Form</title>
        <link rel="stylesheet" href="contact us final2.css">
        <link rel="stylesheet" href="chatbot2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">          
        <style>
          img{
            border: 10px solid rgb(255, 255, 255);
          }
        </style>
      </head>
      <body>    

      
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <!--contact section start-->


        <!-- <header>
          <div class="nav">
              <ul>
                  <a href=""><li><img src="logo.jpg" alt="" height="80px" width="150px" style="margin-left: -300px;margin-top: -20px;" alt=""></li></a>
                  <a href=""><li>Home</li></a>
                  <a href=""><li>About</li></a>
                  <a href=""><li>Service</li></a>
                  <a href=""><li>Contact</li></a>
              </ul>
          </div>
      </header>     -->
        <div class="contact-section">
          <div class="contact-info">  
            <strong>    
            <div><i class="fas fa-map-marker-alt"></i>Secundrabad, Hyderabad, India</div> 
            <div><i class="fas fa-envelope"></i>Namasterestaurantinfo@gmail.com</div>
            <div ><i class="fas fa-phone"></i>+91 8106 232 069</div>
            <div ><i class="fas fa-clock"></i>Mon - Sun 10:00 AM to 9:00 PM</div>            
          </strong>
          </div>    
          <div class="contact-form">
            <h2 style="border:5px solid rgb(0, 0, 0) ;border-radius: 50px;background: -webkit-linear-gradient(left, #fdc62f, #f76c5a)">
              <strong> Book Your Table </strong>
            </h2>
    
            <form class="contact" action=" " method="post" style="background-color: black;opacity: 0.9;">
    
              <input type="text" name="Name"  id="Name" class="text-box" placeholder="Your Name" required style="color: rgb(255, 0, 0); border: 3px  solid rgb(0, 0, 0); border-radius: 8px ;opacity: 5; font-weight: bolder;">  
              
              <input type="email" name="Email" id="Email" class="text-box" placeholder="Your Email"  required style="color: rgb(255, 0, 0); border: 3px solid rgb(17, 17, 17) ;border-radius: 8px; font-weight: bolder;">
              <input type="text" name="Date"  id="Date" class="text-box" placeholder="Which Date & time You Want to Book" required style="color: rgb(255, 0, 0); border: 3px  solid rgb(0, 0, 0); border-radius: 8px ;opacity: 5; width: 500px; font-weight: bolder;">  
        
              <textarea name="descr" id="descr" cols="30" rows="10"  placeholder="Enter your query" style="color: red; font-weight: bolder;"></textarea>

              <input type="submit" name="submit" class="send-btn" value="Send">

            </form>
          </div>
        </div>
        
      
        <br><br><br><br><br>
        <!-- <footer class="footer">
        <div class="l-footer">
        <h1>
        <img src="logo.jpg" alt="" height="150px" width="450px">
      </h1>
        <link rel="stylesheet" href="footer.css">
         <h1 style="padding-left: 65px;padding-right: 20px;font-family:'Times New Roman', Times, serif;border:2px solid #ff9340;border-width: 8px;">   ZAIKA RESTAURANT</h1>
        </div>
        <ul class="r-footer" >
            <li><h2> About</h2>
                <ul class="box">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Gallery</a></li>
                </ul>
                </li>
        <li><h2> Social</h2>
        <ul class="box">
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Pinterest</a></li>
        <li><a href="#">Instagram</a></li>
        </ul>
        </li>
    
        <li><h2> Legal</h2>
            <ul class="box">
            <li><a href="#"> Policy</a></li>
            <li><a href="#">Terms of use</a></li>
            <li><a href="#">Contract</a></li>
            <li><a href="#">License</a></li>
            </ul>
            </li>
    
        <li class="features">
        <h2>Information</h2>
        <ul class="box">
        <li>
          <a href="#">Pricing</a>
        </li>
        <li>
          <a href="#">Sales</a>
        </li>
        <li>
          <a href="#">Certifications</a>
        </li>
        <li>
          <a href="#">Customer Service<a>
        </li>
        </ul>
        </li>
       
        </ul>
        <div class="b-footer">
        <p>All rights reserved by        ©ZAIKA RESTAURANT 2020 </p>
        </div>
        </footer>        -->
        <script type="text/javascript">
          if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
          }
          </script>
      </body>
    </html>
    
 
   