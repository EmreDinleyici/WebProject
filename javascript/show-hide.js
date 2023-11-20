var password = document.getElementById("password");
var eye = document.getElementById("eye");

eye.addEventListener("click", function(){
    if(password.type == 'password'){
        password.setAttribute("type", "text");
        // eye.classList.add("fa-eye-slash");
        eye.style.color = "black";
    }
    else{
        password.setAttribute("type", "password");
        // eye.classList.remove("fa-eye-slash");
        eye.style.color = "white";
    }
});