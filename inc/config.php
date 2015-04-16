<?php 

define( 'SCRIPT_ROOT', 'http://localhost/halo-real/' );

$haloUrl = SCRIPT_ROOT . '/assets/halocations.xml';
$haloXml = simplexml_load_file($haloUrl);


?>