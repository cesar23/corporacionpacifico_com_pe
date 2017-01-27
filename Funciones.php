<?php
class Funciones{
	 private $token=NULL;

	public function getFechaLarga($fecha=""){
		if($fecha==""){
			$fecha=date("Y-m-d");
		}

		$fecha=explode("-", $fecha);
		$ano=$fecha[0];
		$mes=$fecha[1];
		$dia=$fecha[2];

		$mes=number_format($mes,0,".","");
		$arraysearch=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
		$arrayreplace=array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
		$arraymes=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

		$fechnom=date("D, d", mktime(0, 0, 0, $mes, $dia, $ano));
		$fechnompre=date("D", mktime(0, 0, 0, $mes, $dia, $ano));
		$fechnom=str_replace($arraysearch,$arrayreplace,$fechnom);

		$fechnom=$fechnom.' de '.$arraymes[$mes].' del '.$ano;
		return $fechnom;
	}



/////////////////////////////
	public function decimal($ncantidad,$ndecimales)

	{

		$n_dosdec = '%8.'.$ndecimales.'f';

		$dosdec= sprintf($n_dosdec, $ncantidad);

		$dosdec =  round($dosdec, $ndecimales);

/*(El número se formateará,
  Establece el número de decimales,
  Establece el separador de punto decimal,
  Establece el separador de miles,Sólo el primer carácter de thousands_sep se utiliza.  Por ejemplo, si utiliza la barra thousands_sep como en el número 1000, number_format () devolverá 1b000)*/
  $dosdec = number_format($ncantidad, $ndecimales ,".","");

  return ($dosdec);

}

public function total_comentario($id_blog,$id_comentario){



}

public function messs($mes){
	$mes=number_format($mes,0,".","");


	$arraymes=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");



	$mes=$arraymes[$mes];

	return ($mes);


}



public function getCartaContacto($CONTACTO,$URL) {


	$html = '<body>

	<table width="704" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#f6f6f6">
		<tr>
			<td width="704" height="140"><img src="%URL%images/banner_mail.jpg" width="704" height="140"  alt=""/></td>
		</tr>


		<tr>
			<td><br />
				<div style="font-family:sans-serif; font-size:20px; text-align:center"></div>
				<br /></td>
			</tr>
			<tr>
				<td valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td><div style="font-family:Helvetica, Arial, sans-serif; font-size:14px">Estimado(a):</div>
							<div style="font-family:Helvetica, Arial, sans-serif; font-size:16px">%CONTACTO%</div></td>
						</tr>

						<tr>
							<td><br />
								<div style="font-family:Helvetica, Arial, sans-serif; font-size:14px; text-align:justify">Estimado cliente ya esta agregado a nuestros boletines diarios gracias por su precerencia.Le damos la bienvenida a nuestro portal  <strong>Corporacion E Inversiones del Pacifico S.A.C</strong>, muy pronto nuevos servicios web para usted.</div></td>
							</tr>

							<tr>
								<td><br /><div style="font-family:Helvetica, Arial, sans-serif; font-size:14px"></div>
									<div style="font-family:Helvetica, Arial, sans-serif; font-size:16px"></div></td>
								</tr>
								<tr>
									<td><br />
										<div style="font-family:Helvetica, Arial, sans-serif; font-size:14px"></div>
										<div style="font-family:Helvetica, Arial, sans-serif; font-size:16px;">Ingrese a: <a href="%URL%" style="text-decoration:none; color: #F90" target="_blank">%URL%</a></div></td>
									</tr>

									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>
											<div style="font-family:Helvetica, Arial, sans-serif; font-size:14px;"></div></td>
										</tr>
										<tr>
											<td><br />
												<div style="font-family:Helvetica, Arial, sans-serif; font-size:14px;">Atentamente: </div>
												<div style="font-family:Helvetica, Arial, sans-serif; font-size:14px;"><br />
													Corporacion E Inversiones del Pacifico S.A.C. <br />
												</div></td>
											</tr>

											<tr>
												<td><br /><br />
													<div style="font-family:sans-serif; font-size:14px; text-align:center">Corporacion E Inversiones del Pacifico S.A.C &copy; ' . date('Y') . '</div></td>
												</tr>
												<tr>
													<td align="center"><br /></td>
												</tr>
												<tr>
													<td align="center" valign="middle"><br />
														<div style="font-family:tahoma; font-size:11px; color:#333"> sistema implementado por : <a href="http://solucionessystem.com/" target="_blank">http://solucionessystem.com/</a></div></td>
													</tr>
												</table>

											</td>
										</tr>
									</table>
								</body>
								</html>

								';



//$contacto,$campana,$name_emp,$codigo,$inicio,$fin


								$html = str_replace('%URL%', $URL, $html);

								$html = str_replace('%CONTACTO%', $CONTACTO, $html);



								return $html;
							}


    public function getCarta(array $data) {


        $html = '<body>

								<table width="704" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#f6f6f6">
									<tr>
										<td width="704" height="140"><img src="%URL%images/banner_mail.jpg" width="704" height="140"  alt=""/></td>
									</tr>


									<tr>
										<td><br />
											<div style="font-family:sans-serif; font-size:20px; text-align:center"></div>
											<br /></td>
										</tr>
										<tr>
											<td valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
												<tr>
													<td><div style="font-family:Helvetica, Arial, sans-serif; font-size:14px"><span style="font-family:Helvetica, Arial, sans-serif; font-size:14px; text-align:justify">Formulario Recivido con fecha:</span> %FECHA%</div>
														<div style="font-family:Helvetica, Arial, sans-serif; font-size:16px">
															<table width="644" border="0">
																';
        if (strlen(trim($data['nombre']))>0) {
            $html .='<tr>
																		<td width="85" align="right" valign="top">Nombres:</td>
																		<td width="16" align="center" valign="top">&nbsp;</td>
																		<td width="529" align="left" valign="top">%CONTACTO%</td>
																	</tr>';
        }

        if (strlen(trim($data['email']))>0) {
            $html .='<tr>
																		<td align="right" valign="top">Email:</td>
																		<td align="center" valign="top">&nbsp;</td>
																		<td align="left" valign="top">%EMAIL%</td>
																	</tr>';
        }
        if (strlen(trim($data['telefono']))>0) {
            $html .='<tr>
																	<td align="right" valign="top">Telefonos:</td>
																	<td align="center" valign="top">&nbsp;</td>
																	<td align="left" valign="top">%TELEFONO%</td>
																</tr>';
        }

        if (strlen(trim($data['comentario']))>0) {
            $html .='<tr>
																<td height="76" align="right" valign="top">Comentario</td>
																<td align="center" valign="top">&nbsp;</td>
																<td align="left" valign="top">%COMENTARIO%</td>
															</tr>';
        }


        $html .='<tr>
														<td align="right" valign="top">&nbsp;</td>
														<td align="center" valign="top">&nbsp;</td>
														<td align="left" valign="top">&nbsp;</td>
													</tr>
												</table>
											</div></td>
										</tr>

										<tr>
											<td><br />
												<div style="font-family:Helvetica, Arial, sans-serif; font-size:14px; text-align:justify"></div></td>
											</tr>

											<tr>
												<td><br /><div style="font-family:Helvetica, Arial, sans-serif; font-size:14px"></div>
													<div style="font-family:Helvetica, Arial, sans-serif; font-size:16px"></div></td>
												</tr>

												<tr>
													<td><br /><br />
														<div style="font-family:sans-serif; font-size:14px; text-align:center">Corporacion E Inversiones del Pacifico S.A.C &copy; ' . date('Y') . '</div></td>
													</tr>
													<tr>
														<td align="center"><br /></td>
													</tr>
													<tr>
														<td align="center" valign="middle"><br />
															<div style="font-family:tahoma; font-size:11px; color:#333">sistema implementado por : <a href="http://solucionessystem.com/" target="_blank">http://solucionessystem.com/</a></div></td>
														</tr>
													</table>

												</td>
											</tr>
										</table>
									</body>
									</html>

									';



//$CONTACTO,$EMAIL,$TELEFONO,$COMENTARIO,$FECHA



        $html = str_replace('%CONTACTO%', $data['nombre'], $html);
        $html = str_replace('%EMAIL%', $data['email'], $html);
        $html = str_replace('%TELEFONO%',  $data['telefono'], $html);
        $html = str_replace('%COMENTARIO%', $data['comentario'], $html);
        $html = str_replace('%FECHA%', $data['fecha'], $html);
        $html = str_replace('%URL%', $data['url'], $html);



        return $html;
    }

								public function getCartaVenta($CONTACTO,$EMAIL,$TELEFONO,$COMENTARIO,$FECHA,$URL) {


									$html = '<body>

									<table width="704" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#f6f6f6">
										<tr>
											<td width="704" height="140"><img src="%URL%images/banner_mail.jpg" width="704" height="140"  alt=""/></td>
										</tr>


										<tr>
											<td><br />
												<div style="font-family:sans-serif; font-size:20px; text-align:center"></div>
												<br /></td>
											</tr>
											<tr>
												<td valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
													<tr>
														<td><div style="font-family:Helvetica, Arial, sans-serif; font-size:14px"><span style="font-family:Helvetica, Arial, sans-serif; font-size:14px; text-align:justify">Formulario Recivido con fecha:</span> %FECHA%</div>
															<div style="font-family:Helvetica, Arial, sans-serif; font-size:16px">
																<table width="644" border="0">
																	<tr>
																		<td width="85" align="right" valign="top">Nombres:</td>
																		<td width="16" align="center" valign="top">&nbsp;</td>
																		<td width="529" align="left" valign="top">%CONTACTO%</td>
																	</tr>
																	<tr>
																		<td align="right" valign="top">Email:</td>
																		<td align="center" valign="top">&nbsp;</td>
																		<td align="left" valign="top">%EMAIL%</td>
																	</tr>';
																	if (strlen(trim($TELEFONO))>0) {
																		$html .='<tr>
																		<td align="right" valign="top">Telefonos:</td>
																		<td align="center" valign="top">&nbsp;</td>
																		<td align="left" valign="top">%TELEFONO%</td>
																	</tr>';
																}

																if (strlen(trim($COMENTARIO))>0) {
																	$html .='<tr>
																	<td height="76" align="right" valign="top">Comentario</td>
																	<td align="center" valign="top">&nbsp;</td>
																	<td align="left" valign="top">%COMENTARIO%</td>
																</tr>';
															}


															$html .='<tr>
															<td align="right" valign="top">&nbsp;</td>
															<td align="center" valign="top">&nbsp;</td>
															<td align="left" valign="top">&nbsp;</td>
														</tr>
													</table>
												</div></td>
											</tr>

											<tr>
												<td><br />
													<div style="font-family:Helvetica, Arial, sans-serif; font-size:14px; text-align:justify"></div></td>
												</tr>

												<tr>
													<td><br /><div style="font-family:Helvetica, Arial, sans-serif; font-size:14px"></div>
														<div style="font-family:Helvetica, Arial, sans-serif; font-size:16px"></div></td>
													</tr>

													<tr>
														<td><br /><br />
															<div style="font-family:sans-serif; font-size:14px; text-align:center">Corporacion E Inversiones del Pacifico S.A.C &copy; ' . date('Y') . '</div></td>
														</tr>
														<tr>
															<td align="center"><br /></td>
														</tr>
														<tr>
															<td align="center" valign="middle"><br />
																<div style="font-family:tahoma; font-size:11px; color:#333">sistema implementado por : <a href="http://solucionessystem.com/" target="_blank">http://solucionessystem.com/</a></div></td>
															</tr>
														</table>

													</td>
												</tr>
											</table>
										</body>
										</html>

										';



	//$CONTACTO,$EMAIL,$TELEFONO,$COMENTARIO,$FECHA



										$html = str_replace('%CONTACTO%', $CONTACTO, $html);
										$html = str_replace('%EMAIL%', $EMAIL, $html);
										$html = str_replace('%TELEFONO%', $TELEFONO, $html);
										$html = str_replace('%COMENTARIO%', $COMENTARIO, $html);
										$html = str_replace('%FECHA%', $FECHA, $html);
										$html = str_replace('%URL%', $URL, $html);



										return $html;
									}

								public function generar_token(){
									$token = md5(mt_rand(11,99999));
									//if(empty($this->token) || $this->token==""|| $this->token==NULL || empty($_SESSION['token'])){
									if(empty($_SESSION['token'])){
										$_SESSION['token']=$token;
										$this->token=$_SESSION['token'];
									  $this->escribirFichero('token:'.$token);
										return $token;
									}else{
										return $_SESSION['token'];
									}
									
								
									
									
								}
								public function comprobar_token($token){
									if(@$_SESSION['token']==$token){return true;}else{return false;}
								}
								function get_token(){
									/*
									if(empty($this->token) || $this->token==""){
									}
									if(isset($_SESSION['token'])){
										return @$_SESSION['token'];
									}else{
										return "vacio";
									}
									*/
									return $_SESSION['token'];
								}
	
							function escribirFichero($string){
								$file = fopen("logsession.txt", "a");
								fwrite($file,$string . PHP_EOL);
								
								fclose($file);
							}

							}



							?>
