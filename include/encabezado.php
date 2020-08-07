<?php 
    require_once './baseDatos/citasConsultas.php';
    require_once './baseDatos/usuarioConsultas.php';
    if(!isset($_SESSION['usuarioLogueado']))
    {
       header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Veterinaria Tanuki</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section>
            <br>
            <h1>Veterinaria Tanuki</h1>
        </section>
        <nav>
            <ul class="sf-menu">
                <?php if(isset($_SESSION['usuarioLogueado'])):
                    $datos = $_SESSION['usuarioLogueado'];
                    if($datos['estadocuenta']=='desactivado')
                    {
                        ?>
                        <h1>Dirijase al administrador para activar usuario</h1>;
                        <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
                        <?php
                    }
                     else
                    {
                        if($datos['tipocuenta']=='Administrador')
                        {
                            ?>
                              <li><a href="registrarcita.php">Registrar Cita</a></li>
                              <li><a href="editarcita.php">Modificar Cita</a></li>
                              <li><a href="borrarcitas.php">Eliminar Cita</a></li>
                              <li><a href="listas.php">Listar Cita</a></li>
                              <li><a href="registrarUsuarios.php">Registrar Usuario</a></li>
                              <li><a href="editarUsuarios.php">Activar Usuario</a></li>
                              <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
                            <?php
                        }
                        else{
                            ?>
                               <li><a href="registrarcita.php">Registrar Cita</a></li>
                               <li><a href="editarcita.php">Modificar Cita</a></li>
                               <li><a href="borrarcitas.php">Eliminar Cita</a></li>
                               <li><a href="listas.php">Listar Cita</a></li>
                               <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>

                           <?php 
                        }
                    }
                endif;?>  
            </ul>
        </nav>
    </body>
