<?php

require_once('../ORM/Database.php');

require_once('../ORM/ORM.php');

require_once('../ORM/Noticia.php');

$id=$_GET["id"];

$db = new Database();
$encontrado=$db->verificarDriver();
if ($encontrado){
    $cnn = $db->getConnection();
    $noticiaModelo= new noticia($cnn);
$noticia=$noticiaModelo->deleteById($id);

}
header ("location:homeEscritor.php");
exit;
?>