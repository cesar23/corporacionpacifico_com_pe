<?php
class NoDBClass
{
//	protected $ruta_archivo_suscripciones= __DIR__."/../DB/suscripciones.php";
//	protected $ruta_archivo_contacto= __DIR__."/../DB/contacto.php";
    protected $ruta_archivo_suscripciones= PATH_APP."DB/suscripciones.php";
    protected $ruta_archivo_contacto= PATH_APP."DB/contacto.php";

	function listarTodos(){
		//global $ruta_archivo_suscripciones;
		$array_result=array();
		$fp = fopen($this->ruta_archivo,'r');
		if (!$fp) {echo 'ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.'; exit;}

$loop = 0; // contador de líneas
while (!feof($fp)) { // loop hasta que se llegue al final del archivo
	$loop++;

$line = fgets($fp); // guardamos toda la línea en $line como un string

//--------si esta en la primera linea la saltamos ya que tiene el codigo php
if ($loop==1 || $line=="") {
	continue;
}
//--------------------


//---si la niea no esta vacia
if(!empty($line)){
		// dividimos $line en sus celdas, separadas por el caracter |
		// e incorporamos la línea a la matriz $field
	$field[$loop] = explode ('|', $line);

	$row=array(
		"time"=>$field[$loop][0],
		"nombre"=>$field[$loop][1],
		"apellido"=>$field[$loop][2],
		"otras"=>$field[$loop][3],
		"materias"=>$field[$loop][4]
		);
		// generamos la salida HTML
	// echo '
	// <div>
	// 	<div>Nombre: '.$field[$loop][0].'</div>
	// 	<div>apellido: '.$field[$loop][1].'</div>
	// 	<div>otras: '.$field[$loop][2].'</div>
	// 	<div>materias: '.$field[$loop][3].'</div>
	// </div>
	// ';
	$array_result[]=$row;
}
$fp++; // necesitamos llevar el puntero del archivo a la siguiente línea
}

fclose($fp);
return $array_result;



//------USO---------

// foreach ($lista_array as  $array) {

// 	for($i = 0; $i < count($array); $i++) {
// 		echo $array[$i]."<br>";
// 	}
// 	$recorrid++;

// }


}

///----para listar archivos grandes
function listarTodos2(){
	//global $ruta_archivo_suscripciones;
	$array_result=array();
	$contenido_verificacion = file_get_contents($this->ruta_archivo);
	$lineas = explode("\n", $contenido_verificacion);
	return $lineas;


//------USO---------
    /*
	$lineas_count = count($lineas);

//---recorremos desde la segunda linea
	for($i = 1; $i < $lineas_count; $i++) {

		if(empty($lineas[$i]) || $lineas[$i]==""){
			continue;
		//echo $i."-".$lineas[$i]."-";
		}

		$array_fila = explode('|', $lineas[$i]);

		echo $array_fila[1]."<br>";

	}

*/
}


function guardar(array $data){
	//global $ruta_archivo_suscripciones;

	$file=fopen($this->ruta_archivo_suscripciones,"a");
	$string_datos = implode("|", $data);

	fwrite($file,$string_datos.PHP_EOL);
    //fwrite($file, filemtime($ruta_archivo_suscripciones)."|$nombre|$apellido|$carrera|$materia".PHP_EOL);


     //fwrite($file, filemtime($archivo)."|$nombre|$apellido|$carrera|$materia\n");
     //fwrite($abro, filemtime($bd_usuarios)."|$cuento_usuarios|$nombre|".md5($password)."|$email||");
     //fwrite($file,$nombre.$apellido.$carrera.$materia);
	fclose($file);
}

function guardarContacto(array $data){
	$file=fopen($this->ruta_archivo_contacto,"a");
	$string_datos = implode("|", $data);

	fwrite($file,$string_datos.PHP_EOL);

	fclose($file);
	echo PATH_APP;

}

}
