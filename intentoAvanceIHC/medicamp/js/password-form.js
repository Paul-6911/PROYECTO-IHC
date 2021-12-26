function verificarContra() {
    var c1 = document.getElementById('password-form');
    var mnsj = document.getElementById('mensaje-error-password');
    var no_errorColor = "#a7ffa8";
    var errorColor = "#ffa7a7";
    var color_mnsj_error = '#9e0202';
    var color_mnsj_no_error = '#127a01'

    if(c1.value.length>=8){
        c1.style.backgroundColor = no_errorColor;
        mnsj.style.color = color_mnsj_no_error;
        mnsj.innerHTML = "Tiene entre 8 y 16 caracteres (Correcto)";
    }
    else{
        c1.style.backgroundColor = errorColor;
        mnsj.style.color = color_mnsj_error;
        mnsj.innerHTML = "Tiene menos de 8 caracteres (Incorrecto)";
    }
}