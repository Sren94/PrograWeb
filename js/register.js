//correo
var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9_\.\-]+\.[a-zA-Z0-9_\.\-]+$/;
//contraseña
var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$/;

$(document).ready(function () {


    $('#bEnviar').click(function () {

        var name = $('#Name').val();
        var lname = $('#Lname').val();
        var correo = $('#Email').val();
        var pwd = $('#Pwd').val();
        $('.error1').fadeOut();
        $('.error2').fadeOut();
        $('.error3').fadeOut();
        $('.error4').fadeOut();
        $('.error5').fadeOut();


        if (name == '' && name.length < 4) {
            $('.error1').fadeIn();
            return false;
        }
        else {
            $('.error1').fadeOut();
            if (lname == '' || lname.length < 4) {
                $('.error2').fadeIn();
                return false;
            }
        }
        if (correo == '' || correo.length < 4) {
            $('.error2').fadeOut();
            $('.error3').fadeIn();
            return false;
        } else {
            $('.error3').fadeOut();
            if (!expr.test(correo)) {
                $('.error4').fadeIn();
                return false;
            }
        }
        if (!passwordRegex.test(pwd)) {
            $('.error5').fadeIn();
            return false;
        }
        return true;
    });
});