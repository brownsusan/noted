<li class="nav-category-title">

	<?php echo $data['categoryTitle']; ?>
	
	
	<?php if($data['categoryId'] != 1): ?>
	<a href="<?php echo $GLOBALS['web_root']; ?>?action=action_category_delete&category_id=<?php echo $data['categoryId'];?>" class="category-delete-btn">Delete Category</a>
	<?php endif; ?>

</li>