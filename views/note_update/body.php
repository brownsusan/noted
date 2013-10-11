<div class='main'>
	<div class="update-note-item">
		<form id="edit-note-form" action="<?php echo $GLOBALS['web_root']; ?>?action=action_note_update" method="post">
			<input type="hidden" name="note_id" value="<?php echo $data['note']['noteId']; ?>" />
			<div class="update-note">
			<h1>Edit existing note  <span id="header_note_title"><?php echo $data['note']['title']; ?></span></h1>
				<div class="update-note-header">
					<input type="text" class="update-note-title" value="<?php echo $data['note']['title']; ?>" name="title" />
<!-- 					<input type="text" class="update-note-category" value="<?php echo $data['category']; ?>" name="category" /> -->
					<select class="update-note-category" name="category">
						<?php 
						
						foreach($data['categories'] as $category){
							echo('<option value="'.$category['categoryId'].'">'.$category['title'].'</option>');
						}
						
						?>
					</select>
				</div>
				<!-- END HEADER DIV -->
					<textarea class="note-update-body" name="body"><?php echo $data['note']['body'];?></textarea>
				<!-- END CONTROLS DIV -->
			</div>
			<!-- END NOTE DIV -->
			<div class="note-controls">
				<input type="submit" class="note-save-btn" value="Save" /><br>
				<!-- PUT THE OTHER DELETE LINK IN HERE -->
				<span class="note-delete-btn">Delete</span>
			</div>
			<!-- END CONTROLS DIV -->
			<div class="clear-fix">
			</div>
		</form>
	</div>
</div>
