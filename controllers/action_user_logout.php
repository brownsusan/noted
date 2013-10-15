<?php
//Needs valdation
session_destroy();
/* echo("session destroyed"); */
header('Location: '.$GLOBALS['web_root']);

//header does a redirect - changing the view back to notes
