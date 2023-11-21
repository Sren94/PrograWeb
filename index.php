<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>

   <div class="container">
   <div class="row">
    <div class="col p-0">
    <?php
   
    include ('./include/head.php');
    ?>
    </div>
   </div>
   <div class="row">
    <div class="col p-0">
    <?php
     include './include/navbar.php';
    ?>
    </div>
   </div>
   <div class="row">
        <img class="img" src="./img/imagenIndex.jpg" alt="Imagen del index">
   </div>
   <div class="row">
    <div class="col p-0">
    <?php
     include './include/footer.php';
    ?>
    </div>
   </div>
    
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>