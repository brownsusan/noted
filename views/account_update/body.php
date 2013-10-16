<form action="<?php echo $GLOBALS['web_root']; ?>?action=action_user_update" method="post">

		<div>
			<label for="firstName">First Name</label>
			<input name="firstname" id="firstName" type="text" value="<?php echo $_SESSION['user']['firstname']; ?>">
		</div>
		<div>
			<label for="lastName">Last Name</label>
			<input name="lastname" id="lastName" type="text" value="<?php echo $_SESSION['user']['lastname']; ?>">
		</div>
		<div>
			<label for="username">Username</label>
			<input name="username" id="username" type="text" value="<?php echo $_SESSION['user']['username']; ?>">
		</div>
		<div>
			<label for="email">Email Address</label>
			<input name="email" id="email" type="email" value="<?php echo $_SESSION['user']['email']; ?>">
		</div>
		<div>
			<span>Please enter and confirm your current password in order to save your changes. You can also enter and confirm a new password if you would like to change your login credentials. Note: New password must be 8 characters long and contain an uppercase letter, a lowercase letter, and a number.</span>
			<div>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" type="text" placeholder="Enter your new password">
			</div>
			<div>
				<label for="confirmPassword">Confirm Password</label>
				<input type="password" name="confirmPassword" id="confirmPassword" type="text" placeholder="Confirm your password.">
			</div>
		</div>
		<img src="<?php echo $GLOBALS['web_root']; ?>libs/CaptchaSecurityImages.php" alt="" />
		<button class="button-submit home-sign-up">
			Save
		</button>
		
</form>