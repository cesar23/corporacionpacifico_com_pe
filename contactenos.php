<?php
require_once("config/config.php");
require_once("config/load.php");
require_once("header.php");
?>
<div class="row">
    <h1></h1>
</div>

<div class="row">
    <div class="col-lg-9">
        <div id="cuerpo_izq">
            <div id="conent_body"  ng-controller="contactoCtrl">

                <div class="list-group">
                    <p class="text-web-titulo"><strong>Informacion de Contacto</strong></p>


                    <div class="col-md-4">
                        <strong>Horario De Atención</strong><br>
                        <div class="alto9"></div>
                        LUNES - VIERNES<br>
                        8.00 am - 1.00 pm
                        <div class="alto9"></div>
                        REFRIGERIO<br>
                        1.00 PM - 2.00 PM
                        <div class="alto9"></div>
                        SABADOS<br>
                        8.00 AM - 1.00 PM
                    </div>
                    <div class="col-md-4">
                        <strong>Teléfonos</strong><br>
                        <div class="alto9"></div>
                        Ventas<br>
                        525-1000
                        <div class="alto9"></div>
                        Cobranzas<br>
                        525-1519
                        <div class="alto9"></div>
                        Soporte<br>
                        535-8700
                    </div>

                    <div class="col-md-4">
                        <strong>Oficinas</strong><br>
                        CALLE 18 DE ENERO - 159 Urb. Villa Hipoer
                        ( Alt. Clinica Ricardo Palma )
                        <div class="alto18"></div>


                        <strong>Correos</strong><br>
                        <div class="alto9"></div>
                        ventas@corporacionpacifico.com.pe
                        <div class="alto9"></div>
                        cobranzas@corporacionpacifico.com.pe
                    </div>


                </div>
                <div class="clearfix"></div>
                <hr>
                <!--contactenos-->
                <style type="text/css">
                    .css-form input.ng-invalid.ng-touched {
                        background-color: #FA787E;
                    }

                    .css-form input.ng-valid.ng-touched {
                        background-color: #78FA89;
                    }

                    .animate-if {
                        background:red;
                        border:1px solid black;
                        padding:10px;
                    }

                    .ng-submitted input.ng-invalid {
                        border: 1px solid #f00;
                        background-color: #fee;
                        color: red;
                    }
                    .ng-submitted p.ng-invalid {

                        color: red;
                    }
                    .ng-submitted textarea.ng-invalid {
                        border: 1px solid #f00;
                        background-color: #fee;
                    }
                    p.help-block {
                        border-color: red;
                        color:red !important;
                    }
                    span.help-block {
                        border-color: red;
                        color:red !important;
                    }


                </style>

                <!-- si el formulari a sido enviado submitted - entonces se le aplicara la clase ng-submitted-->
                <?php
                require_once("Funciones.php");
                $objFun= new Funciones();
                //generar_token();
                $objFun->generar_token();
                ?>
                <form name="formulario_contacto" id="formulario_contacto"  ng-submit="sendFormulario(formulario_contacto.$invalid,formData)"
                      ng-class="{'ng-submitted': submitted }"
                      novalidate>
                    <input type="hidden" name="token"  ng-model="formData.token"  ng-init="formData.token='<?php echo $objFun->get_token() ?>'" />

                    <div class="form-group"  ng-class="{'error': submitted }">

                        <label for="nombre">Nombres:</label>
                        <input

                                type="text" class="form-control" placeholder="Nombres" name="nombre"
                                ng-minlength="3"
                                ng-model="formData.nombre"
                                required>


                        <p ng-show="!formulario_contacto.nombre.$pristine && formulario_contacto.nombre.$error.required" class="help-block">Campo Requerido</p>
                        <p ng-show="!formulario_contacto.nombre.$error.required && formulario_contacto.nombre.$error.minlength" class="help-block">minimo tres caracteres</p>

                        <!-- si el usuario no ha interactuado y ya envio el submit -->
                        <span ng-if="formulario_contacto.nombre.$pristine && submitted" class="help-block">
                        Campo Requerido.
                    </span>

                    </div>

                    <!--  -->
                    <div class="form-group"
                    >
                        <label for="Email">Email:</label>
                        <input type="email" class="form-control" placeholder="example@email.com" name="email"
                               ng-model="formData.email"
                               required ng-pattern="/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/">


                        <p ng-show="!formulario_contacto.email.$pristine && formulario_contacto.email.$error.required" class="help-block">Campo Requerido.</p>
                        <p ng-show="formulario_contacto.email.$error.pattern" class="help-block">Email invalido</p>

                        <!-- si el usuario no ha interactuado y ya envio el submit -->
                        <span ng-if="formulario_contacto.email.$pristine && submitted" class="help-block">
                    Campo Requerido.
                </span>


                    </div>
                    <!--  -->

                    <div class="form-group"
                    >
                        <label for="telefono">Telefonos:</label>
                        <input type="text" class="form-control" placeholder="000-000" name="telefono"
                               ng-minlength="3"
                               ng-model="formData.telefono" required>

                        <p ng-show="!formulario_contacto.telefono.$pristine && formulario_contacto.telefono.$error.required" class="help-block">Campo Requerido.</p>
                        <p ng-show="formulario_contacto.telefono.$error.minlength" class="help-block">minimo tres caracteres</p>

                        <!-- si el usuario no ha interactuado y ya envio el submit -->
                        <span ng-if="formulario_contacto.telefono.$pristine && submitted"  class="help-block">
                Campo Requerido.
            </span>

                    </div>


                    <div class="form-group"
                    >
                        <label for="lastname">Cometarios</label>
                        <textarea class="form-control" rows="3" cols="90"
                                  name="comentario" id="comentario" placeholder="comet..."
                                  ng-model="formData.comentario" required></textarea>
                        <!-- si el usuario no ha interactuado y ya envio el submit -->
                        <span ng-if="formulario_contacto.comentario.$pristine && submitted"  class="help-block">
            Campo Requerido.
        </span>


                        <p ng-show="!formulario_contacto.comentario.$pristine && formulario_contacto.comentario.$error.required" class="help-block">Campo Requerido.</p>
                    </div>


                    <div>

                        <!-- si se envio form y si hay un error  -->
                        <p ng-show="submitted && formulario_contacto.$invalid" class="help-block">Todos los campos deben ser llenados</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar ahora</button>


                </form>
                <!-- SHOW DATA FROM INPUTS AS THEY ARE BEING TYPED -->
                <!-- <pre>
                    {{ formData }}
                </pre> -->
                <br>

                <!--    con de contenedor de formulario        -->
                <div id="msjMail">

                </div>
                <!--contactenbos-->
                <p>
                </p>

            </div>
        </div>
    </div>
    <div class="col-lg-3">

        <!--body left-->
        <?php require_once("body_left.php");?>
        <!--body left-->

    </div>
</div>

<!-- The content of your page would go here. -->

<!--footer-->
<?php require_once("footer.php");?>
<!--footer-->


</div>
<!-- /container -->
<?php require_once("footer-script.php");?>

</body>
</html>
