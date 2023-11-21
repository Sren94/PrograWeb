<?php

require_once('../ORM/Database.php');

require_once('../ORM/ORM.php');

require_once('../ORM/Noticia.php');

$db = new Database();
$encontrado=$db->verificarDriver();
if ($encontrado)

{
    $cnn = $db->getConnection();
    $noticiaModelo= new noticia($cnn);
$id="";
$titulo="";
$descripcion="";
$autor="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST["id"];
    $titulo=$_POST["titulo"];
    $descripcion=$_POST["descripcion"];
    $autor=$_POST["autor"];
   
        $id=$_GET["id"];
        
        $data=[];
        $data['titulo']="$titulo";
        $data['descripcion']="$descripcion";
        $data['autor']="$autor";      
       if($noticia=$noticiaModelo->updateById($id,$data)) {

        $successMessage="Noticia actualizada correctamente";}
        header ("location:homeEscritor.php");
        exit;

 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=  "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></link>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    textarea:error {
        border: 1px dashed red;
        font-weight: 300;
        color: red;
    
    }
   </style>
</head>
<body>
    <div class="container my-5">
    <h2>Actualizar noticia </h2>
    <?php
    
    ?>
        
    <form id="formulario" action="" method="post">
    <input type="hidden" name ="id"  value="<?php echo $id; ?>">
            <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Titulo</label>
            <div class="col-sm-6">
                <input  id="titulo" type="text" class="form-control" name="titulo" value="<?php echo $titulo;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Descripcion</label>
            <div class="col-sm-6 ">
            <textarea  id="descripcion"  type="text" class="form-control " name="descripcion" style="resize:none;"><?php echo $descripcion;?></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Autor</label>
            <div class="col-sm-6">
                <input   id="autor" type="text" class="form-control" name="autor" value="<?php echo $autor;?>">
            </div>
        </div>
        <?php
    
        ?>

        <div class="row mb-1">
            <div class ="offset-sm-2 col-sm-2 d-grid">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            <div class ="offset-sm-1 col-sm-2 d-grid">
            <a class="btn btn-outline-danger" href="homeEscritor.php" role="button ">Cancelar</a>
            
        </div>
        </div>
        </div>
        <script>
        $(document).ready(function () {
            $("#formulario").validate({
                rules: {
                    titulo: {
                        required: true,
                        minlength: 5
                    },
                    descripcion: {
                        required: true,
                        minlength: 200
                    },
                    autor: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    titulo: {
                        minlength: "Debe ser de almenos de 5 caracteres"
                    },
                    descripcion: {
                        minlength: "Debe ser de almenos de 200 caracteres"

                    },
                    autor: {
                        minlength: "Debe ser de almenos de 5 caracteres"
                    }
                }
            });
        });
    </script>
    </form>
</body>
</html>