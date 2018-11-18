<?php
/*
 * author:DMF
 */
header("Content-type: text/html; charset=utf-8");
define('ROOT_PATH',__DIR__);
define('CORE_PATH',ROOT_PATH.'/Core/');
define('CACHES_PATH',ROOT_PATH.'/Caches/');
define('CONF_PATH',ROOT_PATH.'/Conf/');
define('DEBUG',true);
session_start();

require_once(__DIR__.'/vendor/autoload.php');
\Rice\Core\Core::run();
