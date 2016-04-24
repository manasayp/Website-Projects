<?php session_start(); // Starting Session 

session_unset();
session_destroy();

header("Location:index.php");

?>

