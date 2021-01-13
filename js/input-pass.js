document.getElementById("spanMostrar").addEventListener("click", function(){
    var elementInput=document.getElementById("icon_pass");
    var elementIcon=document.getElementById("iconMostrar");
    if(elementIcon.classList.contains("active")){
        elementIcon.classList.remove("active");
        elementIcon.classList.remove('fa-eye-slash');
        elementIcon.classList.add('fa-eye');
        elementInput.type="password";
    } else{
        elementIcon.classList.add("active");
        elementIcon.classList.remove('fa-eye');
        elementIcon.classList.add('fa-eye-slash');
        elementInput.type="text";
    }
});