<div class='main'>
	<span class="add-note">Create a note</span>
	<div class="note-list">
		<?php 
			$viewModel = new viewModel();
			foreach($data as $note){
				$viewModel -> getView('views/ui/note.php', $note);
			}
		?>
	</div>
	<!-- END NOTE LIST DIV -->
</div>
<!-- END MAIN DIV -->