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
    <title>Inicio</title>
</head>
<body>

<div class="container">
   <div class="row">
    <div class="col p-0">
    <?php require_once ('../include_Session/headInit.php');?>  
    </div>
   </div>
   <div class="row">
    <div class="col p-0">

    <?php
     require_once '../include_Session/navbarInit.php';
    ?>
    </div>
   
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Escritor</th>
      <th scope="col">Vista</th>
    </tr>
  </thead>
  <tbody>
  <?php
     include 'tableNotice.php';
    ?>
  </tbody>

</table>
    </div>
   </div>
   <div class="row">
    <div class="col p-0">
    <?php
     include '../include/footer.php';
    ?>
    </div>
   </div>

   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>