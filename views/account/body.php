<?php
var_dump($_SESSION['user']);
?>
<form action="<?php echo $GLOBALS['web_root']; ?>?action=action_user_delete" method="post">
		<div>
			<span>First Name: </span>
			<span>First Name: </span>
		</div>
		<div>
			<span>Last Name: </span>
			<span>First Name: </span>
		</div>
		<div>
			<span>Username: </span>
			<span>First Name: </span>
		</div>
		<div>
			<span>Email Address: </span>
			<span>First Name: </span>
		</div>
		<div>
			<span>Password: </span>
			<span>Click edit to change your password.</span>
		</div>
		<button class="button-submit home-sign-up">
			Edit
		</button>
		
</form>
