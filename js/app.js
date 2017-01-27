
'use strict';

//angular.module('9YeomanApp', ['ngRoute','firebase','crudAngular'])
var app=angular.module('webApp', ['ngRoute']);

/*
app.config(function ($routeProvider) {
  $routeProvider
  .when('/', {
    templateUrl: 'views/main.html',
    controller: 'MainCtrl',
    controllerAs: 'main'
  })

  .otherwise({
    redirectTo: '/'
  });
});
*/



app.factory("AppVariables", function(){
    var TemasArray = ["Manual de Javascript", "Manual de jQuery", "Manual de AngularJS"];

    var interfaz = {
        nombre: "Manolo",
        getDescargas: function(){
            return TemasArray;
        },
        nuevaDescarga: function(descarga){
            TemasArray.push(descarga);
        }
    };
    return interfaz;
});
