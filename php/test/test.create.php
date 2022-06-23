<?php
$api 	= '2fe0e2cf6e158467dffac00e9c7d2704';
$baseId = 'R3lwYk1NV0JsaTNaa2J4dy9aaG9CWGNJeFRNR1lZWjkyMS9lMkxSRUt1Y3ZjT2RLT2hYMnpaVlZic2R2TUZKVjlOYlFESkdHRWJvPQ';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://api.fruitask.com/?key=$api&base_id=$baseId&method=create:row");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = json_decode(curl_exec($ch), true);
curl_close ($ch);

if($response['status'] == 1){
	echo ucwords(strtolower($response['msg']));
}

?>