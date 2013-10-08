<?php

$viewModel = new viewModel();

$data = array('name' => 'susie');
$viewModel -> getView('views/template/header.php', $data);

// this will eventually come from a database
$data = array(
	array('title' => 'Something', 'body' => 'Some shit'),
	array('title' => 'Something2', 'body' => 'Some shit'),
	array('title' => 'Something3', 'body' => 'Some shit'),
	array('title' => 'Something4', 'body' => 'Some shit'),
	array('title' => 'Something4', 'body' => 'Some shit'),
	array('title' => 'Something5', 'body' => 'Some shit'),
);

$viewModel -> getView('views/app/body.php', $data);
$viewModel -> getView('views/app/nav.php', $data);
