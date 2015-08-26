<?php

// include library
include('../../src/Artdarek/RealIP.php');

// run
$ip = new Artdarek\RealIP()
	->setDefault('Not found')
	->setMethod('getenv')
	->detect()
	->get();
	
// display result
echo($ip);