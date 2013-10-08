<?php
foreach($data as $user){
	echo ("<br>");
	//Period is concatenating
	echo ($user["username"]."<br>");
	echo ($user["firstname"]."<br>");
	echo ($user["lastname"]."<br>");
	echo ($user["email"]."<br>");
	echo ("<a href='?action=delete'> delete</a>");
	echo ("<a href='?action=updateuser&id=".$user["id"]."'> update</a>");
	echo ("<br><br>");
}

?>
<!-- add in side div -->


<div class='main'>
	<span class="add-note">Create a note</span>
	<div class="note-list">
		<?php for($i = 0; $i < 10; $i++):?>
		<div class="note-item">
			<div class="note">
				<div class="note-header">
					<span class="note-title">NOTE TITLE</span>
					<span class="note-category">NOTE CATEGORY</span>
				</div>
				<!-- END HEADER DIV -->
				<div class="note-body">
					<p>
						NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE
					</p>
				</div>
				<!-- END CONTROLS DIV -->
			</div>
			<!-- END NOTE DIV -->
			<div class="note-controls">
				<span class="note-edit">E</span><br>
				<span class="note-delete">D</span>
			</div>
			<!-- END CONTROLS DIV -->
			<div class="clear-fix">
			</div>
		</div>
		<!-- END NOTE ITEM DIV -->
		<?php endfor; ?>
	</div>
	<!-- END NOTE LIST DIV -->
</div>
<!-- END MAIN DIV -->