<?php
define('BASE_ROOT_PATH',str_replace('\\','/',dirname(__FILE__)));
define('CONFIG_PATH',BASE_ROOT_PATH.'/config');
if (!@include(CONFIG_PATH.'/config.php')) exit('config.php isn\'t exists!');
global $config;
$conn = mysql_connect($config['db']['dbhost'], $config['db']['dbuser'], $config['db']['dbpwd']);
$conn or die('connect failed');
mysql_select_db('ry_poster');