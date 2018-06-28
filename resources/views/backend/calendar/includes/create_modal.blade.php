<!-- Modal (agregar, modificar, Eliminar) -->
<div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloEvento" placeholder="Nueva Actividad"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Categoría</label>
                        <select id="" class="form-control">
                            <option selected>Acto público</option>
                            <option>Aniversario</option>
                            <option>Capacitación</option>
                            <option>Charla</option>
                            <option>Conferencia</option>
                            <option>Congreso</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Nombre de la Actividad</label>
                        <input type="text" id="txtTitulo" class="form-control" placeholder="Título del Evento">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Descripción</label>
                        <textarea id="txtDescipcion" rows="3" class="form-control" placeholder="Escriba una descripción del Evento ..."></textarea>
                    </div>
                    
                    <div class="form-group col-md-5">
                        <label class="font-weight-bold">Fecha del Evento</label>
                        <input type="text" id="txtFecha" name="txtFecha" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold">Hora del Evento</label>
                        <input type="text" id="txtHora" value="10:30" class="form-control">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Suba una Imagen</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Dirigido a</label>
                        <input type="text" id="txtDirigido" class="form-control" placeholder="Ejm. Estudiantes, docentes, administrativos, etc.">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Organizado por</label>
                        <input type="text" id="txtOrganizador" class="form-control" placeholder="Organizador de Evento">
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Coordinador</label>
                        <input type="text" id="txtCoordinador" class="form-control" placeholder="Nombre del Encargado">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Nº de Contacto del Coordinador</label>
                        <input type="text" id="txtTitulo" class="form-control" placeholder="Ejem. 999999999">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Color de Evento: </label>
                        <input type="color" id="txtColor" value="#ff0000" />
                        <br/>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold">Registrado por: </label>
                    </div>
                    <div class="form-group col-md-8">
                        <p class="form-control-static">Carlos Alay</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
                <button type="button" class="btn btn-info">Modificar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>