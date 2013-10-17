<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://localhost:8888/php/?action=api_notes_json');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($curl);
curl_close($curl);

var_dump($data);
