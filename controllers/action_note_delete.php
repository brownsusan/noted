<?php
protector::protect();
//Needs valdation
$note_id = $_GET['note_id'];

// this will eventually come from a database
$note_model = new noteModel();
//This variable stores what is returned from the getNote function ($obj)
$note = $note_model -> deleteNote($note_id);
//header does a redirect - changing the view back to notes
header('Location: '.$GLOBALS['web_root'].'?action=notes');