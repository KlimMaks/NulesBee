<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$username = filter_var(trim($_POST['username']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['pass2']),
FILTER_SANITIZE_STRING);

if($pass != $pass2)
{
	echo "Паролi не спiвпадають";
	echo "<p><a href = 'regist.php'>Повернутися</a></p>";
	exit();
}

require('db.php');
$mysql -> query("INSERT INTO `users` (`login`, `username`, `password`) VALUES('$login', '$username', '$pass')");
$mysql -> close();
header('Location: regist.php');
?>