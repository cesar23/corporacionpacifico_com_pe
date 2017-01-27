function limpiaForm(formulario) {
    //--demo limpiaForm($('#suscripcion_popup'))
    //buscamos un formulario dentro del id
    // var contenedor_modal=$('#suscripcion_popup').find('form');


// recorremos todos los campos que tiene el formulario
$(':input', formulario).each(function() {
var type = this.type;
var tag = this.tagName.toLowerCase();
//limpiamos los valores de los campos…
if (type == 'text' || type == 'password' || tag == 'textarea')
this.value = '';
// excepto de los checkboxes y radios, le quitamos el checked
// pero su valor no debe ser cambiado
else if (type == 'checkbox' || type == 'radio')
this.checked = false;
// los selects le ponesmos el indice a -
else if (tag == 'select')
this.selectedIndex = -1;
});
}
function disabledFormulario(formulario){
    //uso =  disabledFormulario($('#suscripcion_popup'));
    //var contenedor_modal=$('#suscripcion_popup');
    //var contenedor_modal=$('#newsletter-popup-validate-detail');
     formulario.find('input, textarea, button, select').attr('disabled', true);
}
function enableFormulario(formulario){

    formulario.find('input, textarea, button, select').attr('disabled', false);

}