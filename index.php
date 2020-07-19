<?php include_once 'include/encabezado.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Registro Citas</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="estilo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<section>
    <br>
    <h1>Lista de Citas</h1>
    <table id="t1" border="1">
        <thead>
            <tr>
                <th>Nombre del dueno</th>
                <th>Nombre de la mascota</th>
                <th>Raza</th>
                <th>Edad de la mascota</th>
                <th>Fecha de la cita</th>
                <th>Observaciones</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $listaCitas = listarCitas();
            if(count($listaCitas) >0):  
                foreach ($listaCitas as $posicion => $cita):
        ?>
                <tr>
                    <td><?=$cita['nombredueno'];?></td>
                    <td><?=$cita['nombremascota'];?></td>
                    <td><?=$cita['raza'];?></td>
                    <td><?=$cita['edadmascota'];?></td>
                    <td><?=$cita['fechacita'];?></td>
                    <td><?=$cita['observaciones'];?></td>
                    <!--<td><a href="modaleditar.php?nombredueno=<?=$cita['nombredueno'];?>">Editar</a></td>-->
                    <td><a href="include/modalmodificar.php>">Editar</a></td>
                    <td><a href="manteCitas.php?accion=eliminar&nombredueno=<?=$cita['nombredueno'];?>">Borrar</a></td>
                </tr>
        <?php
               endforeach;
          endif;
        ?>
        </tbody>
    </table>
</section> 
<?php include_once 'include/pie.php'; ?>
