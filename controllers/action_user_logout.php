<?php
//Needs valdation
session_destroy();
header('Location: '.$GLOBALS['web_root']);

//header does a redirect - changing the view back to notes
