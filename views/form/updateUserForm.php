<?php foreach($data as $user){ ?>

	<form action="<?php echo $GLOBALS['web_root']; ?>?action=updateuser" method="post">
		<span>User ID:</span>
		<input type="text" name="id" readonly="readonly" value="<?=$user['id']?>" />
		<span>User Name:</span>
		<input type="text" name="username" value="<?=$user['username']?>" /><br />
		<input type="submit" value="update"/>
	</form>

<?php } ?>


