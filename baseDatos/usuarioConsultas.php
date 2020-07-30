<?php
  require_once 'conexion.php';
  //Buscar usuario por correo y password
  function buscarUsuario($usuario,$password){
    $sql = "SELECT * FROM USUARIOS WHERE USUARIO='$usuario' AND PASSWORD='$password'";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
    $user = mysqli_fetch_assoc($resultado);
    return $user;
  } 
  
  
   //registar un producto
  function guardarUsuario($cedula,$nombre,$usuario,$password,$telefono,$correo,$direccion,$estadocuenta,$tipocuenta){ 
  $sql = "INSERT INTO USUARIOS(cedula,nombre,usuario,password,telefono,correo,direccion,estadocuenta,tipocuenta) "
            . "VALUES($cedula,'$nombre','$usuario','$password',$telefono,'$correo','$direccion','$estadocuenta' ,'$tipocuenta')";
   
    mysqli_query($GLOBALS['conexion'],$sql);
 
     
  }  