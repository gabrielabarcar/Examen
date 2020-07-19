<?php
require_once './baseDatos/usuarioConsultas.php';
    if(isset($_POST['accion'])){
        switch ($_POST['accion']){          
            case 'Ingresar':
                $usuario = validarUsuario();
                if(!empty($usuario)){
                  $_SESSION['usuarioLogueado'] = $usuario;
                  header('location:index.php');
                }else{
                  header('location:Registrarse.php');
                }
            break; 
        }
    }

  function validarUsuario(){
    $usuario = $_POST['usuario']; 
    $password = $_POST['password'];
    $user = buscarUsuario($usuario,$password);          
    return $user;
  }