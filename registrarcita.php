<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
    <h1>REGISTRAR UNA CITA</h1>
    <form method="post" action="manteCitas.php">		
        <input type="text" placeholder="Nombre del dueño" name="nombredueno" required>
        <input type="text" placeholder="Nombre de la mascota"  name="nombremascota" required>
        <input type="text" placeholder="Raza" name="raza" required>                
        <input type="text" placeholder="Edad de la mascota" name="edadmascota" required>
        <input type="date" placeholder="Fecha" name="fechacita" required> 
        <input type="text" placeholder="Observaciones" name="observaciones" required>
        <input type="submit" name="accion" value="registrar">
    </form>
</section>
<?php include_once 'include/pie.php'; ?>

