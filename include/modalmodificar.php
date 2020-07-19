<!-- Modificar Usuario Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="mantenimiento.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Cédula</label>
                        <input type="text" class="form-control" required name="cedula">
                    </div>
                    <div class="form-group">
                        <label>Nombre Completo</label>
                        <input type="text" class="form-control" required name="nombre">
                    </div>
                    <div class="form-group">
                        <label>Nick</label>
                        <input type="text" class="form-control" required name="usuario">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" required name="password">
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" required name="telefono">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" required name="correo">
                    </div>
                    <div class="form-group">
                            <label>Dirección</label>
                            <textarea class="form-control" required name="direccion"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Estado de Cuenta</label>
                        <select name="estadocuenta">
                            <option>Activo</option>
                            <option selected>Inactivo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tipo de Cuenta</label>
                        <select name="tipocuenta">
                            <option>Administrador</option>
                            <option selected>Asistente</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" name="accion" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</div>  
