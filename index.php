<?php
include 'connection.php';
include 'header.php';
session_start();
if (array_key_exists("logout", $_POST))
{
	header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootsrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNH0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style-screen.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="style-print.css" type="text/css" media="print">

	<title>The Dreamers.com</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
  <style>
    body{
      background-image: linear-gradient(#000000, #000000);
    }
body, html {
  height: 100%;
  margin: 0;
  font-family: Times, 'Times New Roman', sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/0001.jpeg");
  width: 100%;
  height: 600px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
 
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: orange;
  color: white;
}
  img{
    filter: blur(4px);
    width: 100%;
    height: 600px;
  }
</style>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">WHELCOME WHERE SMALL THINGS START WITH A DREAM</h1></br>
    <p>Don't have an account?</p></br>
    <button><a href="signup.php" style="text-decoration: none;">Click Here To Register</button></a>
  </div>
</div>< /br>
<h1 style="color:white;text-align:center">WHAT YOU NEED TO KNOW</h1>< /br>
<h3 style="color:white;text-align:center">The Dreamer is competion of global art where thousands of artists compete to reach  the dreamers' final</h3>
<h3 style="color:white;text-align:center">Five groups or individuals earn the right to reach the final stage but on group will be crowned<h3>
  <h3 style="color:white;text-align:center">Before two months to reach the dreamers' final stage the dreamers organise a tour of all counties and choose those who will move to the final</h3></br>
  <h3 style="color:white;text-align:center">The Dreamers has also events that come every end of month which is called show time where every artist brings his moves or ideas and shares it with others</h3>
 
<h2>Responsive "Meet The Team" Section</h2>
<p>Resize the browser window to see the effect.</p>
<br>
<style>
  img {
  filter: opacity();
}
  html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #eb2f06;
}
</style>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/jane.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane</h2>
        <p class="title">Event Organizer</p>
        <p style="color:white">jane is a dreamers talent organiser .</p>
        <p><button class="button"><a href="Jane@gmail.com">Contact</button></p></a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/akim.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p style="color:white">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/okelo.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p style="color:white">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<?php 
include 'footer.php';
?>

</html>