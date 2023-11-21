<?php

require_once('../ORM/Database.php');

require_once('../ORM/ORM.php');

require_once('../ORM/Usuario.php');

$id=$_GET["id"];

$db = new Database();
$encontrado=$db->verificarDriver();
if ($encontrado){
    $cnn = $db->getConnection();
    $usuarioModelo= new Usuario($cnn);
$usuario=$usuarioModelo->deleteById($id);

}
header ("location:homeAdmin.php");
exit;
?>