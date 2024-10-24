<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1><i class="fa fa-edit"></i> Clientes</h1>
            <p>Ingresa los datos para registrar un cliente nuevo</p>
        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home fa-lg"></i></li>
                <li>Clientes</li>
                <li><a href="#"><?=$titulo?> Cliente</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="well bs-component">
                            <form class="form-horizontal" method="POST" action="?c=cliente&a=Guardar">
                                <fieldset>
                                    <legend><?=$titulo?> Cliente</legend>
                                    <div class="form-group">
                                        <input class="form-control" name="ID" type="hidden" value="<?=$c->getCli_id()?>">

                                        <label class="col-lg-2 control-label" for="Nombre">Nombre</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Nombre" type="text" placeholder="Nombre Cliente" value="<?=$c->getCli_nom()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Apellido">Apellido</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Apellido" type="text" placeholder="Apellido Cliente" value="<?=$c->getCli_ape()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Direccion">Dirección</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Direccion" type="text" placeholder="Dirección" value="<?=$c->getCli_dir()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Telefono">Teléfono</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Telefono" type="text" placeholder="Teléfono" value="<?=$c->getCli_tel()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Email">Email</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Email" type="email" placeholder="Correo Electrónico" value="<?=$c->getCli_email()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button class="btn btn-default" type="reset">Cancelar</button>
                                            <button class="btn btn-primary" type="submit">Enviar</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
