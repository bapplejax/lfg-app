<?php
session_start();
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
?>
