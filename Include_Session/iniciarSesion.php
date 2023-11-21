
<?php
require_once ('../ORM/ORM.php');
require_once('../ORM/Database.php');
require_once('../ORM/Usuario.php');
session_start(); 
$_SESSION['login']=false;
$db = new Database();
$encontrado = $db->verificarDriver();
if ($encontrado) {
   
    $cnn = $db->getConnection();
    $usrModelo = new usuario($cnn);
    $login = $_POST["Email"];
    $password = ($_POST["Pwd"]);
    $data = "login='" . $login . "' AND pwd ='" . $password . "'";
    $usuario = $usrModelo->validaLogin($data);
    
    if ($usuario){
        $_SESSION['login']=true;
        $usr = $usuario['login'];
        $_SESSION["user"] = $usr;
        $rol = $usuario['rol'];
        $_SESSION["rol"] = $rol;


        if ($rol=='usuario') {
           header('location: ../User/homeUser.php');
         }elseif ($rol=='escritor') {
             # code...
         }elseif ($rol=='administrador') {
             # code...
         }else {
             //header ('Location: ../User/homeUser.php');
         };
    }
}
?>
