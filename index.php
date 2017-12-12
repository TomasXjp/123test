<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('PRC'); 
define('APP_DEBUG',1);
define('Project_Dir',dirname(__FILE__));
define('APP_NAME', 'LightpenCms');
define('CONF_PATH','./LightpenData/conf/');
define('RUNTIME_PATH','./LightpenData/logs/');
define('TMPL_PATH','./Tpl/');
define('HTML_PATH','./LightpenData/html/');
define('APP_PATH','./LightpenCms/');
define('CORE','./LightpenCms/_Core');
require(CORE.'/LightpenCms.php');
echo '1';
?>
