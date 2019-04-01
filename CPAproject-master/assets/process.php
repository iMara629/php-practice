<?php
$d = file_get_contents('user.json');
$d = json_decode($d, true);

array_unshift($d, $_GET);
$d = json_encode($d);

file_put_contents('user.json', $d);
header('location:/profiles.php');
?>