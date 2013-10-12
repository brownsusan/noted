<?php

$viewModel = new viewModel();

//Temp user data
$user = array('name' => 'susie');

$category_model = new categoryModel();
$categories = $category_model -> getCategories();


//-> is similar to dot syntax - passing the note that was returned
$viewModel -> getView('views/template/header.php', $user);
$viewModel -> getView('views/note_create/body.php', $categories);
$viewModel -> getView('views/notes/nav.php');
$viewModel -> getView('views/template/foot.php');
