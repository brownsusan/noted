<?php

$db_connection = new PDO('mysql:hostname=localhost;dbname=ssl_note', 'root', 'root');

$query = $db_connection -> prepare('CREATE TABLE IF NOT EXISTS api_note (
  noteId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50),
  body TEXT,
  categoryId VARCHAR(50),
  noteUserId INT
)');
$query -> execute();

$query = $db_connection -> prepare('CREATE TABLE IF NOT EXISTS category (
  categoryId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  categoryTitle VARCHAR(50),
  updated DATETIME,
  created DATETIME,
  categoryUserId INT
)');
$query -> execute();

$query = $db_connection -> prepare('CREATE TABLE IF NOT EXISTS note (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50),
  body TEXT,
  categoryId VARCHAR(50),
  noteUserId INT
)');
$query -> execute();

$query = $db_connection -> prepare('CREATE TABLE IF NOT EXISTS user (
  userId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  email VARCHAR(50),
  password VARCHAR(32),
  firstname VARCHAR(50),
  lastname VARCHAR(50)
)');
$query -> execute();

echo 'Tables Created';
