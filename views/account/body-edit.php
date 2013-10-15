<form action="<?php echo $GLOBALS['web_root']; ?>?action=action_user_update" method="post">
		<div>
			<label for="firstname">First Name</label>
			<input name="firstname" id="firstName" type="text" placeholder="ex: John">
		</div>
		<div>
			<label for="lastname">Last Name</label>
			<input name="lastname" id="lastName" type="text" placeholder="ex: Doe">
		</div>
		<div>
			<label for="username">Username</label>
			<input name="username" id="username" type="text" placeholder="ex: johndoe1234">
		</div>
		<div>
			<label for="email">Email Address</label>
			<input name="email" id="email" type="email" placeholder="ex: jdoe@domain.com">
		</div>
		<div>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" type="text">
		</div>
		<div>
			<label for="confirmPassword">Confirm Password</label>
			<input type="password" name="confirmPassword" id="confirmPassword" type="text">
		</div>
		<button class="button-submit home-sign-up">
			Sign Up
		</button>
		
</form>
