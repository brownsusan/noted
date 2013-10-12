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
			<a id="logo" href="<?php echo $GLOBALS['web_root']; ?>">PROJECT NAME</a>
			<!-- Add one more attribute from slides -->
			<span><?php echo($_SESSION["user"]["username"])?></span>
			<a href="<?php echo $GLOBALS['web_root']; ?>?action=action_user_logout">log out</a>
		</header>