<?php

// include library
include('../../src/Artdarek/RealIP.php');

// run
$ip = new Artdarek\RealIP()
	->setDefault('Not found')
	->setMethod('server')
	->detect()
	->get();
	
// display result
echo($ip);