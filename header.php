<?php
include 'connection.php';
if (array_key_exists("logout", $_POST))
{
	header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9171556243033203"
     crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootsrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNH0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style-screen.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="style-print.css" type="text/css" media="print">

	<title>The Dreamers.com</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body style="font-family: Times, 'Times New Roman', sans-serif;">
	
        <nav>
        <div class="logo">
        	<p><a href="index.php" style = "text-decoration: none; color: white;">The Dreamers</a></p>
        </div>
        <ul>
        <li><a href="dance.php">Dance</a></li>
        <li><a href="music.php">Music</a></li>
        <li><a href="new.php">New</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <div class="dropdown">
        <button class="dropbtn">FASHION<i class="fa fa-caret-down"></i> </button>
        <div class="dropdown-content">
        <a href="fashion.php">Fashion</a>
        <a href="art.php">Art</a>
        <a href="#">Craft</a>
      </div>
      </div>
        	<li><a href="login.php">Login</a></li>
        	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </ul>
        </nav>
	
<script>
		function myFunction(button) {
			var txt;
			if (confirm(Do you really want to Logout?)) {
				txt = "logout";
			} else {
				txt = "You pressed Cancel!";
			}
			document.getElementById("button").innerHTML = txt;
		}
	</script>
<form class="form-inline" method="POST">
			<button id="button" onclick="myFunction()" class="btn btn-outline-dark my-2 my-sm-0" style="background-color: white;" type="submit" name="logout">LOGOUT</button>
		</form>
		<p id="but"></p>
	


			
<br><br>


</body>
</html>