<!-- Contenido de Usuario HTML -->
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Administración de Usuarios</h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Agregar Usuario</span></a>
                    <a href="baseDatos/mantenimiento.php?accion=EliminarSesion" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Eliminar</span></a>
                    <a href="baseDatos/mantenimiento.php?accion=modificarSesion" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Modificar</span></a>
                    <a href="index.php" class="btn btn-danger"><i class="material-icons"></i> <span>Volver</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Cédula</th>
                    <th>Nombre Completo</th>
                    <th>Usuario</th>
                    <th>Password</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                    <th>Estado de Cuenta</th>
                    <th>Tipo de Cuenta</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                   $lista = obtenerListaUsuarios();
                   if(count($lista)>0):                        
                   foreach($lista as $indice=> $usuario):?>                       
                   <tr>
                       <?php
                        //Encriptar password con MD5
                        $password = md5('SubiR189*');
                        echo "Password is:" .$password;
                        ?>
                       <td><?php echo $usuario['cedula'];?></td>
                       <td><?php echo $usuario['nombre'];?></td>
                       <td><?php echo $usuario['usuario'];?></td>
                       <td><?php echo $usuario['password'];?></td>
                       <td><?php echo $usuario['telefono'];?></td>
                       <td><?php echo $usuario['correo'];?></td>
                       <td><?php echo $usuario['direccion'];?></td>
                       <td><?php echo $usuario['estadocuenta'];?></td>
                       <td><?php echo $usuario['tipocuenta'];?></td>
                       <td>
                           <a href="baseDatos/mantenimiento.php?accion=Modificar&posicion=<?php echo $indice;?>" class="edit"><i class="material-icons" >&#xE254;</i></a>
                           <a href="baseDatos/mantenimiento.php?accion=Eliminar&posicion=<?php echo $indice;?>" class="delete"><i class="material-icons">&#xE872;</i></a>
                       </td>
                   </tr>                
                <?php
                    endforeach;
                   endif;
                ?>
            </tbody>
        </table>
    </div>
</div>   
