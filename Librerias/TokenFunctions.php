<?php
@session_start();
ob_start();


function generar_token(){	
	$token = md5(mt_rand(11,99999));
	$_SESSION['token']=$token;

	return $token; 
}
function comprobar_token($token){
	
	if(@$_SESSION['token']===$token){return true;}else{return false;}
}
function get_token(){	
	
	if(isset($_SESSION['token'])){
		return @$_SESSION['token'];
	}else{
		return "vacio";
	}
}
?>