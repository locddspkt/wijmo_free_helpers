<?php

//setup environment
$mapping = array(
    /*-- database --*/
    'FreeWijmo\WijmoHelpers' => __DIR__ . '/WijmoHelpers.php',
);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require_once $mapping[$class];
    }
}, true);