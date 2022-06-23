<?php
$jsonFile = '../../accounts.json';

$jsonString = json_decode(file_get_contents($jsonFile), true);

array_push($jsonString['data'], array('Name' => 'New Name', 'Email' => 'newname@gmail.com', 'Short Bio' => 'New Short Bio',));

if(file_put_contents($jsonFile, json_encode($jsonString))){
	echo 'OK';
}
?>