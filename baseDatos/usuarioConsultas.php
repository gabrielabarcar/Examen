<?php
  require_once 'conexion.php';
  
  //listar los usuarios
  function listarUsuarios(){    
    $usuarios = array();
    $sql = "SELECT * FROM USUARIOS ORDER BY CEDULA ASC";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);

    while($user = mysqli_fetch_assoc($resultado)){
        array_push($usuarios, $user);
    } 
    return $usuarios;
  }
  
  //Buscar usuario por usuario y password
  function buscarUsuario($usuario,$password){
    $sql = "SELECT * FROM USUARIOS WHERE USUARIO='$usuario' AND PASSWORD='$password'";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
    $user = mysqli_fetch_assoc($resultado);
    return $user;
  } 
  
   //guardar un usuario
  function guardarUsuario($cedula,$nombre,$usuario,$password,$telefono,$correo,$direccion,$estadocuenta,$tipocuenta){ 
  $sql = "INSERT INTO USUARIOS(cedula,nombre,usuario,password,telefono,correo,direccion,estadocuenta,tipocuenta) "
            . "VALUES($cedula,'$nombre','$usuario','$password',$telefono,'$correo','$direccion','$estadocuenta' ,'$tipocuenta')";
   
    $resultado = mysqli_query($GLOBALS['conexion'],$sql);
  } 
  
    //Buscar usuario por nombre
  function buscarUsuarioID($id){
    $sql = "SELECT * FROM USUARIOS WHERE id =$id";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
    $user = mysqli_fetch_assoc($resultado);
    return $user;
  }
  
  //modificar un usuario
   function modificarUsuarioId($cedula,$nombre,$usuario,$password,$telefono,$correo,$direccion,$estadocuenta,$tipocuenta){
    $sql = "UPDATE USUARIOS SET CEDULA='$cedula',NOMBRE='$nombre',USUARIO='$usuario',PASSWORD='$password',TELEFONO='$telefono',CORREO='$correo',DIRECCION='$direccion',ESTADOCUENTA='$estadocuenta',TIPOCUENTA='$tipocuenta'";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }
  