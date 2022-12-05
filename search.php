<?php
session_start();
include 'connection.php';
include "header.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<body>
	<form action="search.php" method="POST">
		<input type="text" name="search" placeholder="search">
		<button type="submit" name="submit"></button>
	</form>

<div class="container">
	<?php
	$sql="SELECT * FROM search";
	$result = mysql_query($conn, $sql);
	$queryResults = mysqli_num_rows($result);
	if ($queryResults > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<div class container">
	}
	}
	?>
</div>
</body>
</html>