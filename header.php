<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html  lang="es" xml:lang="es" ng-app="webApp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Corporacion E Inversiones del Pacifico S.A.C | <?php echo $_Title ?></title>
  <?php require_once("header-cabecera.php");?>
</head>

<body>
<div id="pageloader">
    <div class="loader-item fa fa-spin colored-border"></div>
</div>

  <div class="container"> 

<?php
require_once("Funciones.php");
$objFun= new Funciones();
?>
<div id="header">
        <div class="row">

           <div class="col-lg-3 col-md-3 col-sm-3">

            <img class="" src="images/logo-185.jpg"  alt="" />
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
			  <p><h3 class="text-center">Precio del Dólar Hoy en Perú</h3></p>
<div class="w3-panel  w3-redd">
<div class="valor valor-small">1 Dólar Americano = S/. 3,42 Nuevos Soles </div>
			  </div>
</p>
          </div>
          <!--<div class="col-lg-3">


          </div>-->
          <div class="col-lg-3 col-md-3 col-sm-3 text-right">
<div class="caja-redes">
 <!-- <a href="#" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a> -->
  <!-- <a href="#" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>-->
   
  
</div>
  
    <p>
          <strong><h5 class="texto_superior"><?php echo $objFun->getFechaLarga()?></h5></strong>
           <table width="100%" border="0">
  <tbody>
    <tr width="74px">
      <td rowspan="3"><img src="images/telefono02.png" width="74px"  /></td>
      <td rowspan="3"  width="4px">&nbsp;</td>
      <td align="left" valign="" class="telefonos_cabecera">TELEFONOS<br>
525-1000<br>
525-1519</td>
    </tr>
    <tr>
      <td align="left" valign="top" style="color:#1320CA"></td>
    </tr>
    
  </tbody>
</table>

            </p>
            <!-- <p>Antenci&oacute;n al cliente: <span style="font-size:18px">(01) 256-245</span>       </p> -->
          
          </div>



        
      </div>
      <h1></h1>
    

    <!-- Static navbar --> 
    <!--<nav class="navbar navbar-default navbar-fixed-top">-->
    <nav class="navbar navbar-inverse" >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#">Corporación Pacifico</a> </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li  class="<?php echo $_activeHome; ?>"><a href="index.php">Inicio</a></li>
              <li class="<?php echo $_activeServicios; ?>"><a href="servicios.php" >Nuestros Servicios</a></li>
              <li class="<?php echo $_activeNosotros; ?>"><a href="nosotros.php">Nosotros</a></li>
               <li class="<?php echo $_activeBoletinNormas; ?>"><a href="boletin_normas.php">Boletin Normas</a></li>
              

               <li class="<?php echo $_activeContacto; ?>"><a href="contactenos.php">Contactenos</a></li>
            </ul>
            <!--busqueda-->
            
			<!-- <form class="navbar-form navbar-left" role="search" method="get">
              <div class="form-group hidden-md hidden-sm hidden-xs">
                <input name="busqueda" type="text" class="form-control" placeholder="Search">
              </div>-->
              <!-- <button type="submit" class="btn btn-default">Submit</button> -->
            <!--</form>-->
			
            <!--busqueda--> 

            <!--login-->
        <!--<form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" name="username" placeholder="Email" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Sign in</button>
        </form>-->
        <!--login--> 
        
        <!--redes sociales--> 
        <!--<ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="./">
              <i class="fa fa-facebook-official fa-lg"></i> <span class="sr-only">(current)</span>
            </a></li>
            <li><a href="../navbar-static-top/"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li><a href="../navbar-fixed-top/"><i class="fa fa-google-plus fa-lg"></i></a></li>
          </ul>-->
          <!--redes sociales--> 
        </div>
        <!--/.nav-collapse --> 
      </div>
      <!--/.container-fluid --> 
    </nav>

   <?php require_once ("slider.php");?>

    </div>