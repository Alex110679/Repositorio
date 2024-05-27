<div id="menu" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-xx25">
                <h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverser tx-bold"></h6>
            </div>
            <!----formulario mantenimiento-->
            <form method="post" id="menu_form">
                <div class="modal-body">
                    <input type="hidden" name="idmenu"/>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Opcion:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="opcion" type="text" name="opcion"required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">URL:<span class="tx-danger">*</span></label>
                            <input class="form-control" id="url" type="text" name="url"required/>
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