<?php
chdir(dirname(__FILE__));
//removeIf(development)
if( php_sapi_name() !== 'cli' ){die();}
//endRemoveIf(development)

require_once('config.php');
require_once('TwitterAPIExchange.php');



require_once("check_new.php");
require_once("create_tweet.php");



die();



?>
