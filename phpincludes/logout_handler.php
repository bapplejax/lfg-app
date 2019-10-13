<?php
session_start();
$valid = false;
session_destroy();
header("Location: https://thawing-savannah-68398.herokuapp.com/");
exit;
?>

