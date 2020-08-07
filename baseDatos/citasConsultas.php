<?php
  require_once 'conexion.php';
  
  //listar las citas
  function listarCitas(){    
    $citas = array();
    $sql = "SELECT * FROM CITAS ORDER BY NOMBREDUENO ASC";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);

    while($cita = mysqli_fetch_assoc($resultado)){
        array_push($citas, $cita);
    } 
    return $citas;
  }

  //registar una cita
  function guardarCitaNombre($nombredueno,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones){ 
    $sql = "INSERT INTO CITAS(nombredueno,nombremascota,raza,edadmascota,fechacita,observaciones) VALUES ('$nombredueno','$nombremascota','$raza',$edadmascota,'$fechacita','$observaciones')";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);      
  }

   //eliminar un producto 
  function eliminarCitaID($id){
    $sql = "DELETE FROM CITAS WHERE id = '$id'";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);   
  }
  
  //Buscar producto por nombre
  function buscarCitaID($id){
    $sql = "SELECT * FROM CITAS WHERE id =$id";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
    $cita = mysqli_fetch_assoc($resultado);
    return $cita;
  }

  //modificar un producto
  function modificarCitaId($id,$nombredueno,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones){
    $sql = "UPDATE CITAS SET NOMBREDUENO='$nombredueno',NOMBREMASCOTA='$nombremascota',RAZA='$raza',EDADMASCOTA=$edadmascota,FECHACITA='$fechacita',OBSERVACIONES='$observaciones' WHERE id='$id'";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }