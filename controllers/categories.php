<?php
protector::protect();

$viewModel = new viewModel();

$user = $_SESSION['user'];
$userId = $_SESSION['user']['userId'];

$category_model = new categoryModel();
// this function gets all the notes from a database
$categories = $category_model -> getCategories($userId);

$viewModel -> getView('views/template/app-header.php', $user);
$viewModel -> getView('views/notes/body.php', $notes);
$viewModel -> getView('views/notes/nav.php');
$viewModel -> getView('views/template/foot.php');
