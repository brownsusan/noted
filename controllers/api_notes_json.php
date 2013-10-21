<?php

$userId = $_GET['user_id'];


$note_model = new noteModel();
// this function gets all the notes from a database
$notes = $note_model -> getNotes($userId);

exit(json_encode($notes));

