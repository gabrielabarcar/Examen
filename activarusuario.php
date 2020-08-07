<?php include_once 'include/encabezado.php'; 

if(isset($_GET['id']))
{
  $user= modificarUsuarioId ($_GET['id']); 
}
?>
<section>
    <h1>MODIFICAR - ACTIVAR UN USUARIO</h1>
    <form method="post" action="manteUsuarios.php">	
        <input type="text"  name="id" required value="<?php echo $user['id']?>" readonly="">
        <input type="text" placeholder="Cédula" name="cedula" required value="<?php echo $user['cedula']?>">
        <input type="text" placeholder="Nombre"  name="nombre" required autocomplete="off" value="<?php echo $user['nombre']?>"><br><br>
        <input type="text" placeholder="Usuario" name="usuario" required autocomplete="off" value="<?php echo $user['usuario'] ?>"><br><br>                
        <input type="password" placeholder="Password" name="password" required value="<?php echo $user['password'] ?>"><br><br>
        <input type="text" placeholder="Telefono" name="telefono" required value="<?php echo $user['telefono'] ?>"><br><br>
        <input type="email" placeholder="Correo" name="correo" required value="<?php echo $user['correo']?>"><br><br>
        <input type="text" placeholder="direccion" name="direccion" required value="<?php echo $user['direccion']?>"><br><br>
        <div class="form-group">
            <label>Estado de cuenta</label>
            <select name="estado" value="<?php echo $user['estadocuenta']?>">
                <option>Activo</option>
                <option selected>desactivado</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tipo de Cuenta</label>
            <select name="tipocuenta" value="<?php echo $user['tipocuenta']?>">
                <option>Administrador</option>
                <option selected>Asistente</option>
            </select>
        </div>
        <br><br>
        <input type="submit" name="accion" value="actualizar">
    </form>
</section>
<?php include_once 'include/pie.php';?>