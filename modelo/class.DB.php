<?php
/**
 *
 * [Eventos] :: Sistema Administracion y Gestion de Eventos
 *
 * PHP version 5
 *
 * Copyright (c) 2012 
 *
 * @author        Carlos Zegarra
 * @copyright     2012 © 
 * @package       class/data/
 * @name          Data_DB
 *
 */

class Data_DB {

    public static function conn($dbMotor='', $hostname='', $userBd='', $passwordBd='', $nameBd='')
	{
	  
	    $dbMotor 	= $_SESSION['pDB']['dbType'];
		$hostname 	= $_SESSION['pDB']['dbHost'];
		$userBd 	= $_SESSION['pDB']['dbUser'];
		$passwordBd = $_SESSION['pDB']['dbPass'];
		$nameBd 	= $_SESSION['pDB']['dbName'];
		
        $return_value = null;
        try{
            $host = ''; 
            if($dbMotor == 'MYSQL'):
                $host .= "mysql:host=".$hostname.";";
                $host .= "dbname=".$nameBd;
            endif;

            $db = new PDO($host, $userBd, $passwordBd, array( PDO::ATTR_PERSISTENT => TRUE));
			$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
		    //$db->setAttribute(PDO::ATTR_LIMIT_PREPARES, TRUE);
			//$db->setAttribute(PDO::MYSQL_ATTR_MAX_BUFFER_SIZE=>1024*1024*500);
			//$db->setAttribute(PDO::ATTR_PERSISTENT, TRUE);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $error) {
            return $error;
            exit();
        }
    }
	
	

	public static function closedb($cxn)
	{
        try {
            unset($cxn);
            //echo "\nConexión PDO cerrada.";
        } catch (PDOException $ex) {
            echo "Error al cerrar conexión." .$ex->getMessage();
        }
}
	
}

?>
