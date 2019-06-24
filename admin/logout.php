<?php 
include_once("function/helper.php");
session_start();

unset($_SESSION["login"]);

header("Location: ".BASE_URL."index.php");

?>