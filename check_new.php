<?php
/*** MAKE URL WITH TODAY'S YEAR ****/

$last_shooting = file_get_contents($config["last_shooting_file_location"]);

$gun_db = file_get_contents($config["gun_db_url"]); 
//Couldn't get gun db
if(!$gun_db) {
  die();
}
$gun_db = json_decode($gun_db); 
$new_shooting = $gun_db[0];
$rand = false;
if($gun_db[0]->date == $last_shooting) {
  // KILL IF IT'S OLD
  
  //removeIf(development)
  die();
  //endRemoveIf(development)
  $rand = true;
  $new_shooting = $gun_db[rand(0, count($gun_db) - 1)]; 
  
}
if(!$rand) {
  file_put_contents($config["last_shooting_file_location"],$new_shooting->date);
}


