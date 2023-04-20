<?php
$headers = array(
    "Content-Type: application/json",
    "Authorization: Bearer ".$config["open_ai_key"]
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $config["open_ai_url"]);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);



$output = curl_exec($ch);
