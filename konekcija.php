<?php

error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "greskeFajl.log");

require('dbbroker.php');
$db = new DBBroker('localhost','root','1234','bohobaza');
?>
