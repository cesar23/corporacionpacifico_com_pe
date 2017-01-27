
'use strict';


app.controller("contactoCtrl",
    ["$scope","$http","$routeParams", "AppVariables",function($scope,$http,$routeParams, AppVariables) {
        $scope.title="ggggggg";
        $scope.formData={};
        $scope.anuncio="";
        $scope.submitted = false;

        $scope.submit = function() {
            $scope.submitted = true;
        };
        $scope.interacted = function(field) {
            //console.log($scope.field);
            return $scope.submitted || field.$dirty;
            //return field.$dirty;
        };




        $scope.sendFormulario=function(formInvalido,form){
            console.log( 'Data were successfully sent to the server!' );
            console.log(formInvalido);
            $scope.submitted = true;

            //si no hay errores
            if(!formInvalido){
                $scope.formData=form;
                console.log( JSON.stringify( form, null, 2 ));
                console.log($scope.formData.email);
                $scope.anuncio="";
                document.getElementById("msjMail").innerHTML ='<img src="images/loading_json.gif"  class="img-thumbnail"  alt="" />';
                document.getElementById("formulario_contacto").style.display = "none";


                var request = $http({
                    method: "post",
                    //url: window.location.href,
                    url:  "send_mail_contacto.php",
                    data    : $.param($scope.formData),
					/*data: {

					 token: $scope.formData.token,
					 nombre: $scope.formData.nombre,
					 email: $scope.formData.email,
					 telefono: $scope.formData.telefono,
					 comentario: $scope.formData.comentario

					 },*/
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
                });

				/* Check whether the HTTP Request is successful or not. */
                request.success(function (data) {
                    //console.log(data);
                    var msj='<div class="alert alert-success"> '+
                        '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                        ' <strong>Envio satisfatorio!</strong> estaremos en contacto con usted en la brevedad.'+
                        '</div>';
                    //document.getElementById('msjMail').innerHTML = msj+data;
                    document.getElementById("formulario_contacto").style.display = "block";
                    //document.getElementById('formulario_contacto').innerHTML = msj+data;
                    document.getElementById('formulario_contacto').innerHTML = msj;
                    console.log('---1');
                    document.getElementById("msjMail").innerHTML ="";

                });

                request.error(function (error) {
                    var msj='<div class="alert alert-danger"> '+
                        '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                        '<strong>Error!</strong> '+error+'</div>';

                    document.getElementById("msjMail").innerHTML =error;
                });
                //

                $scope.resetForm();


            }else{
                $scope.submitted = true;
                $scope.anuncio="Debes llenar todos los campos";
                $scope.estadoForm=true;

                //$scope.form_data=formInvalido;
                //console.log($scope.formData.$pristine);
                //$scope.form.$setPristine();

            }

            //a la funcion recien tendria contenido el $scope.user
            //modelUser.saveUser($scope.user);
            //$location.url('/');
        };



        // var oriPerson = angular.copy($scope.person);

        $scope.resetForm = function ()
        {
            //alert("reset");
            $scope.submitted = false;
            $scope.formData={};
            $scope.formulario_contacto.$setPristine();
			/*
			 $scope.formData={};
			 $scope.formulario.$setPristine();
			 */

        };


    }
    ]);
