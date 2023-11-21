<?php

    // Hacer algo con los valores obtenido
    require_once('../ORM/Database.php');
    require_once('../ORM/ORM.php');
    require_once('../ORM/Usuario.php');

    $db = new Database();
    $encontrado = $db->verificarDriver();
    if ($encontrado) {
        $cnn = $db->getConnection();
        $usuarioModelo = new Usuario($cnn);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST["Name"];
            $apellido = $_POST["Lname"];
            $login = $_POST["Email"];
            $pwd = $_POST["Pwd"];
            $rol = 'usuario';
            $data = [];
            $data['nombre'] = "$nombre";
            $data['apellido'] = "$apellido";
            $data['login'] = "$login";
            $data['pwd'] = "$pwd";
            $data['rol'] = "$rol";
            $usuario = $usuarioModelo->insert($data);

            header('Location: ../index.php?mensaje=Usuario+insertado');
            exit;
        }
    }

