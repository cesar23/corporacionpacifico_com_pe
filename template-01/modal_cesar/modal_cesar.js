/*// Obtener el modal
var modal = document.getElementById('suscripcion_popup');

// Obtenga el botón que abre el módulo
var btn = document.getElementById("myBtn");

// Obtener el elemento <span> que cierra el módulo
var span = document.getElementsByClassName("btn_close_modal")[0];

// Cuando el usuario hace clic en el botón, 
btn.onclick = function() {
	console.log('mostrar_modal');
    modal.style.display = "block";
}

// Cuando el usuario hace clic en <span> (x), cierre el módulo
span.onclick = function() {
    modal.style.display = "none";
}*/
//-----------------------------------------------------------------------------
// Cuando el usuario hace clic en cualquier lugar fuera del modal, ciérrelo
window.onclick = function(event) {
	var modal = document.getElementById('suscripcion_popup');
    if (event.target == modal) {
        //modal.style.display = "none";
        $(modal).fadeOut("slow");
       
    }
}
function showModalSuscripcion(){
	var modal = document.getElementById('suscripcion_popup');
	 $(modal).fadeIn(1000);
}

function hideModalSuscripcion(){
	var modal = document.getElementById('suscripcion_popup');
	 $(modal).fadeOut( "slow" );
}


function cerrarModalSuscripcion(){
	 var span = document.getElementsByClassName("btn_close_modal")[0];
	 modal.style.display = "none";
}
//-------------------------------------------------------------modal 2
/*
var modal2 = document.getElementById('modal_succes');
// Obtenga el botón que abre el módulo
var btn2 = document.getElementById("myBtn2");
// Cuando el usuario hace clic en el botón, 
btn2.onclick = function() {
	console.log('mostrar');
    modal2.style.display = "block";
     setTimeout(function () {
                 $(modal2).fadeOut("slow");
            }, 3000);
}
*/

function show_and_Hide_ModalSucces(){
	var modal2 = document.getElementById('modal_succes');
//mostramos
	$(modal2).fadeIn("slow");
	//ocultamos
	  setTimeout(function () {
                 $(modal2).fadeOut("slow");
            }, 3000);
}

