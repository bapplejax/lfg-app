<?php
session_start();
$_SESSION['logged_in'] = false;
session_destroy();
header("Location: https://thawing-savannah-68398.herokuapp.com/");
exit;
?>

