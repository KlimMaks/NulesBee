<?php
$id = filter_var(trim($_POST['id']),
FILTER_SANITIZE_STRING);
$honey = filter_var(trim($_POST['honey']),
FILTER_SANITIZE_STRING);
$power = filter_var(trim($_POST['power']),
FILTER_SANITIZE_STRING);
$description = filter_var(trim($_POST['description']),
FILTER_SANITIZE_STRING);
$thermal = filter_var(trim($_POST['thermal']),
FILTER_SANITIZE_STRING);

$date = date('Y-m-d H:i:s');
$added = "Редаговано";
require('db.php');
$mysql -> query("UPDATE `hive` SET `honey` = '$honey', `power` = '$power', `description` = '$description', `thermal` = '$thermal' WHERE `id` = '$id'");
$mysql -> query("INSERT INTO `history` (`date_time`, `honey`, `power`, `description`, `thermal`, `status`, `hive_id`) 
	VALUES('$date', '$honey', '$power', '$description', '$thermal', '$added', '$id')");
$mysql -> close();
header('Location: view.php');
?>

<!-- echo "UPDATE `hive` SET `honey` = '$honey', `wax` = '$wax', `hiveQuantity` = '$hiveQuantity' WHERE `id`='$id'";
	header('Location: view.php');