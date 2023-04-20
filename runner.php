<?php
chdir(dirname(__FILE__));
//removeIf(development)
if( php_sapi_name() !== 'cli' ){die();}
//endRemoveIf(development)

require_once('config.php');
require_once('TwitterAPIExchange.php');

/*** MAKE URL WITH TODAY'S YEAR ****/

$last_shooting = file_get_contents($config["last_shooting_file_location"]);

require_once("check_new.php");



die();



?>
