<?php
foreach($data as $user){
/*
	echo ("<br>");
	//Period is concatenating
	echo ($user["username"]."<br>");
	echo ($user["firstname"]."<br>");
	echo ($user["lastname"]."<br>");
	echo ($user["email"]."<br>");
	echo ("<a href='?action=delete'> delete</a>");
	echo ("<a href='?action=updateform&id=".$user["id"]."'> update</a>");
	echo ("<br><br>");
*/
}

?>
<!-- add in side div -->

<div class='main'>
	<span class="add-note">Create a note</span>
	<div class="note-list">
		<?php foreach($data as $note){
			$viewModel = new viewModel();
			$viewModel -> getView('views/ui/note.php', $note);
		}?>
	</div>
	<!-- END NOTE LIST DIV -->
</div>
<!-- END MAIN DIV -->