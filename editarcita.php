<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
    <h1>Lista de Citas a Editar</h1>
    <table id="t1" border="1">
        <thead>
            <tr>
                <th>ID</th>
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
                    <td><?=$cita['id'];?></td>
                    <td><?=$cita['nombredueno'];?></td>
                    <td><?=$cita['nombremascota'];?></td>
                    <td><?=$cita['raza'];?></td>
                    <td><?=$cita['edadmascota'];?></td>
                    <td><?=$cita['fechacita'];?></td>
                    <td><?=$cita['observaciones'];?></td>
                    <td><a href="modificarcita.php?id=<?=$cita['id']?>">Modificar</a></td>  
                </tr> 
        <?php
               endforeach;
          endif;
        ?>
        </tbody>
    </table>
</section> 
<?php include_once 'include/pie.php'; ?>
