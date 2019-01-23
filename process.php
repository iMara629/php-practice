<?php
$d = file_get_contents('data.json');
$d = json_decode($d, true);

array_unshift($d, $_GET);



$d = json_encode($d);
//print_r($d);
//first parameter is what file we're putting data into, the second is what data are we putting into that file
file_put_contents('data.json', $d);
header('location:index.php');


?>