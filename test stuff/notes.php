<html>

	<head>
		<title>Notes</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
	</head>

	<body>

		<header>
			<a href="#">PROJECT NAME</a>
			<div class="home-login">
				<label for="loginEmail">Email Address</label>
				<input id="loginEmail" placeholder="Enter Email Address"/>
				<label for="loginPass">Password</label>
				<input id="loginPass" placeholder="Password Here"/>
				<input type="submit" value="Log In" />
			</div>
		</header>
		
		<div class='main'>
			<span class="add-note">Create a note</span>
			<div class="note-list">
			
			<?php for($i = 0; $i < 10; $i++):?>
			
				<div class="note-item">
					<div class="note">
						<div class="note-header">
							<span class="note-title">NOTE TITLE</span>
							<span class="note-category">NOTE CATEGORY</span>
						</div><!-- END HEADER DIV -->
						<div class="note-body">
							<p>NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE NOTE BODY HERE </p>
						</div><!-- END CONTROLS DIV -->
					</div><!-- END NOTE DIV -->
					<div class="note-controls">
						<span class="note-edit">E</span><br>
						<span class="note-delete">D</span>
					</div><!-- END CONTROLS DIV -->
				</div><!-- END NOTE ITEM DIV -->
				
				<?php endfor; ?>
				
				
			</div><!-- END NOTE LIST DIV -->
		</div><!-- END MAIN DIV -->
		
		<div class="note-nav">
		<br><br>
			<input type="text" id="search" placeholder="Search..."/>
			<ul class="categories">
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
			</ul>
			<span>Add new category</span>
		</div>

	</body>

</html>