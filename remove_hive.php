<?php
$id = filter_var(trim($_POST['id']),
FILTER_SANITIZE_STRING);

require('db.php');
$mysql -> query("DELETE FROM `hive` WHERE `id` = '$id'");
$mysql -> close();
header('Location: view.php');
?>
<!-- 
	echo "DELETE FROM `hive` WHERE `id` = '$id'";