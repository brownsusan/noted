<?php


// this will eventually come from a database
$note_model = new noteModel();
//This variable stores what is returned from the getNote function ($obj)
$note = $note_model -> updateNote($note_id, $title, $body, $category);

