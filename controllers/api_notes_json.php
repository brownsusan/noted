<?php

protector::protect();

$userId = $_SESSION['user']['userId'];


$note_model = new noteModel();
// this function gets all the notes from a database
$notes = $note_model -> getNotes($userId);

exit(json_encode($notes));

