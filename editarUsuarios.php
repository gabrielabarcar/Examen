<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
    <h1>Lista de Usuarios a Editar</h1>
    <table id="t1" border="1">
        
        <thead>
            <tr>
                <th>Id</th>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Password</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Estado de cuenta</th>
                <th>Tipo de cuenta</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $listarUsuarios = listarUsuarios();
            if(count($listarUsuarios) >0):  
                foreach ($listarUsuarios as $posicion => $user):
        ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?=$user['cedula'];?></td>
                    <td><?=$user['nombre'];?></td>
                    <td><?=$user['usuario'];?></td>
                    <td><?=$user['password'];?></td>
                    <td><?=$user['telefono'];?></td>
                    <td><?=$user['correo'];?></td>
                    <td><?=$user['direccion'];?></td>
                    <td><?=$user['estadocuenta'];?></td>
                    <td><?=$user['tipocuenta'];?></td> 
                    <td><a href="activarusuario.php?id=<?=$user['id']?>">Modificar</a></td>
                </tr> 
        <?php
               endforeach;
          endif;
        ?>
        </tbody>
    </table>
</section> 
<?php include_once 'include/pie.php'; ?>
