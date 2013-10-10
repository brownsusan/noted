<div class="edit-note-item">
	<form id="edit-note-form" action="/?action=action_note_edit" method="post">
		<div class="edit-note">
			<div class="edit-note-header">
				<input type="text" class="edit-note-title" value="<?php echo $data['title']; ?>" />
				<input type="text" class="edit-note-category" value="<?php echo $data['category']; ?>" />
			</div>
			<!-- END HEADER DIV -->
				<textarea class="note-edit-body"><?php echo $data['body'];?></textarea>
			<!-- END CONTROLS DIV -->
		</div>
		<!-- END NOTE DIV -->
		<div class="note-controls">
			<input type="submit" class="note-save" value="S" /><br>
			<span class="note-delete">D</span>
		</div>
		<!-- END CONTROLS DIV -->
		<div class="clear-fix">
		</div>
	</form>
</div>
