<?php

$prompt = $config["prompt"];

$prompt = str_replace("%location%",$location, $prompt);  

$data = $config["data_package"];
$data["prompt"] = $prompt;

$headers = array(
    "Content-Type: application/json",
    "Authorization: Bearer ".$config["open_ai_key"]
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $config["open_ai_url"]);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$output = curl_exec($ch);
if ($output === FALSE) {
 echo "cURL Error: " . curl_error($ch);
 die();
}
$response = json_decode($output, true);
$tweet_body = $response["choices"][0]["text"];
if($tweet_body) {
    die();
}
