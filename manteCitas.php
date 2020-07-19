<?php 
require_once './baseDatos/citasConsultas.php';   
  //Aquí entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarCita();
            header("location:index.php");
            break;
        case 'actualizar':
            actualizarCita();
            header("location:modaleditar.php");
            break;            
    }
  }
  
  // Aqui entra el Eliminar
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarCita();
            header("location:index.php");
            break;  
    }
  }  

  function guardarCita(){
      $nombredueno = $_POST['nombredueno'];
      $nombremascota = $_POST['nombremascota'];
      $raza = $_POST['raza'];
      $edadmascota = $_POST['edadmascota'];
      $fechacita = $_POST['fechacita'];
      $observaciones = $_POST['observaciones'];

      guardarCitaNombre($nombredueno,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones);
  }
  
  function eliminarCita(){
      $nombredueno = $_GET['nombredueno'];
      eliminarCitaNombre($nombredueno);
  }
  
  function actualizarCitaNoombre(){
      $nombredueno = $_POST['nombredueno'];
      $nombremascota = $_POST['nombremascota'];
      $raza = $_POST['raza'];
      $edadmascota = $_POST['edadmascota'];
      $fechacita = $_POST['fechacita'];
      $observaciones = $_POST['observaciones'];

      modificarCitaNombre($nombredueno,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones);   
  }