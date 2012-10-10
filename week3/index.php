<!DOCTYPE html>
<html>
	<head>
		<title>Maya Online Books</title>
		<link rel="apple-touch-icon" href="appicon.png" />
		<link rel="apple-touch-startup-image" href="startup.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	
	<?php
	include("menu.php");
	?>

	<?php
	include("config.php");
	$query = "";
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result)) {

	}
	?>

	<form action="submit.php" method="post">
	<label>Name: <input class="forminput" type="text" name="name" /></label>
	<label>Email: <input class="forminput" type="text" name="email" autocapitalize="off" /></label>
	<select name="book">
	<option value=””></option>
	</select>
	<input type="submit" class="medium red awesome" value="Order &raquo;" />
	</form>
	
		<div class="banner"></div>
		
		<table>
		<!-- This is where we'll put all our content -->
		
		</table>
		
		<script type="text/javascript">
		$("a").click(function (event) {
		    event.preventDefault();
		    window.location = $(this).attr("href");
		});
		</script>
	</body>
</html>