		<div>
			<span>First Name: </span>
			<span><?php echo $_SESSION['user']['firstname']; ?></span>
		</div>
		<div>
			<span>Last Name: </span>
			<span><?php echo $_SESSION['user']['lastname']; ?></span>
		</div>
		<div>
			<span>Username: </span>
			<span><?php echo $_SESSION['user']['username']; ?></span>
		</div>
		<div>
			<span>Email Address: </span>
			<span><?php echo $_SESSION['user']['email']; ?></span>
		</div>
		<div>
			<span>Password: </span>
			<span>Click edit to change your password.</span>
		</div>
		<a href="<?php echo $GLOBALS['web_root']; ?>?action=account_update">Edit</a>
