<?php

//dynamic content code
?>

<html>
	<head>
		<title>SSL Project</title>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />

		<?php
		// we must load the css from the root (/) because
		//relative paths don't work with pretty urls and a shared header file'
		?>
		<link rel="stylesheet" href="/php/css/main.css">
	</head>
	<body>
		
		<div id="header_placeholder"></div>
		
		<header>
			<a id="logo" href="<?php echo $GLOBALS['web_root']; ?>?action=notes">PROJECT NAME</a>
			<!-- Add one more attribute from slides -->
		<form action="/php/models/checklogin.php" method="post" class="home-login" name="home-login">
			<label for="loginEmail">Email Address</label>
			<input name="loginEmail" id="loginEmail" placeholder="Enter Email Address"/>
			<label for="loginPass">Password</label>
			<input name="loginPass" id="loginPass" placeholder="Password Here"/>
			<input type="submit" value="log in" />
		</form>
