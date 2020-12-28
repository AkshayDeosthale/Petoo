<?php
 
$url = 'https://jsonblob.com/e4460d6a-3eb9-11eb-ac6b-f1a554aa69fc';
//read json file from url in php
$readJSONFile = file_get_contents($url);
print_r($readJSONFile); // display contents
 
?>