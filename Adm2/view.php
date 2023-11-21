<?php

require_once('../ORM/Database.php');

require_once('../ORM/ORM.php');

require_once('../ORM/Noticia.php');
$id=$_GET["id"];


$db = new Database();
$encontrado=$db->verificarDriver();
if ($encontrado)
{
    $cnn = $db->getConnection();
    $noticiaModelo= new noticia($cnn);
    $noticia=$noticiaModelo->getById($id);

    foreach ($noticia as $key)
    {

    
    $titulo= $key['titulo'];
    $descripcion=$key['descripcion'];
    $autor=$key['autor'];  

     
      }}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/63fa612fdb.js" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="../css/vistaNoticiaEscritor.css" type="text/css" />
</head>
<body>
<div class="container-view" >

<div class="container-titulo" >
<h1> <?php echo $titulo?></h1>
</div>
<div ><img src="../img/logoN.svg"  width="100px" height="100px" /></div> 
<p>
    <?php echo $descripcion ?>
</p>

<strong>Autor:</strong>
    <h3><?php echo $autor ?></h3>

</div>


  <div class="button-regresar">
    <a  href="homeEscritor.php" role="button"><i class="fa-solid fa-arrow-left" style="color: #c02a39;"></i><a>
  </div>
  </div>
</body>
</html>
?>

