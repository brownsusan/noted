<?php

$viewModel = new viewModel();

$user = array('name' => 'susie');
$viewModel -> getView('views/template/header.php', $user);

// this will eventually come from a database
$note_model = new noteModel();
$notes = $note_model -> getNotes();

$viewModel -> getView('views/app/body.php', $notes);
$viewModel -> getView('views/app/nav.php');
$viewModel -> getView('views/template/footer.php');
