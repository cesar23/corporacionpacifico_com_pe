<?php
//error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Lima');

//---------------------SEGURIDAD------------
define('ENVIRONMENT','development'); //production O development
//---------------------FIN SEGURIDAD------------
define("APP_DIR", $_SERVER['DOCUMENT_ROOT'].'/'); //C:/xampp/htdocs/zf/public/

define("APP_SESSION_DB", true); //para almacenar la session en la DB
define("APP_SYSTEM_VERSION", '2.0.2');
define("APP_SYSTEM_NAME", 'SOLUCIONESSYSTEM.COM');
define("APP_FDR", "");
define("URL_DOMAIN", "http://" . $_SERVER['SERVER_NAME']);
define("BASE_URL", "http://" . $_SERVER['SERVER_NAME'] ."/". APP_FDR);


define("APP_CHARSET", "UTF-8");
define("APP_DATE_FORMAT", "Y-m-d H:i:s");
define("APP_ADMIN_LOGIN_URL", BASE_URL."admin/login");
//define("APP_ADMIN_URL", BASE_URL."admin/login/success");
define("APP_ADMIN_URL", BASE_URL."tienda/index");
define("APP_WEBMAIL_URL","http://webmail.hostinger.es");
define("APP_REFRES",'x'.ceil(time()/10));
ini_set('display_errors', 1);

//$dir_lib= __DIR__."/../no-sirve/libreriaPeru.class.php";

//retrocedemos un directorio para  ir  a nuestra  raiz  del proyecto
$system_folder= realpath(dirname(__FILE__)."/../");
$system_folder = str_replace("\\", "/", $system_folder);
$system_folder =$system_folder."/";





define("PATH_APP", $system_folder);