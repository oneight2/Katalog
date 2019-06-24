<?php  

include_once("function/helper.php");
include_once("function/koneksi.php");

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "admin" && $password == "123"){
	session_start();
	$_SESSION["login"] = true;

	header("location: ".BASE_URL."myprofile.php?module=barang&page=list");
}else{
	header("Location: ".BASE_URL."index.php?notif=true");
}

?>