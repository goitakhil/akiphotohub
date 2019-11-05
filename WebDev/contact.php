<?php
  include_once 'header.php';
 ?>
 <div class="bgimg-1 ">
     <img src="image/cont.jpg" alt="img">
 </div>

 <div class="contact" id="contact">
   <h3>GET IN TOUCH</h3>
   <p><em>Your Feedback is Important!</em></p>

   <div class="contactbox">
       <div class="address">
         <i class="fa fa-map-marker fa-fw"></i> BOISE, IDAHO - US<br>
         <i class="fa fa-phone fa-fw "></i> Phone: +1 (208) 712-8637<br>
         <i class="fa fa-envelope fa-fw "></i> Email: akhileshku.goit7@gmail.com<br>
       </div>
       <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
       <form class="contactForm" method="post">
         <div class="name">
           <input class="fullName" type="text" placeholder="Name" required name="Name">
         </div>
         <div class="email">
           <input class="emailaddress" type="text" placeholder="Email" required name="Email">
         </div>
         <input class="message" type="text" placeholder="Message" required name="Message">
         <input type="submit" value="Submit">
       </form>
   </div>
<?php
  include_once 'footer.php';
 ?>
