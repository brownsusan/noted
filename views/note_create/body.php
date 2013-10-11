<div class="main">
	<div class="create-note-item">
		<form id="create-note-form" action="/php/?action=action_note_create" method="post">
			<div class="create-note">
				<h1>Create a new note</h1>
				<div class="create-note-header">
					<input type="text" class="create-note-title" placeholder="Enter Note Title..." name="title" />
					<input type="text" class="create-note-category" placeholder="Enter Note Category..." name="category" />
				</div>
				<!-- END HEADER DIV -->
					<textarea class="note-create-body" name="body" placeholder="Enter Note..."></textarea>
				<!-- END CONTROLS DIV -->
			</div>
			<!-- END NOTE DIV -->
			<div class="note-controls">
				<input type="submit" class="note-save" value="S" /><br>
			</div>
			<!-- END CONTROLS DIV -->
			<div class="clear-fix">
			</div>
		</form>
	</div>
</div>