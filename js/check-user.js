const switchs = document.querySelectorAll('.switch');
// Tomamos los elementos con clase switch
switchs.forEach(swi => {
    // Recorremos el DOM para seleccionar los checkboxs
    swi.childNodes[1].childNodes[1].addEventListener('click', () => {
        // Evaluamos si esta check o no cuando se le de click y realizamos un llamado a la funcion newStateUser
        if(swi.childNodes[1].childNodes[1].checked){
            // Enviamos los parametros para realizar el fecth 
            newStateUser('../../controller/admin/update/updateState.php', 'habilitar', swi.childNodes[1].childNodes[1].id, swi.parentNode.parentNode.childNodes[9]);
        }else{
            // Enviamos los parametros para realizar el fecth 
            newStateUser('../../controller/admin/update/updateState.php', 'deshabilitar', swi.childNodes[1].childNodes[1].id, swi.parentNode.parentNode.childNodes[9]);
        }
    })
})
// FUNCTIONS
// Funcion para actualizar el estado del usuario mediante Fetch
function newStateUser(url,action,id,labelTable){
    const data = `action=${action}&id=${id}`;
    fetch(url,{
        method:'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then( res => res.text())
    .then( response => { 
        // Reescribimos el campo del estado según la respuesta de la consulta
        if(response === "habilitar"){
            labelTable.innerHTML = 'Activo';
        }else if(response === "deshabilitar"){
            labelTable.innerHTML = 'Inactivo';
        }
    })
    .catch(error => console.log(error));   
}
