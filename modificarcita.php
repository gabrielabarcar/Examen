<?php include_once 'include/encabezado.php'; 

if(isset($_GET['id']))
{
  $cita= buscarCitaID($_GET['id']); 
}
?>
<section>
    <br>
    <h1>REGISTRAR UNA CITA</h1>
    <form method="post" action="manteCitas.php">	
        <input type="text"  name="id" required value="<?php echo $cita['id'] ?>" readonly="">
        <input type="text" placeholder="Nombre del dueño" name="nombredueno" required value="<?php echo $cita['nombredueno'] ?>" >
        <input type="text" placeholder="Nombre de la mascota"  name="nombremascota" required value="<?php echo $cita['nombremascota'] ?>" >
        <input type="text" placeholder="Raza" name="raza" required value="<?php echo $cita['raza'] ?>" >                
        <input type="text" placeholder="Edad de la mascota" name="edadmascota" required value="<?php echo $cita['edadmascota'] ?>" >
        <input type="date" placeholder="Fecha" name="fechacita" required value="<?php echo $cita['fechacita'] ?>" > 
        <input type="text" placeholder="Observaciones" name="observaciones" required value="<?php echo $cita['observaciones'] ?>" >
        <input type="submit" name="accion" value="actualizar">
    </form>
</section>
<?php include_once 'include/pie.php';?>
