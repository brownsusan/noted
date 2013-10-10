<?php

$viewModel = new viewModel();

$user = array('name' => 'susie');

$note_model = new noteModel();
// this function gets all the notes from a database
$notes = $note_model -> getNotes();

$viewModel -> getView('views/template/header.php', $user);
$viewModel -> getView('views/notes/body.php', $notes);
$viewModel -> getView('views/notes/nav.php');
$viewModel -> getView('views/template/foot.php');
