<?php
//dynamic content code
?>
<div class="note-nav">
	<input type="text" id="search" placeholder="Search..."/>
	<ul class="categories">
	
	
	
		<!-- for each loop like in notes -->
		<?php 
			//Instantiate viewModel
			$category = new categoryModel();
			foreach($data as $category){
				//Get the note view for each note in the data array that is passed in (where is data coming from?) - passing it the $note's data to populate fields. Here $note is referring to the name we are giving to each index in the data array
				$viewModel -> getView('views/ui/category.php', $category);
				//Another nested for each will go here to display all of the note titles in a category
			}
		?>
		
		
		
		
		<!--
		<li>Category 1
			<ul>
				<li>Note1</li>
			</ul>
		</li>
		<li>Category 2
			<ul>
				<li>Note2</li>
			</ul>
		</li>
		<li>Category 3
			<ul>
				<li>Note3</li>
			</ul>
		</li>
	</ul> -->
	<!-- Change to the action of create category -->
	
	
	
	
	
	<a href="#">Add new category</a>
	
	<footer>
		<p>FOOTER STUFF HERE &copy; 2013</p>
	</footer>
</div>