<?php
session_start();

require_once '../vendor/autoload.php';

$username = $_POST['username'];
$password = $_POST['password'];
// $valid = $dao->isValidUser($username, $password);
$valid = false;
if ($username == "jbapple" && $password == "password") {
  $valid = true;
}
$_SESSION = array();
if ($valid) {
  $_SESSION['logged_in'] = true;
  header("Location: https://thawing-savannah-68398.herokuapp.com/premium.php");
  exit;
} else {
  $_SESSION['message'] = "Invalid username or password";
  header("Location: https://thawing-savannah-68398.herokuapp.com/");
  exit;
}

$logger = new Katzgrau\KLogger\Logger(__DIR__.'/logs');
$logger->info('Returned a million search results');
$logger->error('Oh dear.');
$logger->debug('Got these users from the Database.', $username . ' ' . $password);
?>
