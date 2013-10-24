<?php
//dynamic content code
?>
<div class="note-nav">
	<form action="<?php echo $GLOBALS['web_root']; ?>?action=action_category_create" method="post">
		<input name="category" type="text" id="create_new_category" placeholder="Enter a new category name..."/>
		<input type="submit" href="#" id="new_category_btn" value="Create Category" />
	</form>
	<ul class="categories">		
		<!-- for each loop like in notes -->
		<?php 
			$viewModel = new viewModel();
			$note_model = new noteModel();
			$category_model = new categoryModel();

			foreach($data as $category){
				//Get the note view for each note in the data array that is passed in (where is data coming from?) - passing it the $note's data to populate fields. Here $note is referring to the name we are giving to each index in the data array
				$viewModel -> getView('views/ui/category.php', $category);
				//Another nested for each will go here to display all of the note titles in a category - CURRENTLY LOOPING THROUGH CATEGORIES FOR TESTING PURPOSES
				$notes = $note_model -> getNotesByCategory($category['categoryId']);

				foreach($notes as $note){
					echo('<li class="nav-note-title">'.$note['title'].'</li>');
				}
			}
		?>
	
	<footer>
		<a href="<?php echo $GLOBALS['web_root']; ?>?action=example_api_fetch&id=<?php echo $_SESSION['user']['userId']; ?>">JSON</a>
		<p>FOOTER STUFF HERE &copy; 2013</p>
	</footer>
</div>