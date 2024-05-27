<div id="informacion_personal" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-xx25">
                <h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverser tx-bold"></h6>
            </div>
            <!----formulario mantenimiento-->
            <form method="post" id="informacion_personal">
                <div class="modal-body">
                    <input type="hidden" name="idinformacion_personal"/>
                    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">F. Nacimiento:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="info_nacimiento" type="text" name="info_nacimiento"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Celular:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="info_celular" type="text" name="info_celular"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Email:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="info_email" type="text" name="info_email"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">URL:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="info_url" type="text" name="info_url"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Direccion:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="info_direccion" type="text" name="info_direccion"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Cargo:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="info_cargo" type="text" name="info_cargo"required/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="action" value="and" class="btn btn-outline-primary tx-11 tx-uppercase pd-y-12 pd-x-2"></button>
                    <button type="reset" class="btn btn-outline-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" aria></button>
                </div>
            </form>
        </div>
    </div>
</div>   