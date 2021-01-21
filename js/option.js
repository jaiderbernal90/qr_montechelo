//Variables
const btnImagen = document.querySelector('#click2');
const btnContraseña = document.querySelector('#click');
const input = document.querySelector('#codeQR');
const new_formContraseña = document.querySelector('#input-contraseña1');
const last_formContraseña = document.querySelector('#input-contraseña2');
// const btnGuardar = document.querySelector('#guardar');
// const btnGuardar2 = document.querySelector('#guardar2');

eventListener();
//Event Listener 
function eventListener() {
    //Inicia la aplicaion y deshabilita los inputs
     document.addEventListener('DOMContentLoaded', inicio);
     //Input
    //   input.addEventListener('focus', validarCampo);
      new_formContraseña.addEventListener('blur', validarCampoContraseña);
      last_formContraseña.addEventListener('blur', validarCampoContraseña);

}
//Funciones
//Funcion que asigna el valor inicial
function inicio() {
    btnImagen.disabled = false;
    // btnGuardar2.disabled = true;
}
//Funcion que valida el input
function validarCampo() {
    if (!input.value) {
        // btnGuardar.disabled=false;
    } 
}

function validarCampoContraseña() {
    if (this.value.length>0) {
        this.style.borderBottomColor = 'green';
    }else{
        this.style.borderBottomColor = 'red';
    }   
}
//Funcion que deshabilita el boton limpiar
function deshabilitar(e) {
     e.preventDefault();
     console.log(input.value)
     if (input.value) {
        input.value = '';
        // btnGuardar.disabled=true;
    }
}
function deshabilitar2() {
    btnGuardar2.disabled = true;
    new_formContraseña.value = '';
    last_formContraseña.value = '';
    new_formContraseña.style.borderBottomColor = '#ced4da';
    last_formContraseña.style.borderBottomColor = '#ced4da';
}