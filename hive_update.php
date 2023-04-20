<?php
$id = filter_var(trim($_POST['id']),
FILTER_SANITIZE_STRING);
$date_of_start = filter_var(trim($_POST['date_of_start']),
FILTER_SANITIZE_STRING);
$birth = filter_var(trim($_POST['birth']),
FILTER_SANITIZE_STRING);
$birthYear = filter_var(trim($_POST['birthYear']),
FILTER_SANITIZE_STRING);
$power = filter_var(trim($_POST['power']),
FILTER_SANITIZE_STRING);
$honey = filter_var(trim($_POST['honey']),
FILTER_SANITIZE_STRING);
$wax = filter_var(trim($_POST['wax']),
FILTER_SANITIZE_STRING);
$comb = filter_var(trim($_POST['comb']),
FILTER_SANITIZE_STRING);
$vosh = filter_var(trim($_POST['vosh']),
FILTER_SANITIZE_STRING);
$frame = filter_var(trim($_POST['frame']),
FILTER_SANITIZE_STRING);
$thermal = filter_var(trim($_POST['thermal']),
FILTER_SANITIZE_STRING);
$pict = filter_var(trim($_POST['pict']),
FILTER_SANITIZE_STRING);
$description = filter_var(trim($_POST['description']),
FILTER_SANITIZE_STRING);
$locName = filter_var(trim($_POST['locName']),
FILTER_SANITIZE_STRING);

$date = date('Y-m-d H:i:s');
$added = "Редаговано";
require('db.php');

$mysql -> query("UPDATE `hive` SET `date_of_start` = '$date_of_start', `birth` = '$birth', `birthYear` = '$birthYear', `power` = '$power', `honey` = '$honey', 
	`wax` = '$wax', `comb` = '$comb', `vosh` = '$vosh', `frame` = '$frame', `thermal` = '$thermal', `pict` = '$pict', `description` = '$description', 
	`locName` = '$locName' WHERE `id` = '$id'");
$mysql -> query("INSERT INTO `history` (`date_time`, `date_of_start`, `birth`, `birthYear`, `power`, `honey`, `wax`, `comb`, `vosh`, `frame`, `thermal`, 
	`description`, `locName`, `status`, `hive_id`) 
	VALUES('$date', '$date_of_start', '$birth', '$birthYear', '$power', '$honey', '$wax', '$comb', '$vosh', '$frame', '$thermal', '$description', 
	'$locName', '$added', '$id')");
$mysql -> close();
header('Location: view.php');
?>

<!-- header('Location: view.php');