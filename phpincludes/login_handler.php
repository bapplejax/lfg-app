<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$valid = false;

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

echo 'user ' . $user . ' password for user ' . $user['password'];

//If $row is FALSE.
if($user === false){
  //Could not find a user with that username!
  $_SESSION['message'] = "No such username found.";
  header("Location: https://thawing-savannah-68398.herokuapp.com/");
  exit;
} else{
  //User account found. Check to see if the given password matches

  //If $validPassword is TRUE, the login has been successful.
  if($password == $user['password']){

    $_SESSION['logged_in'] = true;
    header("Location: https://thawing-savannah-68398.herokuapp.com/premium.php");
    exit;

  } else{
    $_SESSION['message'] = "Invalid password";
    header("Location: https://thawing-savannah-68398.herokuapp.com/");
    exit;
  }
}

$logger = new Katzgrau\KLogger\Logger(__DIR__.'/logs');
$logger->info('Returned a million search results');
?>
