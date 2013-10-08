<?php foreach($data as $user){ ?>

	<form action="?action=updateuser" method="post">
		<span>User ID:</span>
		<input type="text" name="id" readonly="readonly" value="<?=$data[id]?>" />
		<span>User Name:</span>
		<input type="text" name="username" value="<?=$data[id]?>" /><br />
		<input type="submit" value="update"/>
	</form>

<?php } ?>