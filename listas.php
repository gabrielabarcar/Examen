<?php include_once 'include/encabezado.php';?>
<section>
    <br>
    <h1>Lista de Citas</h1>
    <table id="t1" border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del dueno</th>
                <th>Nombre de la mascota</th>
                <th>Raza</th>
                <th>Edad de la mascota</th>
                <th>Fecha de la cita</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $listaCitas = listarCitas();
            if(count($listaCitas) >0):  
                foreach ($listaCitas as $posicion => $cita):
        ?>
                <tr>
                    <td><?php echo $cita['id'] ?></td>
                    <td><?=$cita['nombredueno'];?></td>
                    <td><?=$cita['nombremascota'];?></td>
                    <td><?=$cita['raza'];?></td>
                    <td><?=$cita['edadmascota'];?></td>
                    <td><?=$cita['fechacita'];?></td>
                    <td><?=$cita['observaciones'];?></td>
                </tr>
        <?php
               endforeach;
          endif;
        ?>
        </tbody>
    </table>
</section> 

<?php include_once 'include/pie.php'; ?>
