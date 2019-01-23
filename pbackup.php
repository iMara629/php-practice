<?php
$fd = json_encode($_GET);
echo "<br><br>";
print_r($fd);
//first parameter is what file we're putting data into, the second is what data are we putting into that file
file_put_contents('data.json', $fd);


?>