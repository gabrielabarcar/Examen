<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
    <h1>REGISTRAR UN USUARIO</h1>
    <form method="post" action="manteUsuarios.php">		
        <input type="text" placeholder="Cédula" name="cedula" required><br><br>
        <input type="text" placeholder="Nombre"  name="nombre" required autocomplete="off"><br><br>
        <input type="text" placeholder="Usuario" name="usuario" required autocomplete="off"><br><br>                
        <input type="password" placeholder="Password" name="password" required><br><br>
        <input type="text" placeholder="Telefono" name="telefono" required><br><br>
        <input type="email" placeholder="Correo" name="correo" required><br><br>
        <input type="text" placeholder="direccion" name="direccion" required><br><br>
        <input type="text" name="estado" value="desactivado" readonly=""><br><br>
        <div class="form-group">
            <label>Tipo de Cuenta</label>
            <select name="tipocuenta">
                <option>Administrador</option>
                <option selected>Asistente</option>
            </select>
        </div>
        <br><br>
        <input type="submit" name="accion" value="Registrarse">
    </form>
</section>
<br><br>
<?php include_once 'include/pie.php'; ?>


