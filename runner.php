<?php
chdir(dirname(__FILE__));
//removeIf(development)
if( php_sapi_name() !== 'cli' ){die();}
//endRemoveIf(development)

require_once('config.php');

$last_tweet = file_get_contents($config["last_tweet_file_location"]);

$gun_db = file_get_contents($config["gun_db_url"]); 
//Couldn't get gun db
if(!$gun_db) {
  die();
}
$gun_db = json_decode($gun_db); 
