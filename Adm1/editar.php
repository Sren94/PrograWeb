
<?php

require_once('../ORM/Database.php');

require_once('../ORM/ORM.php');

require_once('../ORM/Usuario.php');

$db = new Database();
$encontrado=$db->verificarDriver();
if ($encontrado)

{
    $cnn = $db->getConnection();
    $usuarioModelo= new Usuario($cnn);

$nombre="";
$apellido="";
$login="";
$pwd="";
$rol="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $login=$_POST["login"];
    $pwd=$_POST["pwd"];
    $rol=$_POST["rol"];
    $id=$_GET["id"];
        $data=[];
        $data['nombre']="$nombre";
        $data['apellido']="$apellido";
        $data['login']="$login";
        $data['pwd']="$pwd";
        $data['rol']="$rol";
        $usuario=$usuarioModelo->updateById($id,$data);
        
        header ("location:homeAdmin.php");
        exit;
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href=  "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    label.error{
        
        color: red;
        font-size: 1rem;
        display: block;
        margin-top: 5px;
    }

    input:error {
        border: 1px dashed red;
        font-weight: 300;
        color: red;
    }

</style>
    </head>
<body>
    <!-- se crea el contenidor donde estara el formulario -->
    <div class="container my-5">
    <h2>Editar</h2>
    <?php
     
    ?>
        
    <form  id="formulario" action="" method="post">
        <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Nombre</label>
            <div class="col-sm-6">
                <input  id="nombre"  type="text" class="form-control"  name="nombre" value="<?php echo $nombre;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Apellido</label>
            <div class="col-sm-6">
                <input  id="apellido"  type="text" class="form-control"  name="apellido" value="<?php echo $apellido;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Login</label>
            <div class="col-sm-6">
                <input  id="login"  type="text" class="form-control"  name="login" value="<?php echo $login;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Contraseña</label>
            <div class="col-sm-6">
                <input  id="pwd"  type="password" class="form-control"  name="pwd" value="<?php echo $pwd;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Rol</label>
            <div class="col-sm-6">
                <input  id="rol"  type="text" class="form-control"  name="rol" value="<?php echo $rol;?>">
            </div>
        </div>
        <div class="row mb-1">
            <div class ="offset-sm-2 col-sm-2 d-grid">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
            <div class ="offset-sm-1 col-sm-2 d-grid">
<a class="btn btn-outline-danger" href="homeAdmin.php" role="button ">Cancelar</a>
            
        </div>
        </div>
        </div>
        <script>
        $(document).ready(function () {
            $("#formulario").validate({
                rules: {
                    nombre: {
                        required: true,
                        minlength: 5
                    },
                    apellido: {
                        required: true,
                        minlength: 10
                    },
                    login: {
                        required: true,
                        email: true 
                    },
                    pwd:
                    {
                        required: true,
                        minlength: 8,
                        strongPassword: true
                    
                    },
                    rol:
                    {
                        minlength: 5,
                        required: true
                    }
                },
                messages: {
                    nombre: {
                        minlength: "Debe ser de almenos de 5 caracteres"
                    },
                    apellido: {
                        minlength: "Debe ser de almenos de 10 caracteres",
                       
                    },
                    login: {
                        minlength: "Debe ser de almenos de 5 caracteres",
                        email:'correo no valido'
                    },pwd:
                    {
                        minlength: 'Minimo de 8 letras',
                        strongPassword: 'Debe de tener mayusculas,minusculas,numeros'
                    },
                    rol:
                    {
                        minlength: 'Minimo de 5 letras ejemplo(usuario,administrador,escritor)',
                    }
                }
            });
        });
    </script>
    </form>
</body>
</html>