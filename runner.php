<?php
chdir(dirname(__FILE__));
//removeIf(development)
if( php_sapi_name() !== 'cli' ){die();}
//endRemoveIf(development)

require_once "config.php";
