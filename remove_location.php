<?php
$id = filter_var(trim($_POST['id']),
FILTER_SANITIZE_STRING);

require('db.php');
$mysql -> query("DELETE FROM `location` WHERE `id` = '$id'");
$mysql -> close();
header('Location: slide_view.php');
?>