<?php
protector::protect();

$viewModel = new viewModel();

$user = $_SESSION['user'];
$userId = $_SESSION['user']['userId'];

$category_model = new categoryModel();
$categories = $category_model -> getCategories($userId);

//-> is similar to dot syntax - passing the note that was returned
$viewModel -> getView('views/template/app-header.php', $user);
$viewModel -> getView('views/note_create/body.php', $categories);
$viewModel -> getView('views/notes/nav.php', $categories);
$viewModel -> getView('views/template/foot.php');
