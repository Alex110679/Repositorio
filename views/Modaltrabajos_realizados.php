<div id="Modaltrabajos_realizados" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-xx25">
                <h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverser tx-bold"></h6>
            </div>
            <!----formulario mantenimiento-->
            <form method="post" id="trabajos_realizados_form">
                <div class="modal-body">
                    <h4>Trabajos Realizados</h4>
                    <!---<input type="text" name="idsocial_media" id="idsocial_media"/>--->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Titulo:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="work_titulo" type="text" name="work_titulo"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Descripcion:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="work_descripcion" type="text" name="work_descripcion"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Fecha:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="work_fecha" type="text" name="work_fecha"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Rol:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="work_rol" type="text" name="work_rol"required/>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="submit" name="action" value="add" class="btn btn-outline-primary tx-11 tx-uppercase pd-y-12 pd-x-2">Guardar</button>
                    <button type="reset" class="btn btn-outline-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">limpiar</button>
                </div>
            </form>
        </div>
    </div>
</div>    