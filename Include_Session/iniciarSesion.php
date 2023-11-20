
<?php
require_once('../ORM/Database.php');
require_once('../ORM/Usuario.php');
$db = new Database();
$encontrado = $db->verificarDriver();

if ($encontrado) {
    session_start(); 
    $cnn = $db->getConnection();
    $usrModelo = new usuario($cnn);
    $login = $_POST["Email"];
    $password = ($_POST["Pwd"]);
    $data = "login='" . $login . "' AND pwd ='" . $password . "'";
    $usuario = $usrModelo->validaLogin($data);
    
    if ($usuario) {
        $usr = $usuario['login'];
        $_SESSION["login"] = $usr;
        $rol = $usuario['rol'];
        
        if ($rol == 'usuario') {
            require_once ("../Include_Session/homeUser.php");
        } else if ($rol == 'escritor') {
            //require_once ("../User/homeUser.php");
        } else if ($rol == 'administrador') { /*require_once ("../User/homeUser.php"); */
        }
    } else {
        header("Location: /ProyectoWeb"); // Redirecciona si no se encuentra el usuario
        exit();
    }
}
/* 
<?php
require_once('../ORM/Database.php');
require_once('../ORM/Usuario.php');
$db = new Database();
$encontrado = $db->verificarDriver();

if ($encontrado) {
    $cnn = $db->getConnection();
    $usrModelo = new usuario($cnn);
    $login = $_POST["Email"];
    $password = ($_POST["Pwd"]);
    $data = "login='" . $login . "' AND pwd ='" . $password . "'";
    $usuario = $usrModelo->validaLogin($data);
    $usr = $usuario['login'];
    $_SESSION["login"] = $usr;
    $rol = $usuario['rol'];
    session_start();
    if ($usuario) {
        if ($rol == 'usuario') {
           require_once ("../Include_Session/homeUser.php");
        } else if ($rol == 'escritor') {
            
        } else if ($rol == 'administrador') { 
        }
    } else {
        header("/ProyectoWeb");
    }
}
*/
