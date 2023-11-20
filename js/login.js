//correo
var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9_\.\-]+\.[a-zA-Z0-9_\.\-]+$/;
//contraseña
var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$/;

$(document).ready(function () {

  $('#bEnviar').click(function () {
    var correo = $('#Email').val();
    var pwd = $('#Pwd').val();
    $('.error1').fadeOut();
    $('.error2').fadeOut();
    $('.error3').fadeOut();

    if (correo == '' || correo.length < 4) {
      $('.error1').fadeIn();
      return false;
    } else {
      $('.error1').fadeOut();
      if (!expr.test(correo)) {
        $('.error2').fadeIn();
        return false;
      }
    }
    if (!passwordRegex.test(pwd)) {

      $('.error3').fadeIn();
      return false;
    }

  });
});