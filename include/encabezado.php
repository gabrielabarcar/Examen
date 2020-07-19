<?php require_once './baseDatos/citasConsultas.php'; 
   if(!isset($_SESSION['usuarioLogueado'])){
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
            <?php if(isset($_SESSION['usuarioLogueado'])):?>
                <li><a href="registrarcita.php">Registrar Cita</a></li>
                <li><a href="include/modalmodificar.php">Modificar Cita</a></li>
                <li><a href="#">Eliminar Cita</a></li>
                <li><a href="index.php">Listar Cita</a></li>
                <li><a href="indexmodal.php">Registrar Usuario</a></li>
                <li><a href="#">Usuario Activo</a></li>
                <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
            <?php endif;?>
            </ul>
        </nav>
