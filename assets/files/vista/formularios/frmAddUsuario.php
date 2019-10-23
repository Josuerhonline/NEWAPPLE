<div class="modal fade" id="addUser" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form name="frmAddUser" id="frmAddUser">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Agregar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div> 
                <div class="modal-body">
                    <!-- INICIA EL CUERPO DEL FORMULARIO -->                                           
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><label for="detalles">Nombre:</label></div>
                        </div>
                        <div class="row">

                            <div class="input-group col">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div> 
                                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres" required="">
                            </div>                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><label for="detalles">Primer Apellido:</label></div>
                            <div class="col"><label for="detalles">Segundo Apellido:</label></div>
                        </div>
                        <div style=""> 
                            <div class="row">
                                <div class="input-group col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div> 
                                    <input type="text" name="papellido" id="papellido" class="form-control" placeholder="Primer Apellido" > 
                                </div>
                                <div class="input-group col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div> 
                                    <input type="text" name="stext" id="sapellido" class="form-control" placeholder="Segundo Apellido">
                                </div>
                            </div>                                 
                        </div>
                    </div>  
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><label for="detalles">Edad:</label></div>
                            <div class="col"><label for="detalles">Telefono:</label></div>
                        </div>
                        <div style=""> 
                            <div class="row">
                                <div class="input-group col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div> 
                                    <input type="text" name="edad" id="edad" class="form-control" placeholder="Edad" > 
                                </div>
                                <div class="input-group col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                    </div> 
                                    <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Telefono" >
                                </div>
                            </div>                                 
                        </div>
                    </div>  
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><label for="detalles">Género:</label></div>
                            <div class="col"><label for="detalles">Correo:</label></div>
                        </div>
                        <div style=""> 
                            <div class="row">
                                <div class="input-group col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-child"></i></span>
                                    </div> 
                                    <select class="form-control" name="genero" id="genero">
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                                <div class="input-group col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-at"></i></span>
                                    </div> 
                                    <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo" >
                                </div>
                            </div>                                 
                        </div>
                    </div>  
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><label for="detalles">Usuario:</label></div>
                        </div>
                        <div class="row">
                            <div class="input-group col">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div> 
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nombre de usuario" title="Nombre de usuario" style="text-transform:uppercase;" onblur="javascript:this.value=this.value.toUpperCase();">
                            </div> 
                        </div>                        
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><label for="detalles">Contraseña:</label></div>
                            <div class="col"><label for="detalles">Confirme Contraseña:</label></div>
                        </div>
                        <div style=""> 
                            <div class="row">
                               <div class="input-group col">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div> 
                                <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña" > 
                            </div>
                            <div class="input-group col">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div> 
                                <input type="password" name="confclave" id="confclave" class="form-control" placeholder="Confirmar Contraseña" t>
                            </div>
                        </div>                                 
                    </div>
                </div> 
                <div class="form-group">
                    <div class="row">
                        <div class="col"><label for="detalles">Estado:</label></div>
                    </div>
                    <div class="row">
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class=" fa fa-toggle-on"></i></span>
                            </div> 
                            <select class="form-control" id="estado" name="estado">

                                <option value="PENDIENTE" selected="PENDIENTE" disabled="">PENDIENTE</option>

                            </select>
                        </div> 
                    </div>                        
                </div>

                <small>*Todos los campos son requeridos.</small>                                             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnAddUser" class="btn btn-primary" onclick="guardar()">Guardar Datos</button>
            </div>
        </form>
    </div>                                   
</div>                                
</div>

<script type="text/javascript">
    var select = document.getElementById('empleado');
    db.collection("empleados").get().then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
            console.log(`${doc.id} => ${doc.data()}`);
            select.innerHTML += `  <option value="${doc.id}">${doc.data().nombres} - ${doc.data().apellidos}</</option>`

        });
    });
</script>