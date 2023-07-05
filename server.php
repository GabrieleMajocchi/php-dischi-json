<?php 

$diskInfo = file_get_contents('./database/data.json');

echo $diskInfo;

header('Content-Type: application/json');


?>