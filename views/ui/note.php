<div class="note-item">
	<div class="note">
		<div class="note-header">
			<span class="note-title"><?php echo $data['title']; ?></span>
			<span class="note-category"><?php echo $data['categoryTitle']; ?></span>
		</div>
		<!-- END HEADER DIV -->
		<div class="note-body">
			<p><?php echo $data['body'];?></p>
		</div>
		<!-- END CONTROLS DIV -->
	</div>
	<!-- END NOTE DIV -->
	<div class="note-controls">
		<a href="<?php echo $GLOBALS['web_root']; ?>?action=note_update&note_id=<?php echo $data['noteId'];?>" class="note-edit-btn">Edit</a><br>
		<a href="<?php echo $GLOBALS['web_root']; ?>?action=action_note_delete&note_id=<?php echo $data['noteId'];?>" class="note-delete-btn">Delete</a>
	</div>
	<!-- END CONTROLS DIV -->
	<div class="clear-fix">
	</div>
</div>