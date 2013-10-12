<?php
protector::protect();

$viewModel = new viewModel();

$user = array('name' => 'susie');


$note_model = new noteModel();
// this function gets all the notes from a database
$notes = $note_model -> getNotes();

$category_model = new categoryModel();
$categories = $category_model -> getCategories();

$viewModel -> getView('views/template/app-header.php', $user);
$viewModel -> getView('views/notes/body.php', $notes);
$viewModel -> getView('views/notes/nav.php', $categories);
$viewModel -> getView('views/template/foot.php');
