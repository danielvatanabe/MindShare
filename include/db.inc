<?php

error_reporting(E_ALL);

# DEFINE CONSTANTS
define ("DATABASE","mindsharedev");
define ("USERNAME","mindsharedev");
define ("PASSWORD","DBMshare12#");
define ("SERVER","mindsharedev.db.8718060.hostedresource.com");

# START DATABASE
$db = new PDO("mysql:host=".SERVER.";dbname=".DATABASE, USERNAME, PASSWORD) or die ("Error! Could not connect to database.");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->query("SET NAMES utf8;");

?>
