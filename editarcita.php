<?php include_once 'include/encabezado.php'; 
  if(isset($_GET['nombredueno'])){
      $nombredueno  = $_GET['nombredueno'];
      $cita = buscarCita($nombredueno);
  }
?>
<section>
    <br>
    <h1>EDITAR UNA CITA</h1>
    <form method="post" action="manteCitas.php">		
        <input type="text" placeholder="Nombre del Dueño" name="nombredueno" required value="<?=$cita['nombredueno'];?>">
        <input type="text" placeholder="Nombre de la mascota"  name="nombremascota" required value="<?=$cita['nombremascota'];?>">
        <input type="text" placeholder="Raza" name="raza" required value="<?=$cita['raza'];?>">                
        <input type="text" placeholder="Edad de la mascota" name="edadmascota" required value="<?=$cita['edadmascota'];?>">
        <input type="date" placeholder="Fecha de la cita" name="fechacita" required value="<?=$cita['fechacita'];?>">
        <input type="text" placeholder="Observaciones" name="observaciones" required value="<?=$cita['observaciones'];?>">
        <input type="submit" name="accion" value="actualizar">
    </form>
</section>
<?php include_once 'include/pie.php'; ?>
