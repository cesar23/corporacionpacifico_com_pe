<?php
require("config/config.php");
require_once("Librerias/TokenFunctions.php");
require_once("Librerias/StringClass.php");
//require_once("Librerias/TokenFunctions.php");
require_once("Funciones.php");
$objFun= new Funciones();
$objStrin= new StringClass();


//$postdata = file_get_contents("php://input");
//$request = json_decode($postdata);
$request = (object) $_POST;

//---comprobacion token para seguridad---------
if(!isset($request->token) ) {
    die('no se envio el token.');
}

if($objFun->get_token()!=$request->token){
// if (!comprobar_token(@$request->token)) {
    // Si comprobar_token(..) devuelve false, morir.
    die('<br>El token no es valido, utilice nuestra web y no acceda indirectamente. tokensend='.$request->token.'-- token_ses='.$objFun->get_token());

}//-----------------------------------------

//--nombre del cliente
//@$cliente_nombre = $objString->Mayusculas(trim($request->suscrip_nombre));
@$cliente_nombre = $objStrin->Oracion(trim($request->nombre));
//--email del cliente
@$cliente_mail =trim($request->email);
//---
@$cliente_telefono = trim($request->telefono);
@$cliente_comentario = trim($request->comentario);


// @$pass = $request->pass;



/*
nombre: $scope.formData.nombre,
                    email: $scope.formData.email,
                    telefono: $scope.formData.telefono,
                    comentario: $scope.formData.comentario
*/
$email_envio="ventas@corporacionpacifico.com.pe";
$email_recepcion_envio="sistemas@corporacionpacifico.com.pe";





// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_from=$email_envio;
//$email_from="ventas@northcote.pe";
$email_to = $cliente_mail;
$email_subject = "Gracias por llenar nuestro  Formulario de Contacto en breve nos pondremos en contato con usted";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($cliente_nombre) ||	!isset($cliente_mail)) {

    echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
    echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
    die();
}



//para el envío en formato HTML
$headers_cli = "MIME-Version: 1.0\r\n";
$headers_cli .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
$headers_cli .= "From: Corporacion E Inversiones del Pacifico S.A.C <".$email_envio.">\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
$headers_cli .= "Reply-To: ".$email_envio."\r\n";

//ruta del mensaje desde origen a destino
//$headers_cli .= "Return-path: holahola@desarrolloweb.com\r\n";

//direcciones que recibián copia
//$headers_cli .= "Cc: maria@desarrolloweb.com\r\n";

//direcciones que recibirán copia oculta
//$headers_cli .= "Bcc: a.northcote@northcote.pe,c.northcote@northcote.pe,sistemas_aempresarial@hotmail.com\r\n";
$headers_cli .= 'X-Mailer: PHP/' . phpversion();
//-----------------------------------------------------------------
$headers_ofi = "MIME-Version: 1.0\r\n";
$headers_ofi .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers_ofi .= "From: Corporacion E Inversiones del Pacifico S.A.C - Formulario Contacto <".$email_envio.">\r\n";

//$headers_ofi .= "Bcc: perucaos4@gmail.com,sistemas_aempresarial@hotmail.com\r\n";
//$headers_ofi .= "Bcc: perucaos4@gmail.com,sistemas_aempresarial@hotmail.com\r\n";
$headers_ofi .= 'X-Mailer: PHP/' . phpversion();



try {

//---mail cliente
    // $email_message=$objFun->getCartaContacto($cliente_nombre,'http://corporacionpacifico.com.pe/');
    // @mail($email_to, $email_subject, $email_message, $headers_cli);
//---mail oficiona
    $email_subject = "Solicitud de Contacto";
    $data['id']=time();
    $data['fecha']=date("Y-m-d H:i:s");
    $data['nombre']=$cliente_nombre;
    $data['email']=$cliente_mail;
    $data['telefono']=$cliente_telefono;
    $data['comentario']=$cliente_comentario;
    $data['fecha']=$objFun->getFechaLarga();
    $data['url']='http://corporacionpacifico.com.pe/';
    $salida=$email_message=$objFun->getCarta($data);
    unset($data);
    //$email_message=$objFun->getCartaVenta($cliente_nombre,$cliente_mail,$telefono_mail,$comentario_comentario,$objFun->getFechaLarga(),'http://corporacionpacifico.com.pe/');

    @mail($email_recepcion_envio, $email_subject, $email_message, $headers_cli);

    //echo $salida;
 

    //echo $objFun->getCartaContacto($cliente_nombre,'http://corporacionpacifico.com.pe/');
    //echo "¡El formulario se ha enviado con éxito!";
    require_once("Librerias/NoDBClass.php");
    $objNOSQL= new NoDBClass();
    $data['id']=time();
    $data['fecha']=date("Y-m-d H:i:s");
    $data['nombre']=$cliente_nombre;
    $data['email']=$cliente_mail;
    $data['telefono']=$cliente_telefono;
    $data['comentario']=$cliente_comentario;
    echo $objNOSQL->guardarContacto($data);

} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}



