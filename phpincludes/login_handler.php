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

//If $row is FALSE.
if($user === false){
  //Could not find a user with that username!
  //PS: You might want to handle this error in a more user-friendly manner!
  die('Incorrect username / password combination!');
} else{
  //User account found. Check to see if the given password matches the
  //password hash that we stored in our users table.

  //Compare the passwords.
  $validPassword = password_verify($password, $user['password']);

  //If $validPassword is TRUE, the login has been successful.
  if($validPassword){

    $_SESSION['logged_in'] = true;
    header("Location: https://thawing-savannah-68398.herokuapp.com/premium.php");
    exit;

  } else{
    $_SESSION['message'] = "Invalid username or password";
    header("Location: https://thawing-savannah-68398.herokuapp.com/");
    exit;
  }
}

$logger = new Katzgrau\KLogger\Logger(__DIR__.'/logs');
$logger->info('Returned a million search results');
?>
