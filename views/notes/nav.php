<?php
//dynamic content code
?>
<div class="note-nav">
	<input type="text" id="search" placeholder="Search..."/>
	<ul class="categories">
	
	
		
		<!-- for each loop like in notes -->
		<?php 
			$viewModel = new viewModel();
			//Instantiate viewModel
			$category_model = new categoryModel();
			foreach($data as $category){
				//Get the note view for each note in the data array that is passed in (where is data coming from?) - passing it the $note's data to populate fields. Here $note is referring to the name we are giving to each index in the data array
				$viewModel -> getView('views/ui/category.php', $category);
				//Another nested for each will go here to display all of the note titles in a category - CURRENTLY LOOPING THROUGH CATEGORIES FOR TESTING PURPOSES
				foreach($data as $note){
				echo('<li class="nav-note-title">a note will go here</li>');
			}
			}
		?>
	
	
	<a href="#">Add new category</a>
	
	<footer>
		<p>FOOTER STUFF HERE &copy; 2013</p>
	</footer>
</div>