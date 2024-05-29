<div id="Modalexperiencia" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverser tx-bold"></h6>
            </div>
            <!----formulario mantenimiento-->
            <form method="post" id="experiencia_form">
                <div class="modal-body">
                    <h4>Experiencia</h4>
                    <!---<input type="text" name="idsocial_media" id="idsocial_media"/>--->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Titulo:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="exp_titulo" type="text" name="exp_titulo"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Lugar:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="exp_lugar" type="text" name="exp_lugar"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Año Inicial:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="exp_annoIni" type="text" name="exp_annoIni"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Año Final:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="exp_annoFin" type="text" name="exp_annoFin"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Tipo:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="exp_tipo" type="text" name="exp_tipo"required/>
                        </div>
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