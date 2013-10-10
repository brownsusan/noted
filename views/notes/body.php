<div class='main'>
	<span class="add-note">Create a note</span>
	<div class="note-list">
		<?php 
			//Instantiate viewModel
			$viewModel = new viewModel();
			foreach($data as $note){
				//Get the note view for each note in the data array that is passed in (where is data coming from?) - passing it the $note's data to populate fields. Here $note is referring to the name we are giving to each index in the data array
				$viewModel -> getView('views/ui/note.php', $note);
			}
		?>
	</div>
	<!-- END NOTE LIST DIV -->
</div>
<!-- END MAIN DIV -->