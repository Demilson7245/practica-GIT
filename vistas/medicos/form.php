<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1><i class="fa fa-user-md"></i> Médicos</h1>
            <p>Ingresa los datos para registrar un nuevo médico</p>
        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home fa-lg"></i></li>
                <li>Médicos</li>
                <li><a href="#"><?=$titulo?> Médico</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="well bs-component">
                            <form class="form-horizontal" method="POST" action="?c=medico&a=Guardar">
                                <fieldset>
                                    <legend><?=$titulo?> Médico</legend>
                                    <div class="form-group">
                                        <input class="form-control" name="ID" type="hidden" value="<?=$p->getMed_id()?>">

                                        <label class="col-lg-2 control-label" for="Nombre">Nombre</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Nombre" type="text" placeholder="Nombre del Médico" value="<?=$p->getNombre()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Apellido">Apellido</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Apellido" type="text" placeholder="Apellido" value="<?=$p->getApellido()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Especialidad">Especialidad</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Especialidad" type="text" placeholder="Especialidad" value="<?=$p->getEspecialidad()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Telefono">Teléfono</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Telefono" type="tel" placeholder="Teléfono" value="<?=$p->getTelefono()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Email">Email</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Email" type="email" placeholder="Correo Electrónico" value="<?=$p->getEmail()?>">
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
