<?php

require_once('../ORM/Database.php');

require_once('../ORM/ORM.php');

require_once('../ORM/Usuario.php');
$id=$_GET["id"];


$db = new Database();
$encontrado=$db->verificarDriver();
if ($encontrado)
{
    $cnn = $db->getConnection();
    $usuarioModelo= new Usuario($cnn);
    $usuario=$usuarioModelo->getById($id);

    foreach ($usuario as $key)
    {

    
    $nombre= $key['nombre'];
    $apellido=$key['apellido'];
    $login=$key['login'];  
    $rol=$key['rol'];
     
      }}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista</title>
  <script src="https://kit.fontawesome.com/63fa612fdb.js" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="../css/vistaNoticiaEscritor.css" type="text/css" />
</head>
<body>
<div class="container-view" >

<div class="container-titulo" >
<h1> <?php echo $nombre?></h1>
</div>
<div ><img src="../img/logoN.svg"  width="100px" height="100px" /></div> 
<p>
    <?php echo $apellido ?>
</p>

<strong>Login:</strong>
    <h3><?php echo $login ?></h3>
    <strong>Rol:</strong>
    <h3><?php echo $rol ?></h3>
</div>


  <div class="button-regresar">
    <a  href="homeAdmin.php" role="button"><i class="fa-solid fa-arrow-left" style="color: #c02a39;"></i><a>
  </div>
  </div>
</body>
</html>
?>

