<?php
setcookie('user', $user['username'], time() - 21600, "/");
session_destroy();
header('Location: login.php');
?>