<?php

$viewModel = new viewModel();
//Temp user data
$user = array('name' => 'susie');
$viewModel -> getView('views/template/header.php', $user);

$note_id = $_GET['note_id'];
// this will eventually come from a database
$note_model = new noteModel();
//This variable stores what is returned from the getNote function ($obj)
$note = $note_model -> getNote($note_id);
//-> is similar to dot syntax - passing the note that was returned
$viewModel -> getView('views/app/note_edit.php', $note);
$viewModel -> getView('views/app/nav.php');
$viewModel -> getView('views/template/foot.php');
