<?php
session_start();
if (!$_SESSION['login']) {
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=  "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></link>
    <script src="https://kit.fontawesome.com/63fa612fdb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/header.css" type="text/css" />
    
  <style>
        table,
        th,
        td {
  letter-spacing: .5px;
}

        td {
            padding: 10px;
            text-justify:center;
        }
    </style>
</head>
<body>
    <div class="container my-5">
   
<div class="row">
    <div class="col p-0">
    <?php require_once ('../include_Session/headInit.php');?>  
    </div>
   </div>
<div class="col p-0">
 
    <?php
     require_once '../include_Session/navbarInit.php';
    ?>
    </div>
        <h2 class="text-center" >lista de noticias </h2>
        <!-- Boton para insertar nuevas noticias -->
        <a class="btn btn-primary" href="insertar.php" role="button">Nueva Noticia</a>
        <br>
        <!-- Creacion de la tabla que muestra las noticias -->
        <table class="table">
            <thead>
                <tr>
                    <th >ID</th>
                    <th >TITULO</th>
                    <th >AUTOR</th>
                    <th >VER</th>
                    <th >EDITAR</th>
                    <th >BORRAR</th>
                </tr>
            </thead>
            <tbody>
            <div class="row">
    
           

<?php
//conexion a la base 
require_once('../ORM/Database.php');

require_once('../ORM/ORM.php');

require_once('../ORM/Noticia.php');

$db = new Database();
$encontrado=$db->verificarDriver();
if ($encontrado)

{
    $cnn = $db->getConnection();
    $noticiaModelo= new noticia($cnn);
    //metodo getAll(consulta los datos de la tabla-noticias)
    $noticia=$noticiaModelo->getAll();
    foreach ($noticia as $key)
    {
       echo " <tr>
                    <td>$key[id]</td>
                    <td>$key[titulo]</td>
                    <td>$key[autor]</td>
                    
                    <td>
                    <a class='btn btn-success btn-sm' href='view.php?id=$key[id]'><i class='fa-solid fa-eye'></i> </a> 
                        
                    </td>
                    <td>
                        <a class='btn btn-warning btn-sm' href='editar.php?id=$key[id]'><i class='fa-solid fa-pen-to-square'></i> </a> 
                    </td>
                    <td>
                    <a class='btn btn-danger btn-sm' href='eliminar.php?id=$key[id]'><i class='fa-solid fa-trash'></i></a>
                </td>
                </tr> 
                ";
    }   
}?>
                </table>
                <div class="row">
    <div class="col p-0">
    <?php
     include '../include/footer.php';
    ?>
    </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   </body>
</html>


