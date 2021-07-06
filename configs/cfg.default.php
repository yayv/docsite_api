<?php

$CONFIG['site'] = "http://webapi.life";
$CONFIG['sitebase'] = 'http://webapi.life/api/';
$CONFIG['sitename'] = 'webapi documents manager';

$CONFIG['database'] = array(
	'host' 		=> '127.0.0.1',
	'port' 		=> '3306',
	'username' 	=> 'root',
	'password' 	=> '1234',
	'database' 	=> 'webapi',
	);

// 以下 HTTP 头的输出，方便 web 端开发的调试
ini_set("error_log","/var/log/php_errors.log");
ini_set("log_errors","on");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: X-PINGOTHER, Content-Type');
header('Access-Control-Max-Age: 86400');

