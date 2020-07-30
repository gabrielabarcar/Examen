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
            case 'Registrarse':
                guardarUsuarios();
                header('location:index.php');
                break;
        }
    }

  function validarUsuario(){
    $usuario = $_POST['usuario']; 
    $password = $_POST['password'];
    $user = buscarUsuario($usuario,$password);          
    return $user;
  }
  
  
    function guardarUsuarios(){
     $cedula = $_POST['cedula'];
     $nombre= $_POST['nombre'];
     $usuario = $_POST['usuario'];
     $password = $_POST['password'];
     $telefono = $_POST['telefono'];
     $correo = $_POST['correo'];
     $direccion = $_POST['direccion'];
     $estadocuenta = $_POST['estado'];
     $tipocuenta = $_POST['tipocuenta'];

     guardarUsuario($cedula,$nombre,$usuario,$password,$telefono,$correo,$direccion,$estadocuenta ,$tipocuenta);
     
    }