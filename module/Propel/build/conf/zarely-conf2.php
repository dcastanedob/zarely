<?php
// This file generated by Propel 1.7.1 convert-conf target
// from XML runtime conf file /Applications/AMPPS/www/zarely/module/Propel/runtime-conf.xml
$conf = array (
  'datasources' =>
  array (
    'zarely' =>
    array (
      'adapter' => 'mysql',
      'connection' =>
      array (
        'dsn' => 'mysql:host=74.208.177.219;dbname=oneclick_zarely',
        'user' => 'oneclick_zarely',
        'password' => 'Q5DYve2mxZfmgbFt',
      ),
    ),
    'default' => 'zarely',
  ),
  'generator_version' => '1.7.1',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-zarely-conf.php');
return $conf;
