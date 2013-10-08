<html>
	
	<head>
		<title>Some Title</title>
	
		<link rel="stylesheet" href="/test/css/main.css">
	</head>
	
	<?php
		//require_once 'header.php';
		require_once $_GET['header'] . '.php';
	?>
	
	<body>
		
		<p><?php echo $_GET['v']; ?></p>
		
	</body>
	
	
</html>