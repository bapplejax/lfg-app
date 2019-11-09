<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once '../vendor/autoload.php';

// Get the Dao class
require_once '../phpclasses/Dao.php';
$dao = new Dao();

// Get connection
$conn = $dao->getConnection();

// Set query
$loginQuery = "SELECT id, username, password FROM user WHERE username = :username";

// Prepare the query for the DB
$q = $conn->prepare($loginQuery);
// Bind the username variable
$q->bindParam(":username", $username);
// Execute query
$q->execute();

//Fetch row.
$user = $q->fetch(PDO::FETCH_ASSOC);

//If $row is FALSE.
if($user === false){
  //Could not find a user with that username!
  $_SESSION['messages'] = array("No such username found.");
  $_SESSION['status'] = 'fail';
  header("Location: https://thawing-savannah-68398.herokuapp.com/");
  exit;
} else{
  //User account found. Check to see if the given password matches

  //If $validPassword is TRUE, the login has been successful.
  if($password == $user['password']){
    $_SESSION['logged_in'] = true;
    $_SESSION['status'] = 'success';
    $_SESSION['messages'] = array("Login successful!");
    $_SESSION['username'] = $username;

    header("Location: https://thawing-savannah-68398.herokuapp.com/profile.php");
    exit;

  } else{
    $_SESSION['messages'] = array("Invalid password");
    $_SESSION['status'] = 'fail';

    header("Location: https://thawing-savannah-68398.herokuapp.com/");
    exit;
  }
}

$logger = new Katzgrau\KLogger\Logger(__DIR__.'/logs');
$logger->info('Returned a million search results');
?>
