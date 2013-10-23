<?php

session_start();


$GLOBALS['web_root'] = '/php/';

require ('libs/CaptchaSecurityImages.php');
require ('libs/protector.php');
require ('libs/Validate.php');
require ('libs/viewModel.php');

require ('models/categoryModel.php');
require ('models/noteModel.php');
require ('models/userModel.php');

// if no action is given we obviously are at the root of the site
// thus we should load the landing page
if (empty($_GET['action'])) {

	// load the landing view
	// $viewModel -> getView('views/landing/body.php', $data);
	require 'controllers/landing.php';

}

else {
	//If the file does not exist with the action that was passed in from the url
	if(!file_exists('controllers/'.$_GET['action'].'.php')){
		//Load the error controller
		require 'controllers/error_404.php';
		//Then stop the file from proceeding
		exit;
	}
	//Otherwise load the controller for the action that was passed in through the url.
	//This action variable comes from the hrefs & form action attributes that are hard coded into the html
	require 'controllers/'.$_GET['action'].'.php';
}