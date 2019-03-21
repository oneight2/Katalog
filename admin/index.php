<?php 
	include_once("function/helper.php");
	session_start();

	if(isset($_SESSION["login"])){
		header("Location: ".BASE_URL."myprofile.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
<div class="kiri">
	<h1> Selamat datang </h1>
	<h2>di halaman Admin A Three</h2>
</div>
<div class="kanan">
<h1>Login</h1>

<?php $notif = isset($_GET["notif"]) ? $_GET["notif"] : false?>
	<?php if( $notif == true) : ?>
		<p id="pesan">Username dan Password salah<p>
	<?php endif; ?>

<form action="proseslogin.php" method="post">
	<span>
		<input type="text" name="username" placeholder="Username"><br>
	</span>

	<span>
		
		<input type="password" name="password" placeholder="Password"><br>
	</span><br>

	<span>
		<button type="submit" name="login">Login</button>
	</span>
	
</form>
</div>
</div>

</body>
</html>