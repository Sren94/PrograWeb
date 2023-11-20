<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col p-0">
                <?php include '../include/head.php'; ?>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <?php include '../include/navbar.php'; ?>
            </div>
        </div>
        <div class="row d-flex justify-content-center pb-3">
            <form class="form col-5">
                <h3 class="text-center pt-2">Registrar</h3>
                <div class="form row">
                    <div class="col">
                        <label for="Name">Nombre</label>
                        <input type="text" id="Name" class="form-control" placeholder="Nombre">
                        <span class="error1">debe de ser mayor a 4 letras</span>
                    </div>
                    <div class="col">
                        <label for="LName">Apellidos</label>
                        <input type="text" class="form-control" id="Lname" placeholder="Apellido">
                        <span class="error2">debe de ser mayor a 4</span>
                    </div>
                </div>
                <div class="form row">
                    <div class="col">
                        <label for="Email">Correo Electronico</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="ejemplo juanperes@hola.com">
                        <span class="error3">debe de ser mayor a 6</span>
                        <span class="error4">Correo No valido</span>
                        <br>
                        <label for="Pwd">Contraseña</label>
                        <input type="password" class="form-control" id="Pwd" placeholder="Ingresa tu contraseña">
                        <div class="error5">
                            <ul>
                                <p>Debe de tener</p>
                                <li>Mayusculas</li>
                                <li>Numeros</li>
                                <li>Minusculas</li>
                                <li>Min 8 caracteres</li>
                            </ul>
                        </div>
                    </div>



                </div>
                <div class="form-group pt-4 pb-4 d-flex justify-content-between">
                    <button type="submit" class="btn btn-danger" id="bEnviar">Enviar</button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col p-0">
                <?php include '../include/footer.php'; ?>
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/register.js"></script>
</body>

</html>