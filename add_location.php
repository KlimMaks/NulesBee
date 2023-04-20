<?php
$id = filter_var(trim($_POST['id']),
FILTER_SANITIZE_STRING);
$locName = filter_var(trim($_POST['locName']),
FILTER_SANITIZE_STRING);
$pict = filter_var(trim($_POST['pict']),
FILTER_SANITIZE_STRING);

require('db.php');
$mysql -> query("INSERT INTO `location` (`id`, `locName`, `pict`) 
	VALUES('$id', '$locName', '$pict')");
$mysql -> close();
header('Location: slide_view.php');
?>