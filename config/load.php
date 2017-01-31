<?php

//OBTENER NOMBRE DE ARCHIVO QUE SE ESTA  EJECUTANDO
$nombre_archivo = (isset($_SERVER['SCRIPT_NAME']));
//verificamos si en la ruta nos han indicado el directorio en el que se encuentra
if (!empty($nombre_archivo)) {
    if (strpos($nombre_archivo, '/') !== FALSE) {
        //--- OPCION 1 (CON EXTENSION)
        //de ser asi, lo eliminamos, y solamente nos quedamos con el nombre y su extension
        $nombre_archivo = array_pop(explode('/', $nombre_archivo));
        //--- OPCION 2 (SIN EXTENSION)
        //de ser asi, lo eliminamos, y solamente nos quedamos con el nombre sin su extension
        //$nombre_archivo = preg_replace('/\.php$/', '' ,array_pop(explode('/', $nombre_archivo)));
    }

}else{
    $nombre_archivo="";
}

//define el tipo de id para el body
$_tipo_body = "";
//los actives son para  poner active el menu
$_activeHome = "";
$_activeGrupo = "";
$_activeSolucion = "";
$_activeServicios = "";
$_activeProyectos = "";
$_activeBoletinNormas="";
$_activeContacto = "";
$_activeNosotros="";
//-----
$_Title="Soporte y Capacitación Profesional";
switch ($nombre_archivo) {
    case "index.php":
        $_tipo_body = "";
        $_activeHome = "active";
        $_Title="Soporte y Capacitación Profesional";
        break;


    case "nosotros.php":
        $_tipo_body = "id=\"about-us\"";
        $_activeNosotros = "active";
        $_Title="Nosotros";
        break;
    case "servicios.php":
        $_tipo_body = "id=\"services\"";
        $_activeServicios = "active";
        $_Title="Servicios";
        break;

    case "soluciones.php":
        $_tipo_body = "id=\"services\"";
        $_activeSolucion = "active";
        break;
    case "proyectos.php":
        $_tipo_body = "id=\"projects\"";
        $_activeProyectos = "active";
        $_Title="Proyectos";
        break;
        case "boletin_normas.php":
        $_tipo_body = "id=\"projects\"";
        $_activeBoletinNormas = "active";
        $_Title="Boletin de Normas Legales";
        break;
    case "contactenos.php":
        $_tipo_body = "id=\"contact-us\"";
        $_activeContacto = "active";
        $_Title="Contactenos";
        break;
    case "login.php":
        $_tipo_body = "error-body no-top";

        break;
    default:
        $_tipo_body = "";

}
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
@session_start();
ob_start();
require_once("Librerias/TokenFunctions.php");