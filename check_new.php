<?php
$gun_db = file_get_contents($config["gun_db_url"]); 
//Couldn't get gun db
if(!$gun_db) {
  die();
}
$gun_db = json_decode($gun_db); 
$new_shooting = $gun_db[0];
if($gun_db[0]->date == $last_shooting) {
  // KILL IF IT'S OLD
  
  //removeIf(!development)
  die();
  //endRemoveIf(!development)
  $new_shooting = $gun_db[rand(0, count($gun_db) - 1)];
}
