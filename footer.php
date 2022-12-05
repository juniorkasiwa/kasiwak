<?php

include 'connection.php';
if (array_key_exists("logout", $_POST))
{
	footer("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="css/footer.css">

<body>
 <footer>
   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic">THE DREAMERS</div>
       </div>
       <div class="lower">
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>+254 9089 6767</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>abc@gmail.com</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-location"></i>obunga sreet,kisumu kenya</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Terms And Conditional</div>
       <div><a href="#">Terms Of Service</a></div>
       <div><a href="#">Privacy statement</a></div>
       <div><a href="#">Aookie And Policy</a></div>
     </div>
     <div class="right box">
       <div class="topic">Subscribe us</div>
       <form action="#">
         <input type="text" placeholder="Enter email address">
         <input type="submit" name="" value="Send">
         <p><b>FOLLOW US ON SOCIAL</b></p></ br>
         <div class="media-icons">
           <a href="#"><i class="fas fa-facebook-f"></i></a>
           <a href="#"><i class="fas fa-instagram"></i></a>
           <a href="#"><i class="fas fa-twitter"></i></a>
           <a href="#"><i class="fas fa-youtube"></i></a>
           <a href="#"><i class="fas fa-linkedin-in"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright &#169; 2022 <a href="#">The Dreamers</a> All rights reserved</p>
   </div>
   <style>
   body {margin:0;height:2000px;}

.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}
</style>
   <div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
 </footer>

</body>
</html>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzm7KCkRr/rE9 Qpg6aAZGYJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgH9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jot6vLEHfe/JQGiRRSQQxSfFWpilMquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzm7KCkRr/rE9 Qpg6aAZGYJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgH9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jot6vLEHfe/JQGiRRSQQxSfFWpilMquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<nav class="navbar fixed-bottom navbar-dark bg-dark">
	<div id="footer">
<p style="color: white;">&copy;All Rights Reserved.</p>

</div>

</nav>
