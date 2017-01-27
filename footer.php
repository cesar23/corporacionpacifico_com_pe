<footer class="footer-distributed">

    <div class="footer-left">



        <p class="footer-links">
            <a href="index.php">Inicio</a>
            ·
            <a href="nosotros.php">Nosotros</a>
            ·
            <a href="servicios.php">Nuestros Servicios</a>
            ·
            <a href="staff.php">Staff</a>
            ·
            <a href="contactenos.php">Contactenos</a>



        </p>

        <p class="footer-company-name">
            Corporacion E Inversiones del Pacifico S.A.C &copy; 2011 - <?php echo date("Y"); ?>
        </p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>CALLE 18 DE ENERO - 159<br>Urb. Villa Hipoer ( Alt. Clinica Ricardo Palma )</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>Teléfonos: <br>525-1000 / 525-1519 / 535-8700</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:ventas@corporacionpacifico.com.pe">ventas@corporacionpacifico.com.pe</a></p>
        </div>





    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>Sobre la empresa:</span>
            Empresa dedicada a la asesoria empresarial integral.
        </p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="/webmail" title="Webmail"><i class="fa fa-users"></i></a>



        </div>

    </div>



</footer>
<style>
    .copy {
        background-color:#404040;
        color:#ccc;
        font-size:0.7em;


        padding:10px 0;
    }
    .barra-copy {
        top:0px;
        height:0.2em;
        background-color:#fff  ;

    }
</style>
<style>



</style>
<script>
    function CookieTiempoVida(){
        var date = new Date();
        var minutes = 10;
        date.setTime(date.getTime() + (minutes * 60 * 1000));
        return date;

    }
    $(document).ready(function () {
        var xcookie = document.cookie;
        console.log(document.cookie);
        //definimos la cokiie
        var check_cookie = $.cookie('modal_suscripcion');
        console.log("estado cookie (modal_suscripcion) :" + check_cookie);
        //---ya la cokkie esta en no no mostraremos nada
        if (check_cookie != 'no') {
            setTimeout(function () {
               //showModalSuscripcion();
            }, 3000);
        }

        //al presionar checkbox
        $('#no_suscripcion').on('change', function () {
            if ($(this).length) {
                document.cookie = "name=oeschger";
                $.cookie('modal_suscripcion', 'no',{ path: '/',expires: CookieTiempoVida()  });
            } else {
                $.cookie('modal_suscripcion', 'si',{ path: '/',expires: CookieTiempoVida()  });
            }
        });


    });


    function viewSucces(){

     setTimeout(function () {
                $.fancybox.close();//erramos el panel
            }, 3000);


 }


 function sendFormPadre(elemento, ajax) {

    var contenedor_modal=$('#suscripcion_popup');

        //cogemos el form padre del elemento
        var form = $(elemento).parents('form:first');

        var formData = new FormData($(form)[0]);//tiene que ser asi


        //obteniendo la accion
        var actionURL = $(form).attr("action");
        //obteniendo la metodo
        var method = $(form).attr("method");



        $(form).validate({
            rules: {
                suscrip_email: {required: true, email: true, },
                suscrip_nombre:{required: true,  minlength: 5},
                minlength: 3
            },
            //---------------- para poner un mensaje diferente solo para un elemento
            errorElement: "li",
            wrapper: "ul",

            errorPlacement: function (error, element) {
                //element.append( '<span class="error_validate">" + error + "</span>') ;
                error.insertAfter("#msj_error");
                error.addClass('error_validate');
                //$(element).closest('.error_validate').html(error);
            }
            //--------------------
        });


        // validamos si es valido con jqueryValidate (validamos con la classe validate)
        var isvalidate = $(form).valid();
        // si no es valido retornamos
        if (!isvalidate) {
           // $(form).attr('disabled', false);

            return;
        }

        console.log("enviado-2");
        // contenedor_modal.html('<div class="modal_enviando"><div class="modal-content_enviando"><span class="label label-info"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviando...</span></div>  </div>');
        $('.enviando').show();


        //$(form).html('enviando...');

        //--------si llega  aqui seteamos la cokkie paar que ya no aparesca
        $(document).ready(function () {

            $.cookie('modal_suscripcion', 'no',{ path: '/',expires: CookieTiempoVida() });
        });



        $.ajax({
            url: actionURL,
            type: method,
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function () {
                disabledFormulario(form);

            },
            success: function (data) {
                var str = JSON.stringify(data);
                //una vez hecho eso ya podemos parsear
                var objson = JSON.parse(str);


                console.log(objson.msg);
                //------------desaparecer
                //$.cookie('modal_suscripcion', 'no');
                //$(form).html('su mensaje ah sido enviado gracias...');
              // contenedor_modal.hide();
               hideModalSuscripcion();
               $('.enviando').hide();
               show_and_Hide_ModalSucces();//mostrarmos un mensaje

                //---------------



            },
            error: function (request, status, error) {
                console.log(request.responseText);

            },
            complete: function () {
           enableFormulario(form);
           limpiaForm(form);
            //$(form).reset();

            }
        });

        //$(form).attr('disabled', false);
        //contenedor_modal.find('input, textarea, button, select').attr('disabled', false);
        //enableFormulario()
        return false;

    }






</script>




<div class="barra-copy"></div>
<div class="copy text-center" style="display: none;">
    ©2011- <?php echo date("Y"); ?>. Sitio creado por  <a class="blue" href="http://www.solucionessystem.com" target="_blank">www.solucionessystem.com</a>
</div>

<!-- The Modal -->

<div id="suscripcion_popup" class="modal">

  <!-- Modal content -->
  <div class="modal-content padding-col-5">
   <div class="col-md-12">
      <div class="modal_header close">
          <span class="btn_close_modal" onclick="hideModalSuscripcion();">×</span>
      </div>
  </div>

  <!-- columna izquierda -->
  <div class="col-md-7">
      <div class="modal_body">
      <form action="send_mail.php" method="post" id="newsletter-popup-validate-detail"
    onsubmit="return sendSuscripcion(this)">
  <?php
  require_once("Funciones.php");
$objFun= new Funciones();
 //generar_token();
  $objFun->generar_token();
  ?>
    <input type="hidden" name="token" value="<?php echo $objFun->get_token() ?>" />
    <div class="block-content">

        <h3><strong>Suscribete a nuestro boletines</strong></h3>

        <div class="form-group text-left">
            <label for="exampleInputFile">Nombres</label>
            <input type="text" class="form-control  input-sm required-entry required" title="Introduce un Nombre verdadero" name="suscrip_nombre" id="suscrip_nombre" placeholder="Nombres" value="" >
        </div>

        <div class="form-group text-left">
            <label for="exampleInputFile">Email</label>
            <input type="text" class="form-control  input-sm required-entry required" title="Introduce un email correcto" name="suscrip_email" id="suscrip_email" placeholder="Email.." value="" >
        </div>

        <div class="form-group text-left">
        <div class="enviando" style="display: none;">enviando...</div>
            <button class="w3-btn w3-blue w3-text-shadow"  onclick="sendFormPadre(this,'ajax');return false;"><b>Suscribase</b></button>
        </div>


            <div id="msj_error" class="w3-text-red"></div>
            <div class="form-group text-left">
              <input type="checkbox" id="no_suscripcion"/>

              <span style="font-size: 10px; font-family: tahoma;font-style: italic; margin-bottom:0px ;margin-right:0px ;margin-left:0px ;margin-top:0px ">no mostrar esta ventana denuevo</span>


          </div>
          <div class="subscribe-bottom">

          </div>
      </div>
  </form>
  </div>
</div>
<!-- columna drecha -->
<div class="col-md-5">

</div>



</div>

</div>

<div id="modal_succes" class="modal">
  <div class="modal-content-mensaje">
<div class="alert-box_modal success_modal"><span class="close_modal">enviado: </span>Mensaje enviado.</div>
  </div>
</div>
<script src="template-01/modal_cesar/modal_cesar.js?load_carga=1"></script>
<link rel="stylesheet" type="text/css" href="template-01/modal_cesar/modal_cesar.css?load_carga=1">
<?php
require_once("analitycs.php");

?>
