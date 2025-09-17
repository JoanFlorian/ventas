<?php
require_once ("database/conection.php");
$db = new database();
$con = $db->conectar();
$datos = $con->prepare("SELECT * FROM venta");
$datos->execute();
$registro = $datos->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre vendedor</th>
      <th scope="col">Doc comprador</th>
      <th scope="col">Nombre comprador</th>
      <th scope="col">Apellido comprador</th>
      <th scope="col">Telefono comprador</th>
      <th scope="col">Material</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Fecha</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($registro as $r) {?>
    <tr>
      <td><?= $r['nombre_vendedor'];?></td>
      <td><?= $r['doc_comprador'];?></td>
      <td><?= $r['nombre_comprador'];?></td>
      <td><?= $r['apellido_comprador'];?></td>
      <td><?= $r['telefono'];?></td>
      <td><?= $r['material'];?></td>
      <td><?= $r['cantidad'];?></td>
      <td><?= $r['fecha'];?></td>
      <td><?= $r['precio'];?></td>
    </tr>
    <?php }?>
  </tbody>
</table>
    </body>
</html>