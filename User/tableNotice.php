<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/ProyectoWeb/css/navbar.css">

</head>

<body>
    <?php
    require_once('../ORM/Database.php');
    require_once('../ORM/ORM.php');
    require_once('../ORM/Noticia.php');
    $db = new Database();
    $encontrado = $db->verificarDriver();
    if ($encontrado) {
        $cnn = $db->getConnection();
        $noticiaModelo = new Noticia($cnn);
    }   
    ?>
    <?php
    $datos = $noticiaModelo->getAll();
    foreach ($datos as $key) { ?>
        <tr>
            <td scope="col"><?php echo $key['id'];?></td>
            <td scope="col"><?php echo $key['titulo'] ?></td>
            <td scope="col"><?php echo $key['autor'] ?></td>
            <td scope="col"><a class="navbar-brand" href="../User/viewNotice.php?id=<?php echo $key['id']; ?>">
                    <img src="../img/menu.svg" width="30" height="30" alt="" loading="lazy">
                </a></td>
        </tr>
    <?php } ?>