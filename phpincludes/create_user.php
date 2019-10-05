<?php
require_once '../phpclasses/Dao.php';
$dao = new Dao();
$dao->createUser($_POST['username'], $_POST['password']);
header("Location: https://thawing-savannah-68398.herokuapp.com/");
?>