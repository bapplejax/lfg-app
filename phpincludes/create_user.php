<?php
session_start();

require_once '../phpclasses/Dao.php';
$dao = new Dao();

$messages = array();
$presets = $_POST;
$sentiment = '';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$region = $_POST['region'];

// Username validation
if (is_numeric($username)) {
  $messages[] = "Must be alphanumeric.";
  unset($presets['username']);
}

// Email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $messages[] = "Enter a  valid email";
}

// Checking to see if empty
if (empty($_POST['username'])) {
  $messages[] = "Please enter a username";
}

if (empty($_POST['password'])) {
  $messages[] = "Please enter a password";
}

if (empty($_POST['email'])) {
  $messages[] = "Please enter an email";
}

$dao->checkUsername($_POST['username']);

if (count($messages) > 0) {
  $_SESSION['messages'] = $messages;
  $_SESSION['form_data'] = $presets;
  $_SESSION['status'] = 'fail';
  header("Location: https://thawing-savannah-68398.herokuapp.com/create-user.php");
  exit;
}

unset($_SESSION['messages']);

$dao->createUser($_POST['username'], $_POST['password'], $_POST['region'], $_POST['email']);
$_SESSION['logged_in'] = true;
$_SESSION['messages'] = array("Your profile has been created!");
$_SESSION['status'] = 'good';
header("Location: https://thawing-savannah-68398.herokuapp.com/");
?>
