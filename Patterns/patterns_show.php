<?php

echo "Load Patterns\n";

/**
 * 1. Singleton Pattern
 *
 */
echo "1. Singleton pattern\n";

require_once "/Singleton/singleton.class.php";
require_once "/Singleton/app.class.php";

$obj = Singleton\Singleton::getInstance();
var_dump( $obj === Singleton\Singleton::getInstance() ); //true
var_dump( $obj === Singleton\App::getInstance() ); //true

$objAnother = Singleton\App::getInstance();
var_dump( $objAnother === Singleton\Singleton::getInstance() ); //false
var_dump( $objAnother === Singleton\App::getInstance() ); //true