<?php
session_start();

$messages = '';
$errors = array();

$username = $_POST['username'];
$password = $_POST['password'];
$region = $_POST['region'];

if (is_numeric($username)) {
  $errors[] = "Must be alphanumeric.";
}

// Checking to see if empty
if (empty($_POST['username'])) {
  $errors[] = "Please enter a username";
}
if (empty($_POST['password'])) {
  $errors[] = "Please enter a password";
}

if (count($errors) > 0) {
  $_SESSION['errors'] = $errors;
  header("Location: https://thawing-savannah-68398.herokuapp.com/create-user.php");
  exit;
}

unset($_SESSION['errors']);

require_once '../phpclasses/Dao.php';
$dao = new Dao();
$dao->createUser($_POST['username'], $_POST['password'], $_POST['region']);
header("Location: https://thawing-savannah-68398.herokuapp.com/");
?>