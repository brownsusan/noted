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
		<link rel="stylesheet" href="/css/main.css">
	</head>
	<body>
		
		<div id="header_placeholder"></div>
		
		<header>
			<a href="#">PROJECT NAME</a>
			<div class="home-login">
				<label for="loginEmail">Email Address</label>
				<input id="loginEmail" placeholder="Enter Email Address"/>
				<label for="loginPass">Password</label>
				<input id="loginPass" placeholder="Password Here"/>
			</div>
		</header>