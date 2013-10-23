<?php

//dynamic content code

?>
<div id="hero">
	
</div>





<div id="sign_up_form">
	<form action="<?php echo $GLOBALS['web_root']; ?>?action=action_user_create" method="post">
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
			<div>
				<input id="terms" name="terms" value="I agree to the terms and conditions." type="checkbox">
				<label for="terms">I agree to the terms and conditions.</label>
			</div>
			<button "sign_up" class="button-submit home-sign-up">
				Sign Up
			</button>
			
	</form>
</div>