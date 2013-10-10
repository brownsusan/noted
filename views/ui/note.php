<div class="note-item">
	<div class="note">
		<div class="note-header">
			<span class="note-title"><?php echo $data['title']; ?></span>
			<span class="note-category"><?php echo $data['category']; ?></span>
		</div>
		<!-- END HEADER DIV -->
		<div class="note-body">
			<p><?php echo $data['body'];?></p>
		</div>
		<!-- END CONTROLS DIV -->
	</div>
	<!-- END NOTE DIV -->
	<div class="note-controls">
		<a href="/?action=note_edit&note_id=<?php echo $data['noteId'];?>" class="note-edit">E</a><br>
		<span class="note-delete">D</span>
	</div>
	<!-- END CONTROLS DIV -->
	<div class="clear-fix">
	</div>
</div>