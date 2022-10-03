<br>
<br>
<br>
<p>
  <h2> Listado de mascotas</h2>
</p>
<table border=2 cellpadding=8>
  <tr>
    <th> Nombre </th>
    <th> Sexo </th>
    <th> Perro o gato </th>
    <th> Edad </th>
    <th> Necesidades </th>
    <th> Requisitos </th>
    <th> Historia </th>
    <th> Especificaciones </th>
    <th> Eliminacion </th>
  </tr>
  <?php foreach ($mascotas as $mascota) { ?>
  <tr>
    <td> <?php echo $mascota['nombre'] ?> </td>
    <td> <?php echo $mascota['sexo']  ?> </td>
    <td> <?php echo $mascota['animal']?> </td>
    <td> <?php echo $mascota['edad'] ?> </td>
    <td> <?php echo $mascota['necesidades'] ?></td>
    <td> <?php echo $mascota['requisitos'] ?></td>
    <td> <?php echo $mascota['historia'] ?></td>
    <td> <?php echo $mascota['especificaciones'] ?></td>
    <td> <?php echo "<img class='card-img-top' height='220px' src='img/mascotas/" . $mascota['id'] . "/principal'>" ?></td>
    
    <td> <a href='tabla_eliminar_mas.php?id=<?php echo $mascota['id'] ?>'> Eliminar </a> </td>
  </tr>
  <?php } ?>
</table>
<br>
<br>
<br>
<p>
  <h2> Listado de organizaciones </h2>
</p>

<table border=2 cellpadding=8>
  <tr>
    <th> Nombre </th>
    <th> Email </th>
    <th> Telefono </th>
    <th> Provincia </th>
    <th> Barrio </th>
    <th> Eliminacion </th>
  </tr>
  <?php foreach ($organizaciones as $organizacion) { ?>
  <tr>
    <td><?php echo $organizacion['nombre']; ?></td>
    <td> <?php echo $organizacion['mail'] ?> </td>
    <td> <?php echo $organizacion['telefono'] ?> </td>
    <td> <?php echo strtr($organizacion['provincia_id'], "_", " ") ?></td>
    <td> <?php echo strtr($organizacion['barrio_id'], "_", " ") ?> </td>
    <td> <a href='tabla_eliminar_org.php?id=<?php echo $organizacion['id'] ?>'> Eliminar </a> </td>
  </tr>
  <?php } ?>
</table>
<br>
<br>
<br>
<p>
  <h2> Listado de adoptantes </h2>
</p>
<table border=2 cellpadding=8>
  <tr>
    <th> Nombre </th>
    <th> Email </th>
    <th> Provincia </th>
    <th> Barrio </th>
    <th> Eliminacion </th>
  </tr>
  <?php foreach ($adoptantes as $adoptante) { ?>
  <tr>
    <td><?php echo $adoptante['nombre'] ?> </td>
    <td><?php echo $adoptante['mail'] ?> </td>
    <td><?php echo strtr($adoptante['provincia_id'], "_", " ") ?> </td>
    <td><?php echo strtr($adoptante['barrio_id'], "_", " ") ?> </td>
    <td> <a href='tabla_eliminar_usu.php?id=<?php echo $adoptante['id']?>'> Eliminar </a> </td>
  </tr>
  <?php } ?>
</table>