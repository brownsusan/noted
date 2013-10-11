<?php

$viewModel = new viewModel();

$user = array('name' => 'susie');

$category_model = new categoryModel();
// this function gets all the notes from a database
$categories = $category_model -> getCategories();

$viewModel -> getView('views/template/header.php', $user);
$viewModel -> getView('views/notes/body.php', $notes);
$viewModel -> getView('views/notes/nav.php');
$viewModel -> getView('views/template/foot.php');
